<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConsumerActivityPrizeLog
 *
 * @ORM\Table(name="consumer_activity_prize_log")
 * @ORM\Entity
 */
class ConsumerActivityPrizeLog
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
     * @ORM\Column(name="addtime", type="integer", nullable=true)
     */
    private $addtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="grant_time", type="integer", nullable=true)
     */
    private $grantTime;

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
     * @return ConsumerActivityPrizeLog
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
     * @return ConsumerActivityPrizeLog
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
     * Set addtime
     *
     * @param integer $addtime
     *
     * @return ConsumerActivityPrizeLog
     */
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;

        return $this;
    }

    /**
     * Get addtime
     *
     * @return integer
     */
    public function getAddtime()
    {
        return $this->addtime;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return ConsumerActivityPrizeLog
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
     * Set grantTime
     *
     * @param integer $grantTime
     *
     * @return ConsumerActivityPrizeLog
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
