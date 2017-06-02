<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reward
 *
 * @ORM\Table(name="reward", indexes={@ORM\Index(name="order_no", columns={"order_no"})})
 * @ORM\Entity
 */
class Reward
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer", nullable=false)
     */
    private $bid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="invest_id", type="integer", nullable=false)
     */
    private $investId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="target_type", type="integer", nullable=false)
     */
    private $targetType = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $value = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="string", length=100, nullable=false)
     */
    private $info = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="order_no", type="string", length=50, nullable=false)
     */
    private $orderNo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="order_no_pay", type="string", length=50, nullable=false)
     */
    private $orderNoPay = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '1';

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
     * @return Reward
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
     * @return Reward
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
     * @return Reward
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
     * Set type
     *
     * @param integer $type
     *
     * @return Reward
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set targetType
     *
     * @param integer $targetType
     *
     * @return Reward
     */
    public function setTargetType($targetType)
    {
        $this->targetType = $targetType;

        return $this;
    }

    /**
     * Get targetType
     *
     * @return integer
     */
    public function getTargetType()
    {
        return $this->targetType;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return Reward
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return Reward
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
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return Reward
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * Get addTime
     *
     * @return integer
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * Set orderNo
     *
     * @param string $orderNo
     *
     * @return Reward
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
     * Set orderNoPay
     *
     * @param string $orderNoPay
     *
     * @return Reward
     */
    public function setOrderNoPay($orderNoPay)
    {
        $this->orderNoPay = $orderNoPay;

        return $this;
    }

    /**
     * Get orderNoPay
     *
     * @return string
     */
    public function getOrderNoPay()
    {
        return $this->orderNoPay;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Reward
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
