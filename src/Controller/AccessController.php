<?php

namespace App\Controller;

use App\Entity\Mda;


use App\Entity\MdaParticipant;
use App\Model\VisitorLog;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AccessController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function index(AuthenticationUtils $authUtils, VisitorLog $visitorLog, Request $request)
    {

        $ipaddress = $request->getClientIp();

        $visitorLog->logVisit($ipaddress);

            // get the login error if there is one
            $error = $authUtils->getLastAuthenticationError();

            // last username entered by the user
            $lastUsername = $authUtils->getLastUsername();

        return $this->render('access/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
            "visitor_metrics" => $visitorLog->todayVisits()

        ));
    }



    /**
     * @Route("/reset_password", name="reset_password")
     */
    public function reset_password(Request $request, VisitorLog $visitorLog)
    {

        $ipaddress = $request->getClientIp();

        $visitorLog->logVisit($ipaddress);


        $form = $this->createFormBuilder()
            ->add('Email', TextType::class ,array(
                'attr' => array(
                    'class' => 'form-control mb-3',
                    'placeholder' => 'Enter your email address'
                )
            ))
            ->add('Submit', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-block btn-success'
                )
            ))
            ->getForm();

       $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $email = $form["Email"]->getData();


            $mda_participant = $this->getDoctrine()
                ->getRepository(MdaParticipant::class)
                ->findOneBy([
                    'email' => $email
                ]);

            if(count($mda_participant) >= 1)
            {

                return $this->redirectToRoute('reset_password_2', [ 'id' => $mda_participant->getId() ]);

            }else{
                $this->addFlash('error', 'Email address does not belong to any account');
            }


        }


            return $this->render('access/reset_password.html.twig', array(
                'form' => $form->createView(),
                "visitor_metrics" => $visitorLog->todayVisits()
            ));


    }


    /**
     * @Route("/reset_password/{id}", name="reset_password_2")
     */
    public function reset_password2(Request $request,$id, VisitorLog $visitorLog, UserPasswordEncoderInterface $encoder)
    {

        $ipaddress = $request->getClientIp();

        $visitorLog->logVisit($ipaddress);


        $mda_participant = $this->getDoctrine()
            ->getRepository(MdaParticipant::class)
            ->find($id);

        $form = $this->createFormBuilder()
            ->add('NewPassword', PasswordType::class ,array(
                'attr' => array(
                    'class' => 'form-control mb-3',
                    'placeholder' => 'Enter your email address'
                )
            ))
            ->add('ConfirmPassword', PasswordType::class ,array(
                'attr' => array(
                    'class' => 'form-control mb-3',
                    'placeholder' => 'Enter your email address'
                )
            ))
            ->add('Update', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-block btn-success'
                )
            ))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $pw = $form["NewPassword"]->getData();
            $confirmpw = $form["ConfirmPassword"]->getData();

            if($pw == $confirmpw)
            {

                 $mda_participant->setPassword($encoder->encodePassword($mda_participant, $pw));
                $em = $this->getDoctrine()->getManager();
                $em->persist($mda_participant);
                $em->flush();

                $this->addFlash('success', 'Password has been reset, please login');
                return $this->redirectToRoute('login');

            }else{
                $this->addFlash('error', 'Passwords do not match');
            }


        }


        return $this->render('access/reset_password2.html.twig', array(
            'form' => $form->createView(),
            "visitor_metrics" => $visitorLog->todayVisits()
        ));


    }


    /**
     * @Route("/verify", name="verify_mda")
     */
    public function verify_mda(Request $request, VisitorLog $visitorLog)
    {


        $form = $this->createFormBuilder()
            ->add('Mda_Code', TextType::class ,array(
                'attr' => array(
                    'class' => 'form-control mb-3',
                    'placeholder' => 'Enter MDA code here'
                )
            ))
            ->add('Verify', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-block btn-success'
                )
            ))
            ->getForm();

        $ipaddress = $request->getClientIp();

        $visitorLog->logVisit($ipaddress);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $mda_code = $form["Mda_Code"]->getData();


            $mda = $this->getDoctrine()
                ->getRepository(Mda::class)
                ->findOneBy(['mda_code' => "$mda_code"]);

            /* $query = "SELECT * FROM mda WHERE mda_code='$mda_code'";

            $statement = $em->getConnection()->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll(); */

            $mdaparticipant = $this->getDoctrine()
                ->getRepository(MdaParticipant::class)
                ->findOneBy(['mda_code' => "$mda_code"]);


            if($mda)
            {
                $this->addFlash('mda_name', $mda->getName());
            }else {
                $this->addFlash('mda_name', 'MDA Not Found');
            }


            return $this->render('access/verify_mda.html.twig', array(
                'form' => $form->createView(),
                'last_code' => $mda_code,
                'result' => count($mdaparticipant),
                "visitor_metrics" => $visitorLog->todayVisits()
            ));

        }else{

            return $this->render('access/verify_mda.html.twig', array(
                'form' => $form->createView(),
                "visitor_metrics" => $visitorLog->todayVisits()
            ));

        }





    }



    /**
     * @Route("/register/{mda_code}", name="register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $encoder, VisitorLog $visitorLog, $mda_code)
    {


        $user = new MdaParticipant();

        $form = $this->createFormBuilder($user)
            ->add('First_name', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control form-control-lg mb-3 custom-input',
                )
            ))
            ->add('Last_name', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control form-control-lg mb-3 custom-input',
                )
            ))
            ->add('Mda_Code', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control form-control-lg mb-3 custom-input',
                    'value' => $mda_code,
                    'readonly' => 'true'
                )
            ))
            ->add('Phone', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control form-control-lg mb-3 custom-input',
                )
            ))
            ->add('email', EmailType::class, array(
                'attr' => array(
                    'class' => 'form-control form-control-lg mb-3',
                )
            ))
            ->add('username', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control form-control-lg mb-3',
                )
            ))
            ->add('password', PasswordType::class, array(
                'attr' => array(
                    'class' => 'form-control form-control-lg custom-input',
                )
            ))
            ->add('save', SubmitType::class,  array(
                'label' => 'Register',
                'attr' => array(
                    'class' => 'btn btn-block btn-primary btn-lg mt-4'
                )))
            ->getForm();


        $ipaddress = $request->getClientIp();

        $visitorLog->logVisit($ipaddress);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {


            $user = $form->getData();

            $user->setPassword($encoder->encodePassword($user, $user->getPassword()));

            $user->setRoles('ROLE_USER');

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('login');

        }

        return $this->render('access/register.html.twig',array(
            'form' => $form->createView(),
            "visitor_metrics" => $visitorLog->todayVisits()
        ));



    }

    /**
     * Redirect users after login based on the granted ROLE
     * @Route("/login/redirect", name="_login_redirect")
     */
    public function loginRedirectAction()
    {

        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
        {
            return $this->redirectToRoute('login');
            // throw $this->createAccessDeniedException();
        }

        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
        {
            return $this->redirectToRoute('admin_dashboard');
        }
        else if($this->get('security.authorization_checker')->isGranted('ROLE_USER'))
        {
            return $this->redirectToRoute('user_dashboard');
        }
        else
        {
            return $this->redirectToRoute('login');
        }

    }
}
