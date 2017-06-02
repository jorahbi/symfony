<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OverdueProfitDetail
 *
 * @ORM\Table(name="overdue_profit_detail", indexes={@ORM\Index(name="borrower_id", columns={"borrower_id"}), @ORM\Index(name="subject_id", columns={"subject_id"}), @ORM\Index(name="bidder_id", columns={"bidder_id"}), @ORM\Index(name="bid_record_id", columns={"bid_record_id"}), @ORM\Index(name="repay_id", columns={"repay_id"}), @ORM\Index(name="repay_detail_id", columns={"repay_detail_id"}), @ORM\Index(name="bid_profit_id", columns={"bid_profit_id"}), @ORM\Index(name="overdue_fee_id", columns={"overdue_fee_id"})})
 * @ORM\Entity
 */
class OverdueProfitDetail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="borrower_id", type="integer", nullable=true)
     */
    private $borrowerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="subject_id", type="integer", nullable=true)
     */
    private $subjectId;

    /**
     * @var integer
     *
     * @ORM\Column(name="bidder_id", type="integer", nullable=true)
     */
    private $bidderId;

    /**
     * @var integer
     *
     * @ORM\Column(name="bid_record_id", type="integer", nullable=true)
     */
    private $bidRecordId;

    /**
     * @var integer
     *
     * @ORM\Column(name="repay_id", type="integer", nullable=true)
     */
    private $repayId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="repay_periods", type="boolean", nullable=true)
     */
    private $repayPeriods;

    /**
     * @var integer
     *
     * @ORM\Column(name="repay_detail_id", type="integer", nullable=true)
     */
    private $repayDetailId;

    /**
     * @var integer
     *
     * @ORM\Column(name="bid_profit_id", type="integer", nullable=true)
     */
    private $bidProfitId;

    /**
     * @var integer
     *
     * @ORM\Column(name="overdue_fee_id", type="integer", nullable=true)
     */
    private $overdueFeeId;

    /**
     * @var string
     *
     * @ORM\Column(name="principal", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $principal;

    /**
     * @var string
     *
     * @ORM\Column(name="rate", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $rate;

    /**
     * @var integer
     *
     * @ORM\Column(name="n_days", type="integer", nullable=true)
     */
    private $nDays;

    /**
     * @var string
     *
     * @ORM\Column(name="interest", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $interest;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set borrowerId
     *
     * @param integer $borrowerId
     *
     * @return OverdueProfitDetail
     */
    public function setBorrowerId($borrowerId)
    {
        $this->borrowerId = $borrowerId;

        return $this;
    }

    /**
     * Get borrowerId
     *
     * @return integer
     */
    public function getBorrowerId()
    {
        return $this->borrowerId;
    }

    /**
     * Set subjectId
     *
     * @param integer $subjectId
     *
     * @return OverdueProfitDetail
     */
    public function setSubjectId($subjectId)
    {
        $this->subjectId = $subjectId;

        return $this;
    }

    /**
     * Get subjectId
     *
     * @return integer
     */
    public function getSubjectId()
    {
        return $this->subjectId;
    }

    /**
     * Set bidderId
     *
     * @param integer $bidderId
     *
     * @return OverdueProfitDetail
     */
    public function setBidderId($bidderId)
    {
        $this->bidderId = $bidderId;

        return $this;
    }

    /**
     * Get bidderId
     *
     * @return integer
     */
    public function getBidderId()
    {
        return $this->bidderId;
    }

    /**
     * Set bidRecordId
     *
     * @param integer $bidRecordId
     *
     * @return OverdueProfitDetail
     */
    public function setBidRecordId($bidRecordId)
    {
        $this->bidRecordId = $bidRecordId;

        return $this;
    }

    /**
     * Get bidRecordId
     *
     * @return integer
     */
    public function getBidRecordId()
    {
        return $this->bidRecordId;
    }

    /**
     * Set repayId
     *
     * @param integer $repayId
     *
     * @return OverdueProfitDetail
     */
    public function setRepayId($repayId)
    {
        $this->repayId = $repayId;

        return $this;
    }

    /**
     * Get repayId
     *
     * @return integer
     */
    public function getRepayId()
    {
        return $this->repayId;
    }

    /**
     * Set repayPeriods
     *
     * @param boolean $repayPeriods
     *
     * @return OverdueProfitDetail
     */
    public function setRepayPeriods($repayPeriods)
    {
        $this->repayPeriods = $repayPeriods;

        return $this;
    }

    /**
     * Get repayPeriods
     *
     * @return boolean
     */
    public function getRepayPeriods()
    {
        return $this->repayPeriods;
    }

    /**
     * Set repayDetailId
     *
     * @param integer $repayDetailId
     *
     * @return OverdueProfitDetail
     */
    public function setRepayDetailId($repayDetailId)
    {
        $this->repayDetailId = $repayDetailId;

        return $this;
    }

    /**
     * Get repayDetailId
     *
     * @return integer
     */
    public function getRepayDetailId()
    {
        return $this->repayDetailId;
    }

    /**
     * Set bidProfitId
     *
     * @param integer $bidProfitId
     *
     * @return OverdueProfitDetail
     */
    public function setBidProfitId($bidProfitId)
    {
        $this->bidProfitId = $bidProfitId;

        return $this;
    }

    /**
     * Get bidProfitId
     *
     * @return integer
     */
    public function getBidProfitId()
    {
        return $this->bidProfitId;
    }

    /**
     * Set overdueFeeId
     *
     * @param integer $overdueFeeId
     *
     * @return OverdueProfitDetail
     */
    public function setOverdueFeeId($overdueFeeId)
    {
        $this->overdueFeeId = $overdueFeeId;

        return $this;
    }

    /**
     * Get overdueFeeId
     *
     * @return integer
     */
    public function getOverdueFeeId()
    {
        return $this->overdueFeeId;
    }

    /**
     * Set principal
     *
     * @param string $principal
     *
     * @return OverdueProfitDetail
     */
    public function setPrincipal($principal)
    {
        $this->principal = $principal;

        return $this;
    }

    /**
     * Get principal
     *
     * @return string
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Set rate
     *
     * @param string $rate
     *
     * @return OverdueProfitDetail
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set nDays
     *
     * @param integer $nDays
     *
     * @return OverdueProfitDetail
     */
    public function setNDays($nDays)
    {
        $this->nDays = $nDays;

        return $this;
    }

    /**
     * Get nDays
     *
     * @return integer
     */
    public function getNDays()
    {
        return $this->nDays;
    }

    /**
     * Set interest
     *
     * @param string $interest
     *
     * @return OverdueProfitDetail
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return OverdueProfitDetail
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return OverdueProfitDetail
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
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
