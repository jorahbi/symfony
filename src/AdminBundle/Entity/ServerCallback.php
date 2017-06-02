<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerCallback
 *
 * @ORM\Table(name="server_callback", indexes={@ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class ServerCallback
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="add_time", type="datetime", nullable=false)
     */
    private $addTime = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_rule", type="integer", nullable=false)
     */
    private $addRule;

    /**
     * @var string
     *
     * @ORM\Column(name="add_reason", type="string", length=255, nullable=false)
     */
    private $addReason;

    /**
     * @var integer
     *
     * @ORM\Column(name="reason_type", type="integer", nullable=false)
     */
    private $reasonType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="call_in_time", type="datetime", nullable=false)
     */
    private $callInTime;

    /**
     * @var string
     *
     * @ORM\Column(name="call_back_reason", type="string", length=100, nullable=false)
     */
    private $callBackReason;

    /**
     * @var integer
     *
     * @ORM\Column(name="call_back_status", type="integer", nullable=false)
     */
    private $callBackStatus = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="call_back_rule", type="integer", nullable=false)
     */
    private $callBackRule;

    /**
     * @var string
     *
     * @ORM\Column(name="record_time", type="string", length=50, nullable=false)
     */
    private $recordTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="rank", type="integer", nullable=false)
     */
    private $rank;

    /**
     * @var integer
     *
     * @ORM\Column(name="service_id", type="integer", nullable=false)
     */
    private $serviceId = '0';

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
     * @return ServerCallback
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
     * Set addTime
     *
     * @param \DateTime $addTime
     *
     * @return ServerCallback
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * Get addTime
     *
     * @return \DateTime
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * Set addRule
     *
     * @param integer $addRule
     *
     * @return ServerCallback
     */
    public function setAddRule($addRule)
    {
        $this->addRule = $addRule;

        return $this;
    }

    /**
     * Get addRule
     *
     * @return integer
     */
    public function getAddRule()
    {
        return $this->addRule;
    }

    /**
     * Set addReason
     *
     * @param string $addReason
     *
     * @return ServerCallback
     */
    public function setAddReason($addReason)
    {
        $this->addReason = $addReason;

        return $this;
    }

    /**
     * Get addReason
     *
     * @return string
     */
    public function getAddReason()
    {
        return $this->addReason;
    }

    /**
     * Set reasonType
     *
     * @param integer $reasonType
     *
     * @return ServerCallback
     */
    public function setReasonType($reasonType)
    {
        $this->reasonType = $reasonType;

        return $this;
    }

    /**
     * Get reasonType
     *
     * @return integer
     */
    public function getReasonType()
    {
        return $this->reasonType;
    }

    /**
     * Set callInTime
     *
     * @param \DateTime $callInTime
     *
     * @return ServerCallback
     */
    public function setCallInTime($callInTime)
    {
        $this->callInTime = $callInTime;

        return $this;
    }

    /**
     * Get callInTime
     *
     * @return \DateTime
     */
    public function getCallInTime()
    {
        return $this->callInTime;
    }

    /**
     * Set callBackReason
     *
     * @param string $callBackReason
     *
     * @return ServerCallback
     */
    public function setCallBackReason($callBackReason)
    {
        $this->callBackReason = $callBackReason;

        return $this;
    }

    /**
     * Get callBackReason
     *
     * @return string
     */
    public function getCallBackReason()
    {
        return $this->callBackReason;
    }

    /**
     * Set callBackStatus
     *
     * @param integer $callBackStatus
     *
     * @return ServerCallback
     */
    public function setCallBackStatus($callBackStatus)
    {
        $this->callBackStatus = $callBackStatus;

        return $this;
    }

    /**
     * Get callBackStatus
     *
     * @return integer
     */
    public function getCallBackStatus()
    {
        return $this->callBackStatus;
    }

    /**
     * Set callBackRule
     *
     * @param integer $callBackRule
     *
     * @return ServerCallback
     */
    public function setCallBackRule($callBackRule)
    {
        $this->callBackRule = $callBackRule;

        return $this;
    }

    /**
     * Get callBackRule
     *
     * @return integer
     */
    public function getCallBackRule()
    {
        return $this->callBackRule;
    }

    /**
     * Set recordTime
     *
     * @param string $recordTime
     *
     * @return ServerCallback
     */
    public function setRecordTime($recordTime)
    {
        $this->recordTime = $recordTime;

        return $this;
    }

    /**
     * Get recordTime
     *
     * @return string
     */
    public function getRecordTime()
    {
        return $this->recordTime;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     *
     * @return ServerCallback
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set serviceId
     *
     * @param integer $serviceId
     *
     * @return ServerCallback
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;

        return $this;
    }

    /**
     * Get serviceId
     *
     * @return integer
     */
    public function getServiceId()
    {
        return $this->serviceId;
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
