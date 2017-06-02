<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberGrowth
 *
 * @ORM\Table(name="member_growth")
 * @ORM\Entity
 */
class MemberGrowth
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
     * @ORM\Column(name="tid", type="integer", nullable=false)
     */
    private $tid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="get_type", type="boolean", nullable=false)
     */
    private $getType = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="affect_amount", type="integer", nullable=false)
     */
    private $affectAmount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="today_amount", type="integer", nullable=false)
     */
    private $todayAmount = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="vip_level", type="boolean", nullable=false)
     */
    private $vipLevel = '0';

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
     * @ORM\Column(name="add_date", type="integer", nullable=false)
     */
    private $addDate = '0';

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
     * @return MemberGrowth
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
     * Set tid
     *
     * @param integer $tid
     *
     * @return MemberGrowth
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

    /**
     * Get tid
     *
     * @return integer
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set getType
     *
     * @param boolean $getType
     *
     * @return MemberGrowth
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
     * Set amount
     *
     * @param integer $amount
     *
     * @return MemberGrowth
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
     * Set affectAmount
     *
     * @param integer $affectAmount
     *
     * @return MemberGrowth
     */
    public function setAffectAmount($affectAmount)
    {
        $this->affectAmount = $affectAmount;

        return $this;
    }

    /**
     * Get affectAmount
     *
     * @return integer
     */
    public function getAffectAmount()
    {
        return $this->affectAmount;
    }

    /**
     * Set todayAmount
     *
     * @param integer $todayAmount
     *
     * @return MemberGrowth
     */
    public function setTodayAmount($todayAmount)
    {
        $this->todayAmount = $todayAmount;

        return $this;
    }

    /**
     * Get todayAmount
     *
     * @return integer
     */
    public function getTodayAmount()
    {
        return $this->todayAmount;
    }

    /**
     * Set vipLevel
     *
     * @param boolean $vipLevel
     *
     * @return MemberGrowth
     */
    public function setVipLevel($vipLevel)
    {
        $this->vipLevel = $vipLevel;

        return $this;
    }

    /**
     * Get vipLevel
     *
     * @return boolean
     */
    public function getVipLevel()
    {
        return $this->vipLevel;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return MemberGrowth
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
     * @return MemberGrowth
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
     * Set addDate
     *
     * @param integer $addDate
     *
     * @return MemberGrowth
     */
    public function setAddDate($addDate)
    {
        $this->addDate = $addDate;

        return $this;
    }

    /**
     * Get addDate
     *
     * @return integer
     */
    public function getAddDate()
    {
        return $this->addDate;
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
