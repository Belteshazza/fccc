<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrainingRepository")
 */
class Training
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="string")
     */
    private $venue;

    /**
     * @ORM\Column(type="time")
     */
    private $time;

    /**
     * @ORM\Column(type="string")
     */
    private $training_code;

    /**
     * @ORM\Column(type="integer")
     */
    private $registration_fee;

    /**
     * @ORM\Column(type="integer")
     */
    private $individual_amount;

    /**
     * @ORM\Column(type="integer")
     */
    private $extra_personnel_amount;

    /**
     * @ORM\Column(type="integer")
     */
    private $individuals_per_mda;

    /**
     * @ORM\Column(type="text")
     */
    private $letter_content;

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
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
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
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * @param mixed $venue
     */
    public function setVenue($venue): void
    {
        $this->venue = $venue;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time): void
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getIndividualAmount()
    {
        return $this->individual_amount;
    }

    /**
     * @param mixed $individual_amount
     */
    public function setIndividualAmount($individual_amount): void
    {
        $this->individual_amount = $individual_amount;
    }

    /**
     * @return mixed
     */
    public function getExtraPersonnelAmount()
    {
        return $this->extra_personnel_amount;
    }

    /**
     * @param mixed $extra_personnel_amount
     */
    public function setExtraPersonnelAmount($extra_personnel_amount): void
    {
        $this->extra_personnel_amount = $extra_personnel_amount;
    }

    /**
     * @return mixed
     */
    public function getIndividualsPerMda()
    {
        return $this->individuals_per_mda;
    }

    /**
     * @param mixed $individuals_per_mda
     */
    public function setIndividualsPerMda($individuals_per_mda): void
    {
        $this->individuals_per_mda = $individuals_per_mda;
    }

    /**
     * @return mixed
     */
    public function getRegistrationFee()
    {
        return $this->registration_fee;
    }

    /**
     * @param mixed $registration_fee
     */
    public function setRegistrationFee($registration_fee): void
    {
        $this->registration_fee = $registration_fee;
    }

    /**
     * @return mixed
     */
    public function getLetterContent()
    {
        return $this->letter_content;
    }

    /**
     * @param mixed $letter_content
     */
    public function setLetterContent($letter_content): void
    {
        $this->letter_content = $letter_content;
    }

    /**
     * @return mixed
     */
    public function getTrainingCode()
    {
        return $this->training_code;
    }

    /**
     * @param mixed $training_code
     */
    public function setTrainingCode($training_code)
    {
        $this->training_code = $training_code;
    }







}
