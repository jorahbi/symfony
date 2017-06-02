<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrizeLog
 *
 * @ORM\Table(name="prize_log")
 * @ORM\Entity
 */
class PrizeLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="get_type", type="boolean", nullable=false)
     */
    private $getType = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="get_id", type="integer", nullable=false)
     */
    private $getId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="prize_id", type="integer", nullable=false)
     */
    private $prizeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=255, nullable=false)
     */
    private $contact = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contact_phone", type="string", length=20, nullable=false)
     */
    private $contactPhone = '';

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=15, nullable=false)
     */
    private $phone = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="get_time", type="integer", nullable=false)
     */
    private $getTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="deal_time", type="integer", nullable=false)
     */
    private $dealTime = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer", nullable=true)
     */
    private $amount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="from_uid", type="integer", nullable=false)
     */
    private $fromUid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set uid
     *
     * @param integer $uid
     *
     * @return PrizeLog
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set getType
     *
     * @param boolean $getType
     *
     * @return PrizeLog
     */
    public function setGetType($getType)
    {
        $this->getType = $getType;

        return $this;
    }

    /**
     * Get getType
     *
     * @return boolean
     */
    public function getGetType()
    {
        return $this->getType;
    }

    /**
     * Set getId
     *
     * @param integer $getId
     *
     * @return PrizeLog
     */
    public function setGetId($getId)
    {
        $this->getId = $getId;

        return $this;
    }

    /**
     * Get getId
     *
     * @return integer
     */
    public function getGetId()
    {
        return $this->getId;
    }

    /**
     * Set prizeId
     *
     * @param integer $prizeId
     *
     * @return PrizeLog
     */
    public function setPrizeId($prizeId)
    {
        $this->prizeId = $prizeId;

        return $this;
    }

    /**
     * Get prizeId
     *
     * @return integer
     */
    public function getPrizeId()
    {
        return $this->prizeId;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return PrizeLog
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return PrizeLog
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set contactPhone
     *
     * @param string $contactPhone
     *
     * @return PrizeLog
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;

        return $this;
    }

    /**
     * Get contactPhone
     *
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return PrizeLog
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return PrizeLog
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * Get addTime
     *
     * @return integer
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * Set getTime
     *
     * @param integer $getTime
     *
     * @return PrizeLog
     */
    public function setGetTime($getTime)
    {
        $this->getTime = $getTime;

        return $this;
    }

    /**
     * Get getTime
     *
     * @return integer
     */
    public function getGetTime()
    {
        return $this->getTime;
    }

    /**
     * Set dealTime
     *
     * @param integer $dealTime
     *
     * @return PrizeLog
     */
    public function setDealTime($dealTime)
    {
        $this->dealTime = $dealTime;

        return $this;
    }

    /**
     * Get dealTime
     *
     * @return integer
     */
    public function getDealTime()
    {
        return $this->dealTime;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return PrizeLog
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
     * Set amount
     *
     * @param integer $amount
     *
     * @return PrizeLog
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set fromUid
     *
     * @param integer $fromUid
     *
     * @return PrizeLog
     */
    public function setFromUid($fromUid)
    {
        $this->fromUid = $fromUid;

        return $this;
    }

    /**
     * Get fromUid
     *
     * @return integer
     */
    public function getFromUid()
    {
        return $this->fromUid;
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
