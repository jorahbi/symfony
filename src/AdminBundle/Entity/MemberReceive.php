<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberReceive
 *
 * @ORM\Table(name="member_receive", indexes={@ORM\Index(name="uid", columns={"uid"}), @ORM\Index(name="tid", columns={"uid"})})
 * @ORM\Entity
 */
class MemberReceive
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=true)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="affect_money", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $affectMoney = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="receive_balance", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $receiveBalance = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="affect_type", type="boolean", nullable=true)
     */
    private $affectType = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=true)
     */
    private $addTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=true)
     */
    private $tid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bonus_money", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $bonusMoney = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="bonus_status", type="boolean", nullable=true)
     */
    private $bonusStatus = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="order_no", type="string", length=30, nullable=true)
     */
    private $orderNo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pay_order_no", type="string", length=30, nullable=true)
     */
    private $payOrderNo = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer", nullable=true)
     */
    private $bid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="red_num", type="integer", nullable=true)
     */
    private $redNum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="red_money", type="integer", nullable=true)
     */
    private $redMoney = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="receive_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $receiveId;



    /**
     * Set uid
     *
     * @param integer $uid
     *
     * @return MemberReceive
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
     * Set affectMoney
     *
     * @param string $affectMoney
     *
     * @return MemberReceive
     */
    public function setAffectMoney($affectMoney)
    {
        $this->affectMoney = $affectMoney;

        return $this;
    }

    /**
     * Get affectMoney
     *
     * @return string
     */
    public function getAffectMoney()
    {
        return $this->affectMoney;
    }

    /**
     * Set receiveBalance
     *
     * @param string $receiveBalance
     *
     * @return MemberReceive
     */
    public function setReceiveBalance($receiveBalance)
    {
        $this->receiveBalance = $receiveBalance;

        return $this;
    }

    /**
     * Get receiveBalance
     *
     * @return string
     */
    public function getReceiveBalance()
    {
        return $this->receiveBalance;
    }

    /**
     * Set affectType
     *
     * @param boolean $affectType
     *
     * @return MemberReceive
     */
    public function setAffectType($affectType)
    {
        $this->affectType = $affectType;

        return $this;
    }

    /**
     * Get affectType
     *
     * @return boolean
     */
    public function getAffectType()
    {
        return $this->affectType;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return MemberReceive
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
     * Set tid
     *
     * @param integer $tid
     *
     * @return MemberReceive
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
     * Set bonusMoney
     *
     * @param string $bonusMoney
     *
     * @return MemberReceive
     */
    public function setBonusMoney($bonusMoney)
    {
        $this->bonusMoney = $bonusMoney;

        return $this;
    }

    /**
     * Get bonusMoney
     *
     * @return string
     */
    public function getBonusMoney()
    {
        return $this->bonusMoney;
    }

    /**
     * Set bonusStatus
     *
     * @param boolean $bonusStatus
     *
     * @return MemberReceive
     */
    public function setBonusStatus($bonusStatus)
    {
        $this->bonusStatus = $bonusStatus;

        return $this;
    }

    /**
     * Get bonusStatus
     *
     * @return boolean
     */
    public function getBonusStatus()
    {
        return $this->bonusStatus;
    }

    /**
     * Set orderNo
     *
     * @param string $orderNo
     *
     * @return MemberReceive
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;

        return $this;
    }

    /**
     * Get orderNo
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * Set payOrderNo
     *
     * @param string $payOrderNo
     *
     * @return MemberReceive
     */
    public function setPayOrderNo($payOrderNo)
    {
        $this->payOrderNo = $payOrderNo;

        return $this;
    }

    /**
     * Get payOrderNo
     *
     * @return string
     */
    public function getPayOrderNo()
    {
        return $this->payOrderNo;
    }

    /**
     * Set bid
     *
     * @param integer $bid
     *
     * @return MemberReceive
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
     * Set redNum
     *
     * @param integer $redNum
     *
     * @return MemberReceive
     */
    public function setRedNum($redNum)
    {
        $this->redNum = $redNum;

        return $this;
    }

    /**
     * Get redNum
     *
     * @return integer
     */
    public function getRedNum()
    {
        return $this->redNum;
    }

    /**
     * Set redMoney
     *
     * @param integer $redMoney
     *
     * @return MemberReceive
     */
    public function setRedMoney($redMoney)
    {
        $this->redMoney = $redMoney;

        return $this;
    }

    /**
     * Get redMoney
     *
     * @return integer
     */
    public function getRedMoney()
    {
        return $this->redMoney;
    }

    /**
     * Get receiveId
     *
     * @return integer
     */
    public function getReceiveId()
    {
        return $this->receiveId;
    }
}
