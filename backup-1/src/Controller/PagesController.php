<?php

namespace App\Controller;

use App\Entity\Mda;
use App\Entity\Training;
use Knp\Bundle\SnappyBundle\KnpSnappyBundle;
use Knp\Snappy\Pdf;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class PagesController extends Controller
{
    /**
     * @Route("/", name="home")
     * @param Request $request
     * @return Response
     */
    public function index()
    {

        $mda = $this->getDoctrine()
            ->getRepository(mda::class)
            ->findAll();




       /* foreach($mda as $govt_mda)
        {
            $mda1_name = trim($govt_mda->getName());

            echo "<hr> <h4>$mda1_name</h4>";

            $strings = explode(" ", $mda1_name);

            foreach($strings as $string) {

                $string = trim($string);

                $key =  array_search($string, $strings);


                echo"------ <br> <b>$string</b> <br>";

                $query = "SELECT * FROM access_mda WHERE mda LIKE '%$string%' ";

                $em = $this->getDoctrine()->getManager();
                $statement = $em->getConnection()->prepare($query);
                $statement->execute();
                $qu = $statement->fetchAll();

                foreach ($qu as $old_mda) {

                    $mda2_name = $old_mda['mda'];


                    $designation = $old_mda['designation'];

                    if (strstr($mda2_name, $string)) {
                        //$govt_mda->setTopOfficialDesignation($old_mda['designation']);
                        //$em->persist($govt_mda);
                        //$em->flush();

                        //echo "[FOUND:] $mda2_name <br>";

                        $total = count($strings);
                        $medium = $total/2;
                        $score = 0;
                        $long_text = "";

                        $i = 0;
                        foreach($strings as $st)
                        {
                            $st = trim($st);
                            if($i >= $key) {
                                $long_text .= $st . " ";


                                if (strstr($mda2_name, $long_text)) {
                                    $score += 1;
                                }
                                //echo $long_text." - $score<br>";
                            }

                            //echo $long_text." - $score <br>";
                            $i++;
                        }

                        if($score >= $medium) {

                            echo("- $mda2_name - $designation ($score/$total)<br>");
                        }
                    }

                }

            }
        }
*/



        return $this->render('pages/home.html.twig', array(
            "mdas" => $mda,

        ));
    }


    /**
     * @Route("/generate/letter", name="generate_letter_step_2")
     */
    public function generate_letter(Request $request)
    {

        $mda = $request->request->get('mda');
        $phone = $request->request->get('phone');
        $email = $request->request->get('email');

        if(!empty($mda)) {

            $training = $this->getDoctrine()
                ->getRepository(Training::class)
                ->findAll();

            return $this->render('pages/generate_letter.html.twig', array(
                'mda' => $mda,
                'email' => $email,
                'phone' => $phone,
                'trainings' => $training
            ));

        }else{
            return $this->redirectToRoute('home');
        }

    }


    /**
     * @Route("/mda/{id}/letter/print", name="print_mda_letter")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function print_mda_letter(Request $request,$id = NULL, \Swift_Mailer $mailer)
    {

        $all_mda = $this->getDoctrine()
            ->getRepository(mda::class)
            ->findBy([
                'not_attended' => 1
            ]);

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
                'train_letter_continue' => $training_letter_main
            ));


    }



    /**
     * @Route("/mda/letter", name="mda_letter")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function mda_letter(Request $request, \Swift_Mailer $mailer)
    {

        $mda = $this->getDoctrine()
            ->getRepository(mda::class)
            ->findOneBy([
                'name' => $request->request->get('mda')
            ]);

        $training_type = $request->request->get('training_type');
        $training_id = $request->request->get('training');



        if(!empty($request->request->get('mda'))) {

            $training = $this->getDoctrine()
                ->getRepository(Training::class)
                ->find($training_id);



            $date = date("jS F, Y");




            $training_letter = $training->getLetterContent();

            $training_letter_main = str_replace("[MDA-CODE]", $mda->getMdaCode(), $training_letter);

            /*$training_letter = preg_replace('/\s+?(\S+)?$/', '', substr($training_letter_main, 0, 2038));
            $training_letter2 = preg_replace('/\s+?(\S+)?$/', '', substr($training_letter_main, 2038, 10000000000));*/



            return $this->render('pages/letter.html.twig', array(
                'mda' => $mda,
                'trainings' => $training,
                'date' => $date,
                'trainlet' => $training_letter,
                'train_letter_continue' => $training_letter_main
            ));

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
    public function mda_2letter(Request $request, \Swift_Mailer $mailer)
    {

        $mda = $this->getDoctrine()
            ->getRepository(mda::class)
            ->findOneBy([
                'name' => $request->request->get('mda')
            ]);

        $training_type = $request->request->get('training_type');
        $training_id = $request->request->get('training');



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
                    'train_letter_continue' => $training_letter2
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
