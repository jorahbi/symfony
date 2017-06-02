<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConsumerActivityPrize
 *
 * @ORM\Table(name="consumer_activity_prize")
 * @ORM\Entity
 */
class ConsumerActivityPrize
{
    /**
     * @var string
     *
     * @ORM\Column(name="prize_name", type="string", length=255, nullable=true)
     */
    private $prizeName;

    /**
     * @var integer
     *
     * @ORM\Column(name="prize_type", type="integer", nullable=false)
     */
    private $prizeType;

    /**
     * @var integer
     *
     * @ORM\Column(name="prize_rate", type="integer", nullable=true)
     */
    private $prizeRate;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_prize", type="integer", nullable=true)
     */
    private $totalPrize;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set prizeName
     *
     * @param string $prizeName
     *
     * @return ConsumerActivityPrize
     */
    public function setPrizeName($prizeName)
    {
        $this->prizeName = $prizeName;

        return $this;
    }

    /**
     * Get prizeName
     *
     * @return string
     */
    public function getPrizeName()
    {
        return $this->prizeName;
    }

    /**
     * Set prizeType
     *
     * @param integer $prizeType
     *
     * @return ConsumerActivityPrize
     */
    public function setPrizeType($prizeType)
    {
        $this->prizeType = $prizeType;

        return $this;
    }

    /**
     * Get prizeType
     *
     * @return integer
     */
    public function getPrizeType()
    {
        return $this->prizeType;
    }

    /**
     * Set prizeRate
     *
     * @param integer $prizeRate
     *
     * @return ConsumerActivityPrize
     */
    public function setPrizeRate($prizeRate)
    {
        $this->prizeRate = $prizeRate;

        return $this;
    }

    /**
     * Get prizeRate
     *
     * @return integer
     */
    public function getPrizeRate()
    {
        return $this->prizeRate;
    }

    /**
     * Set totalPrize
     *
     * @param integer $totalPrize
     *
     * @return ConsumerActivityPrize
     */
    public function setTotalPrize($totalPrize)
    {
        $this->totalPrize = $totalPrize;

        return $this;
    }

    /**
     * Get totalPrize
     *
     * @return integer
     */
    public function getTotalPrize()
    {
        return $this->totalPrize;
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
