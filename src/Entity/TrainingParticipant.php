<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrainingParticipantRepository")
 */
class TrainingParticipant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="integer")
     */
    private $training_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $session_id;

    /**
     * @ORM\Column(type="string")
     */
    private $participant_name;

    /**
     * @ORM\Column(type="string")
     */
    private $participant_email;

    /**
     * @ORM\Column(type="string")
     */
    private $participant_phone;

    /**
     * @ORM\Column(type="integer")
     */
    private $mda_code;

    /**
     * @ORM\Column(type="integer")
     */
    private $invoice_id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $attended;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;




    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTrainingId()
    {
        return $this->training_id;
    }

    /**
     * @param mixed $training_id
     */
    public function setTrainingId($training_id)
    {
        $this->training_id = $training_id;
    }

    /**
     * @return mixed
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * @param mixed $session_id
     */
    public function setSessionId($session_id)
    {
        $this->session_id = $session_id;
    }

    /**
     * @return mixed
     */
    public function getParticipantName()
    {
        return $this->participant_name;
    }

    /**
     * @param mixed $participant_name
     */
    public function setParticipantName($participant_name)
    {
        $this->participant_name = $participant_name;
    }

    /**
     * @return mixed
     */
    public function getInvoiceId()
    {
        return $this->invoice_id;
    }

    /**
     * @param mixed $invoice_id
     */
    public function setInvoiceId($invoice_id)
    {
        $this->invoice_id = $invoice_id;
    }


    /**
     * @return mixed
     */
    public function getMdaCode()
    {
        return $this->mda_code;
    }

    /**
     * @param mixed $mda_code
     */
    public function setMdaCode($mda_code)
    {
        $this->mda_code = $mda_code;
    }


    /**
     * @return mixed
     */
    public function getAttended()
    {
        return $this->attended;
    }

    /**
     * @param mixed $attended
     */
    public function setAttended($attended)
    {
        $this->attended = $attended;
    }

    /**
     * @return mixed
     */
    public function getParticipantEmail()
    {
        return $this->participant_email;
    }

    /**
     * @param mixed $participant_email
     */
    public function setParticipantEmail($participant_email)
    {
        $this->participant_email = $participant_email;
    }

    /**
     * @return mixed
     */
    public function getParticipantPhone()
    {
        return $this->participant_phone;
    }

    /**
     * @param mixed $participant_phone
     */
    public function setParticipantPhone($participant_phone)
    {
        $this->participant_phone = $participant_phone;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }


}
