<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SignCount
 *
 * @ORM\Table(name="sign_count")
 * @ORM\Entity
 */
class SignCount
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
     * @ORM\Column(name="month", type="integer", nullable=false)
     */
    private $month = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="total_num", type="integer", nullable=false)
     */
    private $totalNum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="continue_num", type="integer", nullable=false)
     */
    private $continueNum = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="get_total", type="string", length=100, nullable=false)
     */
    private $getTotal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="get_continue", type="string", length=100, nullable=false)
     */
    private $getContinue = '';

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
     * @return SignCount
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
     * Set month
     *
     * @param integer $month
     *
     * @return SignCount
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return integer
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set totalNum
     *
     * @param integer $totalNum
     *
     * @return SignCount
     */
    public function setTotalNum($totalNum)
    {
        $this->totalNum = $totalNum;

        return $this;
    }

    /**
     * Get totalNum
     *
     * @return integer
     */
    public function getTotalNum()
    {
        return $this->totalNum;
    }

    /**
     * Set continueNum
     *
     * @param integer $continueNum
     *
     * @return SignCount
     */
    public function setContinueNum($continueNum)
    {
        $this->continueNum = $continueNum;

        return $this;
    }

    /**
     * Get continueNum
     *
     * @return integer
     */
    public function getContinueNum()
    {
        return $this->continueNum;
    }

    /**
     * Set getTotal
     *
     * @param string $getTotal
     *
     * @return SignCount
     */
    public function setGetTotal($getTotal)
    {
        $this->getTotal = $getTotal;

        return $this;
    }

    /**
     * Get getTotal
     *
     * @return string
     */
    public function getGetTotal()
    {
        return $this->getTotal;
    }

    /**
     * Set getContinue
     *
     * @param string $getContinue
     *
     * @return SignCount
     */
    public function setGetContinue($getContinue)
    {
        $this->getContinue = $getContinue;

        return $this;
    }

    /**
     * Get getContinue
     *
     * @return string
     */
    public function getGetContinue()
    {
        return $this->getContinue;
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
