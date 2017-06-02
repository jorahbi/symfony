<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BorrowRepayment
 *
 * @ORM\Table(name="borrow_repayment", uniqueConstraints={@ORM\UniqueConstraint(name="order_no", columns={"order_no"})}, indexes={@ORM\Index(name="invest_id", columns={"invest_id", "status", "deadline"}), @ORM\Index(name="borrow_id", columns={"bid", "sort_order", "receiver"}), @ORM\Index(name="pay_date", columns={"pay_date"})})
 * @ORM\Entity
 */
class BorrowRepayment
{
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
     * @ORM\Column(name="pay_id", type="integer", nullable=false)
     */
    private $payId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="receiver", type="integer", nullable=false)
     */
    private $receiver = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="invest_id", type="integer", nullable=false)
     */
    private $investId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="capital", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $capital = '0.00';

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
     * @ORM\Column(name="receive_interest", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $receiveInterest = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="receive_capital", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $receiveCapital = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="wait_notice", type="boolean", nullable=false)
     */
    private $waitNotice = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sort_order", type="boolean", nullable=false)
     */
    private $sortOrder = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="total", type="boolean", nullable=false)
     */
    private $total = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="repayment_time", type="integer", nullable=false)
     */
    private $repaymentTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="deadline", type="integer", nullable=false)
     */
    private $deadline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pay_date", type="integer", nullable=false)
     */
    private $payDate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="repayment_day", type="integer", nullable=false)
     */
    private $repaymentDay = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="order_no", type="string", length=50, nullable=false)
     */
    private $orderNo = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set bid
     *
     * @param integer $bid
     *
     * @return BorrowRepayment
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
     * Set debtId
     *
     * @param integer $debtId
     *
     * @return BorrowRepayment
     */
    public function setDebtId($debtId)
    {
        $this->debtId = $debtId;

        return $this;
    }

    /**
     * Get debtId
     *
     * @return integer
     */
    public function getDebtId()
    {
        return $this->debtId;
    }

    /**
     * Set payId
     *
     * @param integer $payId
     *
     * @return BorrowRepayment
     */
    public function setPayId($payId)
    {
        $this->payId = $payId;

        return $this;
    }

    /**
     * Get payId
     *
     * @return integer
     */
    public function getPayId()
    {
        return $this->payId;
    }

    /**
     * Set receiver
     *
     * @param integer $receiver
     *
     * @return BorrowRepayment
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return integer
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set investId
     *
     * @param integer $investId
     *
     * @return BorrowRepayment
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
     * Set capital
     *
     * @param string $capital
     *
     * @return BorrowRepayment
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
     * @return BorrowRepayment
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
     * Set fee
     *
     * @param string $fee
     *
     * @return BorrowRepayment
     */
    public function setFee($fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * Get fee
     *
     * @return string
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Set receiveInterest
     *
     * @param string $receiveInterest
     *
     * @return BorrowRepayment
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
     * Set receiveCapital
     *
     * @param string $receiveCapital
     *
     * @return BorrowRepayment
     */
    public function setReceiveCapital($receiveCapital)
    {
        $this->receiveCapital = $receiveCapital;

        return $this;
    }

    /**
     * Get receiveCapital
     *
     * @return string
     */
    public function getReceiveCapital()
    {
        return $this->receiveCapital;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return BorrowRepayment
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
     * Set waitNotice
     *
     * @param boolean $waitNotice
     *
     * @return BorrowRepayment
     */
    public function setWaitNotice($waitNotice)
    {
        $this->waitNotice = $waitNotice;

        return $this;
    }

    /**
     * Get waitNotice
     *
     * @return boolean
     */
    public function getWaitNotice()
    {
        return $this->waitNotice;
    }

    /**
     * Set sortOrder
     *
     * @param boolean $sortOrder
     *
     * @return BorrowRepayment
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return boolean
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set total
     *
     * @param boolean $total
     *
     * @return BorrowRepayment
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return boolean
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set repaymentTime
     *
     * @param integer $repaymentTime
     *
     * @return BorrowRepayment
     */
    public function setRepaymentTime($repaymentTime)
    {
        $this->repaymentTime = $repaymentTime;

        return $this;
    }

    /**
     * Get repaymentTime
     *
     * @return integer
     */
    public function getRepaymentTime()
    {
        return $this->repaymentTime;
    }

    /**
     * Set deadline
     *
     * @param integer $deadline
     *
     * @return BorrowRepayment
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
     * Set payDate
     *
     * @param integer $payDate
     *
     * @return BorrowRepayment
     */
    public function setPayDate($payDate)
    {
        $this->payDate = $payDate;

        return $this;
    }

    /**
     * Get payDate
     *
     * @return integer
     */
    public function getPayDate()
    {
        return $this->payDate;
    }

    /**
     * Set repaymentDay
     *
     * @param integer $repaymentDay
     *
     * @return BorrowRepayment
     */
    public function setRepaymentDay($repaymentDay)
    {
        $this->repaymentDay = $repaymentDay;

        return $this;
    }

    /**
     * Get repaymentDay
     *
     * @return integer
     */
    public function getRepaymentDay()
    {
        return $this->repaymentDay;
    }

    /**
     * Set orderNo
     *
     * @param string $orderNo
     *
     * @return BorrowRepayment
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
