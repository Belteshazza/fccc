<?php

namespace App\Controller;

use App\Entity\Invoice;
use App\Entity\InvoiceLog;
use App\Entity\ParticipantsAllowed;
use App\Entity\Training;
use App\Entity\TrainingParticipant;
use App\Entity\TrainingSession;
use App\Entity\User;
use App\Entity\Mda;
use App\Entity\MdaParticipant;


use App\Model\DatabaseBackup\DatabaseBackup;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\Entity;
use Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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



        $privilege = explode(',',$user->getPrivileges());

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


        // get online payments
        $qu4 = $em->getConnection()->prepare("SELECT SUM(payment_amount) as online_pay_amount FROM invoice WHERE payment_status='1' AND payment_method='Online'");
        $qu4->execute();
        $online_pay = $qu4->fetchAll();

        // get all payments
        $qu5 = $em->getConnection()->prepare("SELECT SUM(payment_amount) as total_pay_amount FROM invoice ");
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
            'total_online_payment' => $online_pay[0]['online_pay_amount'],
            'total_payment' => $total_pay[0]['total_pay_amount'],
            'total_outstanding_payment' => $ontstanding_pay[0]['out_pay_amount'],
            'privileges' => $privilege
        ));
    }


    /**
     * @Route("/admin/mda", name="admin_mda")
     */
    public function mdas()
    {

        $user = $this->getUser();
        $page_title = "MDAs";

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("mda",$privilege))
        {
            $this->addFlash('success', 'You do not have access to MDA profiles');
            $this->redirectToRoute("admin_dashboard");
        }


        $em = $this->getDoctrine()->getManager();

        $query = "SELECT * FROM mda";


        // fetch all mdas
        $statement = $em->getConnection()->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();




        return $this->render('admin/mdas.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'mdas' => $result,
            'privileges' => $privilege
        ));
    }


    /**
     * @Route("/admin/mda/{id}/edit", name="admin_edit_mda")
     */
    public function edit_mda(Request $request,$id, UserPasswordEncoderInterface $encoder)
    {
        $user = $this->getUser();
        $page_title = "MDAs";


        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("mda",$privilege))
        {
            $this->addFlash('success', 'You do not have access to MDA profiles');
            $this->redirectToRoute("admin_dashboard");
        }

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
            'form' => $form->createView(),
            'privileges' => $privilege
        ));
    }


    /**
     * @Route("/admin/mda/add", name="add_mda")
     */
    public function add_mda(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $user = $this->getUser();
        $page_title = "MDAs";


        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("mda",$privilege))
        {
            $this->addFlash('success', 'You do not have access to MDA profiles');
            $this->redirectToRoute("admin_dashboard");
        }

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
            'form' => $form->createView(),
            'privileges' => $privilege
        ));
    }



    /**
     * @Route("/admin/participants", name="admin_participants")
     */
    public function participants()
    {
        $user = $this->getUser();
        $page_title = "MDA Admins";

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("mda_admin",$privilege))
        {
            $this->addFlash('success', 'You do not have access to MDA administrators');
            $this->redirectToRoute("admin_dashboard");
        }

        $participants = $this->getDoctrine()
            ->getRepository(mdaParticipant::class)
            ->findAll();

        $part2 = array();

        foreach($participants as $mda_participants)
        {
            $row['firstname'] = $mda_participants->getFirstName();
            $row['lastname'] = $mda_participants->getLastName();
            $row['email'] = $mda_participants->getEmail();
            $row['phone'] = $mda_participants->getPhone();
            $row['id'] = $mda_participants->getId();

            $md = $this->getDoctrine()
                ->getRepository(Mda::class)
                ->findOneBy([
                    'mda_code' => $mda_participants->getMdaCode()
                ]);
            $row['mda'] = $md->getName();

            array_push($part2, $row);
        }

        return $this->render('admin/mda_admins.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'participants' => $part2,
            'privileges' => $privilege
        ));
    }


    /**
     * @Route("/admin/participant/{id}", name="admin_view_participants")
     */
    public function view_participants($id)
    {
        $user = $this->getUser();
        $page_title = "MDA Admins";

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("mda_admin",$privilege))
        {
            $this->addFlash('success', 'You do not have access to MDA administrators');
            $this->redirectToRoute("admin_dashboard");
        }

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
            'mda' => $mda,
            'privileges' => $privilege
        ));
    }



    /**
     * @Route("/admin/training", name="admin_training")
     */
    public function training()
    {
        $user = $this->getUser();
        $page_title = "Training";

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }

        $training  = $this->getDoctrine()
            ->getRepository(Training::class)
            ->findAll();

        return $this->render('admin/training.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'trainings' => $training,
            'privileges' => $privilege
        ));
    }


    /**
     * @Route("/admin/training/add", name="admin_add_training")
     */
    public function add_training(Request $request)
    {
        $user = $this->getUser();
        $page_title = "Training";

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }

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
           ->add('RefresherIndividualAmount', MoneyType::class, array(
               'currency' => 'NGN',
               'grouping' => true,
               'required' => false,
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
           ->add('ParentId', EntityType::class, array(
               'label' => 'Select a previous training to link to this training (Not required)',
               'class' => Training::class,
               'choice_label' => 'Title',
               'choice_value' => 'Id',
               'empty_data' => '-- Choose a training --',
               'required' => false,
               'expanded' => true,
               'multiple' => false,
               'attr' => array(
                   'class' => 'mb-3',

               )
           ))
           ->add('Letter_content', TextareaType::class, array(
               'attr' => array(
                   'class' => 'trumbowyg-demo mb-3 form-control',
                   'rows' => '15'
               )
           ))
           ->add('RefresherLetterContent', TextareaType::class, array(
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
            'form' => $form->createView(),
            'privileges' => $privilege
        ));
    }


    /**
     * @Route("/admin/training/edit/{id}", name="admin_edit_training")
     */
    public function edit_training(Request $request, $id)
    {
        $user = $this->getUser();
        $page_title = "Training";


        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }

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
            ->add('RefresherIndividualAmount', MoneyType::class, array(
                'currency' => 'NGN',
                'grouping' => true,
                'required' => false,
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

            ->add('RefresherLetterContent', TextareaType::class, array(
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


            $em->persist($training);
            $em->flush();

            $this->addFlash('success', 'Mda Updated');

            return $this->redirectToRoute('admin_training');


        }



        return $this->render('admin/update_training.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'form' => $form->createView(),
            'privileges' => $privilege
        ));
    }


    /**
     * @Route("/admin/training/link/{id}", name="admin_link_training")
     */
    public function link_training(Request $request, $id)
    {
        $user = $this->getUser();
        $page_title = "Training";


        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }

        $training = $this->getDoctrine()
            ->getRepository(Training::class)
            ->find($id);


        if($training->getParentId() !== 0)
        {
            $parent_training = $this->getDoctrine()
                ->getRepository(Training::class)
                ->find($training->getParentId());

        }else{
            $parent_training = 0;
        }


        $form = $this->createFormBuilder($training)
            ->add('ParentId', EntityType::class, array(
                'label' => 'To link this training, select a previous training to link to this training',
                'class' => Training::class,
                'choice_label' => 'Title',
                'choice_value' => 'Id',
                'placeholder' => '-- Choose a training --',
                'required' => false,
                'expanded' => false,
                'multiple' => false,
                'attr' => array(
                    'class' => 'mb-3',

                )
            ))

            ->add('Update Training', SubmitType::class, array(
                'attr' => array(
                    'class' => 'mt-3 btn btn-success btn-block'
                )
            ))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $form_data = $form->getData();

            $em = $this->getDoctrine()->getManager();

        if(!empty($form['ParentId']->getData()))
            {
                $training->setParentId($form['ParentId']->getData()->getId());
            }
            $em->persist($training);
            $em->flush();

            $this->addFlash('success', 'Training Updated');

            return $this->redirectToRoute('admin_training');


        }



        return $this->render('admin/link_training.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'form' => $form->createView(),
            'privileges' => $privilege,
            'parent_training' => $parent_training,
            'training' => $training
        ));
    }


    /**
     * @Route("/admin/training/delete/{id}", name="admin_delete_training")
     *
     */
    public function delete_training($id)
    {
        $user = $this->getUser();
        $training = $this->getDoctrine()
            ->getRepository(Training::class)
            ->find($id);


        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }

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
    public function view_training($id)
    {
        $user = $this->getUser();
        $page_title = "Training";

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }

        // get training information
        $training = $this->getDoctrine()->getRepository(Training::class)->find($id);

        // get training session information
        $t_session = $this->getDoctrine()
            ->getRepository(Trainingsession::class)
            ->findBy(['training_id' => $id]);

        $training_session = array();

        foreach($t_session as $session)
        {
            $row['id'] = $session->getId();
            $row['name'] = $session->getName();
            $row['name'] = $session->getName();
            $row['trainingid'] = $session->getTrainingId();
            $row['startdate'] = $session->getStartDate();
            $row['enddate'] = $session->getEndDate();
            $row['capacity'] = $session->getCapacity();
            $row['status'] = $session->getStatus();

            $attnd = $this->getDoctrine()
                ->getRepository(TrainingParticipant::class)
                ->findBy([
                    'training_id' => $session->getTrainingId(),
                    'session_id' => $session->getId(),

                ]);

            $row['registered'] = count($attnd);

            array_push($training_session, $row);
        }

        $invoice = $this->getDoctrine()->getRepository(Invoice::class)->findby(['training_id' => $training->getId()]);

        $em = $this->getDoctrine()->getManager();


        // get all mda participants for this training
        $training_participants = $this->getDoctrine()->getRepository(TrainingParticipant::class)->findby(['training_id' => $training->getId()]);


        // start new mda participants array
        $participants = array();

        $attended_participants = array();


        foreach ($training_participants as $participant) {


            $training_session2 = $this->getDoctrine()->getRepository(TrainingSession::class)->find($participant->getSessionId());

            $iv = $this->getDoctrine()->getRepository(Invoice::class)->find($participant->getInvoiceId());

            $mda = $this->getDoctrine()->getRepository(Mda::class)->findOneby(['mda_code' => $participant->getMdaCode()]);


            $row['id'] = $participant->getId();
            $row['name'] = $participant->getParticipantName();
            $row['email'] = $participant->getParticipantEmail();
            $row['phone'] = $participant->getParticipantPhone();
            $row['session'] = $training_session2->getName();
            $row['attended'] = $participant->getAttended();
            $row['date'] = $participant->getDate();
            $row['mda'] = $mda->getName();
            $row['payment_status'] = $iv->getPaymentStatus();
            $row['invoice_id'] = $iv->getId();

            array_push($participants, $row);

            if ($participant->getAttended() == 1) {
                array_push($attended_participants, $row);
            }
        }


        $new_invoice_array = array();

        foreach ($invoice as $inv) {
            $mda = $this->getDoctrine()->getRepository(Mda::class)->findOneby(['mda_code' => $inv->getMdaCode()]);


            $row['id'] = $inv->getId();
            $row['paymentid'] = $inv->getPaymentId();
            $row['paymentamount'] = $inv->getPaymentAmount();
            $row['paymentstatus'] = $inv->getPaymentStatus();
            $row['paymentmethod'] = $inv->getPaymentmethod();
            $row['mda'] = $mda->getName();

            array_push($new_invoice_array, $row);

        }




        // get all payments
        $repo = $this->getDoctrine()->getRepository(TrainingParticipant::class);

        $total_pay = $repo->createQueryBuilder('u')
            ->where('u.attended = 1')
            ->andWhere('u.training_id = :t_id')
            ->groupBy('u.mda_code')
            ->setParameter('t_id', $id)
            ->getQuery()
            ->getResult();

        $total_amount_due = 0;
        foreach($total_pay as $t_pay)
        {
            $invoice = $this->getDoctrine()->getRepository(Invoice::class)->find($t_pay->getInvoiceId());
            $total_amount_due += $invoice->getPaymentAmount();

        }



        // get bank payments
        $total_bank_pay = 0;
        foreach($total_pay as $t_pay)
        {
            $invoice = $this->getDoctrine()->getRepository(Invoice::class)->find($t_pay->getInvoiceId());

            if($invoice->getPaymentMethod() == 'Bank Transfer') {
                $total_bank_pay += $invoice->getPaymentAmount();
            }
        }

        // get cash payments
        $total_cash_pay = 0;
        foreach($total_pay as $t_pay)
        {
            $invoice = $this->getDoctrine()->getRepository(Invoice::class)->find($t_pay->getInvoiceId());

            if($invoice->getPaymentMethod() == 'Cash') {
                $total_cash_pay += $invoice->getPaymentAmount();
            }
        }

        // get online payments
        $total_online_pay = 0;
        foreach($total_pay as $t_pay)
        {
            $invoice = $this->getDoctrine()->getRepository(Invoice::class)->find($t_pay->getInvoiceId());

            if($invoice->getPaymentMethod() == 'Online') {
                $total_online_pay += $invoice->getPaymentAmount();
            }
        }



        // get mdas that attended the training
        $st = $em->getConnection()->prepare("SELECT * FROM training_participant WHERE attended='1' AND training_id='$id' GROUP BY mda_code");
        $st->execute();
        $attended_mdas = $st->fetchAll();


        $atnd_mda = array();

        foreach($attended_mdas as $md)
        {
            array_push($atnd_mda, $md['mda_code']);
        }

        // get all mdas that didnt attend
        $mdas = $this->getDoctrine()->getRepository(Mda::class)->findAll();

        $not_attended_mdas = array();


        foreach ($mdas as $org) {

            if(!in_array($org->getMdaCode(), $atnd_mda))
            {

                $row3['name'] = $org->getName();
                $row3['mda_code'] = $org->getMdaCode();
                $row3['email'] = $org->getEmail();
                $row3['phone'] = $org->getPhone();

                array_push($not_attended_mdas, $row3);
            }

        }





        //get mdas that attended
        $st22 = $em->getConnection()->prepare("SELECT * FROM training_participant JOIN mda WHERE training_participant.attended='1' AND training_participant.training_id='$id' AND training_participant.mda_code = mda.mda_code GROUP BY training_participant.mda_code");
        $st22->execute();
        $attended_mdas = $st22->fetchAll();


        // render to view
        return $this->render('admin/view_training.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'training_participants' => $participants,
            'attended_participants' => $attended_participants,
            'attended_mdas' => $attended_mdas,
            'training' => $training,
            'invoices' => $new_invoice_array,
            'total_bank_payment' => $total_bank_pay,
            'total_cash_payment' => $total_cash_pay,
            'total_online_payment' => $total_online_pay,
            'total_payment' => $total_amount_due,
            'total_outstanding_payment' => ($total_amount_due - ($total_bank_pay + $total_cash_pay + $total_online_pay)),
            'training_sessions' => $training_session,
            'not_attended_mdas' => $not_attended_mdas,
            'privileges' => $privilege
        ));

    }


    /**
     * @Route("/admin/training/participant/attended/{id}", name="admin_mark_participant_attended")
     */
    public function mark_participant_attended($id)
    {

        $user = $this->getUser();
        $page_title = "Training";

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }


        $training_participant = $this->getDoctrine()
            ->getRepository(TrainingParticipant::class)
            ->find($id);

        $training_participant->setAttended(1);
        $em = $this->getDoctrine()->getManager();

        $em->flush($training_participant);


        $mda = $this->getDoctrine()
            ->getRepository(Mda::class)
            ->findOneBy([
                'mda_code' => $training_participant->getMdaCode()
            ]);

        $mda_name = $mda->getName();
        $mda_code = $mda->getMdaCode();

        $data_array = [
    'mdaName' => $mda_name,
    'mdaCode' => $mda_code,
    'mdaAbbrev' => ''
            ];

        $json_body = json_encode($data_array);

