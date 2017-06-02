<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WheelPrizeLog
 *
 * @ORM\Table(name="wheel_prize_log")
 * @ORM\Entity
 */
class WheelPrizeLog
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
     * @ORM\Column(name="prize_id", type="integer", nullable=false)
     */
    private $prizeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="to_uid", type="integer", nullable=true)
     */
    private $toUid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_sign", type="integer", nullable=true)
     */
    private $isSign = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="grant_time", type="integer", nullable=true)
     */
    private $grantTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="client", type="integer", nullable=true)
     */
    private $client;

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
     * @return WheelPrizeLog
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
     * Set prizeId
     *
     * @param integer $prizeId
     *
     * @return WheelPrizeLog
     */
    public function setPrizeId($prizeId)
    {
        $this->prizeId = $prizeId;

        return $this;
    }

    /**
     * Get prizeId
     *
     * @return integer
     */
    public function getPrizeId()
    {
        return $this->prizeId;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return WheelPrizeLog
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
     * Set status
     *
     * @param integer $status
     *
     * @return WheelPrizeLog
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
     * Set toUid
     *
     * @param integer $toUid
     *
     * @return WheelPrizeLog
     */
    public function setToUid($toUid)
    {
        $this->toUid = $toUid;

        return $this;
    }

    /**
     * Get toUid
     *
     * @return integer
     */
    public function getToUid()
    {
        return $this->toUid;
    }

    /**
     * Set isSign
     *
     * @param integer $isSign
     *
     * @return WheelPrizeLog
     */
    public function setIsSign($isSign)
    {
        $this->isSign = $isSign;

        return $this;
    }

    /**
     * Get isSign
     *
     * @return integer
     */
    public function getIsSign()
    {
        return $this->isSign;
    }

    /**
     * Set grantTime
     *
     * @param integer $grantTime
     *
     * @return WheelPrizeLog
     */
    public function setGrantTime($grantTime)
    {
        $this->grantTime = $grantTime;

        return $this;
    }

    /**
     * Get grantTime
     *
     * @return integer
     */
    public function getGrantTime()
    {
        return $this->grantTime;
    }

    /**
     * Set client
     *
     * @param integer $client
     *
     * @return WheelPrizeLog
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return integer
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
