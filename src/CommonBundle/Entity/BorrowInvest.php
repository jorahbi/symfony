<?php

namespace CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BorrowInvest
 *
 * @ORM\Table(name="borrow_invest", indexes={@ORM\Index(name="investor_uid", columns={"uid", "status"}), @ORM\Index(name="borrow_id", columns={"bid", "uid", "status"}), @ORM\Index(name="investor_uid2", columns={"uid"})})
 * @ORM\Entity
 */
class BorrowInvest
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
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer", nullable=false)
     */
    private $bid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="debt_id", type="integer", nullable=false)
     */
    private $debtId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="capital", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $capital = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="capital_year", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $capitalYear = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="interest", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $interest = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="fee", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $fee = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="receive_capital", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $receiveCapital = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="receive_interest", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $receiveInterest = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="paid_fee", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $paidFee = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="deal_status", type="boolean", nullable=false)
     */
    private $dealStatus = '2';

    /**
     * @var string
     *
     * @ORM\Column(name="discount", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $discount = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="order_no", type="string", length=32, nullable=false)
     */
    private $orderNo = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_ms", type="smallint", nullable=false)
     */
    private $addMs = '0000';

    /**
     * @var integer
     *
     * @ORM\Column(name="deadline", type="integer", nullable=false)
     */
    private $deadline = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_auto", type="boolean", nullable=false)
     */
    private $isAuto = '2';

    /**
     * @var boolean
     *
     * @ORM\Column(name="client", type="boolean", nullable=false)
     */
    private $client = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="service_id", type="integer", nullable=true)
     */
    private $serviceId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sale", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $sale = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="job_num", type="string", length=10, nullable=false)
     */
    private $jobNum = '';

    /**
     * @var string
     *
     * @ORM\Column(name="brokerage", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $brokerage = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="brokerage_ext", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $brokerageExt = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="brokerage_type", type="boolean", nullable=false)
     */
    private $brokerageType = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_first", type="boolean", nullable=false)
     */
    private $isFirst = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="rate", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $rate = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_beyond", type="integer", nullable=true)
     */
    private $isBeyond = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="add_ip", type="string", length=15, nullable=true)
     */
    private $addIp = '';


}