$data = [ 'mda_json' => $json_body ];

        $response = $this->CallAPI('POST','http://federalcharacter.gov.ng/portal_training/web/integration/organization',$data);

        $result = json_decode($response);

        print_r($result);
        
        if($result->status == 'error')
        {
            $this->addFlash('error', $result->message);
        }elseif($result->status == 'success')
        {
            $this->addFlash('success', 'Attendance marked & portal activated');

        }

        return $this->redirectToRoute('admin_view_training', [
            'id' => $training_participant->getTrainingId()
        ]);
    }


    /**
     * @Route("/admin/training/participant/not_attended/{id}", name="admin_mark_participant_not_attended")
     */
    public function mark_participant_not_attended($id)
    {

        $user = $this->getUser();
        $page_title = "Training";

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }


        $training_participant = $this->getDoctrine()
            ->getRepository(TrainingParticipant::class)
            ->find($id);

        $training_participant->setAttended(0);
        $em = $this->getDoctrine()->getManager();

        $em->flush($training_participant);


        return $this->redirectToRoute('admin_view_training', [
            'id' => $training_participant->getTrainingId()
        ]);
    }


    /**
     * @Route("/admin/training/session/{id}", name="admin_training_session")
     *
     */
    public function training_session($id)
    {

            
        $user = $this->getUser();
        $page_title = "Training";

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }

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

            if($mda == null)
            {
                echo $participant->getParticipantName();
                echo $participant->getMdaCode();
            }

            $row['name'] = $participant->getParticipantName();
            $row['email'] = $participant->getParticipantEmail();
            $row['phone'] = $participant->getParticipantPhone();
            $row['session'] = $training_session2->getName();
            $row['attended'] = $participant->getAttended();
            $row['date'] = $participant->getDate();
            $row['mda'] = $mda->getName();
            $row['payment_status'] = $iv->getPaymentStatus();
            $row['invoice_id'] = $iv->getId();

            array_push($participants, $row);

            if($participant->getAttended() == 1)
            {
                array_push($attended_participants, $row);
            }
        }

        $em = $this->getDoctrine()->getManager();
        $train_id = $training->getId();

        $qw = $em->getConnection()->prepare("SELECT * FROM training_participant WHERE training_id='$train_id' AND session_id='$id' GROUP BY invoice_id");
        $qw->execute();

        $participants5 = $qw->fetchAll();



        // get all payments
        $repo = $this->getDoctrine()->getRepository(TrainingParticipant::class);

        $total_pay = $repo->createQueryBuilder('u')
            ->where('u.attended = 1')
            ->andWhere('u.session_id = :s_id')
            ->groupBy('u.mda_code')
            ->setParameter('s_id', $id)
            ->getQuery()
            ->getResult();

        $total_amount_due = 0;
        foreach($total_pay as $t_pay)
        {
            $invoice = $this->getDoctrine()->getRepository(Invoice::class)->find($t_pay->getInvoiceId());
            $total_amount_due += $invoice->getPaymentAmount();

        }


        // get bank payments
        $total_bank_pay = 0;
        foreach($total_pay as $t_pay)
        {
            $invoice = $this->getDoctrine()->getRepository(Invoice::class)->find($t_pay->getInvoiceId());

            if($invoice->getPaymentMethod() == 'Bank Transfer') {
                $total_bank_pay += $invoice->getPaymentAmount();
            }
        }

        // get cash payments
        $total_cash_pay = 0;
        foreach($total_pay as $t_pay)
        {
            $invoice = $this->getDoctrine()->getRepository(Invoice::class)->find($t_pay->getInvoiceId());

            if($invoice->getPaymentMethod() == 'Cash') {
                $total_cash_pay += $invoice->getPaymentAmount();
            }
        }

        // get online payments
        $total_online_pay = 0;
        foreach($total_pay as $t_pay)
        {
            $invoice = $this->getDoctrine()->getRepository(Invoice::class)->find($t_pay->getInvoiceId());

            if($invoice->getPaymentMethod() == 'Online') {
                $total_online_pay += $invoice->getPaymentAmount();
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
            'privileges' => $privilege,
            'total_expected' => $total_amount_due,
            'total_paid' => ($total_bank_pay + $total_cash_pay + $total_online_pay),
            'total_outstanding' => ($total_amount_due - ($total_bank_pay + $total_cash_pay + $total_online_pay)),
        ));

    }


    /**
     * @Route("/admin/training/{id}/session/add", name="admin_add_training_session")
     */

    public function add_session(Request $request, $id)
    {

        $user = $this->getUser();
        $page_title = "Training";

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }

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
            'form' => $form->createView(),
            'privileges' => $privilege

        ));

    }


    /**
     * @Route("/admin/training/session/{id}/edit", name="admin_edit_training_session")
     */

    public function edit_session(Request $request, $id)
    {

        $user = $this->getUser();
        $page_title = "Training";

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }

        $training_session = $this->getDoctrine()
            ->getRepository(Trainingsession::class)
            ->find($id);

        $training = $this->getDoctrine()
            ->getRepository(Training::class)
            ->find($training_session->getTrainingId());

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

            $em = $this->getDoctrine()->getManager();
            $em->persist($training_session);
            $em->flush();

            $this->addFlash('success', 'Training session edited');

            return $this->redirectToRoute('admin_view_training', array(
                'id' => $training->getId()
            ));


        }

        return $this->render('admin/edit_training_session.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'training' => $training,
            'form' => $form->createView(),
            'privileges' => $privilege

        ));

    }


    /**
     * @Route("/admin/training/session/{id}/close", name="admin_close_training_session")
     */

    public function close_session($id)
    {
        $user = $this->getUser();

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }

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
     * @Route("/admin/training/session/{id}/delete", name="admin_delete_training_session")
     */
    public function delete_session($id)
    {
        $user = $this->getUser();

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }

        $training_session = $this->getDoctrine()
            ->getRepository(TrainingSession::class)
            ->find($id);

        $training_id = $training_session->getTrainingId();

        $em = $this->getDoctrine()->getManager();

        $em->remove($training_session);

        $em->flush();

        $this->addFlash('success', 'Training session deelted');

        return $this->redirectToRoute('admin_view_training', array(
            'id' => $training_id
        ));

    }


    /**
     * @Route("/admin/training/session/{id}/open", name="admin_open_training_session")
     */
     public function open_session($id)
    {
        $user = $this->getUser();

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }

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
     * @Route("/admin/training/{training_id}/participant/{id}/edit", name="admin_edit_participant")
     */
    public function admin_edit_participant(Request $request,$training_id, $id)
    {

        $user = $this->getUser();
        $page_title = "Training Participant";

        $training = $this->getDoctrine()
            ->getRepository(Training::class)
            ->find($training_id);

        $privilege = explode(',', $user->getPrivileges());

        if (!in_array("training", $privilege)) {
            $this->addFlash('success', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }

        $participant = $this->getDoctrine()
            ->getRepository(TrainingParticipant::class)
            ->find($id);

        $form = $this->createFormBuilder($participant)
            ->add('ParticipantName', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3'
                )
            ))
            ->add('ParticipantEmail', EmailType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3'
                )
            ))
            ->add('ParticipantPhone', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3',
                    'onkeypress' => 'return isNumber(event)'
                )
            ))

            ->add('Update', SubmitType::class, array(
                'attr' => array(
                    'class' => 'mt-4 btn btn-success btn-block'
                )
            ))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $participant->setParticipantName($form["ParticipantName"]->getData());
            $participant->setParticipantEmail($form["ParticipantEmail"]->getData());
            $participant->setParticipantPhone($form["ParticipantPhone"]->getData());



            $em = $this->getDoctrine()->getManager();
            $em->flush($participant);

            $this->addFlash('success', 'Participant updated');

            return $this->redirectToRoute('admin_view_training', [ 'id' => $training_id ]);

        }

        return $this->render('admin/admin_edit_participant.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'participant' => $participant,
            'form' => $form->createView(),
            'privileges' => $privilege

        ));

    }


    /**
     * @Route("/admin/training/participant/{id}/delete", name="admin_delete_participant")
     */
    public function admin_delete_participant(Request $request,$id)
    {

        $user = $this->getUser();
        $page_title = "Training Participant";

        $privilege = explode(',', $user->getPrivileges());

        if (!in_array("training", $privilege)) {
            $this->addFlash('error', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }

        $participant = $this->getDoctrine()
            ->getRepository(TrainingParticipant::class)
            ->find($id);

        $training_id = $participant->getTrainingId();
        $invoice_id = $participant->getInvoiceId();

        $em = $this->getDoctrine()->getManager();
        $em->remove($participant);
        $em->flush();

        $this->addFlash('success', 'Participant deleted successfully');

        $participant2 = $this->getDoctrine()
            ->getRepository(TrainingParticipant::class)
            ->findBy([
                'training_id' => $training_id,
                'invoice_id' => $invoice_id,
            ]);

        $training = $this->getDoctrine()
            ->getRepository(Training::class)
            ->find($training_id);

        $invoice = $this->getDoctrine()
            ->getRepository(Invoice::class)
            ->find($invoice_id);

        if(count($participant2) < 2)
        {
           $invoice->setPaymentAmount($invoice->getPaymentAmount() - $training->getIndividualAmount());

        }elseif(count($participant2) > 2)
        {
            $invoice->setPaymentAmount($invoice->getPaymentAmount() - $training->getExtraPersonnelAmount());
        }

        $em2 = $this->getDoctrine()->getManager();
        $em2->flush($invoice);


        if(count($participant2) <= 0)
        {
            $em->remove($invoice);
            $em->flush();

            $this->addFlash('success', 'Invoice deleted successfully');
        }



        return $this->redirectToRoute('admin_view_training', [ 'id' => $training_id ]);

    }


    /**
     * @Route("/admin/training/participant/register", name="admin_register_training_participant")
     */
    public function admin_register_training_participant(Request $request)
    {

        $user = $this->getUser();
        $page_title = "Register Training Participants";

        $privilege = explode(',', $user->getPrivileges());

        if (!in_array("training", $privilege)) {
            $this->addFlash('success', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }

        $training = $this->getDoctrine()
            ->getRepository(Training::class)
            ->findAll();

        $mda = $this->getDoctrine()
            ->getRepository(Mda::class)
            ->findAll();


        $mda_id = $request->request->get('mda');
        $training_id = $request->request->get('training');

        if(!empty($mda_id) && !empty($training_id))
        {

            return $this->redirectToRoute('admin_register_training_participant_session', [
                'mda_id' => $mda_id,
                'training_id' => $training_id
            ]);

        }


        return $this->render('admin/admin_register_participant.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'trainings' => $training,
            'mdas' => $mda,
            'privileges' => $privilege
        ));

    }


    /**
     * @Route("/admin/training/participant/register/session/{mda_id}/{training_id}", name="admin_register_training_participant_session")
     */
    public function admin_register_training_participant_session(Request $request, $mda_id, $training_id)
    {

        $user = $this->getUser();
        $page_title = "Register Training Participants";

        $privilege = explode(',', $user->getPrivileges());

        if (!in_array("training", $privilege)) {
            $this->addFlash('success', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }


        $mdas = $this->getDoctrine()
            ->getRepository(Mda::class)
            ->findAll();

        $trainings = $this->getDoctrine()
            ->getRepository(Training::class)
            ->findAll();


        $previous_attendees = "";

        if(!empty($mda_id) && !empty($training_id))
        {

            $training = $this->getDoctrine()
                ->getRepository(Training::class)
                ->find($training_id);

            $sessions = $this->getDoctrine()
                ->getRepository(TrainingSession::class)
                ->findBy([
                   'training_id' => $training_id
                ]);

            $mda = $this->getDoctrine()
                ->getRepository(Mda::class)
                ->find($mda_id);



            $participants = $this->getDoctrine()
                ->getRepository(TrainingParticipant::class)
                ->findBy([
                   'training_id' => $training_id,
                    'mda_code' => $mda->getMdaCode()
                ]);

            $invoices = $this->getDoctrine()
                ->getRepository(Invoice::class)
                ->findBy([
                    'training_id' => $training_id,
                    'mda_code' => $mda->getMdaCode()
                ]);


            $previous_attendees = $this->getDoctrine()
                ->getRepository(TrainingParticipant::class)
                ->findBy([
                    'training_id' => $training->getParentId(),
                    'mda_code' => $mda->getMdaCode(),
                    'attended' => 1
                ]);

        }



        $form_participants = $request->request->get('participants');
        $form_participants_email = $request->request->get('participants_email');
        $form_participants_phone = $request->request->get('participants_phone');
        $form_participants_session = $request->request->get('participants_session');


        if(!empty($form_participants_session))
        {
            $em = $this->getDoctrine()->getManager();

            try {

                        $check_p = $this->getDoctrine()
                            ->getRepository(TrainingParticipant::class)
                            ->findBy([
                                'participant_email' => $form_participants_email
                            ]);


                if(empty($check_p))
                {

                    //check if invoice exists and is open

                    $check_invoice = $this->getDoctrine()
                        ->getRepository(Invoice::class)
                        ->findOneBy([
                           'mda_code' => $mda->getMdaCode(),
                            'payment_status' => 0
                        ]);

                    if(!empty($check_invoice))
                    {

                        $already_registered_participants = count($participants);

                        if($already_registered_participants >= $training->getIndividualsPerMda())
                        {
                            //add new price to invoice
                            $check_invoice->setPaymentAmount($check_invoice->getPaymentAmount() + $training->getExtraPersonnelAmount());
                            $em->flush($check_invoice);

                        }else{

                            //add new price to invoice
                            $check_invoice->setPaymentAmount($check_invoice->getPaymentAmount() + $training->getIndividualAmount());
                            $em->flush($check_invoice);

                        }


                    }else{


                        //generate invoice for the MDA
                        $invoice = new Invoice();

                        $invoice->setPaymentStatus("0");
                        $invoice->setMdaCode($mda->getMdaCode());
                        $invoice->setTrainingId($training);

                        $invoice->setInitialInvoice("1");

                        $check2 = $this->getDoctrine()
                            ->getRepository(Invoice::class)
                            ->findOneBy([
                                'mda_code' => $mda->getMdaCode(),
                                'payment_status' => 1
                            ]);

                        if(!empty($check2))
                        {
                            $total_charge = $training->getExtraPersonnelAmount();
                        }else {
                            $total_charge = $training->getRegistrationFee() + $training->getIndividualAmount();
                        }

                        $invoice->setPaymentAmount($total_charge);

                        $em->persist($invoice);
                        $em->flush();


                    }




                    //add participant
                    $session = new TrainingParticipant();

                    $session->setTrainingId($training->getId());
                    $session->setMdaCode($mda->getMdaCode());
                    $session->setParticipantName($form_participants);
                    $session->setParticipantPhone($form_participants_phone);
                    $session->setParticipantEmail($form_participants_email);
                    $session->setSessionId($form_participants_session);
                    $session->setDate(new \DateTime('now'));
                    $session->setAttended("0");
                    if(!empty($check_invoice)) {
                        $session->setInvoiceId($check_invoice->getId());
                    }else{
                        $session->setInvoiceId($invoice->getId());
                    }
                    $em->persist($session);
                    $em->flush();


                    // check if training session is full
                    $training_id = $training->getId();

                    $form_session = $form_participants_session;
                    $qu = $em->getConnection()->prepare("SELECT * FROM training_participant WHERE training_id='$training_id' AND session_id='$form_session'");
                    $qu->execute();
                    $stt = $qu->fetchAll();

                    $t_session = $this->getDoctrine()->getRepository(TrainingSession::class)->find($form_session);

                    if (count($stt) >= $t_session->getCapacity()) {

                        $t_session->setStatus('2');

                        $em->persist($t_session);
                        $em->flush();

                    }


                    $this->addFlash('success', "Training registration completed");

                    return $this->redirectToRoute('admin_register_training_participant_session', array('mda_id' => $mda_id, 'training_id' => $training_id));


                }else{
                    throw new Exception("Participant(s) email already exists");
                }

            }catch(Exception $e)
            {
                $errormessage = $e->getMessage();

                $this->addFlash('error', $errormessage);

            }

        }




        return $this->render('admin/admin_register_participant_session.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'trainings' => $trainings,
            'invoices' => $invoices,
            'training_sessions' => $sessions,
            'training' => $training,
            'mdas' => $mdas,
            'mda' => $mda,
            'participants' => $participants,
            'previous_attendees' => $previous_attendees,
            'privileges' => $privilege
        ));

    }


    /**
     * @Route("/admin/training/participant/register/refresher/session/{mda_id}/{training_id}", name="admin_register_refresher_training_participant_session")
     */
    public function admin_register_refresher_training_participant_session(Request $request, $mda_id, $training_id)
    {

        $user = $this->getUser();
        $page_title = "Register Training Participants";

        $privilege = explode(',', $user->getPrivileges());

        if (!in_array("training", $privilege)) {
            $this->addFlash('success', 'You do not have access to Trainings');
            $this->redirectToRoute("admin_dashboard");
        }



            $training = $this->getDoctrine()
                ->getRepository(Training::class)
                ->find($training_id);

        $mda = $this->getDoctrine()
            ->getRepository(Mda::class)
            ->find($mda_id);

        $form_session = $request->request->get('participants_session');
        $form_participants = $request->request->get('participants');
        $form_participants_email = $request->request->get('participants_email');
        $form_participants_phone = $request->request->get('participants_phone');


        $mda_code = $mda->getMdaCode();

        try {

        if(!empty($form_session))
        {
            $em = $this->getDoctrine()->getManager();


                if (count($form_participants) >= 1) {

                    //generate invoice for the MDA
                    $invoice = new Invoice();

                    $invoice->setPaymentStatus("0");
                    $invoice->setMdaCode($mda->getMdaCode());
                    $invoice->setTrainingId($training);


                    $mda_code = $mda->getMdaCode();
                    $query4 = $em->getConnection()->prepare("SELECT * FROM invoice WHERE training_id='$training_id' AND mda_code='$mda_code' AND initial_invoice='1'");
                    $query4->execute();
                    $initial_invoice = count($query4->fetchAll());


                    $invoice->setInitialInvoice("0");


                    // calculate invoice charge based on number of participants
                    $all_participants = count($form_participants);


                    if ($initial_invoice === 0) {

                        $refresher_partcipants_charge = count($form_participants) * $training->getRefresherindividualAmount();

                        $total_charge = $refresher_partcipants_charge;

                        $invoice->setPaymentAmount($total_charge);

                    }

                    $em->persist($invoice);
                    $em->flush();


                    for ($i = 0; $i < $all_participants; $i++) {
                        if (!empty($form_participants[$i])) {

                            // save training participants
                            $session = new TrainingParticipant();

                            $session->setTrainingId($training->getId());
                            $session->setMdaCode($mda->getMdaCode());
                            $session->setParticipantName($form_participants[$i]);
                            $session->setParticipantPhone($form_participants_phone[$i]);
                            $session->setParticipantEmail($form_participants_email[$i]);
                            $session->setSessionId($form_session);
                            $session->setAttended("0");
                            $session->setInvoiceId($invoice->getId());
                            $session->setDate(new \DateTime('now'));



                            $em->persist($session);
                            $em->flush();

                        }

                    }


                    // check if training session is full
                    $training_id = $training->getId();

                    $qu = $em->getConnection()->prepare("SELECT * FROM training_participant WHERE training_id='$training_id' AND session_id='$form_session'");
                    $qu->execute();
                    $stt = $qu->fetchAll();

                    $t_session = $this->getDoctrine()->getRepository(TrainingSession::class)->find($form_session);

                    if (count($stt) >= $t_session->getCapacity()) {

                        $t_session->setStatus('2');

                        $em->persist($t_session);
                        $em->flush();

                    }
                    $this->addFlash('success', "Training registration completed");

                    return $this->redirectToRoute('admin_register_training_participant_session', array('mda_id' => $mda_id, 'training_id' => $training_id));

                } else {
                    throw new Exception("You must submit at least one participant that have attended the previous training");
                }

            }else {
            throw new Exception("You must select a session");
        }

            }catch(Exception $e)
            {
                $errormessage = $e->getMessage();

                $this->addFlash('error', $errormessage);

            }


        return $this->redirectToRoute('admin_register_training_participant_session', array('mda_id' => $mda_id, 'training_id' => $training_id));





    }



    /**
     * @Route("/admin/invoice", name="admin_invoice")
     */
    public function invoice()
    {
        $user = $this->getUser();
        $page_title = "Invoice";

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Training and Invoices');
            $this->redirectToRoute("admin_dashboard");
        }

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
            $row['training'] = $inv->getTrainingId();
            $row['mda'] = $mda->getName();

            array_push($new_invoice_array, $row);

        }

        return $this->render('admin/invoice.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'invoices' => $new_invoice_array,
            'privileges' => $privilege
        ));
    }


    /**
     * @Route("/admin/invoice/{id}", name="admin_view_invoice")
     */
    public function admin_view_invoice(Request $request, $id)
    {
        $user = $this->getUser();
        $page_title = "Invoice";

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Training and Invoices');
            $this->redirectToRoute("admin_dashboard");
        }

        $em = $this->getDoctrine()->getManager();

        $invoice = $this->getDoctrine()
            ->getRepository(Invoice::class)
            ->find($id);

        $invoice_log = $this->getDoctrine()
            ->getRepository(InvoiceLog::class)
            ->findBy([
                'invoice_id' => $invoice
            ]);

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

                        $invoice->setPaymentevidence("payment_evidence/"."$new_filename.$extension");

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
            'date' => date('l, F j Y', strtotime(date('Y-m-d'))),
            'privileges' => $privilege,
            'invoice_log' => $invoice_log
        ));
    }



    /**
     * @Route("/admin/invoice/{id}/pay/cash", name="admin_pay_invoice_cash")
     */
    public function admin_invoice_cash($id)
    {
        $user = $this->getUser();

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Training and Invoices');
            $this->redirectToRoute("admin_dashboard");
        }

        $invoice = $this->getDoctrine()
            ->getRepository(Invoice::class)
            ->find($id);

        $invoice->setPaymentMethod('Cash');
        $invoice->setPaymentStatus('1');

        $em = $this->getDoctrine()->getManager();

        $em->persist($invoice);
        $em->flush();

        $invoice_log = new InvoiceLog();
        $invoice_log->setUserId($user);
        $invoice_log->setInvoiceId($invoice);
        $invoice_log->setDate(new \DateTime('now'));
        $invoice_log->setStatus("Updated payment status to Paid. Payment method: Cash");

        $em->persist($invoice_log);
        $em->flush();

        return $this->redirectToRoute('admin_view_invoice', array(

            'id' => $invoice->getId()

        ));

    }

    /**
     * @Route("/admin/invoice/{id}/pay/online", name="admin_pay_invoice_online")
     */
    public function admin_invoice_online($id)
    {
        $user = $this->getUser();

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Training and Invoices');
            $this->redirectToRoute("admin_dashboard");
        }

        $invoice = $this->getDoctrine()
            ->getRepository(Invoice::class)
            ->find($id);

        $invoice->setPaymentMethod('Online');
        $invoice->setPaymentStatus('1');

        $em = $this->getDoctrine()->getManager();

        $em->persist($invoice);
        $em->flush();

        $invoice_log = new InvoiceLog();
        $invoice_log->setUserId($user);
        $invoice_log->setInvoiceId($invoice);
        $invoice_log->setDate(new \DateTime('now'));
        $invoice_log->setStatus("Updated payment status to Paid. Payment method: Online");

        $em->persist($invoice_log);
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


        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Training and Invoices');
            $this->redirectToRoute("admin_dashboard");
        }

        $invoice = $this->getDoctrine()
            ->getRepository(Invoice::class)
            ->find($id);

        $invoice->setPaymentMethod('Bank Transfer');
        $invoice->setPaymentStatus('1');

        $em = $this->getDoctrine()->getManager();

        $em->persist($invoice);
        $em->flush();


        $invoice_log = new InvoiceLog();
        $invoice_log->setUserId($user);
        $invoice_log->setInvoiceId($invoice);
        $invoice_log->setDate(new \DateTime('now'));
        $invoice_log->setStatus("Updated payment status to Paid. Payment method: Bank payment");

        $em->persist($invoice_log);
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

        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("training",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Training and Invoices');
            $this->redirectToRoute("admin_dashboard");
        }

        $invoice = $this->getDoctrine()
            ->getRepository(Invoice::class)
            ->find($id);

        $invoice->setPaymentMethod('Undertaken');

        $em = $this->getDoctrine()->getManager();

        $em->persist($invoice);
        $em->flush();


        $invoice_log = new InvoiceLog();
        $invoice_log->setUserId($user);
        $invoice_log->setInvoiceId($invoice);
        $invoice_log->setDate(new \DateTime('now'));
        $invoice_log->setStatus("Updated payment method to 'pay with Undertaken' ");

        $em->persist($invoice_log);
        $em->flush();

        return $this->redirectToRoute('admin_view_invoice', array(

            'id' => $invoice->getId()

        ));

    }



    /**
     * @Route("/admin/participants_allowed", name="admin_participants_allowed")
     */
    public function admin_participants_allowed(Request $request)
    {
        $user = $this->getUser();
        $page_title = "MDA Participants Allowed";


        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("participants_allowed",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Participants Allowed');
            $this->redirectToRoute("admin_dashboard");
        }

        $participants_allowed = $this->getDoctrine()
            ->getRepository(ParticipantsAllowed::class)
            ->findAll();

        $form = $this->createFormBuilder()
        ->add('MdaId', EntityType::class, array(
            'placeholder' => '-- Choose an MDA --',
            'class' => Mda::class,
            'choice_label' => 'Name',
            'choice_value' => 'Id',
            'expanded' => false,
            'multiple' => false,
            'attr' => array(
                'class' => 'form-control mb-3',
            )
        ))
            ->add('TrainingId', EntityType::class, array(
                'placeholder' => '-- Choose a Training --',
                'label' => 'Training',
                'label_attr' => array(
                  'class' => 'mt-3'
                ),
                'class' => Training::class,
                'choice_label' => 'Title',
                'choice_value' => 'Id',
                'expanded' => false,
                'multiple' => false,
                'attr' => array(
                    'class' => 'form-control mb-3',
                )
            ))
        ->add('ParticipantsAllowed', TextType::class, array(
            'label_attr' => array(
                'class' => 'mt-3'
            ),
            'attr' => array(
                'class' => 'form-control mb-3',
                'onkeypress' => 'return isNumber(event)',
            )
        ))
        ->add('save', SubmitType::class,  array(
            'label' => 'Save',
            'attr' => array(
                'class' => 'btn btn-block btn-primary mt-4'
            )))
        ->getForm();



        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $p_allowed = new ParticipantsAllowed();


            $training = $this->getDoctrine()
                ->getRepository(Training::class)
                ->find($form['TrainingId']->getData());

            $mda = $this->getDoctrine()
                ->getRepository(Mda::class)
                ->find($form['MdaId']->getData());

            $p_allowed->setAllowedParticipants($form['ParticipantsAllowed']->getData());
            $p_allowed->setTrainingId($training);
            $p_allowed->setMdaId($mda);

            $em = $this->getDoctrine()->getManager();
            $em->persist($p_allowed);
            $em->flush();

            $this->addFlash('success', 'Participants allowed updated');

            return $this->redirectToRoute('admin_participants_allowed');
        }

        return $this->render('admin/participants_allowed.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'form' => $form->createView(),
            'participants_allowed' => $participants_allowed,
            'privileges' => $privilege

        ));
    }


    /**
     * @Route("/admin/participants_allowed/{id}/delete", name="admin_delete_participant_allowed")
     */
    public function admin_delete_participants_allowed(Request $request, $id)
    {
        $user = $this->getUser();
        $page_title = "MDA Participants Allowed";


        $privilege = explode(',', $user->getPrivileges());

        if (!in_array("participants_allowed", $privilege)) {
            $this->addFlash('success', 'You do not have access to Participants Allowed');
            $this->redirectToRoute("admin_dashboard");
        }

        $participants_allowed = $this->getDoctrine()->getRepository(ParticipantsAllowed::class)->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($participants_allowed);
        $em->flush();

        $this->addFlash('success', 'Participants allowed deleted');

        return $this->redirectToRoute('admin_participants_allowed');

    }


    /**
     * @Route("/admin/account", name="admin_account")
     */
    public function admin_manage_account(Request $request)
    {
        $user = $this->getUser();
        $page_title = "Account";

        $privilege = explode(',',$user->getPrivileges());

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



        return $this->render('admin/account.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'form' => $form->createView(),
            'privileges' => $privilege

        ));
    }


    /**
     * @Route("/admin/account/update/password", name="admin_update_password")
     */
    public function admin_update_password(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $user = $this->getUser();

        $privilege = explode(',',$user->getPrivileges());

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


        $privilege = explode(',',$user->getPrivileges());

        if(!in_array("admins",$privilege))
        {
            $this->addFlash('success', 'You do not have access to Administrators');
            $this->redirectToRoute("admin_dashboard");
        }

        $admin_users = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();


        $admin_user = new User();

        $form = $this->createFormBuilder($admin_user)
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
            ->add('Privileges', ChoiceType::class, array(
                'choices' => array(
                    'Mda' => 'mda',
                    'Mda Admins' => 'mda_admin',
                    'Training & invoice' => 'training',
                    'Participants allowed' => 'participants_allowed',
                    'Administrators' => 'admins',
                ),
                'expanded' => true,
                'multiple' => true,
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
            $privilege = implode(',',$form["Privileges"]->getData());


            $user = new User();

            $user->setEmail($form["Email"]->getData());
            $user->setUsername($form["Username"]->getData());
            $user->setPrivileges($privilege);
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
            'form' => $form->createView(),
            'privileges' => $privilege

        ));
    }



    /**
     * @Route("/admin/user/{id}/delete", name="admin_delete_user")
     */
    public function admin_delete_user(Request $request, $id)
    {

        $user = $this->getUser();
        $page_title = "Admin Users";


        $privilege = explode(',', $user->getPrivileges());

        if (!in_array("admins", $privilege)) {
            $this->addFlash('success', 'You do not have access to Administrators');
            $this->redirectToRoute("admin_dashboard");
        }

        $admin_user = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($admin_user);
        $em->flush();

        $this->addFlash('success', 'Admin user deleted');

        return $this->redirectToRoute('admin_users');

    }


    /**
     * @Route("/admin/user/{id}/edit", name="admin_edit_user")
     */
    public function admin_edit_user(Request $request, $id)
    {

        $user = $this->getUser();
        $page_title = "Admin Users";


        $privilege = explode(',', $user->getPrivileges());

        if (!in_array("admins", $privilege)) {
            $this->addFlash('success', 'You do not have access to Administrators');
            $this->redirectToRoute("admin_dashboard");
        }

        $admin_user = $this->getDoctrine()
            ->getRepository(User::class)
            ->find($id);

        $form = $this->createFormBuilder(array('Email' => $admin_user->getEmail(), 'Username' => $admin_user->getUsername(), 'Privileges' => explode(",", $admin_user->getPrivileges())))
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
            ->add('Privileges', ChoiceType::class, array(
                'choices' => array(
                    'Mda' => 'mda',
                    'Mda Admins' => 'mda_admin',
                    'Training & invoice' => 'training',
                    'Participants allowed' => 'participants_allowed',
                    'Administrators' => 'admins',
                ),
                'expanded' => true,
                'multiple' => true,
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
            $privilege = implode(',',$form["Privileges"]->getData());




            $admin_user->setEmail($form["Email"]->getData());
            $admin_user->setUsername($form["Username"]->getData());
            $admin_user->setPrivileges($privilege);


            $user->setRoles('ROLE_ADMIN');

            $em = $this->getDoctrine()->getManager();
            $em->flush($admin_user);

            $this->addFlash('success', 'Admin user updated');

            return $this->redirectToRoute('admin_users');

        }

        return $this->render('admin/admin_edit_user.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'admin_user' => $admin_user,
            'form' => $form->createView(),
            'privileges' => $privilege

        ));

    }



    /**
     * @Route("/backup", name="backup")
     */
    public function backup(DatabaseBackup $databaseBackup)
    {
        $databaseBackup->export();

        return new Response("");
    }


    /**
     * @Route("/admin/mass_attended", name="mass_attended")
     */
    public function mass_attended()
    {

        $array = array(
            [
                'mda_name' => 'Federal University, Otuoke',
                'mda_code' => '100775'
            ],
            [
                'mda_name' => 'University Of Nigeria, Nsukka',
                'mda_code' => '100762'
            ],
            [
                'mda_name' => 'Federal School Of Dental Therapy',
                'mda_code' => '101319'
            ],
            [
                'mda_name' => 'Federal Medical Centre, Asaba',
                'mda_code' => '101364'
            ],
            [
                'mda_name' => 'National Emergency Management Agency',
                'mda_code' => '100016'
            ],
            [
                'mda_name' => 'National Orthopedic Hospital Kano',
                'mda_code' => '101354'
            ],
            [
            'mda_name' => 'National Inland Waterways Authority',
            'mda_code' => '10242'
            ],
            [
            'mda_name' => 'Nigerian Geological Survey Agency',
            'mda_code' => '10218'
            ],
            [
                'mda_name' => 'Nigerian Electricity Management Services Agency',
                'mda_code' => '101912'
            ],
            [
                'mda_name' => 'Nigerian Export Promotion Council',
                'mda_code' => '10046'
            ],
            [
                'mda_name' => 'National Assembly Service Commission',
                'mda_code' => '10001'
            ],
            [
                'mda_name' => 'Ministry Of Defence (Civilian Staff)',
                'mda_code' => '1006'
            ],
            [
                'mda_name' => 'Onne Oil and Gas Free Zones Authority',
                'mda_code' => '10047'
            ],
            [
                'mda_name' => 'University Of Ilorin',
                'mda_code' => '100754'
            ],
            [
                'mda_name' => 'Standards Organisation Of Nigeria',
                'mda_code' => '100415'
            ],
            [
                'mda_name' => 'Upper Benue River Basin & Development Authority ',
                'mda_code' => '10253'
            ],
            [
                'mda_name' => 'Nigeria Immigration Service',
                'mda_code' => '10153'
            ],
            [
                'mda_name' => 'Nigerian Export Processing Zones Authority',
                'mda_code' => '10045'
            ]

        );


        foreach($array as $arr)
        {
            $mda_name = $arr['mda_name'];
            $mda_code = $arr['mda_code'];

            $data_array = [
                'mdaName' => $mda_name,
                'mdaCode' => $mda_code,
                'mdaAbbrev' => ''
            ];

            $json_body = json_encode($data_array);

            $data = [ 'mda_json' => $json_body ];

            $response = $this->CallAPI('POST','http://federalcharacter.gov.ng/portal_training/web/integration/organization',$data);

            $result = json_decode($response);

            echo"<p>$mda_name</p> <br>";
            print_r($result);
            echo " <hr>";
        }

return new response('--');

    }



    /**
     * @Route("/admin/query", name="query")
     */
    public function quey(Request $request)
    {

        $query = $request->request->get('s');

        if(!empty($query)) {
            $em = $this->getDoctrine()->getManager();


            $qu1 = $em->getConnection()->prepare("$query");
            $qu1->execute();

            print('<pre>-- Query executed --</pre>');
        
        }

        return $this->render('admin/query.html.twig');
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

    public function CallAPI($method, $url, $data = false)
    {
        $curl = curl_init();

        switch ($method)
        {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);

                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }

        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_USERPWD, "username:password");

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }
}
