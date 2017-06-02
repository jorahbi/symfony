<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvestRefund
 *
 * @ORM\Table(name="invest_refund", uniqueConstraints={@ORM\UniqueConstraint(name="out_trade_no", columns={"out_trade_no"})})
 * @ORM\Entity
 */
class InvestRefund
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=true)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer", nullable=true)
     */
    private $bid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="invest_id", type="integer", nullable=true)
     */
    private $investId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="out_trade_no", type="string", length=50, nullable=true)
     */
    private $outTradeNo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="orig_outer_trade_no", type="string", length=50, nullable=true)
     */
    private $origOuterTradeNo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="refund_amount", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $refundAmount = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="string", length=255, nullable=true)
     */
    private $summary = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="refund_status", type="boolean", nullable=true)
     */
    private $refundStatus = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="string", length=255, nullable=true)
     */
    private $info = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="refund_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refundId;



    /**
     * Set uid
     *
     * @param integer $uid
     *
     * @return InvestRefund
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
     * Set bid
     *
     * @param integer $bid
     *
     * @return InvestRefund
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
     * @return InvestRefund
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
     * Set outTradeNo
     *
     * @param string $outTradeNo
     *
     * @return InvestRefund
     */
    public function setOutTradeNo($outTradeNo)
    {
        $this->outTradeNo = $outTradeNo;

        return $this;
    }

    /**
     * Get outTradeNo
     *
     * @return string
     */
    public function getOutTradeNo()
    {
        return $this->outTradeNo;
    }

    /**
     * Set origOuterTradeNo
     *
     * @param string $origOuterTradeNo
     *
     * @return InvestRefund
     */
    public function setOrigOuterTradeNo($origOuterTradeNo)
    {
        $this->origOuterTradeNo = $origOuterTradeNo;

        return $this;
    }

    /**
     * Get origOuterTradeNo
     *
     * @return string
     */
    public function getOrigOuterTradeNo()
    {
        return $this->origOuterTradeNo;
    }

    /**
     * Set refundAmount
     *
     * @param string $refundAmount
     *
     * @return InvestRefund
     */
    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;

        return $this;
    }

    /**
     * Get refundAmount
     *
     * @return string
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * Set summary
     *
     * @param string $summary
     *
     * @return InvestRefund
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set refundStatus
     *
     * @param boolean $refundStatus
     *
     * @return InvestRefund
     */
    public function setRefundStatus($refundStatus)
    {
        $this->refundStatus = $refundStatus;

        return $this;
    }

    /**
     * Get refundStatus
     *
     * @return boolean
     */
    public function getRefundStatus()
    {
        return $this->refundStatus;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return InvestRefund
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
     * Get refundId
     *
     * @return integer
     */
    public function getRefundId()
    {
        return $this->refundId;
    }
}
