<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MdaRepository")
 */
class Mda
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
    private $mda_code;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string",
     *     length = 100,
     *     unique = true,
     *     nullable = true
     *     )
     */
    private $email;

    /**
     * @ORM\Column(type="text", nullable = true)
     */
    private $address;

    /**
     * @ORM\Column(type="string", nullable = true)
     */
    private $phone;

    /**
     * @ORM\Column(type="boolean", nullable = true)
     */
    private $not_attended;

    /**
     * @ORM\Column(type="string", nullable = true)
     */
    private $top_official_designation;

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
    public function getMdaCode()
    {
        return $this->mda_code;
    }

    /**
     * @param mixed $mda_code
     */
    public function setMdaCode($mda_code): void
    {
        $this->mda_code = $mda_code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getTopOfficialDesignation()
    {
        return $this->top_official_designation;
    }

    /**
     * @param mixed $top_official_designation
     */
    public function setTopOfficialDesignation($top_official_designation): void
    {
        $this->top_official_designation = $top_official_designation;
    }

    /**
     * @return mixed
     */
    public function getNotAttended()
    {
        return $this->not_attended;
    }

    /**
     * @param mixed $not_attended
     */
    public function setNotAttended($not_attended)
    {
        $this->not_attended = $not_attended;
    }


}
