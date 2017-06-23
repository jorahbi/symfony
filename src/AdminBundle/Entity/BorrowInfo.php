<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BorrowInfo
 *
 * @ORM\Table(name="borrow_info", indexes={@ORM\Index(name="type_list", columns={"borrow_type", "is_show"})})
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\BorrowInfoRepository")
 */
class BorrowInfo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="package", type="string", length=20, nullable=false)
     */
    private $package = '';

    /**
     * @var string
     *
     * @ORM\Column(name="classify", type="string", length=50, nullable=false)
     */
    private $classify = '';

    /**
     * @var string
     *
     * @ORM\Column(name="borrow_name", type="string", length=50, nullable=false)
     */
    private $borrowName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="borrow_order", type="string", length=255, nullable=false)
     */
    private $borrowOrder;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Members", inversedBy="memberBorrow", cascade={"persist"})
     * @ORM\JoinColumn(name="borrow_uid", referencedColumnName="id")
     */
    private $borrowUid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="borrow_type", type="boolean", nullable=false)
     */
    private $borrowType = '3';

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=false)
     */
    private $duration = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="duration_unit", type="string", length=10, nullable=false)
     */
    private $durationUnit = '个月';

    /**
     * @var string
     *
     * @ORM\Column(name="duration_month", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $durationMonth = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="duration_original", type="integer", nullable=false)
     */
    private $durationOriginal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="money", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $money = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="invest_money", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $investMoney = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="interest", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $interest = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="finial_money", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $finialMoney = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="finial_interest", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $finialInterest = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="finial_base_interest", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $finialBaseInterest = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="receive_money", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $receiveMoney = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="receive_interest", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $receiveInterest = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="interest_rate", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $interestRate = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="base_rate", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $baseRate = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="als_rate", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $alsRate = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="repayment_type", type="boolean", nullable=false)
     */
    private $repaymentType = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="repayment_day", type="boolean", nullable=false)
     */
    private $repaymentDay = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="borrow_status", type="boolean", nullable=false)
     */
    private $borrowStatus = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="cover", type="string", length=255, nullable=false)
     */
    private $cover = '';

    /**
     * @var string
     *
     * @ORM\Column(name="start_price", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $startPrice = '100.00';

    /**
     * @var string
     *
     * @ORM\Column(name="upper_price", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $upperPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="per_price", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $perPrice = '100.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="start_time", type="integer", nullable=false)
     */
    private $startTime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="has_money", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $hasMoney = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="open_time", type="integer", nullable=false)
     */
    private $openTime = '0';

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
     * @var boolean
     *
     * @ORM\Column(name="is_show", type="boolean", nullable=false)
     */
    private $isShow = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_auto", type="boolean", nullable=false)
     */
    private $isAuto = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_overdue", type="boolean", nullable=false)
     */
    private $isOverdue = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_loan", type="boolean", nullable=false)
     */
    private $isLoan = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="coupons_type", type="boolean", nullable=false)
     */
    private $couponsType = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=false)
     */
    private $hits = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="risk", type="text", length=65535, nullable=true)
     */
    private $risk;

    /**
     * @var string
     *
     * @ORM\Column(name="danbao_name", type="string", length=50, nullable=false)
     */
    private $danbaoName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="zhaiwu_name", type="string", length=50, nullable=false)
     */
    private $zhaiwuName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="zhaiwu_idcard", type="string", length=50, nullable=false)
     */
    private $zhaiwuIdcard = '';

    /**
     * @var string
     *
     * @ORM\Column(name="zhaiwu_company", type="string", length=50, nullable=false)
     */
    private $zhaiwuCompany = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pact_type", type="boolean", nullable=false)
     */
    private $pactType = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pact_zhang", type="boolean", nullable=false)
     */
    private $pactZhang = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="rongziyongtu", type="text", length=65535, nullable=true)
     */
    private $rongziyongtu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sale_auto", type="boolean", nullable=false)
     */
    private $saleAuto = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

    /**
     * @ORM\OneToMany(targetEntity="BorrowInvest", mappedBy="bid")
     */
    private $borrowInvest;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set package
     *
     * @param string $package
     *
     * @return BorrowInfo
     */
    public function setPackage($package)
    {
        $this->package = $package;

        return $this;
    }

    /**
     * Get package
     *
     * @return string
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Set classify
     *
     * @param string $classify
     *
     * @return BorrowInfo
     */
    public function setClassify($classify)
    {
        $this->classify = $classify;

        return $this;
    }

    /**
     * Get classify
     *
     * @return string
     */
    public function getClassify()
    {
        return $this->classify;
    }

    /**
     * Set borrowName
     *
     * @param string $borrowName
     *
     * @return BorrowInfo
     */
    public function setBorrowName($borrowName)
    {
        $this->borrowName = $borrowName;

        return $this;
    }

    /**
     * Get borrowName
     *
     * @return string
     */
    public function getBorrowName()
    {
        return $this->borrowName;
    }

    /**
     * Set borrowOrder
     *
     * @param string $borrowOrder
     *
     * @return BorrowInfo
     */
    public function setBorrowOrder($borrowOrder)
    {
        $this->borrowOrder = $borrowOrder;

        return $this;
    }

    /**
     * Get borrowOrder
     *
     * @return string
     */
    public function getBorrowOrder()
    {
        return $this->borrowOrder;
    }

    /**
     * Set borrowUid
     *
     * @param integer $borrowUid
     *
     * @return BorrowInfo
     */
    public function setBorrowUid($borrowUid)
    {
        $this->borrowUid = $borrowUid;

        return $this;
    }

    /**
     * Get borrowUid
     *
     * @return integer
     */
    public function getBorrowUid()
    {
        return $this->borrowUid;
    }

    /**
     * Set borrowType
     *
     * @param boolean $borrowType
     *
     * @return BorrowInfo
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
     * Set duration
     *
     * @param integer $duration
     *
     * @return BorrowInfo
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
     * Set durationUnit
     *
     * @param string $durationUnit
     *
     * @return BorrowInfo
     */
    public function setDurationUnit($durationUnit)
    {
        $this->durationUnit = $durationUnit;

        return $this;
    }

    /**
     * Get durationUnit
     *
     * @return string
     */
    public function getDurationUnit()
    {
        return $this->durationUnit;
    }

    /**
     * Set durationMonth
     *
     * @param string $durationMonth
     *
     * @return BorrowInfo
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
     * Set durationOriginal
     *
     * @param integer $durationOriginal
     *
     * @return BorrowInfo
     */
    public function setDurationOriginal($durationOriginal)
    {
        $this->durationOriginal = $durationOriginal;

        return $this;
    }

    /**
     * Get durationOriginal
     *
     * @return integer
     */
    public function getDurationOriginal()
    {
        return $this->durationOriginal;
    }

    /**
     * Set money
     *
     * @param string $money
     *
     * @return BorrowInfo
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return string
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set interest
     *
     * @param string $interest
     *
     * @return BorrowInfo
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
     * Set finialMoney
     *
     * @param string $finialMoney
     *
     * @return BorrowInfo
     */
    public function setFinialMoney($finialMoney)
    {
        $this->finialMoney = $finialMoney;

        return $this;
    }

    /**
     * Get finialMoney
     *
     * @return string
     */
    public function getFinialMoney()
    {
        return $this->finialMoney;
    }

    /**
     * Set finialInterest
     *
     * @param string $finialInterest
     *
     * @return BorrowInfo
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
     * Set finialBaseInterest
     *
     * @param string $finialBaseInterest
     *
     * @return BorrowInfo
     */
    public function setFinialBaseInterest($finialBaseInterest)
    {
        $this->finialBaseInterest = $finialBaseInterest;

        return $this;
    }

    /**
     * Get finialBaseInterest
     *
     * @return string
     */
    public function getFinialBaseInterest()
    {
        return $this->finialBaseInterest;
    }

    /**
     * Set receiveMoney
     *
     * @param string $receiveMoney
     *
     * @return BorrowInfo
     */
    public function setReceiveMoney($receiveMoney)
    {
        $this->receiveMoney = $receiveMoney;

        return $this;
    }

    /**
     * Get receiveMoney
     *
     * @return string
     */
    public function getReceiveMoney()
    {
        return $this->receiveMoney;
    }

    /**
     * Set receiveInterest
     *
     * @param string $receiveInterest
     *
     * @return BorrowInfo
     */
    public function setReceiveInterest($receiveInterest)
    {
        $this->receiveInterest = $receiveInterest;

        return $this;
    }

    /**
     * Get receiveInterest
     *
     * @return string
     */
    public function getReceiveInterest()
    {
        return $this->receiveInterest;
    }

    /**
     * Set interestRate
     *
     * @param string $interestRate
     *
     * @return BorrowInfo
     */
    public function setInterestRate($interestRate)
    {
        $this->interestRate = $interestRate;

        return $this;
    }

    /**
     * Get interestRate
     *
     * @return string
     */
    public function getInterestRate()
    {
        return $this->interestRate;
    }

    /**
     * Set baseRate
     *
     * @param string $baseRate
     *
     * @return BorrowInfo
     */
    public function setBaseRate($baseRate)
    {
        $this->baseRate = $baseRate;

        return $this;
    }

    /**
     * Get baseRate
     *
     * @return string
     */
    public function getBaseRate()
    {
        return $this->baseRate;
    }

    /**
     * Set alsRate
     *
     * @param string $alsRate
     *
     * @return BorrowInfo
     */
    public function setAlsRate($alsRate)
    {
        $this->alsRate = $alsRate;

        return $this;
    }

    /**
     * Get alsRate
     *
     * @return string
     */
    public function getAlsRate()
    {
        return $this->alsRate;
    }

    /**
     * Set repaymentType
     *
     * @param boolean $repaymentType
     *
     * @return BorrowInfo
     */
    public function setRepaymentType($repaymentType)
    {
        $this->repaymentType = $repaymentType;

        return $this;
    }

    /**
     * Get repaymentType
     *
     * @return boolean
     */
    public function getRepaymentType()
    {
        return $this->repaymentType;
    }

    /**
     * Set repaymentDay
     *
     * @param boolean $repaymentDay
     *
     * @return BorrowInfo
     */
    public function setRepaymentDay($repaymentDay)
    {
        $this->repaymentDay = $repaymentDay;

        return $this;
    }

    /**
     * Get repaymentDay
     *
     * @return boolean
     */
    public function getRepaymentDay()
    {
        return $this->repaymentDay;
    }

    /**
     * Set borrowStatus
     *
     * @param boolean $borrowStatus
     *
     * @return BorrowInfo
     */
    public function setBorrowStatus($borrowStatus)
    {
        $this->borrowStatus = $borrowStatus;

        return $this;
    }

    /**
     * Get borrowStatus
     *
     * @return boolean
     */
    public function getBorrowStatus()
    {
        return $this->borrowStatus;
    }

    /**
     * Set cover
     *
     * @param string $cover
     *
     * @return BorrowInfo
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return string
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set startPrice
     *
     * @param string $startPrice
     *
     * @return BorrowInfo
     */
    public function setStartPrice($startPrice)
    {
        $this->startPrice = $startPrice;

        return $this;
    }

    /**
     * Get startPrice
     *
     * @return string
     */
    public function getStartPrice()
    {
        return $this->startPrice;
    }

    /**
     * Set upperPrice
     *
     * @param string $upperPrice
     *
     * @return BorrowInfo
     */
    public function setUpperPrice($upperPrice)
    {
        $this->upperPrice = $upperPrice;

        return $this;
    }

    /**
     * Get upperPrice
     *
     * @return string
     */
    public function getUpperPrice()
    {
        return $this->upperPrice;
    }

    /**
     * Set perPrice
     *
     * @param string $perPrice
     *
     * @return BorrowInfo
     */
    public function setPerPrice($perPrice)
    {
        $this->perPrice = $perPrice;

        return $this;
    }

    /**
     * Get perPrice
     *
     * @return string
     */
    public function getPerPrice()
    {
        return $this->perPrice;
    }

    /**
     * Set startTime
     *
     * @param integer $startTime
     *
     * @return BorrowInfo
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
     * Set hasMoney
     *
     * @param string $hasMoney
     *
     * @return BorrowInfo
     */
    public function setHasMoney($hasMoney)
    {
        $this->hasMoney = $hasMoney;

        return $this;
    }

    /**
     * Get hasMoney
     *
     * @return string
     */
    public function getHasMoney()
    {
        return $this->hasMoney;
    }

    /**
     * Set openTime
     *
     * @param integer $openTime
     *
     * @return BorrowInfo
     */
    public function setOpenTime($openTime)
    {
        $this->openTime = $openTime;

        return $this;
    }

    /**
     * Get openTime
     *
     * @return integer
     */
    public function getOpenTime()
    {
        return $this->openTime;
    }

    /**
     * Set endTime
     *
     * @param integer $endTime
     *
     * @return BorrowInfo
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
     * @return BorrowInfo
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
     * @return BorrowInfo
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
     * Set isShow
     *
     * @param boolean $isShow
     *
     * @return BorrowInfo
     */
    public function setIsShow($isShow)
    {
        $this->isShow = $isShow;

        return $this;
    }

    /**
     * Get isShow
     *
     * @return boolean
     */
    public function getIsShow()
    {
        return $this->isShow;
    }

    /**
     * Set isAuto
     *
     * @param boolean $isAuto
     *
     * @return BorrowInfo
     */
    public function setIsAuto($isAuto)
    {
        $this->isAuto = $isAuto;

        return $this;
    }

    /**
     * Get isAuto
     *
     * @return boolean
     */
    public function getIsAuto()
    {
        return $this->isAuto;
    }

    /**
     * Set isOverdue
     *
     * @param boolean $isOverdue
     *
     * @return BorrowInfo
     */
    public function setIsOverdue($isOverdue)
    {
        $this->isOverdue = $isOverdue;

        return $this;
    }

    /**
     * Get isOverdue
     *
     * @return boolean
     */
    public function getIsOverdue()
    {
        return $this->isOverdue;
    }

    /**
     * Set isLoan
     *
     * @param boolean $isLoan
     *
     * @return BorrowInfo
     */
    public function setIsLoan($isLoan)
    {
        $this->isLoan = $isLoan;

        return $this;
    }

    /**
     * Get isLoan
     *
     * @return boolean
     */
    public function getIsLoan()
    {
        return $this->isLoan;
    }

    /**
     * Set couponsType
     *
     * @param boolean $couponsType
     *
     * @return BorrowInfo
     */
    public function setCouponsType($couponsType)
    {
        $this->couponsType = $couponsType;

        return $this;
    }

    /**
     * Get couponsType
     *
     * @return boolean
     */
    public function getCouponsType()
    {
        return $this->couponsType;
    }

    /**
     * Set hits
     *
     * @param integer $hits
     *
     * @return BorrowInfo
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
     * Set risk
     *
     * @param string $risk
     *
     * @return BorrowInfo
     */
    public function setRisk($risk)
    {
        $this->risk = $risk;

        return $this;
    }

    /**
     * Get risk
     *
     * @return string
     */
    public function getRisk()
    {
        return $this->risk;
    }

    /**
     * Set danbaoName
     *
     * @param string $danbaoName
     *
     * @return BorrowInfo
     */
    public function setDanbaoName($danbaoName)
    {
        $this->danbaoName = $danbaoName;

        return $this;
    }

    /**
     * Get danbaoName
     *
     * @return string
     */
    public function getDanbaoName()
    {
        return $this->danbaoName;
    }

    /**
     * Set zhaiwuName
     *
     * @param string $zhaiwuName
     *
     * @return BorrowInfo
     */
    public function setZhaiwuName($zhaiwuName)
    {
        $this->zhaiwuName = $zhaiwuName;

        return $this;
    }

    /**
     * Get zhaiwuName
     *
     * @return string
     */
    public function getZhaiwuName()
    {
        return $this->zhaiwuName;
    }

    /**
     * Set zhaiwuIdcard
     *
     * @param string $zhaiwuIdcard
     *
     * @return BorrowInfo
     */
    public function setZhaiwuIdcard($zhaiwuIdcard)
    {
        $this->zhaiwuIdcard = $zhaiwuIdcard;

        return $this;
    }

    /**
     * Get zhaiwuIdcard
     *
     * @return string
     */
    public function getZhaiwuIdcard()
    {
        return $this->zhaiwuIdcard;
    }

    /**
     * Set zhaiwuCompany
     *
     * @param string $zhaiwuCompany
     *
     * @return BorrowInfo
     */
    public function setZhaiwuCompany($zhaiwuCompany)
    {
        $this->zhaiwuCompany = $zhaiwuCompany;

        return $this;
    }

    /**
     * Get zhaiwuCompany
     *
     * @return string
     */
    public function getZhaiwuCompany()
    {
        return $this->zhaiwuCompany;
    }

    /**
     * Set pactType
     *
     * @param boolean $pactType
     *
     * @return BorrowInfo
     */
    public function setPactType($pactType)
    {
        $this->pactType = $pactType;

        return $this;
    }

    /**
     * Get pactType
     *
     * @return boolean
     */
    public function getPactType()
    {
        return $this->pactType;
    }

    /**
     * Set pactZhang
     *
     * @param boolean $pactZhang
     *
     * @return BorrowInfo
     */
    public function setPactZhang($pactZhang)
    {
        $this->pactZhang = $pactZhang;

        return $this;
    }

    /**
     * Get pactZhang
     *
     * @return boolean
     */
    public function getPactZhang()
    {
        return $this->pactZhang;
    }

    /**
     * Set rongziyongtu
     *
     * @param string $rongziyongtu
     *
     * @return BorrowInfo
     */
    public function setRongziyongtu($rongziyongtu)
    {
        $this->rongziyongtu = $rongziyongtu;

        return $this;
    }

    /**
     * Get rongziyongtu
     *
     * @return string
     */
    public function getRongziyongtu()
    {
        return $this->rongziyongtu;
    }

    /**
     * Set saleAuto
     *
     * @param boolean $saleAuto
     *
     * @return BorrowInfo
     */
    public function setSaleAuto($saleAuto)
    {
        $this->saleAuto = $saleAuto;

        return $this;
    }

    /**
     * Get saleAuto
     *
     * @return boolean
     */
    public function getSaleAuto()
    {
        return $this->saleAuto;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return BorrowInfo
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
     * Constructor
     */
    public function __construct()
    {
        $this->borrowInvest = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add borrowInvest
     *
     * @param \AdminBundle\Entity\BorrowInvest $borrowInvest
     *
     * @return BorrowInfo
     */
    public function addBorrowInvest(\AdminBundle\Entity\BorrowInvest $borrowInvest)
    {
        $this->borrowInvest[] = $borrowInvest;

        return $this;
    }

    /**
     * Remove borrowInvest
     *
     * @param \AdminBundle\Entity\BorrowInvest $borrowInvest
     */
    public function removeBorrowInvest(\AdminBundle\Entity\BorrowInvest $borrowInvest)
    {
        $this->borrowInvest->removeElement($borrowInvest);
    }

    /**
     * Get borrowInvest
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBorrowInvest()
    {
        return $this->borrowInvest;
    }

    /**
     * Set investMoney
     *
     * @param string $investMoney
     *
     * @return BorrowInfo
     */
    public function setInvestMoney($investMoney)
    {
        $this->investMoney = $investMoney;

        return $this;
    }

    /**
     * Get investMoney
     *
     * @return string
     */
    public function getInvestMoney()
    {
        return $this->investMoney;
    }
}
