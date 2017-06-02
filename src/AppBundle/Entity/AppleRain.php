<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppleRain
 *
 * @ORM\Table(name="apple_rain")
 * @ORM\Entity
 */
class AppleRain
{
    /**
     * @var integer
     *
     * @ORM\Column(name="invest_id", type="integer", nullable=false)
     */
    private $investId;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="money", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $money;

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="pay_time", type="integer", nullable=false)
     */
    private $payTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="capital", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $capital;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=false)
     */
    private $duration;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set investId
     *
     * @param integer $investId
     *
     * @return AppleRain
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
     * Set uid
     *
     * @param integer $uid
     *
     * @return AppleRain
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
     * Set money
     *
     * @param string $money
     *
     * @return AppleRain
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
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return AppleRain
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
     * Set payTime
     *
     * @param integer $payTime
     *
     * @return AppleRain
     */
    public function setPayTime($payTime)
    {
        $this->payTime = $payTime;

        return $this;
    }

    /**
     * Get payTime
     *
     * @return integer
     */
    public function getPayTime()
    {
        return $this->payTime;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return AppleRain
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set capital
     *
     * @param string $capital
     *
     * @return AppleRain
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * Get capital
     *
     * @return string
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return AppleRain
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
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
