<?php


namespace App\Model;


use App\Entity\Vistor;
use Doctrine\ORM\EntityManagerInterface;



class VisitorLog
{

    protected $em;


    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
        date_default_timezone_set('Africa/Lagos');

    }


    public function logVisit($session_id)
    {
        $today = strftime("%Y-%m-%d");

        $visit = $this->em
            ->getRepository(Vistor::class)
            ->findBy([
                'session_id' => $session_id,
                'date' => new \DateTime($today)
            ]);


        if(count($visit) <= 0)
        {
            $visitor = new Vistor();
            $visitor->setSessionId($session_id);
            $visitor->setDate(new \DateTime($today));

            $this->em->persist($visitor);
            $this->em->flush();
        }

    }

    public function todayVisits()
    {
        $today = strftime("%Y-%m-%d");

        $visit = $this->em
            ->getRepository(Vistor::class)
            ->findBy([
                'date' => new \DateTime($today)
            ]);

        $all_visits = $this->em
            ->getRepository(Vistor::class)
            ->findAll();

        $array['visit_today'] = count($visit);
        $array['total_visits'] = count($all_visits);

        $unique = 0;
        foreach($visit as $v)
        {

            $all_visits = $this->em
                ->getRepository(Vistor::class)
                ->findBy([
                    'session_id' => $v->getSessionId(),
                    'date' => new \DateTime($today)
                ]);

            if(count($all_visits) <= 0)
            {
                $unique += 1;
            }

        }

        $array['unique_visits'] = $unique;

        return $array;

    }


}