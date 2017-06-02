<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bank
 *
 * @ORM\Table(name="bank")
 * @ORM\Entity
 */
class Bank
{
    /**
     * @var string
     *
     * @ORM\Column(name="bank_name", type="string", length=50, nullable=false)
     */
    private $bankName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bank_code", type="string", length=50, nullable=false)
     */
    private $bankCode = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_bindcard", type="boolean", nullable=false)
     */
    private $isBindcard = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_quickpay", type="boolean", nullable=false)
     */
    private $isQuickpay = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_charge", type="boolean", nullable=false)
     */
    private $isCharge;

    /**
     * @var string
     *
     * @ORM\Column(name="charge_limit", type="text", length=65535, nullable=true)
     */
    private $chargeLimit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="for_type", type="boolean", nullable=false)
     */
    private $forType = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set bankName
     *
     * @param string $bankName
     *
     * @return Bank
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * Get bankName
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Set bankCode
     *
     * @param string $bankCode
     *
     * @return Bank
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;

        return $this;
    }

    /**
     * Get bankCode
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Set isBindcard
     *
     * @param boolean $isBindcard
     *
     * @return Bank
     */
    public function setIsBindcard($isBindcard)
    {
        $this->isBindcard = $isBindcard;

        return $this;
    }

    /**
     * Get isBindcard
     *
     * @return boolean
     */
    public function getIsBindcard()
    {
        return $this->isBindcard;
    }

    /**
     * Set isQuickpay
     *
     * @param boolean $isQuickpay
     *
     * @return Bank
     */
    public function setIsQuickpay($isQuickpay)
    {
        $this->isQuickpay = $isQuickpay;

        return $this;
    }

    /**
     * Get isQuickpay
     *
     * @return boolean
     */
    public function getIsQuickpay()
    {
        return $this->isQuickpay;
    }

    /**
     * Set isCharge
     *
     * @param boolean $isCharge
     *
     * @return Bank
     */
    public function setIsCharge($isCharge)
    {
        $this->isCharge = $isCharge;

        return $this;
    }

    /**
     * Get isCharge
     *
     * @return boolean
     */
    public function getIsCharge()
    {
        return $this->isCharge;
    }

    /**
     * Set chargeLimit
     *
     * @param string $chargeLimit
     *
     * @return Bank
     */
    public function setChargeLimit($chargeLimit)
    {
        $this->chargeLimit = $chargeLimit;

        return $this;
    }

    /**
     * Get chargeLimit
     *
     * @return string
     */
    public function getChargeLimit()
    {
        return $this->chargeLimit;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Bank
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set forType
     *
     * @param boolean $forType
     *
     * @return Bank
     */
    public function setForType($forType)
    {
        $this->forType = $forType;

        return $this;
    }

    /**
     * Get forType
     *
     * @return boolean
     */
    public function getForType()
    {
        return $this->forType;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
