<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsedJuecaicoin
 *
 * @ORM\Table(name="used_juecaicoin")
 * @ORM\Entity
 */
class UsedJuecaicoin
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
     * @ORM\Column(name="add_time", type="integer", nullable=true)
     */
    private $addTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="prize_id", type="integer", nullable=true)
     */
    private $prizeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="account_coin", type="integer", nullable=true)
     */
    private $accountCoin;

    /**
     * @var integer
     *
     * @ORM\Column(name="used_coin", type="integer", nullable=true)
     */
    private $usedCoin;

    /**
     * @var integer
     *
     * @ORM\Column(name="rest_coin", type="integer", nullable=true)
     */
    private $restCoin;

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
     * @return UsedJuecaicoin
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
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return UsedJuecaicoin
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
     * Set prizeId
     *
     * @param integer $prizeId
     *
     * @return UsedJuecaicoin
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
     * Set accountCoin
     *
     * @param integer $accountCoin
     *
     * @return UsedJuecaicoin
     */
    public function setAccountCoin($accountCoin)
    {
        $this->accountCoin = $accountCoin;

        return $this;
    }

    /**
     * Get accountCoin
     *
     * @return integer
     */
    public function getAccountCoin()
    {
        return $this->accountCoin;
    }

    /**
     * Set usedCoin
     *
     * @param integer $usedCoin
     *
     * @return UsedJuecaicoin
     */
    public function setUsedCoin($usedCoin)
    {
        $this->usedCoin = $usedCoin;

        return $this;
    }

    /**
     * Get usedCoin
     *
     * @return integer
     */
    public function getUsedCoin()
    {
        return $this->usedCoin;
    }

    /**
     * Set restCoin
     *
     * @param integer $restCoin
     *
     * @return UsedJuecaicoin
     */
    public function setRestCoin($restCoin)
    {
        $this->restCoin = $restCoin;

        return $this;
    }

    /**
     * Get restCoin
     *
     * @return integer
     */
    public function getRestCoin()
    {
        return $this->restCoin;
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
