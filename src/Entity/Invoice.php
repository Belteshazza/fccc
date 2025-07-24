<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InvoiceRepository")
 */
class Invoice
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
     * @ORM\Column(type="integer")
     */
    private $payment_amount;



    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $payment_method;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $payment_id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $initial_invoice;

    /**
     * @ORM\Column(type="boolean")
     */
    private $payment_status;

    /**
     * @ORM\Column(type="text",  nullable=true)
     *
     */
    private $payment_evidence;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $invoice_id
     */
    public function setId($id)
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
    public function setMdaCode($mda_code)
    {
        $this->mda_code = $mda_code;
    }

    /**
     * @return mixed
     */
    public function getPaymentAmount()
    {
        return $this->payment_amount;
    }

    /**
     * @param mixed $payment_amount
     */
    public function setPaymentAmount($payment_amount)
    {
        $this->payment_amount = $payment_amount;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    /**
     * @param mixed $payment_method
     */
    public function setPaymentMethod($payment_method)
    {
        $this->payment_method = $payment_method;
    }

    /**
     * @return mixed
     */
    public function getPaymentStatus()
    {
        return $this->payment_status;
    }

    /**
     * @param mixed $payment_status
     */
    public function setPaymentStatus($payment_status)
    {
        $this->payment_status = $payment_status;
    }


    /**
     * @return mixed
     */
    public function getPaymentId()
    {
        return $this->payment_id;
    }

    /**
     * @param mixed $payment_id
     */
    public function setPaymentId($payment_id)
    {
        $this->payment_id = $payment_id;
    }

    /**
     * @return mixed
     */
    public function getInitialInvoice()
    {
        return $this->initial_invoice;
    }

    /**
     * @param mixed $initial_invoice
     */
    public function setInitialInvoice($initial_invoice)
    {
        $this->initial_invoice = $initial_invoice;
    }

    /**
     * @return mixed
     */
    public function getPaymentEvidence()
    {
        return $this->payment_evidence;
    }

    /**
     * @param mixed $payment_evidence
     */
    public function setPaymentEvidence($payment_evidence)
    {
        $this->payment_evidence = $payment_evidence;
    }



    /**
     * @var Training
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Training", inversedBy="invoices")
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







    public function __construct()
    {
        $this->invoice_log = new ArrayCollection();

    }

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\InvoiceLog", mappedBy="invoice_id")
     */
    private $invoice_log;


    /**
     * @return Collection|InvoiceLog[]
     */
    public function getInvoiceLog()
    {
        return $this->invoice_log;
    }

}
