<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BorrowPayment
 *
 * @ORM\Table(name="borrow_payment")
 * @ORM\Entity
 */
class BorrowPayment
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
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="total_money", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $totalMoney = '0.00';

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
     * @ORM\Column(name="pay_interest", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $payInterest = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="base_interest", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $baseInterest = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="deadline", type="integer", nullable=false)
     */
    private $deadline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="deadline_date", type="integer", nullable=false)
     */
    private $deadlineDate = '0';

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
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_overdue", type="boolean", nullable=false)
     */
    private $isOverdue = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="order_no", type="string", length=50, nullable=false)
     */
    private $orderNo = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="deal_status", type="boolean", nullable=false)
     */
    private $dealStatus;

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
     * @return BorrowPayment
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
     * Set uid
     *
     * @param integer $uid
     *
     * @return BorrowPayment
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
     * Set totalMoney
     *
     * @param string $totalMoney
     *
     * @return BorrowPayment
     */
    public function setTotalMoney($totalMoney)
    {
        $this->totalMoney = $totalMoney;

        return $this;
    }

    /**
     * Get totalMoney
     *
     * @return string
     */
    public function getTotalMoney()
    {
        return $this->totalMoney;
    }

    /**
     * Set capital
     *
     * @param string $capital
     *
     * @return BorrowPayment
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
     * @return BorrowPayment
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
     * Set payInterest
     *
     * @param string $payInterest
     *
     * @return BorrowPayment
     */
    public function setPayInterest($payInterest)
    {
        $this->payInterest = $payInterest;

        return $this;
    }

    /**
     * Get payInterest
     *
     * @return string
     */
    public function getPayInterest()
    {
        return $this->payInterest;
    }

    /**
     * Set baseInterest
     *
     * @param string $baseInterest
     *
     * @return BorrowPayment
     */
    public function setBaseInterest($baseInterest)
    {
        $this->baseInterest = $baseInterest;

        return $this;
    }

    /**
     * Get baseInterest
     *
     * @return string
     */
    public function getBaseInterest()
    {
        return $this->baseInterest;
    }

    /**
     * Set deadline
     *
     * @param integer $deadline
     *
     * @return BorrowPayment
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
     * Set deadlineDate
     *
     * @param integer $deadlineDate
     *
     * @return BorrowPayment
     */
    public function setDeadlineDate($deadlineDate)
    {
        $this->deadlineDate = $deadlineDate;

        return $this;
    }

    /**
     * Get deadlineDate
     *
     * @return integer
     */
    public function getDeadlineDate()
    {
        return $this->deadlineDate;
    }

    /**
     * Set sortOrder
     *
     * @param boolean $sortOrder
     *
     * @return BorrowPayment
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
     * @return BorrowPayment
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
     * Set status
     *
     * @param boolean $status
     *
     * @return BorrowPayment
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
     * Set isOverdue
     *
     * @param boolean $isOverdue
     *
     * @return BorrowPayment
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
     * Set orderNo
     *
     * @param string $orderNo
     *
     * @return BorrowPayment
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
     * Set dealStatus
     *
     * @param boolean $dealStatus
     *
     * @return BorrowPayment
     */
    public function setDealStatus($dealStatus)
    {
        $this->dealStatus = $dealStatus;

        return $this;
    }

    /**
     * Get dealStatus
     *
     * @return boolean
     */
    public function getDealStatus()
    {
        return $this->dealStatus;
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
