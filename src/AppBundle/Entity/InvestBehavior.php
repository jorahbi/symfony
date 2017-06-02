<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvestBehavior
 *
 * @ORM\Table(name="invest_behavior", indexes={@ORM\Index(name="uid", columns={"uid"}), @ORM\Index(name="createtime", columns={"createtime"}), @ORM\Index(name="type", columns={"type"})})
 * @ORM\Entity
 */
class InvestBehavior
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid;

    /**
     * @var integer
     *
     * @ORM\Column(name="activity_id", type="integer", nullable=false)
     */
    private $activityId = '0';

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
     * @var string
     *
     * @ORM\Column(name="money", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $money;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="order_no", type="string", length=21, nullable=false)
     */
    private $orderNo;

    /**
     * @var string
     *
     * @ORM\Column(name="extra", type="text", length=65535, nullable=true)
     */
    private $extra;

    /**
     * @var integer
     *
     * @ORM\Column(name="createtime", type="integer", nullable=false)
     */
    private $createtime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set uid
     *
     * @param integer $uid
     *
     * @return InvestBehavior
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
     * Set activityId
     *
     * @param integer $activityId
     *
     * @return InvestBehavior
     */
    public function setActivityId($activityId)
    {
        $this->activityId = $activityId;

        return $this;
    }

    /**
     * Get activityId
     *
     * @return integer
     */
    public function getActivityId()
    {
        return $this->activityId;
    }

    /**
     * Set bid
     *
     * @param integer $bid
     *
     * @return InvestBehavior
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
     * @return InvestBehavior
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
     * Set money
     *
     * @param string $money
     *
     * @return InvestBehavior
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
     * Set status
     *
     * @param boolean $status
     *
     * @return InvestBehavior
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
     * Set type
     *
     * @param boolean $type
     *
     * @return InvestBehavior
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set orderNo
     *
     * @param string $orderNo
     *
     * @return InvestBehavior
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
     * Set extra
     *
     * @param string $extra
     *
     * @return InvestBehavior
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * Get extra
     *
     * @return string
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Set createtime
     *
     * @param integer $createtime
     *
     * @return InvestBehavior
     */
    public function setCreatetime($createtime)
    {
        $this->createtime = $createtime;

        return $this;
    }

    /**
     * Get createtime
     *
     * @return integer
     */
    public function getCreatetime()
    {
        return $this->createtime;
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
