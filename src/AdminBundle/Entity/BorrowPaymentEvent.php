<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BorrowPaymentEvent
 *
 * @ORM\Table(name="borrow_payment_event", uniqueConstraints={@ORM\UniqueConstraint(name="order_no", columns={"order_no"})})
 * @ORM\Entity
 */
class BorrowPaymentEvent
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
     * @ORM\Column(name="money", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $money = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="repay_date", type="integer", nullable=true)
     */
    private $repayDate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="order_no", type="string", length=50, nullable=true)
     */
    private $orderNo = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="e_status", type="boolean", nullable=true)
     */
    private $eStatus = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="eid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eid;



    /**
     * Set uid
     *
     * @param integer $uid
     *
     * @return BorrowPaymentEvent
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
     * Set money
     *
     * @param string $money
     *
     * @return BorrowPaymentEvent
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
     * Set repayDate
     *
     * @param integer $repayDate
     *
     * @return BorrowPaymentEvent
     */
    public function setRepayDate($repayDate)
    {
        $this->repayDate = $repayDate;

        return $this;
    }

    /**
     * Get repayDate
     *
     * @return integer
     */
    public function getRepayDate()
    {
        return $this->repayDate;
    }

    /**
     * Set orderNo
     *
     * @param string $orderNo
     *
     * @return BorrowPaymentEvent
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
     * Set eStatus
     *
     * @param boolean $eStatus
     *
     * @return BorrowPaymentEvent
     */
    public function setEStatus($eStatus)
    {
        $this->eStatus = $eStatus;

        return $this;
    }

    /**
     * Get eStatus
     *
     * @return boolean
     */
    public function getEStatus()
    {
        return $this->eStatus;
    }

    /**
     * Get eid
     *
     * @return integer
     */
    public function getEid()
    {
        return $this->eid;
    }
}
