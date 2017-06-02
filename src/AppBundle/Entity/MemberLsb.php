<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberLsb
 *
 * @ORM\Table(name="member_lsb")
 * @ORM\Entity
 */
class MemberLsb
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="base_amount", type="integer", nullable=false)
     */
    private $baseAmount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="vip_amount", type="integer", nullable=false)
     */
    private $vipAmount = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="string", length=255, nullable=false)
     */
    private $info = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

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
     * @return MemberLsb
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
     * Set amount
     *
     * @param integer $amount
     *
     * @return MemberLsb
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
     * Set baseAmount
     *
     * @param integer $baseAmount
     *
     * @return MemberLsb
     */
    public function setBaseAmount($baseAmount)
    {
        $this->baseAmount = $baseAmount;

        return $this;
    }

    /**
     * Get baseAmount
     *
     * @return integer
     */
    public function getBaseAmount()
    {
        return $this->baseAmount;
    }

    /**
     * Set vipAmount
     *
     * @param integer $vipAmount
     *
     * @return MemberLsb
     */
    public function setVipAmount($vipAmount)
    {
        $this->vipAmount = $vipAmount;

        return $this;
    }

    /**
     * Get vipAmount
     *
     * @return integer
     */
    public function getVipAmount()
    {
        return $this->vipAmount;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return MemberLsb
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return MemberLsb
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return MemberLsb
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
