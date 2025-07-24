<?php

namespace App\Controller;

use App\Entity\Mda;
use App\Entity\MdaParticipant;
use App\Entity\Training;
use App\Entity\TrainingSession;
use App\Model\VisitorLog;
use Knp\Bundle\SnappyBundle\KnpSnappyBundle;
use Knp\Snappy\Pdf;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PagesController extends Controller
{
    /**
     * @Route("/", name="home")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request, VisitorLog $visitorLog, SessionInterface $session)
    {

        $mda = $this->getDoctrine()
            ->getRepository(mda::class)
            ->findAll();


        $ipaddress = $request->getClientIp();

        $visitorLog->logVisit($ipaddress);

        $mda_code = $request->request->get('mda_code');


        if(!empty($mda_code))
        {

            $em = $this->getDoctrine()->getManager();
            $qu = $em->getConnection()->prepare("SELECT * FROM mda WHERE mda_code='$mda_code'");
            $qu->execute();
            $statement = count($qu->fetchAll());


            if($statement >= 1)
            {


                return $this->redirectToRoute('generate_letter_step_2', array(
                    'mda' => $mda_code
                ));

            }




        }



        $training_sessions = $this->getDoctrine()
            ->getRepository(TrainingSession::class)
            ->findBy([
               'status' => 1
            ]);




        return $this->render('pages/home.html.twig', array(
            "mdas" => $mda,
            "training_session" => $training_sessions,
            "visitor_metrics" => $visitorLog->todayVisits()

        ));
    }


    /**
     * @Route("/generate/letter/{mda}", name="generate_letter_step_2")
     */
    public function generate_letter($mda, VisitorLog $visitorLog, Request $request)
    {

        $d_mda = $this->getDoctrine()
            ->getRepository(mda::class)
            ->findOneBy([
                'mda_code' => $mda
            ]);

        $ipaddress = $request->getClientIp();

        $visitorLog->logVisit($ipaddress);

        if(!empty($mda)) {


            $training = $this->getDoctrine()
                ->getRepository(Training::class)
                ->findAll();

            return $this->render('pages/generate_letter.html.twig', array(
                'mda' => $d_mda->getName(),
                'trainings' => $training,
                'visitor_metrics' => $visitorLog->todayVisits()
            ));

        }else{
            $this->addFlash('error', 'MDA code does not exist');

            return $this->redirectToRoute('home');
        }

    }


    /**
     * @Route("/mda/{id}/letter/print", name="print_mda_letter")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function print_mda_letter(Request $request, VisitorLog $visitorLog, $id = NULL, \Swift_Mailer $mailer)
    {

        $all_mda = $this->getDoctrine()
            ->getRepository(mda::class)
            ->findBy([
                'not_attended' => 1
            ]);

        $ipaddress = $request->getClientIp();

        $visitorLog->logVisit($ipaddress);

        $mda = $this->getDoctrine()
            ->getRepository(mda::class)
            ->find($id);

        $training_id = "2";


            $training = $this->getDoctrine()
                ->getRepository(Training::class)
                ->find($training_id);



            $date = date("jS F, Y");




            $training_letter = $training->getLetterContent();

            $training_letter_main = str_replace("[MDA-CODE]", $mda->getMdaCode(), $training_letter);

            /*$training_letter = preg_replace('/\s+?(\S+)?$/', '', substr($training_letter_main, 0, 2038));
            $training_letter2 = preg_replace('/\s+?(\S+)?$/', '', substr($training_letter_main, 2038, 10000000000));*/



            return $this->render('pages/print_letter.html.twig', array(
                'mda' => $mda,
                'all_mda' => $all_mda,
                'trainings' => $training,
                'date' => $date,
                'trainlet' => $training_letter,
                'train_letter_continue' => $training_letter_main,
                'visitor_metrics' => $visitorLog->todayVisits()
            ));


    }



    /**
     * @Route("/mda/letter", name="mda_letter")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function mda_letter(Request $request, VisitorLog $visitorLog, \Swift_Mailer $mailer)
    {

        $mda = $this->getDoctrine()
            ->getRepository(mda::class)
            ->findOneBy([
                'name' => $request->request->get('mda')
            ]);

        $training_type = $request->request->get('training_type');
        $training_id = $request->request->get('training');
        $email = $request->request->get('email');
        $phone = $request->request->get('phone');

        $ipaddress = $request->getClientIp();

        $visitorLog->logVisit($ipaddress);


        if(!empty($request->request->get('mda'))) {

            $mda_participant = $this->getDoctrine()
                ->getRepository(MdaParticipant::class)
                ->findBy([
                    'mda_code' => $mda->getMdaCode(),
                    'email' => $email,
                    'phone' => $phone
                ]);

            if(count($mda_participant) >= 1) {
                $training = $this->getDoctrine()->getRepository(Training::class)->find($training_id);


                $date = date("jS F, Y");

                if($training_type == "Refresher training")
                {
                    $training_letter = $training->getRefresherLetterContent();
                }elseif($training_type == "New training") {
                    $training_letter = $training->getLetterContent();
                }

                $training_letter_main = str_replace("[MDA-CODE]", $mda->getMdaCode(), $training_letter);

                /*$training_letter = preg_replace('/\s+?(\S+)?$/', '', substr($training_letter_main, 0, 2038));
                $training_letter2 = preg_replace('/\s+?(\S+)?$/', '', substr($training_letter_main, 2038, 10000000000));*/


                return $this->render('pages/letter.html.twig', array('mda' => $mda, 'trainings' => $training, 'date' => $date, 'trainlet' => $training_letter, 'train_letter_continue' => $training_letter_main, 'visitor_metrics' => $visitorLog->todayVisits()));


            }else{

                $this->addFlash('error', 'Incorrect MDA Administrator email and phone number. Please register as the MDA administrator with your MDA code to print your training letter');

                return $this->redirectToRoute('generate_letter_step_2', [ 'mda' => $mda->getMdaCode() ]);

            }

        }else{
            return $this->redirectToRoute('home');
        }

    }



