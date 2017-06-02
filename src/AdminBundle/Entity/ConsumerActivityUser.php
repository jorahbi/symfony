<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConsumerActivityUser
 *
 * @ORM\Table(name="consumer_activity_user")
 * @ORM\Entity
 */
class ConsumerActivityUser
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
     * @ORM\Column(name="total_box_num", type="integer", nullable=false)
     */
    private $totalBoxNum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="toal_hammer_num", type="integer", nullable=false)
     */
    private $toalHammerNum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="used_box_num", type="integer", nullable=false)
     */
    private $usedBoxNum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="used_hammer_num", type="integer", nullable=false)
     */
    private $usedHammerNum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="last_sign_date", type="integer", nullable=true)
     */
    private $lastSignDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="sign_box_num", type="integer", nullable=false)
     */
    private $signBoxNum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="int", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $int;



    /**
     * Set uid
     *
     * @param integer $uid
     *
     * @return ConsumerActivityUser
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
     * Set totalBoxNum
     *
     * @param integer $totalBoxNum
     *
     * @return ConsumerActivityUser
     */
    public function setTotalBoxNum($totalBoxNum)
    {
        $this->totalBoxNum = $totalBoxNum;

        return $this;
    }

    /**
     * Get totalBoxNum
     *
     * @return integer
     */
    public function getTotalBoxNum()
    {
        return $this->totalBoxNum;
    }

    /**
     * Set toalHammerNum
     *
     * @param integer $toalHammerNum
     *
     * @return ConsumerActivityUser
     */
    public function setToalHammerNum($toalHammerNum)
    {
        $this->toalHammerNum = $toalHammerNum;

        return $this;
    }

    /**
     * Get toalHammerNum
     *
     * @return integer
     */
    public function getToalHammerNum()
    {
        return $this->toalHammerNum;
    }

    /**
     * Set usedBoxNum
     *
     * @param integer $usedBoxNum
     *
     * @return ConsumerActivityUser
     */
    public function setUsedBoxNum($usedBoxNum)
    {
        $this->usedBoxNum = $usedBoxNum;

        return $this;
    }

    /**
     * Get usedBoxNum
     *
     * @return integer
     */
    public function getUsedBoxNum()
    {
        return $this->usedBoxNum;
    }

    /**
     * Set usedHammerNum
     *
     * @param integer $usedHammerNum
     *
     * @return ConsumerActivityUser
     */
    public function setUsedHammerNum($usedHammerNum)
    {
        $this->usedHammerNum = $usedHammerNum;

        return $this;
    }

    /**
     * Get usedHammerNum
     *
     * @return integer
     */
    public function getUsedHammerNum()
    {
        return $this->usedHammerNum;
    }

    /**
     * Set lastSignDate
     *
     * @param integer $lastSignDate
     *
     * @return ConsumerActivityUser
     */
    public function setLastSignDate($lastSignDate)
    {
        $this->lastSignDate = $lastSignDate;

        return $this;
    }

    /**
     * Get lastSignDate
     *
     * @return integer
     */
    public function getLastSignDate()
    {
        return $this->lastSignDate;
    }

    /**
     * Set signBoxNum
     *
     * @param integer $signBoxNum
     *
     * @return ConsumerActivityUser
     */
    public function setSignBoxNum($signBoxNum)
    {
        $this->signBoxNum = $signBoxNum;

        return $this;
    }

    /**
     * Get signBoxNum
     *
     * @return integer
     */
    public function getSignBoxNum()
    {
        return $this->signBoxNum;
    }

    /**
     * Get int
     *
     * @return integer
     */
    public function getInt()
    {
        return $this->int;
    }
}
