<?php

namespace App\Controller;

use App\Entity\Mda;


use App\Entity\MdaParticipant;
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
    public function index(AuthenticationUtils $authUtils)
    {

            // get the login error if there is one
            $error = $authUtils->getLastAuthenticationError();

            // last username entered by the user
            $lastUsername = $authUtils->getLastUsername();

        return $this->render('access/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,

        ));
    }


    /**
     * @Route("/verify", name="verify_mda")
     */
    public function verify_mda(Request $request)
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
                'result' => count($mdaparticipant)
            ));

        }else{

            return $this->render('access/verify_mda.html.twig', array(
                'form' => $form->createView()
            ));

        }





    }



    /**
     * @Route("/register/{mda_code}", name="register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $encoder, $mda_code)
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
            'form' => $form->createView()
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
