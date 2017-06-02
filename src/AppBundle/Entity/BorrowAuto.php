<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BorrowAuto
 *
 * @ORM\Table(name="borrow_auto")
 * @ORM\Entity
 */
class BorrowAuto
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
     * @ORM\Column(name="bid", type="integer", nullable=false)
     */
    private $bid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="iid", type="integer", nullable=false)
     */
    private $iid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="borrow_type", type="boolean", nullable=false)
     */
    private $borrowType = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="money", type="integer", nullable=false)
     */
    private $money = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="coupons", type="integer", nullable=false)
     */
    private $coupons = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

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
     * @var boolean
     *
     * @ORM\Column(name="client", type="boolean", nullable=false)
     */
    private $client = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="freeze_order", type="string", length=255, nullable=false)
     */
    private $freezeOrder = '';

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="string", length=255, nullable=false)
     */
    private $info = '';

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
     * @return BorrowAuto
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
     * Set bid
     *
     * @param integer $bid
     *
     * @return BorrowAuto
     */
    public function setBid($bid)
    {
        $this->bid = $bid;

        return $this;
    }

    /**
     * Get bid
     *
     * @return integer
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * Set iid
     *
     * @param integer $iid
     *
     * @return BorrowAuto
     */
    public function setIid($iid)
    {
        $this->iid = $iid;

        return $this;
    }

    /**
     * Get iid
     *
     * @return integer
     */
    public function getIid()
    {
        return $this->iid;
    }

    /**
     * Set borrowType
     *
     * @param boolean $borrowType
     *
     * @return BorrowAuto
     */
    public function setBorrowType($borrowType)
    {
        $this->borrowType = $borrowType;

        return $this;
    }

    /**
     * Get borrowType
     *
     * @return boolean
     */
    public function getBorrowType()
    {
        return $this->borrowType;
    }

    /**
     * Set money
     *
     * @param integer $money
     *
     * @return BorrowAuto
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
     * Set coupons
     *
     * @param integer $coupons
     *
     * @return BorrowAuto
     */
    public function setCoupons($coupons)
    {
        $this->coupons = $coupons;

        return $this;
    }

    /**
     * Get coupons
     *
     * @return integer
     */
    public function getCoupons()
    {
        return $this->coupons;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return BorrowAuto
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
     * Set dealTime
     *
     * @param integer $dealTime
     *
     * @return BorrowAuto
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
     * @return BorrowAuto
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
     * Set client
     *
     * @param boolean $client
     *
     * @return BorrowAuto
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return boolean
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set freezeOrder
     *
     * @param string $freezeOrder
     *
     * @return BorrowAuto
     */
    public function setFreezeOrder($freezeOrder)
    {
        $this->freezeOrder = $freezeOrder;

        return $this;
    }

    /**
     * Get freezeOrder
     *
     * @return string
     */
    public function getFreezeOrder()
    {
        return $this->freezeOrder;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return BorrowAuto
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
