<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OfflineCallLog
 *
 * @ORM\Table(name="offline_call_log")
 * @ORM\Entity
 */
class OfflineCallLog
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
    private $customerDemand;

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
     * @return OfflineCallLog
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
     * @return OfflineCallLog
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
     * @return OfflineCallLog
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
     * @return OfflineCallLog
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
     * @return OfflineCallLog
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
     * @return OfflineCallLog
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
     * @return OfflineCallLog
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
