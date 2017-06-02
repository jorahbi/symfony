<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberCoupons
 *
 * @ORM\Table(name="member_coupons", indexes={@ORM\Index(name="type", columns={"type"})})
 * @ORM\Entity
 */
class MemberCoupons
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
     * @ORM\Column(name="get_id", type="integer", nullable=false)
     */
    private $getId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="get_bid", type="integer", nullable=false)
     */
    private $getBid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="get_type", type="boolean", nullable=false)
     */
    private $getType = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="get_info", type="string", length=200, nullable=false)
     */
    private $getInfo = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="use_bid", type="integer", nullable=false)
     */
    private $useBid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="use_iid", type="integer", nullable=false)
     */
    private $useIid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="money", type="integer", nullable=false)
     */
    private $money = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="base_money", type="integer", nullable=false)
     */
    private $baseMoney = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="start_time", type="integer", nullable=false)
     */
    private $startTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="end_time", type="integer", nullable=false)
     */
    private $endTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="use_time", type="integer", nullable=false)
     */
    private $useTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_manual", type="integer", nullable=true)
     */
    private $isManual = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="month", type="string", length=100, nullable=false)
     */
    private $month;

    /**
     * @var integer
     *
     * @ORM\Column(name="share_id", type="integer", nullable=true)
     */
    private $shareId;

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
     * @return MemberCoupons
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
     * Set getId
     *
     * @param integer $getId
     *
     * @return MemberCoupons
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
     * Set getBid
     *
     * @param integer $getBid
     *
     * @return MemberCoupons
     */
    public function setGetBid($getBid)
    {
        $this->getBid = $getBid;

        return $this;
    }

    /**
     * Get getBid
     *
     * @return integer
     */
    public function getGetBid()
    {
        return $this->getBid;
    }

    /**
     * Set getType
     *
     * @param boolean $getType
     *
     * @return MemberCoupons
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
     * Set getInfo
     *
     * @param string $getInfo
     *
     * @return MemberCoupons
     */
    public function setGetInfo($getInfo)
    {
        $this->getInfo = $getInfo;

        return $this;
    }

    /**
     * Get getInfo
     *
     * @return string
     */
    public function getGetInfo()
    {
        return $this->getInfo;
    }

    /**
     * Set useBid
     *
     * @param integer $useBid
     *
     * @return MemberCoupons
     */
    public function setUseBid($useBid)
    {
        $this->useBid = $useBid;

        return $this;
    }

    /**
     * Get useBid
     *
     * @return integer
     */
    public function getUseBid()
    {
        return $this->useBid;
    }

    /**
     * Set useIid
     *
     * @param integer $useIid
     *
     * @return MemberCoupons
     */
    public function setUseIid($useIid)
    {
        $this->useIid = $useIid;

        return $this;
    }

    /**
     * Get useIid
     *
     * @return integer
     */
    public function getUseIid()
    {
        return $this->useIid;
    }

    /**
     * Set money
     *
     * @param integer $money
     *
     * @return MemberCoupons
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return integer
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set baseMoney
     *
     * @param integer $baseMoney
     *
     * @return MemberCoupons
     */
    public function setBaseMoney($baseMoney)
    {
        $this->baseMoney = $baseMoney;

        return $this;
    }

    /**
     * Get baseMoney
     *
     * @return integer
     */
    public function getBaseMoney()
    {
        return $this->baseMoney;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return MemberCoupons
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
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return MemberCoupons
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
     * Set startTime
     *
     * @param integer $startTime
     *
     * @return MemberCoupons
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return integer
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param integer $endTime
     *
     * @return MemberCoupons
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return integer
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set useTime
     *
     * @param integer $useTime
     *
     * @return MemberCoupons
     */
    public function setUseTime($useTime)
    {
        $this->useTime = $useTime;

        return $this;
    }

    /**
     * Get useTime
     *
     * @return integer
     */
    public function getUseTime()
    {
        return $this->useTime;
    }

    /**
     * Set isManual
     *
     * @param integer $isManual
     *
     * @return MemberCoupons
     */
    public function setIsManual($isManual)
    {
        $this->isManual = $isManual;

        return $this;
    }

    /**
     * Get isManual
     *
     * @return integer
     */
    public function getIsManual()
    {
        return $this->isManual;
    }

    /**
     * Set month
     *
     * @param string $month
     *
     * @return MemberCoupons
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set shareId
     *
     * @param integer $shareId
     *
     * @return MemberCoupons
     */
    public function setShareId($shareId)
    {
        $this->shareId = $shareId;

        return $this;
    }

    /**
     * Get shareId
     *
     * @return integer
     */
    public function getShareId()
    {
        return $this->shareId;
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
