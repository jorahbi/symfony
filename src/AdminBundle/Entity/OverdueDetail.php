<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OverdueDetail
 *
 * @ORM\Table(name="overdue_detail", indexes={@ORM\Index(name="borrower_id", columns={"borrower_id"}), @ORM\Index(name="subject_id", columns={"subject_id"}), @ORM\Index(name="repay_id", columns={"repay_id"}), @ORM\Index(name="repay_fee_id", columns={"repay_fee_id"})})
 * @ORM\Entity
 */
class OverdueDetail
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
     * @ORM\Column(name="repay_fee_id", type="integer", nullable=true)
     */
    private $repayFeeId;

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
     * @return OverdueDetail
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
     * @return OverdueDetail
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
     * Set repayId
     *
     * @param integer $repayId
     *
     * @return OverdueDetail
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
     * @return OverdueDetail
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
     * Set repayFeeId
     *
     * @param integer $repayFeeId
     *
     * @return OverdueDetail
     */
    public function setRepayFeeId($repayFeeId)
    {
        $this->repayFeeId = $repayFeeId;

        return $this;
    }

    /**
     * Get repayFeeId
     *
     * @return integer
     */
    public function getRepayFeeId()
    {
        return $this->repayFeeId;
    }

    /**
     * Set principal
     *
     * @param string $principal
     *
     * @return OverdueDetail
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
     * @return OverdueDetail
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
     * @return OverdueDetail
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
     * @return OverdueDetail
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
     * @return OverdueDetail
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
     * @return OverdueDetail
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
