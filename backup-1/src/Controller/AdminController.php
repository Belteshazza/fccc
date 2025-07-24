<?php

namespace App\Controller;

use App\Entity\Invoice;
use App\Entity\Training;
use App\Entity\TrainingParticipant;
use App\Entity\TrainingSession;
use App\Entity\User;
use App\Entity\Mda;
use App\Entity\MdaParticipant;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class AdminController extends Controller
{

    /**
     * @Route("/admin", name="admin_dashboard")
     * @return Response
     */
    public function index()
    {
        $user = $this->getUser();
        $page_title = "Dashboard";

        $training = $this->getDoctrine()
            ->getRepository(Training::class)
            ->findAll();

        $mda = $this->getDoctrine()
            ->getRepository(Mda::class)
            ->findAll();

        $mda_admin = $this->getDoctrine()
            ->getRepository(MdaParticipant::class)
            ->findAll();

        $em = $this->getDoctrine()->getManager();

        // get bank payments
        $qu1 = $em->getConnection()->prepare("SELECT SUM(payment_amount) as pay_amount FROM invoice WHERE payment_status='1' AND payment_method='Bank Transfer'");
        $qu1->execute();
        $bank_pay = $qu1->fetchAll();

        // get cash payments
        $qu2 = $em->getConnection()->prepare("SELECT SUM(payment_amount) as cash_pay_amount FROM invoice WHERE payment_status='1' AND payment_method='Cash'");
        $qu2->execute();
        $cash_pay = $qu2->fetchAll();

        // get undertaken payments
        $qu3 = $em->getConnection()->prepare("SELECT SUM(payment_amount) as undertaken_pay_amount FROM invoice WHERE payment_status='0' AND payment_method='Undertaken'");
        $qu3->execute();
        $undertaken_pay = $qu3->fetchAll();

        // get online payments
        $qu4 = $em->getConnection()->prepare("SELECT SUM(payment_amount) as online_pay_amount FROM invoice WHERE payment_status='1' AND payment_method='Online'");
        $qu4->execute();
        $online_pay = $qu4->fetchAll();

        // get all payments
        $qu5 = $em->getConnection()->prepare("SELECT SUM(payment_amount) as total_pay_amount FROM invoice WHERE payment_status='1' ");
        $qu5->execute();
        $total_pay = $qu5->fetchAll();

        // get outstanding payments
        $qu6 = $em->getConnection()->prepare("SELECT SUM(payment_amount) as out_pay_amount FROM invoice WHERE payment_status='0'");
        $qu6->execute();
        $ontstanding_pay = $qu6->fetchAll();


        // replace this line with your own code!
        return $this->render('admin/dashboard.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'all_trainings' => count($training),
            'all_mdas' => count($mda),
            'all_mda_admins' => count($mda_admin),
            'total_bank_payment' => $bank_pay[0]['pay_amount'],
            'total_cash_payment' => $cash_pay[0]['cash_pay_amount'],
            'total_undertaken_payment' => $undertaken_pay[0]['undertaken_pay_amount'],
            'total_online_payment' => $online_pay[0]['online_pay_amount'],
            'total_payment' => $total_pay[0]['total_pay_amount'],
            'total_outstanding_payment' => $ontstanding_pay[0]['out_pay_amount'],

        ));
    }


    /**
     * @Route("/admin/mda", name="admin_mda")
     */
    public function mdas()
    {

        $em = $this->getDoctrine()->getManager();

        $query = "SELECT * FROM mda";


        // fetch all mdas
        $statement = $em->getConnection()->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();

        $user = $this->getUser();
        $page_title = "MDAs";


        return $this->render('admin/mdas.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'mdas' => $result
        ));
    }


    /**
     * @Route("/admin/mda/{id}/edit", name="admin_edit_mda")
     */
    public function edit_mda(Request $request,$id, UserPasswordEncoderInterface $encoder)
    {
        $user = $this->getUser();
        $page_title = "MDAs";

        $mda = $this->getDoctrine()
            ->getRepository(Mda::class)
            ->find($id);

        $form = $this->createFormBuilder($mda)
            ->add('Name', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3'
                )
            ))
            ->add('Email', EmailType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3'
                )
            ))
            ->add('Address', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3'
                )
            ))
            ->add('Phone', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3',
                    'onkeypress' => 'return isNumber(event)'
                )
            ))
            ->add('TopOfficialDesignation', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3',
                    'placeholder' => 'Example: The Managing Director'
                )
            ))
            ->add('Mda_Code', IntegerType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3',
                    'onkeypress' => 'return isNumber(event)'
                )
            ))
            ->add('Submit', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-primary btn-block mb-3'
                )
            ))
            ->getForm();


        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $mda = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($mda);
            $em->flush();

            $this->addFlash('success', 'Mda information updated');

            return $this->redirectToRoute('admin_mda');

        }


        return $this->render('admin/add_mda.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'form' => $form->createView()
        ));
    }


    /**
     * @Route("/admin/mda/add", name="add_mda")
     */
    public function add_mda(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $user = $this->getUser();
        $page_title = "MDAs";

        $mda = new Mda();

        $form = $this->createFormBuilder($mda)
            ->add('Name', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3'
                )
            ))
            ->add('Email', EmailType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3'
                )
            ))
            ->add('Address', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3'
                )
            ))
            ->add('Phone', IntegerType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3',
                    'onkeypress' => 'return isNumber(event)'
                )
            ))
            ->add('TopOfficialDesignation', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3',
                    'placeholder' => 'Example: The Managing Director'
                )
            ))
            ->add('Mda_Code', IntegerType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3',
                    'onkeypress' => 'return isNumber(event)'
                )
            ))
            ->add('Submit', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-primary btn-block mb-3'
                )
            ))
            ->getForm();


        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $mda = $form->getData();

            $mda->setNotAttended("1");
            $em = $this->getDoctrine()->getManager();
            $em->persist($mda);
            $em->flush();

            $this->addFlash('success', 'New Mda Added');

            return $this->redirectToRoute('admin_mda');

        }


        return $this->render('admin/add_mda.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'form' => $form->createView()
        ));
    }



    /**
     * @Route("/admin/participants", name="admin_participants")
     */
    public function participants()
    {
        $user = $this->getUser();
        $page_title = "MDA Admins";

        $participants = $this->getDoctrine()
            ->getRepository(mdaParticipant::class)
            ->findAll();

        return $this->render('admin/mda_admins.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'participants' => $participants
        ));
    }

    /**
     * @Route("/admin/participant/{id}", name="admin_view_participants")
     */
    public function view_participants($id)
    {
        $user = $this->getUser();
        $page_title = "MDA Admins";

        // get participant info
        $participant = $this->getDoctrine()
            ->getRepository(mdaParticipant::class)
            ->find($id);

        // get participant trainings applied
        $applied_training = $this->getDoctrine()
            ->getRepository(TrainingParticipant::class)
            ->findBy([
                'id' => $id
            ]);


        // get mda info
        $mda = $this->getDoctrine()
            ->getRepository(mda::class)
            ->findOneBy(['mda_code' => $participant->getMdaCode()]);


        return $this->render('admin/view_participant.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'participant' => $participant,
            'mda' => $mda
        ));
    }

    /**
     * @Route("/admin/participants/{mda_code}", name="admin_mda_participants")
     */
    public function mda_participants(Request $request, $mda_code)
    {
        $user = $this->getUser();
        $page_title = "MDA Admins";


        return $this->render('admin/mda_admins.html.twig', array(
            'user' => $user,
            'page_title' => $page_title
        ));
    }

    /**
     * @Route("/admin/training", name="admin_training")
     */
    public function training()
    {
        $user = $this->getUser();
        $page_title = "Training";


        $training  = $this->getDoctrine()
            ->getRepository(Training::class)
            ->findAll();

        return $this->render('admin/training.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'trainings' => $training
        ));
    }


    /**
     * @Route("/admin/training/add", name="admin_add_training")
     */
    public function add_training(Request $request)
    {
        $user = $this->getUser();
        $page_title = "Training";

        $training = new training();

       $form = $this->createFormBuilder($training)
           ->add('Title', TextType::class, array(
               'attr' => array(
                   'class' => 'form-control mb-3'
               )
           ))
           ->add('Venue', TextType::class, array(
               'attr' => array(
                   'class' => 'form-control mb-3'
               )
           ))
           ->add('Date', DateType::class, array(
               //'format' => 'yyyy-MM-dd',
               'widget' => 'single_text',
               'html5' => false,
               'attr' => array(
                   'class' => 'form-control mb-3 datepicker',
                   'readonly' => ''
               )
           ))
           ->add('Time', TimeType::class, array(
               'hours' => array(
                 '01', '02','03','04','05','06','07','08','09','10','11','12'
               ),
               //'with_seconds' => true,
               'attr' => array(
                   'class' => 'mb-3'
               )
           ))
           ->add('Registration_fee', MoneyType::class, array(
               'currency' => 'NGN',
               'grouping' => true,
               'attr' => array(
                   'class' => 'form-control mb-3',
                   'onkeypress' => 'return isNumber(event)'
               )
           ))
           ->add('Individual_Amount', MoneyType::class, array(
               'currency' => 'NGN',
               'grouping' => true,
               'attr' => array(
                   'class' => 'form-control mb-3',
                   'onkeypress' => 'return isNumber(event)'
               )
           ))
           ->add('Extra_personnel_amount', MoneyType::class, array(
               'currency' => 'NGN',
               'grouping' => true,
               'attr' => array(
                   'class' => 'form-control mb-3',
                   'onkeypress' => 'return isNumber(event)'
               )
           ))
           ->add('Individuals_per_mda', NumberType::class, array(
               'attr' => array(
                   'class' => 'form-control mb-3',
                   'maxlength' => '1',
                   'onkeypress' => 'return isNumber(event)'
               )
           ))
           ->add('Training_code', TextType::class, array(
               'attr' => array(
                   'class' => 'form-control mb-3',

               )
           ))
           ->add('Letter_content', TextareaType::class, array(
               'attr' => array(
                   'class' => 'trumbowyg-demo mb-3 form-control',
                   'rows' => '15'
               )
           ))
           ->add('Submit', SubmitType::class, array(
               'attr' => array(
                   'class' => 'btn btn-primary btn-block'
               )
           ))
           ->getForm();

       $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid())
       {

           $form_data = $form->getData();

           $em = $this->getDoctrine()->getManager();
           $em->persist($form_data);
           $em->flush();

           $training_id = $training->getId();

           $this->addFlash('success', 'New Mda Added');

           return $this->redirectToRoute('admin_view_training', array(
               'id' => $training_id
           ));


       }



        return $this->render('admin/add_training.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'form' => $form->createView()
        ));
    }


    /**
     * @Route("/admin/training/edit/{id}", name="admin_edit_training")
     */
    public function edit_training(Request $request, $id)
    {
        $user = $this->getUser();
        $page_title = "Training";

        $training = $this->getDoctrine()
            ->getRepository(Training::class)
            ->find($id);

        $form = $this->createFormBuilder($training)
            ->add('Title', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3'

                )
            ))
            ->add('Venue', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3'
                )
            ))
            ->add('Date', DateType::class, array(
                //'format' => 'yyyy-MM-dd',
                'widget' => 'single_text',
                'html5' => false,
                'attr' => array(
                    'class' => 'form-control mb-3 datepicker',
                    'readonly' => ''
                )
            ))
            ->add('Time', TimeType::class, array(
                'hours' => array(
                    '01', '02','03','04','05','06','07','08','09','10','11','12'
                ),
                //'with_seconds' => true,
                'attr' => array(
                    'class' => 'mb-3'
                )
            ))
            ->add('Registration_fee', MoneyType::class, array(
                'currency' => 'NGN',
                'grouping' => true,
                'attr' => array(
                    'class' => 'form-control mb-3',
                    'onkeypress' => 'return isNumber(event)'
                )
            ))
            ->add('Individual_Amount', MoneyType::class, array(
                'currency' => 'NGN',
                'grouping' => true,
                'attr' => array(
                    'class' => 'form-control mb-3',
                    'onkeypress' => 'return isNumber(event)'
                )
            ))
            ->add('Extra_personnel_amount', MoneyType::class, array(
                'currency' => 'NGN',
                'grouping' => true,
                'attr' => array(
                    'class' => 'form-control mb-3',
                    'onkeypress' => 'return isNumber(event)'
                )
            ))
            ->add('Individuals_per_mda', NumberType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3',
                    'maxlength' => '1',
                    'onkeypress' => 'return isNumber(event)'
                )
            ))
            ->add('Training_code', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3',

                )
            ))

            ->add('Letter_content', TextareaType::class, array(
                'attr' => array(
                    'class' => 'trumbowyg-demo mb-3 form-control',
                    'rows' => '15'
                )
            ))

            ->add('Update Training', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-success btn-block'
                )
            ))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $form_data = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($form_data);
            $em->flush();

            $this->addFlash('success', 'Mda Updated');

            return $this->redirectToRoute('admin_training');


        }



        return $this->render('admin/update_training.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'form' => $form->createView()
        ));
    }


    /**
     * @Route("/admin/training/delete/{id}", name="admin_delete_training")
     *
     */
    public function delete_training($id)
    {
        $training = $this->getDoctrine()
            ->getRepository(Training::class)
            ->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($training);
        $em->flush();

        $this->addFlash('success', 'Mda Deleted');

        return $this->redirectToRoute('admin_training');

    }


    /**
     * @Route("/admin/training/{id}", name="admin_view_training")
     *
     */
    public function training_participants($id)
    {
        $user = $this->getUser();
        $page_title = "Training";

        // get training information
        $training = $this->getDoctrine()
            ->getRepository(Training::class)
            ->find($id);

        // get training session information
        $training_session = $this->getDoctrine()
            ->getRepository(Trainingsession::class)
            ->findBy([
                'training_id' => $id
            ]);

        $invoice = $this->getDoctrine()
            ->getRepository(Invoice::class)
            ->findby([
                'training_id' => $training->getId()
            ]);

        $em = $this->getDoctrine()->getManager();


        // get all mda participants for this training
        $training_participants = $this->getDoctrine()
            ->getRepository(TrainingParticipant::class)
            ->findby([
                'training_id' => $training->getId()
            ]);


        // start new mda participants array
        $participants = array();

        $attended_participants = array();


        foreach($training_participants as $participant)
        {

            $training_session2 = $this->getDoctrine()
                ->getRepository(TrainingSession::class)
                ->find($participant->getSessionId());

            $iv = $this->getDoctrine()
                ->getRepository(Invoice::class)
                ->find($participant->getInvoiceId());

            $mda = $this->getDoctrine()
                ->getRepository(Mda::class)
                ->findOneby([
                    'mda_code' => $participant->getMdaCode()
                ]);


            $row['name'] = $participant->getParticipantName();
            $row['email'] = $participant->getParticipantEmail();
            $row['phone'] = $participant->getParticipantPhone();
            $row['session'] = $training_session2->getName();
            $row['attended'] = $participant->getAttended();
            $row['mda'] = $mda->getName();
            $row['payment_status'] = $iv->getPaymentStatus();
            $row['invoice_id'] = $iv->getId();

            array_push($participants, $row);

            if($participant->getAttended() == 1)
            {
                array_push($attended_participants, $row);
            }
        }


        $new_invoice_array = array();

        foreach($invoice as $inv)
        {
            $mda = $this->getDoctrine()
                ->getRepository(Mda::class)
                ->findOneby([
                    'mda_code' => $inv->getMdaCode()
                ]);

            $row['id'] = $inv->getId();
            $row['paymentid'] = $inv->getPaymentId();
            $row['paymentamount'] = $inv->getPaymentAmount();
            $row['paymentstatus'] = $inv->getPaymentStatus();
            $row['paymentmethod'] = $inv->getPaymentmethod();
            $row['mda'] = $mda->getName();

            array_push($new_invoice_array, $row);

        }


        // get bank payments
        $qu1 = $em->getConnection()->prepare("SELECT SUM(payment_amount) as pay_amount FROM invoice WHERE payment_status='1' AND training_id='$id' AND payment_method='Bank Transfer'");
        $qu1->execute();
        $bank_pay = $qu1->fetchAll();

        // get cash payments
        $qu2 = $em->getConnection()->prepare("SELECT SUM(payment_amount) as cash_pay_amount FROM invoice WHERE payment_status='1' AND training_id='$id' AND payment_method='Cash'");
        $qu2->execute();
        $cash_pay = $qu2->fetchAll();

        // get undertaken payments
        $qu3 = $em->getConnection()->prepare("SELECT SUM(payment_amount) as undertaken_pay_amount FROM invoice WHERE payment_status='0' AND training_id='$id' AND payment_method='Undertaken'");
        $qu3->execute();
        $undertaken_pay = $qu3->fetchAll();

        // get online payments
        $qu4 = $em->getConnection()->prepare("SELECT SUM(payment_amount) as online_pay_amount FROM invoice WHERE payment_status='1' AND training_id='$id' AND payment_method='Online'");
        $qu4->execute();
        $online_pay = $qu4->fetchAll();

        // get all payments
        $qu5 = $em->getConnection()->prepare("SELECT SUM(payment_amount) as total_pay_amount FROM invoice WHERE training_id='$id' AND payment_status='1' ");
        $qu5->execute();
        $total_pay = $qu5->fetchAll();

        // get outstanding payments
        $qu6 = $em->getConnection()->prepare("SELECT SUM(payment_amount) as out_pay_amount FROM invoice WHERE training_id='$id' AND payment_status='0'");
        $qu6->execute();
        $ontstanding_pay = $qu6->fetchAll();




        // get mdas that attended the training
        $st = $em->getConnection()->prepare("SELECT mda_code FROM training_participant WHERE attended='1' AND training_id='$id' GROUP BY mda_code");
        $st->execute();
        $attended_mdas = $st->fetchAll();

        // get all mdas
        $mdas = $this->getDoctrine()
            ->getRepository(Mda::class)
            ->findAll();


        $not_attended_mdas = array();

        foreach($mdas as $org)
        {

            foreach($attended_mdas as $real_mda)
            {

                if($org->getMdaCode() !== $real_mda['mda_code'])
                {

                    $row3['name'] = $org->getName();
                    $row3['mda_code'] = $org->getMdaCode();
                    $row3['email'] = $org->getEmail();
                    $row3['phone'] = $org->getPhone();


                }

            }
                array_push($not_attended_mdas, $row3);
        }



        // render to view
        return $this->render('admin/view_training.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'training_participants' => $participants,
            'attended_participants' => $attended_participants,
            'training' => $training,
            'invoices' => $new_invoice_array,
            'total_bank_payment' => $bank_pay[0]['pay_amount'],
            'total_cash_payment' => $cash_pay[0]['cash_pay_amount'],
            'total_undertaken_payment' => $undertaken_pay[0]['undertaken_pay_amount'],
            'total_online_payment' => $online_pay[0]['online_pay_amount'],
            'total_payment' => $total_pay[0]['total_pay_amount'],
            'total_outstanding_payment' => $ontstanding_pay[0]['out_pay_amount'],
            'training_sessions' => $training_session,
            'not_attended_mdas' => $not_attended_mdas
        ));

    }


    /**
     * @Route("/admin/training/session/{id}", name="admin_training_session")
     *
     */
    public function training_session($id)
    {

        $user = $this->getUser();
        $page_title = "Training";

        // get training session information
        $training_session = $this->getDoctrine()
            ->getRepository(Trainingsession::class)
            ->find($id);

        // get training information
        $training = $this->getDoctrine()
            ->getRepository(Training::class)
            ->findOneBy([
                'id' => $training_session->getTrainingId()
            ]);


        // get all mda participants for this training session
        $training_participants = $this->getDoctrine()
            ->getRepository(TrainingParticipant::class)
            ->findby([
                'training_id' => $training->getId(),
                'session_id' => $id
            ]);


        // start new mda participants array
        $participants = array();

        $attended_participants = array();


        foreach($training_participants as $participant)
        {

            $training_session2 = $this->getDoctrine()
                ->getRepository(TrainingSession::class)
                ->find($participant->getSessionId());

            $iv = $this->getDoctrine()
                ->getRepository(Invoice::class)
                ->find($participant->getInvoiceId());

            $mda = $this->getDoctrine()
                ->getRepository(Mda::class)
                ->findOneby([
                    'mda_code' => $participant->getMdaCode()
                ]);


            $row['name'] = $participant->getParticipantName();
            $row['email'] = $participant->getParticipantEmail();
            $row['phone'] = $participant->getParticipantPhone();
            $row['session'] = $training_session2->getName();
            $row['attended'] = $participant->getAttended();
            $row['mda'] = $mda->getName();
            $row['payment_status'] = $iv->getPaymentStatus();
            $row['invoice_id'] = $iv->getId();

            array_push($participants, $row);

            if($participant->getAttended() == 1)
            {
                array_push($attended_participants, $row);
            }
        }


        // render to view
        return $this->render('admin/training_session.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'training_participants' => $participants,
            'attended_participants' => $attended_participants,
            'training' => $training,
            'training_session' => $training_session,
        ));

    }


    /**
     * @Route("/admin/training/{id}/session/add", name="admin_add_training_session")
     */

    public function add_session(Request $request, $id)
    {

        $user = $this->getUser();
        $page_title = "Training";

        $training = $this->getDoctrine()
            ->getRepository(Training::class)
            ->find($id);

        $training_session = new TrainingSession();

        $form = $this->createFormBuilder($training_session)
            ->add("Name", TextType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3'
                )
            ))
            ->add("StartDate", DateType::class, array(
                'widget' => 'single_text',
                'html5' => false,
                'attr' => array(
                    'class' => 'form-control mb-3 datepicker',
                    'readonly' => ''
                )
            ))
            ->add("EndDate", DateType::class, array(
                'widget' => 'single_text',
                'html5' => false,
                'attr' => array(
                    'class' => 'form-control mb-3 datepicker',
                    'readonly' => ''
                )
            ))
            ->add("Capacity", NumberType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3',
                    'onkeypress' => 'return isNumber(event)'
                )
            ))
            ->add("Submit", SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-primary'
                )
            ))

            ->getForm();


        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid())
        {

            $training_session = $form->getData();


            $training_session->setTrainingId($id);

            $training_session->setStatus('0');

            $em = $this->getDoctrine()->getManager();
            $em->persist($training_session);
            $em->flush();

            $this->addFlash('success', 'Training session added');

            return $this->redirectToRoute('admin_view_training', array(
                'id' => $id
            ));


        }

        return $this->render('admin/add_training_session.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'training' => $training,
            'form' => $form->createView()

        ));

    }



    /**
     * @Route("/admin/training/session/{id}/close", name="admin_close_training_session")
     */

    public function close_session($id)
    {

        $training_session = $this->getDoctrine()
            ->getRepository(TrainingSession::class)
            ->find($id);

        $training_session->setStatus('0');

        $training_id = $training_session->getTrainingId();

        $em = $this->getDoctrine()->getManager();

        $em->persist($training_session);

        $em->flush();

        $this->addFlash('success', 'Training session closed');

        return $this->redirectToRoute('admin_view_training', array(
            'id' => $training_id
        ));

    }

    /**
     * @Route("/admin/training/session/{id}/open", name="admin_open_training_session")
     */

    public function open_session($id)
    {

        $training_session = $this->getDoctrine()
            ->getRepository(TrainingSession::class)
            ->find($id);

        $training_session->setStatus('1');

        $training_id = $training_session->getTrainingId();

        $em = $this->getDoctrine()->getManager();

        $em->persist($training_session);

        $em->flush();

        $this->addFlash('success', 'Training session opened');

        return $this->redirectToRoute('admin_view_training', array(
            'id' => $training_id
        ));

    }



        /**
     * @Route("/admin/invoice", name="admin_invoice")
     */
    public function invoice()
    {
        $user = $this->getUser();
        $page_title = "Invoice";

       $invoices = $this->getDoctrine()
           ->getRepository(Invoice::class)
           ->findAll();



        $new_invoice_array = array();

        foreach($invoices as $inv)
        {
            $mda = $this->getDoctrine()
                ->getRepository(Mda::class)
                ->findOneby([
                    'mda_code' => $inv->getMdaCode()
                ]);

            $row['id'] = $inv->getId();
            $row['paymentid'] = $inv->getPaymentId();
            $row['paymentamount'] = $inv->getPaymentAmount();
            $row['paymentstatus'] = $inv->getPaymentStatus();
            $row['paymentmethod'] = $inv->getPaymentmethod();
            $row['mda'] = $mda->getName();

            array_push($new_invoice_array, $row);

        }

        return $this->render('admin/invoice.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'invoices' => $new_invoice_array
        ));
    }

    /**
     * @Route("/admin/invoice/{id}", name="admin_view_invoice")
     */
    public function admin_view_invoice(Request $request, $id)
    {
        $user = $this->getUser();
        $page_title = "Invoice";

        $em = $this->getDoctrine()->getManager();

        $invoice = $this->getDoctrine()
            ->getRepository(Invoice::class)
            ->find($id);

        $mda = $this->getDoctrine()
            ->getRepository(Mda::class)
            ->findOneby([
                'mda_code' => $invoice->getMdaCode()
            ]);

        $training = $this->getDoctrine()
            ->getRepository(Training::class)
            ->findOneby([
                'id' => $invoice->getTrainingId()
            ]);

        $training_id = $training->getId();
        $invoice_id = $invoice->getId();

        $mda_code = $mda->getMdaCode();
        $query4 = $em->getConnection()->prepare("SELECT * FROM training_participant WHERE training_id='$training_id' AND mda_code='$mda_code' AND invoice_id='$invoice_id'");
        $query4->execute();
        $all_participants = count($query4->fetchAll());



        if($all_participants >= $training->getIndividualsPerMda())
        {
            $d_participants = $training->getIndividualsPerMda();

            $d_extra_participants = $all_participants - $d_participants;

        }elseif($all_participants < $training->getIndividualsPerMda())
        {

            $d_participants = $all_participants;
            $d_extra_participants = 0;
        }



        $form = $this->createFormBuilder()
            ->add('PaymentEvidence', FileType::class, array(
                'attr' => array(
                    'class' => 'custom-input form-control mb-3'
                )
            ))
            ->add('Upload', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-primary'
                )
            ))
            ->getForm();


        $form->handleRequest($request);


            if ($form->isSubmitted() && $form->isValid()) {

                $data = $form->getData();


                //upload directory
                $dir = '../public/payment_evidence/';

                //generate random file name
                $new_filename = strtotime("now");

                // get file size
                $size = $data['PaymentEvidence']->getSize();

                // validate file size
                if($size < 1900000)
                {

                    $type = $data['PaymentEvidence']->getMimeType();

                    $accepted_file_types = array("image/png", "image/jpg", "image/jpeg", "application/pdf");

                    if (in_array($type, $accepted_file_types)) {

                        $extension = $data['PaymentEvidence']->guessExtension();

                        $data['PaymentEvidence']->move($dir, "$new_filename.$extension");

                        $invoice->setPaymentevidence("/payment_evidence/"."$new_filename.$extension");

                        $em->persist($invoice);
                        $em->flush();

                        $this->addFlash('success', 'Payment evidence uploded');

                    }else{

                        $this->addFlash('error', "$type File type not supported");
                    }


                }else{

                    $this->addFlash('error', 'File size is higher than 1.9MB');

                }

            }




        $query = $em->getConnection()->prepare("SELECT id FROM training_participant WHERE invoice_id='$invoice_id'");
        $query->execute();
        $participants_count = $query->fetchAll();


        // replace this line with your own code!
        return $this->render('admin/view_invoice.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'invoice' => $invoice,
            'all_main_participants' => $d_participants,
            'all_extra_participants' => $d_extra_participants,
            'mda' => $mda,
            'training' => $training,
            'form' => $form->createView(),
            'payment_id' => $this->randomString(9),
            'participants_count' => count($participants_count),
            'date' => date('l, F j Y', strtotime(date('Y-m-d')))
        ));
    }



    /**
     * @Route("/admin/invoice/{id}/pay/cash", name="admin_pay_invoice_cash")
     */
    public function admin_invoice_cash($id)
    {
        $user = $this->getUser();


        $invoice = $this->getDoctrine()
            ->getRepository(Invoice::class)
            ->find($id);

        $invoice->setPaymentMethod('Cash');
        $invoice->setPaymentStatus('1');

        $em = $this->getDoctrine()->getManager();

        $em->persist($invoice);
        $em->flush();

        return $this->redirectToRoute('admin_view_invoice', array(

            'id' => $invoice->getId()

        ));

    }


    /**
     * @Route("/admin/invoice/{id}/pay/bank", name="admin_pay_invoice_bank")
     */
    public function admin_invoice_bank($id)
    {
        $user = $this->getUser();


        $invoice = $this->getDoctrine()
            ->getRepository(Invoice::class)
            ->find($id);

        $invoice->setPaymentMethod('Bank Transfer');
        $invoice->setPaymentStatus('1');

        $em = $this->getDoctrine()->getManager();

        $em->persist($invoice);
        $em->flush();

        return $this->redirectToRoute('admin_view_invoice', array(

            'id' => $invoice->getId()

        ));

    }


    /**
     * @Route("/admin/invoice/{id}/pay/undertaken", name="admin_pay_invoice_undertaken")
     */
    public function admin_invoice_undertaken($id)
    {
        $user = $this->getUser();


        $invoice = $this->getDoctrine()
            ->getRepository(Invoice::class)
            ->find($id);

        $invoice->setPaymentMethod('Undertaken');

        $em = $this->getDoctrine()->getManager();

        $em->persist($invoice);
        $em->flush();

        return $this->redirectToRoute('admin_view_invoice', array(

            'id' => $invoice->getId()

        ));

    }





    /**
     * @Route("/admin/account", name="admin_account")
     */
    public function admin_manage_account(Request $request)
    {
        $user = $this->getUser();
        $page_title = "Account";



        $new_user = new MdaParticipant();

        $new_user->setId($user->getId());

        $form = $this->createFormBuilder($user)
            ->add('Email', EmailType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3',
                )
            ))
            ->add('Username', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3',
                )
            ))
            ->add('save', SubmitType::class,  array(
                'label' => 'Update',
                'attr' => array(
                    'class' => 'btn btn-block btn-primary mt-4'
                )))
            ->getForm();



        $form->handleRequest($request);




        if($form->isSubmitted() && $form->isValid())
        {

            $user = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Account details updated');

        }


        // replace this line with your own code!
        return $this->render('admin/account.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'form' => $form->createView()

        ));
    }


    /**
     * @Route("/admin/account/update/password", name="admin_update_password")
     */
    public function admin_update_password(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $user = $this->getUser();



        $current_password = $request->request->get('current_password');
        $new_password = $request->request->get('new_password');
        $confirm_password = $request->request->get('confirm_password');



        if(!empty($current_password))
        {

            if($new_password == $confirm_password) {


                if($encoder->isPasswordValid($user, $current_password) === TRUE)
                {
                    $user->setPassword($encoder->encodePassword($user, $new_password));

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($user);
                    $em->flush();

                    $this->addFlash('success', 'Password updated');

                }else{
                    $this->addFlash('error', 'Current password is incorrect');
                }


            }else{

                $this->addFlash('error', 'New passwords do not match');

            }

        }


        return $this->redirectToRoute('admin_account');


    }


    /**
     * @Route("/admin/users", name="admin_users")
     */
    public function admin_users(Request $request, UserPasswordEncoderInterface $encoder)
    {

        $user = $this->getUser();
        $page_title = "Admin Users";

        $admin_users = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();


        $user = new User();

        $form = $this->createFormBuilder($user)
            ->add('Email', EmailType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3'
                )
            ))
            ->add('Username', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3'
                )
            ))
            ->add('Submit', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-success btn-block'
                )
            ))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $user = new User();

            $user->setEmail($form["Email"]->getData());
            $user->setUsername($form["Username"]->getData());
            $user->setPassword($encoder->encodePassword($user, "0000"));

            $user->setRoles('ROLE_ADMIN');

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'New admin user added');

            return $this->redirectToRoute('admin_users');

        }


        return $this->render('admin/admin_users.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'admin_users' => $admin_users,
            'form' => $form->createView()

        ));
    }


    public function randomString($length = 6) {
        $str = "";
        $characters = array_merge(range('A','X'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }
}
