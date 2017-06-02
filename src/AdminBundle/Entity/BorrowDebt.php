<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BorrowDebt
 *
 * @ORM\Table(name="borrow_debt")
 * @ORM\Entity
 */
class BorrowDebt
{
    /**
     * @var integer
     *
     * @ORM\Column(name="invest_id", type="integer", nullable=false)
     */
    private $investId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     */
    private $pid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="capital", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $capital = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="interest", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $interest = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=false)
     */
    private $duration = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="duration_month", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $durationMonth = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $discount = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="default_discount", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $defaultDiscount = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="owner_rate", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $ownerRate = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="buyer_rate", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $buyerRate = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="integral", type="integer", nullable=false)
     */
    private $integral = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lsb", type="integer", nullable=false)
     */
    private $lsb = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="end_time", type="integer", nullable=false)
     */
    private $endTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="full_time", type="integer", nullable=false)
     */
    private $fullTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="deadline", type="integer", nullable=false)
     */
    private $deadline = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="finial_capital", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $finialCapital = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="finial_interest", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $finialInterest = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="finial_integral", type="integer", nullable=false)
     */
    private $finialIntegral = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="finial_lsb", type="integer", nullable=false)
     */
    private $finialLsb = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="finial_discount", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $finialDiscount = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="debt_fee", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $debtFee = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=false)
     */
    private $hits = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="string", length=100, nullable=false)
     */
    private $info = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="remain_phase", type="integer", nullable=false)
     */
    private $remainPhase = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set investId
     *
     * @param integer $investId
     *
     * @return BorrowDebt
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
     * Set uid
     *
     * @param integer $uid
     *
     * @return BorrowDebt
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
     * Set pid
     *
     * @param integer $pid
     *
     * @return BorrowDebt
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return integer
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set capital
     *
     * @param string $capital
     *
     * @return BorrowDebt
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * Get capital
     *
     * @return string
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Set interest
     *
     * @param string $interest
     *
     * @return BorrowDebt
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
     * Set duration
     *
     * @param integer $duration
     *
     * @return BorrowDebt
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set durationMonth
     *
     * @param string $durationMonth
     *
     * @return BorrowDebt
     */
    public function setDurationMonth($durationMonth)
    {
        $this->durationMonth = $durationMonth;

        return $this;
    }

    /**
     * Get durationMonth
     *
     * @return string
     */
    public function getDurationMonth()
    {
        return $this->durationMonth;
    }

    /**
     * Set discount
     *
     * @param string $discount
     *
     * @return BorrowDebt
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set defaultDiscount
     *
     * @param string $defaultDiscount
     *
     * @return BorrowDebt
     */
    public function setDefaultDiscount($defaultDiscount)
    {
        $this->defaultDiscount = $defaultDiscount;

        return $this;
    }

    /**
     * Get defaultDiscount
     *
     * @return string
     */
    public function getDefaultDiscount()
    {
        return $this->defaultDiscount;
    }

    /**
     * Set ownerRate
     *
     * @param string $ownerRate
     *
     * @return BorrowDebt
     */
    public function setOwnerRate($ownerRate)
    {
        $this->ownerRate = $ownerRate;

        return $this;
    }

    /**
     * Get ownerRate
     *
     * @return string
     */
    public function getOwnerRate()
    {
        return $this->ownerRate;
    }

    /**
     * Set buyerRate
     *
     * @param string $buyerRate
     *
     * @return BorrowDebt
     */
    public function setBuyerRate($buyerRate)
    {
        $this->buyerRate = $buyerRate;

        return $this;
    }

    /**
     * Get buyerRate
     *
     * @return string
     */
    public function getBuyerRate()
    {
        return $this->buyerRate;
    }

    /**
     * Set integral
     *
     * @param integer $integral
     *
     * @return BorrowDebt
     */
    public function setIntegral($integral)
    {
        $this->integral = $integral;

        return $this;
    }

    /**
     * Get integral
     *
     * @return integer
     */
    public function getIntegral()
    {
        return $this->integral;
    }

    /**
     * Set lsb
     *
     * @param integer $lsb
     *
     * @return BorrowDebt
     */
    public function setLsb($lsb)
    {
        $this->lsb = $lsb;

        return $this;
    }

    /**
     * Get lsb
     *
     * @return integer
     */
    public function getLsb()
    {
        return $this->lsb;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return BorrowDebt
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
     * Set endTime
     *
     * @param integer $endTime
     *
     * @return BorrowDebt
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
     * Set fullTime
     *
     * @param integer $fullTime
     *
     * @return BorrowDebt
     */
    public function setFullTime($fullTime)
    {
        $this->fullTime = $fullTime;

        return $this;
    }

    /**
     * Get fullTime
     *
     * @return integer
     */
    public function getFullTime()
    {
        return $this->fullTime;
    }

    /**
     * Set deadline
     *
     * @param integer $deadline
     *
     * @return BorrowDebt
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Get deadline
     *
     * @return integer
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Set finialCapital
     *
     * @param string $finialCapital
     *
     * @return BorrowDebt
     */
    public function setFinialCapital($finialCapital)
    {
        $this->finialCapital = $finialCapital;

        return $this;
    }

    /**
     * Get finialCapital
     *
     * @return string
     */
    public function getFinialCapital()
    {
        return $this->finialCapital;
    }

    /**
     * Set finialInterest
     *
     * @param string $finialInterest
     *
     * @return BorrowDebt
     */
    public function setFinialInterest($finialInterest)
    {
        $this->finialInterest = $finialInterest;

        return $this;
    }

    /**
     * Get finialInterest
     *
     * @return string
     */
    public function getFinialInterest()
    {
        return $this->finialInterest;
    }

    /**
     * Set finialIntegral
     *
     * @param integer $finialIntegral
     *
     * @return BorrowDebt
     */
    public function setFinialIntegral($finialIntegral)
    {
        $this->finialIntegral = $finialIntegral;

        return $this;
    }

    /**
     * Get finialIntegral
     *
     * @return integer
     */
    public function getFinialIntegral()
    {
        return $this->finialIntegral;
    }

    /**
     * Set finialLsb
     *
     * @param integer $finialLsb
     *
     * @return BorrowDebt
     */
    public function setFinialLsb($finialLsb)
    {
        $this->finialLsb = $finialLsb;

        return $this;
    }

    /**
     * Get finialLsb
     *
     * @return integer
     */
    public function getFinialLsb()
    {
        return $this->finialLsb;
    }

    /**
     * Set finialDiscount
     *
     * @param string $finialDiscount
     *
     * @return BorrowDebt
     */
    public function setFinialDiscount($finialDiscount)
    {
        $this->finialDiscount = $finialDiscount;

        return $this;
    }

    /**
     * Get finialDiscount
     *
     * @return string
     */
    public function getFinialDiscount()
    {
        return $this->finialDiscount;
    }

    /**
     * Set debtFee
     *
     * @param string $debtFee
     *
     * @return BorrowDebt
     */
    public function setDebtFee($debtFee)
    {
        $this->debtFee = $debtFee;

        return $this;
    }

    /**
     * Get debtFee
     *
     * @return string
     */
    public function getDebtFee()
    {
        return $this->debtFee;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return BorrowDebt
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
     * Set hits
     *
     * @param integer $hits
     *
     * @return BorrowDebt
     */
    public function setHits($hits)
    {
        $this->hits = $hits;

        return $this;
    }

    /**
     * Get hits
     *
     * @return integer
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return BorrowDebt
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
     * Set remainPhase
     *
     * @param integer $remainPhase
     *
     * @return BorrowDebt
     */
    public function setRemainPhase($remainPhase)
    {
        $this->remainPhase = $remainPhase;

        return $this;
    }

    /**
     * Get remainPhase
     *
     * @return integer
     */
    public function getRemainPhase()
    {
        return $this->remainPhase;
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
