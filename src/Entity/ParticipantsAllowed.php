<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParticipantsAllowedRepository")
 */
class ParticipantsAllowed
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
    private $allowed_participants;

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
    public function getAllowedParticipants()
    {
        return $this->allowed_participants;
    }

    /**
     * @param mixed $allowed_participants
     */
    public function setAllowedParticipants($allowed_participants)
    {
        $this->allowed_participants = $allowed_participants;
    }


    /**
     * @var Mda
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Mda", inversedBy="participants_allowed")
     * @ORM\JoinColumn(name="mda_id", referencedColumnName="id")
     */
    private $mda_id;

    /**
     * @return Mda
     */
    public function getMdaId(): Mda
    {
        return $this->mda_id;
    }

    /**
     * @param Mda $mda_id
     */
    public function setMdaId(Mda $mda_id)
    {
        $this->mda_id = $mda_id;
    }


    /**
     * @var Training
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Training", inversedBy="participants_allowed")
     * @ORM\JoinColumn(name="training_id", referencedColumnName="id")
     */
    private $training_id;

    /**
     * @return Training
     */
    public function getTrainingId(): Training
    {
        return $this->training_id;
    }

    /**
     * @param Training $training_id
     */
    public function setTrainingId(Training $training_id)
    {
        $this->training_id = $training_id;
    }



}
