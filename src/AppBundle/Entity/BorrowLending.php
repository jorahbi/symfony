<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BorrowLending
 *
 * @ORM\Table(name="borrow_lending")
 * @ORM\Entity
 */
class BorrowLending
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="lending_status", type="boolean", nullable=false)
     */
    private $lendingStatus = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="loan_fee", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $loanFee = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="order_no", type="string", length=32, nullable=false)
     */
    private $orderNo = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="op_apply", type="integer", nullable=false)
     */
    private $opApply = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="apply_time", type="integer", nullable=false)
     */
    private $applyTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="op_verify", type="integer", nullable=false)
     */
    private $opVerify = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="verify_time", type="integer", nullable=false)
     */
    private $verifyTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="op_confirm", type="integer", nullable=false)
     */
    private $opConfirm = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="confirm_time", type="integer", nullable=false)
     */
    private $confirmTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bid;

    /**
     * @var integer
     *
     * @ORM\Column(name="debt_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $debtId;



    /**
     * Set lendingStatus
     *
     * @param boolean $lendingStatus
     *
     * @return BorrowLending
     */
    public function setLendingStatus($lendingStatus)
    {
        $this->lendingStatus = $lendingStatus;

        return $this;
    }

    /**
     * Get lendingStatus
     *
     * @return boolean
     */
    public function getLendingStatus()
    {
        return $this->lendingStatus;
    }

    /**
     * Set loanFee
     *
     * @param string $loanFee
     *
     * @return BorrowLending
     */
    public function setLoanFee($loanFee)
    {
        $this->loanFee = $loanFee;

        return $this;
    }

    /**
     * Get loanFee
     *
     * @return string
     */
    public function getLoanFee()
    {
        return $this->loanFee;
    }

    /**
     * Set orderNo
     *
     * @param string $orderNo
     *
     * @return BorrowLending
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
     * Set opApply
     *
     * @param integer $opApply
     *
     * @return BorrowLending
     */
    public function setOpApply($opApply)
    {
        $this->opApply = $opApply;

        return $this;
    }

    /**
     * Get opApply
     *
     * @return integer
     */
    public function getOpApply()
    {
        return $this->opApply;
    }

    /**
     * Set applyTime
     *
     * @param integer $applyTime
     *
     * @return BorrowLending
     */
    public function setApplyTime($applyTime)
    {
        $this->applyTime = $applyTime;

        return $this;
    }

    /**
     * Get applyTime
     *
     * @return integer
     */
    public function getApplyTime()
    {
        return $this->applyTime;
    }

    /**
     * Set opVerify
     *
     * @param integer $opVerify
     *
     * @return BorrowLending
     */
    public function setOpVerify($opVerify)
    {
        $this->opVerify = $opVerify;

        return $this;
    }

    /**
     * Get opVerify
     *
     * @return integer
     */
    public function getOpVerify()
    {
        return $this->opVerify;
    }

    /**
     * Set verifyTime
     *
     * @param integer $verifyTime
     *
     * @return BorrowLending
     */
    public function setVerifyTime($verifyTime)
    {
        $this->verifyTime = $verifyTime;

        return $this;
    }

    /**
     * Get verifyTime
     *
     * @return integer
     */
    public function getVerifyTime()
    {
        return $this->verifyTime;
    }

    /**
     * Set opConfirm
     *
     * @param integer $opConfirm
     *
     * @return BorrowLending
     */
    public function setOpConfirm($opConfirm)
    {
        $this->opConfirm = $opConfirm;

        return $this;
    }

    /**
     * Get opConfirm
     *
     * @return integer
     */
    public function getOpConfirm()
    {
        return $this->opConfirm;
    }

    /**
     * Set confirmTime
     *
     * @param integer $confirmTime
     *
     * @return BorrowLending
     */
    public function setConfirmTime($confirmTime)
    {
        $this->confirmTime = $confirmTime;

        return $this;
    }

    /**
     * Get confirmTime
     *
     * @return integer
     */
    public function getConfirmTime()
    {
        return $this->confirmTime;
    }

    /**
     * Set bid
     *
     * @param integer $bid
     *
     * @return BorrowLending
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
     * @return BorrowLending
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
}
