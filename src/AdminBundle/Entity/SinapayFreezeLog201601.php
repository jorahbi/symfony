<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SinapayFreezeLog201601
 *
 * @ORM\Table(name="sinapay_freeze_log201601")
 * @ORM\Entity
 */
class SinapayFreezeLog201601
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="money", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $money = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="freeze_order_no", type="string", length=255, nullable=false)
     */
    private $freezeOrderNo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="freeze_time", type="string", length=20, nullable=false)
     */
    private $freezeTime = '';

    /**
     * @var string
     *
     * @ORM\Column(name="unfreeze_order_no", type="string", length=255, nullable=false)
     */
    private $unfreezeOrderNo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="unfreeze_time", type="string", length=20, nullable=false)
     */
    private $unfreezeTime = '';

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
     * @return SinapayFreezeLog201601
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
     * @return SinapayFreezeLog201601
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
     * Set freezeOrderNo
     *
     * @param string $freezeOrderNo
     *
     * @return SinapayFreezeLog201601
     */
    public function setFreezeOrderNo($freezeOrderNo)
    {
        $this->freezeOrderNo = $freezeOrderNo;

        return $this;
    }

    /**
     * Get freezeOrderNo
     *
     * @return string
     */
    public function getFreezeOrderNo()
    {
        return $this->freezeOrderNo;
    }

    /**
     * Set freezeTime
     *
     * @param string $freezeTime
     *
     * @return SinapayFreezeLog201601
     */
    public function setFreezeTime($freezeTime)
    {
        $this->freezeTime = $freezeTime;

        return $this;
    }

    /**
     * Get freezeTime
     *
     * @return string
     */
    public function getFreezeTime()
    {
        return $this->freezeTime;
    }

    /**
     * Set unfreezeOrderNo
     *
     * @param string $unfreezeOrderNo
     *
     * @return SinapayFreezeLog201601
     */
    public function setUnfreezeOrderNo($unfreezeOrderNo)
    {
        $this->unfreezeOrderNo = $unfreezeOrderNo;

        return $this;
    }

    /**
     * Get unfreezeOrderNo
     *
     * @return string
     */
    public function getUnfreezeOrderNo()
    {
        return $this->unfreezeOrderNo;
    }

    /**
     * Set unfreezeTime
     *
     * @param string $unfreezeTime
     *
     * @return SinapayFreezeLog201601
     */
    public function setUnfreezeTime($unfreezeTime)
    {
        $this->unfreezeTime = $unfreezeTime;

        return $this;
    }

    /**
     * Get unfreezeTime
     *
     * @return string
     */
    public function getUnfreezeTime()
    {
        return $this->unfreezeTime;
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
