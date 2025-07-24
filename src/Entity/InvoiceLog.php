<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InvoiceLogRepository")
 */
class InvoiceLog
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
    private $status;

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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
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




    /**
     * @var Invoice
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Invoice", inversedBy="invoice_log")
     * @ORM\JoinColumn(name="invoice_id", referencedColumnName="id")
     */
    private $invoice_id;

    /**
     * @return Invoice
     */
    public function getInvoiceId(): Invoice
    {
        return $this->invoice_id;
    }

    /**
     * @param Invoice $invoice_id
     */
    public function setInvoiceId(Invoice $invoice_id)
    {
        $this->invoice_id = $invoice_id;
    }





    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="Invoice_log")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user_id;

    /**
     * @return User
     */
    public function getUserId(): User
    {
        return $this->user_id;
    }

    /**
     * @param User $user_id
     */
    public function setUserId(User $user_id)
    {
        $this->user_id = $user_id;
    }




}
