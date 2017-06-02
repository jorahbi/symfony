<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TempLuck
 *
 * @ORM\Table(name="temp_luck")
 * @ORM\Entity
 */
class TempLuck
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer", nullable=true)
     */
    private $bid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=true)
     */
    private $addTime = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="prize_id", type="boolean", nullable=true)
     */
    private $prizeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone", type="string", length=11, nullable=true)
     */
    private $userPhone = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="prize_price", type="boolean", nullable=true)
     */
    private $prizePrice = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set bid
     *
     * @param integer $bid
     *
     * @return TempLuck
     */
    public function setBid($bid)
    {
        $this->bid = $bid;

        return $this;
    }

    /**
     * Get bid
     *
     * @return integer
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return TempLuck
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
     * @param boolean $prizeId
     *
     * @return TempLuck
     */
    public function setPrizeId($prizeId)
    {
        $this->prizeId = $prizeId;

        return $this;
    }

    /**
     * Get prizeId
     *
     * @return boolean
     */
    public function getPrizeId()
    {
        return $this->prizeId;
    }

    /**
     * Set userPhone
     *
     * @param string $userPhone
     *
     * @return TempLuck
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
     * Set prizePrice
     *
     * @param boolean $prizePrice
     *
     * @return TempLuck
     */
    public function setPrizePrice($prizePrice)
    {
        $this->prizePrice = $prizePrice;

        return $this;
    }

    /**
     * Get prizePrice
     *
     * @return boolean
     */
    public function getPrizePrice()
    {
        return $this->prizePrice;
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
