<?php

namespace CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BorrowInfo
 *
 * @ORM\Table(name="borrow_info", indexes={@ORM\Index(name="type_list", columns={"borrow_type", "is_show"})})
 * @ORM\Entity
 */
class BorrowInfo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @ORM\Column(name="borrow_uid", type="integer", nullable=false)
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


}

