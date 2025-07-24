<?php

namespace App\Controller;

use App\Entity\Invoice;
use App\Entity\Mda;
use App\Entity\MdaParticipant;
use App\Entity\Training;
use App\Entity\TrainingParticipant;
use App\Entity\TrainingSession;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{


    /**
     * @Route("/user", name="user_dashboard")
     */
    public function index()
    {
        $user = $this->getUser();
        $page_title = "Dashboard";

        $mda = $this->getDoctrine()
            ->getRepository(Mda::class)
            ->findOneBy([
                'mda_code' => $user->getMdacode()
            ]);

        $u_mda = $user->getMdaCode();

        $em = $this->getDoctrine()->getManager();

        // get all trainings
        $query2 = "SELECT training.* FROM training WHERE training.id NOT IN(
SELECT training_participant.training_id FROM training_participant WHERE training_participant.mda_code='$u_mda'
)";

        $statement2 = $em->getConnection()->prepare($query2);
        $statement2->execute();
        $avail_training = $statement2->fetchAll();



        // get trainings applied for

        $mda_code = $user->getMdaCode();
        $query = "SELECT * FROM training_participant WHERE mda_code='$mda_code' GROUP BY mda_code,training_id";

        $statement = $em->getConnection()->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();


        // get pending invoice
        $invoice = $this->getDoctrine()
            ->getRepository(Invoice::class)
            ->findBy([
               'mda_code' => $user->getMdaCode(),
                'payment_status' => 0
            ]);


        // get registered participants
        $participants = $this->getDoctrine()
            ->getRepository(TrainingParticipant::class)
            ->findBy([
                'mda_code' => $user->getMdaCode(),
            ]);


        $reg_participants = array();

        foreach($participants as $participant)
        {

            $training = $this->getDoctrine()
                ->getRepository(Training::class)
                ->find($participant->getTrainingId());

            $session = $this->getDoctrine()
                ->getRepository(TrainingSession::class)
                ->find($participant->getSessionId());

            $row['name'] = $participant->getParticipantName();
            $row['training_title'] = $training->getTitle();
            $row['session_name'] = $session->getName();


            array_push($reg_participants, $row);
        }


        return $this->render('user/dashboard.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'trainings_available' => count($avail_training),
            'trainings_applied' => count($result),
            'pending_invoice' => count($invoice),
            'training_participants' => $reg_participants,
            'mda' => $mda
        ));
    }


    /**
     * @Route("/user/mda", name="user_mda")
     */
    public function user_mda()
    {
        $user = $this->getUser();
        $page_title = "MDA";

        $mda = $this->getDoctrine()
            ->getRepository(Mda::class)
            ->findOneBy([
            'mda_code' => $user->getMdacode()
        ]);


        // replace this line with your own code!
        return $this->render('user/mda.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'mda' => $mda


        ));
    }


    /**
     * @Route("/user/trainings", name="user_trainings")
     */
    public function user_trainings()
    {
        $user = $this->getUser();
        $page_title = "Training";

        $em = $this->getDoctrine()->getManager();


        $u_mda = $user->getMdaCode();

        // get all trainings
        $query2 = "SELECT training.* FROM training WHERE training.id NOT IN(
SELECT training_participant.training_id FROM training_participant WHERE training_participant.mda_code='$u_mda'
)";

        $statement2 = $em->getConnection()->prepare($query2);
        $statement2->execute();
        $training = $statement2->fetchAll();



        // get trainings applied for

        $mda_code = $user->getMdaCode();
        $query = "SELECT * FROM training_participant WHERE mda_code='$mda_code' GROUP BY mda_code,training_id";

        $statement = $em->getConnection()->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();


        // get information of trainings applied for
        $applied_trainings = array();

        foreach($result as $train)
        {

            $this_training = $this->getDoctrine()
                ->getRepository(Training::class)
                ->find($train['training_id']);

            array_push($applied_trainings, $this_training);
        }


        return $this->render('user/trainings.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'trainings' => $training,
            'trainings_applied' => $applied_trainings
        ));
    }



    /**
     * @Route("/user/training/{id}/apply", name="user_training_apply")
     */
    public function user_apply_training(Request $request, $id)
    {
        $user = $this->getUser();
        $page_title = "Training";

        $training = $this->getDoctrine()
            ->getRepository(Training::class)
            ->find($id);



        $training_session = $this->getDoctrine()
            ->getRepository(TrainingSession::class)
            ->findBy([
               'training_id' => $id,
                'status' => '1'
            ]);




        $form_session = $request->request->get('training_session');
        $form_participants = $request->request->get('participants');
        $form_participants_email = $request->request->get('participants_email');
        $form_participants_phone = $request->request->get('participants_phone');

        if(!empty($form_session))
        {
            $em = $this->getDoctrine()->getManager();


            //generate invoice for the MDA
            $invoice = new Invoice();

            $invoice->setPaymentStatus("0");
            $invoice->setMdaCode($user->getMdaCode());
            $invoice->setTrainingId($training->getId());


            $mda_code = $user->getMdaCode();
            $query4 = $em->getConnection()->prepare("SELECT * FROM invoice WHERE training_id='$id' AND mda_code='$mda_code' AND initial_invoice='1'");
            $query4->execute();
            $initial_invoice = count($query4->fetchAll());


            if($initial_invoice >= '1')
            {
                $invoice->setInitialInvoice("0");
            }else{
                $invoice->setInitialInvoice("1");
            }

            // calculate invoice charge based on number of participants
            $all_participants = count($form_participants);



            if($all_participants > $training->getIndividualsPerMda())
            {
                $main_partcipants = $training->getIndividualsPerMda();
                $extra_partcipants = $all_participants - $training->getIndividualsPerMda();
            }else{
                $main_partcipants = $all_participants;
                $extra_partcipants = 0;
            }


            if($initial_invoice === 0 ) {

                $main_partcipants_charge = $main_partcipants * $training->getIndividualAmount();

                $extra_partcipants_charge = $extra_partcipants * $training->getExtraPersonnelAmount();

                $total_charge = $training->getRegistrationFee() + $main_partcipants_charge + $extra_partcipants_charge;

                $invoice->setPaymentAmount($total_charge);

            }elseif($initial_invoice >= 1){

                $total_charge = $all_participants * $training->getExtraPersonnelAmount();


                $invoice->setPaymentAmount($total_charge);

            }

            $em->persist($invoice);
            $em->flush();


            for($i=0; $i < $all_participants; $i++)
            {
                if(!empty($form_participants[$i])) {
                // save training participants
                $session = new TrainingParticipant();

                $session->setTrainingId($training->getId());
                $session->setMdaCode($user->getMdaCode());
                $session->setParticipantName($form_participants[$i]);
                $session->setParticipantPhone($form_participants_phone[$i]);
                $session->setParticipantEmail($form_participants_email[$i]);
                $session->setSessionId($form_session);
                $session->setAttended("0");
                $session->setInvoiceId($invoice->getId());


                $em->persist($session);
                $em->flush();

                }

            }


            // check if training session is full
            $training_id = $training->getId();

            $qu = $em->getConnection()->prepare("SELECT * FROM training_participant WHERE training_id='$training_id' AND session_id='$form_session'");
            $qu->execute();
            $stt = $qu->fetchAll();

            $t_session = $this->getDoctrine()
                ->getRepository(TrainingSession::class)
                ->find($form_session);

            if(count($stt) >= $t_session->getCapacity())
            {

                $t_session->setStatus('2');

                $em->persist($t_session);
                $em->flush();

            }


                return $this->redirectToRoute('user_view_training', array(
                    'id' => $training_id
                ));


        }


        return $this->render('user/apply_training.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'training' => $training,
            'training_sessions' => $training_session
        ));
    }




    /**
     * @Route("/user/training/{id}", name="user_view_training")
     */
    public function user_viewtraining(Request $request, $id)
    {


        $user = $this->getUser();
        $page_title = "Training";

        // get training information
        $training = $this->getDoctrine()
            ->getRepository(Training::class)
            ->find($id);


        $invoice = $this->getDoctrine()
            ->getRepository(Invoice::class)
            ->findby([
                'mda_code' => $user->getMdaCode(),
                'training_id' => $training->getId()
            ]);


        // get all mda participants for this training
        $training_participants = $this->getDoctrine()
            ->getRepository(TrainingParticipant::class)
            ->findby([
                'mda_code' => $user->getMdaCode(),
                'training_id' => $training->getId()
        ]);


        // start new mda participants array
        $participants = array();


        foreach($training_participants as $participant)
        {

            $training_session = $this->getDoctrine()
                ->getRepository(TrainingSession::class)
                ->find($participant->getSessionId());

            $iv = $this->getDoctrine()
                ->getRepository(Invoice::class)
                ->find($participant->getInvoiceId());

            $row['name'] = $participant->getParticipantName();
            $row['email'] = $participant->getParticipantEmail();
            $row['phone'] = $participant->getParticipantPhone();
            $row['session'] = $training_session->getName();
            $row['attended'] = $participant->getAttended();
            $row['payment_status'] = $iv->getPaymentStatus();
            $row['invoice_id'] = $iv->getId();

            array_push($participants, $row);
        }


        return $this->render('user/view_training.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'training' => $training,
            'training_participants' => $participants,
            'invoices' => $invoice
        ));

    }



    /**
     * @Route("/user/invoice", name="user_invoice")
     */
    public function user_invoice()
    {
        $user = $this->getUser();
        $page_title = "Invoice";


        $invoice = $this->getDoctrine()
            ->getRepository(Invoice::class)
            ->findby([
                'mda_code' => $user->getMdaCode()
            ]);

        // replace this line with your own code!
        return $this->render('user/invoice.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'invoices' => $invoice
        ));
    }


    /**
     * @Route("/user/invoice/{id}", name="user_view_invoice")
     */
    public function generate_invoice($id)
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




        $query = $em->getConnection()->prepare("SELECT id FROM training_participant WHERE invoice_id='$invoice_id'");
        $query->execute();
        $participants_count = $query->fetchAll();


        // replace this line with your own code!
        return $this->render('user/view_invoice.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'invoice' => $invoice,
            'all_main_participants' => $d_participants,
            'all_extra_participants' => $d_extra_participants,
            'mda' => $mda,
            'training' => $training,
            'payment_id' => $this->randomString(9),
            'participants_count' => count($participants_count),
            'date' => date('l, F j Y', strtotime(date('Y-m-d')))
        ));
    }

    /**
     * @Route("/user/invoice/{id}/payment/verify/online", name="verify_invoice_online_payment")
     */
    public function verify_online_payment(Request $request, $id)
    {
        $user = $this->getUser();
        $page_title = "Account";

        $pay_id = $request->request->get('reference');

        $secret = "sk_live_ffe22323e358e7b4501ab4a269e892a1fc26510f";
        $result = array();
        //The parameter after verify/ is the transaction reference to be verified
        $url = "https://api.paystack.co/transaction/verify/$pay_id";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt(
            $ch, CURLOPT_HTTPHEADER, [
                "Authorization: Bearer $secret"]
        );
        $request = curl_exec($ch);
        curl_close($ch);

        if ($request) {
            $result = json_decode($request, true);
        }

        $payment_status = "unknown";

        if($result['data']['status'] == 'success')
        {
            $payment_status = "success";
        }


        $invoice = $this->getDoctrine()
            ->getRepository(Invoice::class)
            ->find($id);

        $em = $this->getDoctrine()->getManager();

        $invoice->setPaymentStatus('1');
        $invoice->setPaymentMethod('Online');
        $invoice->setPaymentId($pay_id);
        $em->persist($invoice);
        $em->flush();

        return $this->redirectToRoute('user_view_invoice', array(
            'id' => $id
        ));

    }


    /**
     * @Route("/user/account", name="user_account")
     */
    public function user_manage_account(Request $request)
    {
        $user = $this->getUser();
        $page_title = "Account";



        $new_user = new MdaParticipant();

        $new_user->setId($user->getId());

        $form = $this->createFormBuilder($user)
            ->add('First_name', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3 custom-input',
                )
            ))
            ->add('Last_name', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3 custom-input',
                )
            ))
            ->add('Phone', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3 custom-input',
                )
            ))
            ->add('email', EmailType::class, array(
                'attr' => array(
                    'class' => 'form-control mb-3',
                )
            ))
            ->add('username', TextType::class, array(
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
        return $this->render('user/account.html.twig', array(
            'user' => $user,
            'page_title' => $page_title,
            'form' => $form->createView()

        ));
    }


    /**
     * @Route("/user/account/update/password", name="user_update_password")
     */
    public function update_password(Request $request, UserPasswordEncoderInterface $encoder)
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


return $this->redirectToRoute('user_account');


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
