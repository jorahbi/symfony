<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberCommissionLog
 *
 * @ORM\Table(name="member_commission_log", uniqueConstraints={@ORM\UniqueConstraint(name="cid_invest", columns={"cid", "invest_id"}), @ORM\UniqueConstraint(name="order_no", columns={"order_no"})}, indexes={@ORM\Index(name="bid", columns={"bid"}), @ORM\Index(name="repay_id", columns={"invest_id"}), @ORM\Index(name="cid", columns={"cid"}), @ORM\Index(name="status", columns={"status"})})
 * @ORM\Entity
 */
class MemberCommissionLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cid", type="integer", nullable=true)
     */
    private $cid;

    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer", nullable=true)
     */
    private $bid;

    /**
     * @var integer
     *
     * @ORM\Column(name="invest_id", type="integer", nullable=true)
     */
    private $investId;

    /**
     * @var string
     *
     * @ORM\Column(name="interest", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $interest;

    /**
     * @var string
     *
     * @ORM\Column(name="commission", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $commission;

    /**
     * @var string
     *
     * @ORM\Column(name="ratio", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $ratio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="order_no", type="string", length=255, nullable=true)
     */
    private $orderNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="add_time", type="datetime", nullable=true)
     */
    private $addTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lasttime", type="datetime", nullable=true)
     */
    private $lasttime;

    /**
     * @var string
     *
     * @ORM\Column(name="remarks", type="string", length=255, nullable=true)
     */
    private $remarks;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set cid
     *
     * @param integer $cid
     *
     * @return MemberCommissionLog
     */
    public function setCid($cid)
    {
        $this->cid = $cid;

        return $this;
    }

    /**
     * Get cid
     *
     * @return integer
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set bid
     *
     * @param integer $bid
     *
     * @return MemberCommissionLog
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
     * Set investId
     *
     * @param integer $investId
     *
     * @return MemberCommissionLog
     */
    public function setInvestId($investId)
    {
        $this->investId = $investId;

        return $this;
    }

    /**
     * Get investId
     *
     * @return integer
     */
    public function getInvestId()
    {
        return $this->investId;
    }

    /**
     * Set interest
     *
     * @param string $interest
     *
     * @return MemberCommissionLog
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;

        return $this;
    }

    /**
     * Get interest
     *
     * @return string
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * Set commission
     *
     * @param string $commission
     *
     * @return MemberCommissionLog
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission
     *
     * @return string
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set ratio
     *
     * @param string $ratio
     *
     * @return MemberCommissionLog
     */
    public function setRatio($ratio)
    {
        $this->ratio = $ratio;

        return $this;
    }

    /**
     * Get ratio
     *
     * @return string
     */
    public function getRatio()
    {
        return $this->ratio;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return MemberCommissionLog
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
     * Set orderNo
     *
     * @param string $orderNo
     *
     * @return MemberCommissionLog
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
     * Set addTime
     *
     * @param \DateTime $addTime
     *
     * @return MemberCommissionLog
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * Get addTime
     *
     * @return \DateTime
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * Set lasttime
     *
     * @param \DateTime $lasttime
     *
     * @return MemberCommissionLog
     */
    public function setLasttime($lasttime)
    {
        $this->lasttime = $lasttime;

        return $this;
    }

    /**
     * Get lasttime
     *
     * @return \DateTime
     */
    public function getLasttime()
    {
        return $this->lasttime;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     *
     * @return MemberCommissionLog
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Get remarks
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
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
