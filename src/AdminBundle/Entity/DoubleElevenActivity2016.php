<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DoubleElevenActivity2016
 *
 * @ORM\Table(name="double_eleven_activity_2016")
 * @ORM\Entity
 */
class DoubleElevenActivity2016
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="total_money", type="decimal", precision=15, scale=0, nullable=true)
     */
    private $totalMoney;

    /**
     * @var string
     *
     * @ORM\Column(name="max_money", type="decimal", precision=15, scale=0, nullable=true)
     */
    private $maxMoney;

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone", type="string", length=11, nullable=true)
     */
    private $userPhone;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_paid", type="integer", nullable=false)
     */
    private $isPaid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_cash_back", type="integer", nullable=false)
     */
    private $isCashBack = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pay_level", type="integer", nullable=true)
     */
    private $payLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="cash", type="decimal", precision=15, scale=0, nullable=true)
     */
    private $cash;

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
     * @return DoubleElevenActivity2016
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
     * Set totalMoney
     *
     * @param string $totalMoney
     *
     * @return DoubleElevenActivity2016
     */
    public function setTotalMoney($totalMoney)
    {
        $this->totalMoney = $totalMoney;

        return $this;
    }

    /**
     * Get totalMoney
     *
     * @return string
     */
    public function getTotalMoney()
    {
        return $this->totalMoney;
    }

    /**
     * Set maxMoney
     *
     * @param string $maxMoney
     *
     * @return DoubleElevenActivity2016
     */
    public function setMaxMoney($maxMoney)
    {
        $this->maxMoney = $maxMoney;

        return $this;
    }

    /**
     * Get maxMoney
     *
     * @return string
     */
    public function getMaxMoney()
    {
        return $this->maxMoney;
    }

    /**
     * Set userPhone
     *
     * @param string $userPhone
     *
     * @return DoubleElevenActivity2016
     */
    public function setUserPhone($userPhone)
    {
        $this->userPhone = $userPhone;

        return $this;
    }

    /**
     * Get userPhone
     *
     * @return string
     */
    public function getUserPhone()
    {
        return $this->userPhone;
    }

    /**
     * Set isPaid
     *
     * @param integer $isPaid
     *
     * @return DoubleElevenActivity2016
     */
    public function setIsPaid($isPaid)
    {
        $this->isPaid = $isPaid;

        return $this;
    }

    /**
     * Get isPaid
     *
     * @return integer
     */
    public function getIsPaid()
    {
        return $this->isPaid;
    }

    /**
     * Set isCashBack
     *
     * @param integer $isCashBack
     *
     * @return DoubleElevenActivity2016
     */
    public function setIsCashBack($isCashBack)
    {
        $this->isCashBack = $isCashBack;

        return $this;
    }

    /**
     * Get isCashBack
     *
     * @return integer
     */
    public function getIsCashBack()
    {
        return $this->isCashBack;
    }

    /**
     * Set payLevel
     *
     * @param integer $payLevel
     *
     * @return DoubleElevenActivity2016
     */
    public function setPayLevel($payLevel)
    {
        $this->payLevel = $payLevel;

        return $this;
    }

    /**
     * Get payLevel
     *
     * @return integer
     */
    public function getPayLevel()
    {
        return $this->payLevel;
    }

    /**
     * Set cash
     *
     * @param string $cash
     *
     * @return DoubleElevenActivity2016
     */
    public function setCash($cash)
    {
        $this->cash = $cash;

        return $this;
    }

    /**
     * Get cash
     *
     * @return string
     */
    public function getCash()
    {
        return $this->cash;
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