// SAVE PDF
    /**
     * @Route("/mda/letter", name="mda_letter33")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function mda_2letter(Request $request, VisitorLog $visitorLog, \Swift_Mailer $mailer)
    {

        $mda = $this->getDoctrine()
            ->getRepository(mda::class)
            ->findOneBy([
                'name' => $request->request->get('mda')
            ]);

        $training_type = $request->request->get('training_type');
        $training_id = $request->request->get('training');


        $ipaddress = $request->getClientIp();

        $visitorLog->logVisit($ipaddress);

        if(!empty($request->request->get('mda'))) {

            $training = $this->getDoctrine()
                ->getRepository(Training::class)
                ->find($training_id);



            $date = date("jS F, Y");



            /*   $message = (new \Swift_Message('Hello Email'))
                   ->setFrom('info@nxtgendesign.com.ng')
                   ->setTo('cashmere10142@yahoo.com')
                   ->setBody(
                       $this->render('pages/letter.html.twig', array(
                           'mda' => $mda,
                           'trainings' => $training,
                           'date' => $date
                       )),
                       'text/html'
                   )

               ;

               $mailer->send($message);
            */

            $training_letter = $training->getLetterContent();

            $training_letter_main = str_replace("[MDA-CODE]", $mda->getMdaCode(), $training_letter);

            $training_letter = preg_replace('/\s+?(\S+)?$/', '', substr($training_letter_main, 0, 2267));
            $training_letter2 = preg_replace('/\s+?(\S+)?$/', '', substr($training_letter_main, 2267, 10000000000));

            //print_r($training_letter2);

            $snappy = new Pdf();

            $snappy->setBinary("/usr/local/bin/wkhtmltopdf");
            $snappy->setOption('lowquality', false);

            //   $snappy->generateFromHtml(
//                $this->renderView(
//                    'pages/letter.html.twig', array(
//                    'mda' => $mda,
//                    'trainings' => $training,
//                    'date' => $date,
//                    'trainlet' => $training_letter,
//                    'train_letter_continue' => $training_letter2
//                    )
//                ),
//                '../public_pdf/file.pdf'
//            );



            $html = $this->renderView(
                'pages/letter.html.twig', array(
                    'mda' => $mda,
                    'trainings' => $training,
                    'date' => $date,
                    'trainlet' => $training_letter,
                    'train_letter_continue' => $training_letter2,
                    'visitor_metrics' => $visitorLog->todayVisits()
                )
            );

            $arr = array();

            return new Response( $snappy->getOutputFromHtml($html, $arr),
                200,
                array(
                    'Content-Type' => 'application/pdf'
                )
            );







//            return $this->render('pages/letter.html.twig', array(
//                'mda' => $mda,
//                'trainings' => $training,
//                'date' => $date,
//                'trainlet' => $training_letter,
//                'train_letter_continue' => $training_letter2
//            ));

        }else{
            return $this->redirectToRoute('home');
        }

    }


}
