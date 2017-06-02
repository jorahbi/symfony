<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OnlineCallLog
 *
 * @ORM\Table(name="online_call_log")
 * @ORM\Entity
 */
class OnlineCallLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=true)
     */
    private $pid;

    /**
     * @var string
     *
     * @ORM\Column(name="call_time", type="string", length=100, nullable=true)
     */
    private $callTime;

    /**
     * @var string
     *
     * @ORM\Column(name="call_mission", type="string", length=500, nullable=true)
     */
    private $callMission;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_demand", type="string", length=500, nullable=true)
     */
    private $customerDemand = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="is_dell", type="string", length=500, nullable=true)
     */
    private $isDell;

    /**
     * @var string
     *
     * @ORM\Column(name="other", type="string", length=500, nullable=true)
     */
    private $other;

    /**
     * @var integer
     *
     * @ORM\Column(name="create_time", type="integer", nullable=true)
     */
    private $createTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="customer_demand_no", type="boolean", nullable=true)
     */
    private $customerDemandNo;

    /**
     * @var integer
     *
     * @ORM\Column(name="next_call_time", type="integer", nullable=true)
     */
    private $nextCallTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set pid
     *
     * @param integer $pid
     *
     * @return OnlineCallLog
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return integer
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set callTime
     *
     * @param string $callTime
     *
     * @return OnlineCallLog
     */
    public function setCallTime($callTime)
    {
        $this->callTime = $callTime;

        return $this;
    }

    /**
     * Get callTime
     *
     * @return string
     */
    public function getCallTime()
    {
        return $this->callTime;
    }

    /**
     * Set callMission
     *
     * @param string $callMission
     *
     * @return OnlineCallLog
     */
    public function setCallMission($callMission)
    {
        $this->callMission = $callMission;

        return $this;
    }

    /**
     * Get callMission
     *
     * @return string
     */
    public function getCallMission()
    {
        return $this->callMission;
    }

    /**
     * Set customerDemand
     *
     * @param string $customerDemand
     *
     * @return OnlineCallLog
     */
    public function setCustomerDemand($customerDemand)
    {
        $this->customerDemand = $customerDemand;

        return $this;
    }

    /**
     * Get customerDemand
     *
     * @return string
     */
    public function getCustomerDemand()
    {
        return $this->customerDemand;
    }

    /**
     * Set isDell
     *
     * @param string $isDell
     *
     * @return OnlineCallLog
     */
    public function setIsDell($isDell)
    {
        $this->isDell = $isDell;

        return $this;
    }

    /**
     * Get isDell
     *
     * @return string
     */
    public function getIsDell()
    {
        return $this->isDell;
    }

    /**
     * Set other
     *
     * @param string $other
     *
     * @return OnlineCallLog
     */
    public function setOther($other)
    {
        $this->other = $other;

        return $this;
    }

    /**
     * Get other
     *
     * @return string
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Set createTime
     *
     * @param integer $createTime
     *
     * @return OnlineCallLog
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return integer
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set customerDemandNo
     *
     * @param boolean $customerDemandNo
     *
     * @return OnlineCallLog
     */
    public function setCustomerDemandNo($customerDemandNo)
    {
        $this->customerDemandNo = $customerDemandNo;

        return $this;
    }

    /**
     * Get customerDemandNo
     *
     * @return boolean
     */
    public function getCustomerDemandNo()
    {
        return $this->customerDemandNo;
    }

    /**
     * Set nextCallTime
     *
     * @param integer $nextCallTime
     *
     * @return OnlineCallLog
     */
    public function setNextCallTime($nextCallTime)
    {
        $this->nextCallTime = $nextCallTime;

        return $this;
    }

    /**
     * Get nextCallTime
     *
     * @return integer
     */
    public function getNextCallTime()
    {
        return $this->nextCallTime;
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
