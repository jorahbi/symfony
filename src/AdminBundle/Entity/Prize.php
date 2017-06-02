<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prize
 *
 * @ORM\Table(name="prize")
 * @ORM\Entity
 */
class Prize
{
    /**
     * @var string
     *
     * @ORM\Column(name="prize_name", type="string", length=50, nullable=false)
     */
    private $prizeName = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="prize_type", type="boolean", nullable=false)
     */
    private $prizeType = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="prize_price", type="integer", nullable=false)
     */
    private $prizePrice = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="prize_intro", type="string", length=255, nullable=false)
     */
    private $prizeIntro = '';

    /**
     * @var string
     *
     * @ORM\Column(name="prize_cover", type="string", length=255, nullable=false)
     */
    private $prizeCover = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="prize_total", type="integer", nullable=false)
     */
    private $prizeTotal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="prize_count", type="integer", nullable=false)
     */
    private $prizeCount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="base_money", type="integer", nullable=false)
     */
    private $baseMoney;

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
     * @return Prize
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
     * @param boolean $prizeType
     *
     * @return Prize
     */
    public function setPrizeType($prizeType)
    {
        $this->prizeType = $prizeType;

        return $this;
    }

    /**
     * Get prizeType
     *
     * @return boolean
     */
    public function getPrizeType()
    {
        return $this->prizeType;
    }

    /**
     * Set prizePrice
     *
     * @param integer $prizePrice
     *
     * @return Prize
     */
    public function setPrizePrice($prizePrice)
    {
        $this->prizePrice = $prizePrice;

        return $this;
    }

    /**
     * Get prizePrice
     *
     * @return integer
     */
    public function getPrizePrice()
    {
        return $this->prizePrice;
    }

    /**
     * Set prizeIntro
     *
     * @param string $prizeIntro
     *
     * @return Prize
     */
    public function setPrizeIntro($prizeIntro)
    {
        $this->prizeIntro = $prizeIntro;

        return $this;
    }

    /**
     * Get prizeIntro
     *
     * @return string
     */
    public function getPrizeIntro()
    {
        return $this->prizeIntro;
    }

    /**
     * Set prizeCover
     *
     * @param string $prizeCover
     *
     * @return Prize
     */
    public function setPrizeCover($prizeCover)
    {
        $this->prizeCover = $prizeCover;

        return $this;
    }

    /**
     * Get prizeCover
     *
     * @return string
     */
    public function getPrizeCover()
    {
        return $this->prizeCover;
    }

    /**
     * Set prizeTotal
     *
     * @param integer $prizeTotal
     *
     * @return Prize
     */
    public function setPrizeTotal($prizeTotal)
    {
        $this->prizeTotal = $prizeTotal;

        return $this;
    }

    /**
     * Get prizeTotal
     *
     * @return integer
     */
    public function getPrizeTotal()
    {
        return $this->prizeTotal;
    }

    /**
     * Set prizeCount
     *
     * @param integer $prizeCount
     *
     * @return Prize
     */
    public function setPrizeCount($prizeCount)
    {
        $this->prizeCount = $prizeCount;

        return $this;
    }

    /**
     * Get prizeCount
     *
     * @return integer
     */
    public function getPrizeCount()
    {
        return $this->prizeCount;
    }

    /**
     * Set baseMoney
     *
     * @param integer $baseMoney
     *
     * @return Prize
     */
    public function setBaseMoney($baseMoney)
    {
        $this->baseMoney = $baseMoney;

        return $this;
    }

    /**
     * Get baseMoney
     *
     * @return integer
     */
    public function getBaseMoney()
    {
        return $this->baseMoney;
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
