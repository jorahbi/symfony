<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SignCard
 *
 * @ORM\Table(name="sign_card")
 * @ORM\Entity
 */
class SignCard
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
     * @ORM\Column(name="sign_day", type="integer", nullable=false)
     */
    private $signDay = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="end_time", type="integer", nullable=false)
     */
    private $endTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="use_time", type="integer", nullable=false)
     */
    private $useTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="use_month", type="integer", nullable=false)
     */
    private $useMonth = '0';

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
     * @return SignCard
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
     * Set signDay
     *
     * @param integer $signDay
     *
     * @return SignCard
     */
    public function setSignDay($signDay)
    {
        $this->signDay = $signDay;

        return $this;
    }

    /**
     * Get signDay
     *
     * @return integer
     */
    public function getSignDay()
    {
        return $this->signDay;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return SignCard
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
     * Set endTime
     *
     * @param integer $endTime
     *
     * @return SignCard
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return integer
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set useTime
     *
     * @param integer $useTime
     *
     * @return SignCard
     */
    public function setUseTime($useTime)
    {
        $this->useTime = $useTime;

        return $this;
    }

    /**
     * Get useTime
     *
     * @return integer
     */
    public function getUseTime()
    {
        return $this->useTime;
    }

    /**
     * Set useMonth
     *
     * @param integer $useMonth
     *
     * @return SignCard
     */
    public function setUseMonth($useMonth)
    {
        $this->useMonth = $useMonth;

        return $this;
    }

    /**
     * Get useMonth
     *
     * @return integer
     */
    public function getUseMonth()
    {
        return $this->useMonth;
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
