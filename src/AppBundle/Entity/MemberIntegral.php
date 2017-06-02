<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberIntegral
 *
 * @ORM\Table(name="member_integral", indexes={@ORM\Index(name="uid", columns={"uid"}), @ORM\Index(name="type", columns={"type"}), @ORM\Index(name="add_time", columns={"add_time"}), @ORM\Index(name="integral", columns={"integral"})})
 * @ORM\Entity
 */
class MemberIntegral
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
     * @ORM\Column(name="from_uid", type="integer", nullable=false)
     */
    private $fromUid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="integral", type="integer", nullable=false)
     */
    private $integral = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="base_integral", type="integer", nullable=false)
     */
    private $baseIntegral = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="vip_integral", type="integer", nullable=false)
     */
    private $vipIntegral = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="string", length=50, nullable=false)
     */
    private $info = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_month", type="integer", nullable=false)
     */
    private $addMonth = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_day", type="integer", nullable=false)
     */
    private $addDay = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="client", type="boolean", nullable=false)
     */
    private $client = '1';

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
     * @return MemberIntegral
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
     * Set fromUid
     *
     * @param integer $fromUid
     *
     * @return MemberIntegral
     */
    public function setFromUid($fromUid)
    {
        $this->fromUid = $fromUid;

        return $this;
    }

    /**
     * Get fromUid
     *
     * @return integer
     */
    public function getFromUid()
    {
        return $this->fromUid;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return MemberIntegral
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
     * Set integral
     *
     * @param integer $integral
     *
     * @return MemberIntegral
     */
    public function setIntegral($integral)
    {
        $this->integral = $integral;

        return $this;
    }

    /**
     * Get integral
     *
     * @return integer
     */
    public function getIntegral()
    {
        return $this->integral;
    }

    /**
     * Set baseIntegral
     *
     * @param integer $baseIntegral
     *
     * @return MemberIntegral
     */
    public function setBaseIntegral($baseIntegral)
    {
        $this->baseIntegral = $baseIntegral;

        return $this;
    }

    /**
     * Get baseIntegral
     *
     * @return integer
     */
    public function getBaseIntegral()
    {
        return $this->baseIntegral;
    }

    /**
     * Set vipIntegral
     *
     * @param integer $vipIntegral
     *
     * @return MemberIntegral
     */
    public function setVipIntegral($vipIntegral)
    {
        $this->vipIntegral = $vipIntegral;

        return $this;
    }

    /**
     * Get vipIntegral
     *
     * @return integer
     */
    public function getVipIntegral()
    {
        return $this->vipIntegral;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return MemberIntegral
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
     * @return MemberIntegral
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
     * Set addMonth
     *
     * @param integer $addMonth
     *
     * @return MemberIntegral
     */
    public function setAddMonth($addMonth)
    {
        $this->addMonth = $addMonth;

        return $this;
    }

    /**
     * Get addMonth
     *
     * @return integer
     */
    public function getAddMonth()
    {
        return $this->addMonth;
    }

    /**
     * Set addDay
     *
     * @param integer $addDay
     *
     * @return MemberIntegral
     */
    public function setAddDay($addDay)
    {
        $this->addDay = $addDay;

        return $this;
    }

    /**
     * Get addDay
     *
     * @return integer
     */
    public function getAddDay()
    {
        return $this->addDay;
    }

    /**
     * Set client
     *
     * @param boolean $client
     *
     * @return MemberIntegral
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return boolean
     */
    public function getClient()
    {
        return $this->client;
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
