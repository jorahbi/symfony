<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sales
 *
 * @ORM\Table(name="sales")
 * @ORM\Entity
 */
class Sales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sales_id", type="integer", nullable=false)
     */
    private $salesId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="month", type="integer", nullable=false)
     */
    private $month = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="capital", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $capital = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="capital_year", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $capitalYear = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="money", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $money = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="money_extra", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $moneyExtra = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set salesId
     *
     * @param integer $salesId
     *
     * @return Sales
     */
    public function setSalesId($salesId)
    {
        $this->salesId = $salesId;

        return $this;
    }

    /**
     * Get salesId
     *
     * @return integer
     */
    public function getSalesId()
    {
        return $this->salesId;
    }

    /**
     * Set month
     *
     * @param integer $month
     *
     * @return Sales
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
     * Set capital
     *
     * @param string $capital
     *
     * @return Sales
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * Get capital
     *
     * @return string
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Set capitalYear
     *
     * @param string $capitalYear
     *
     * @return Sales
     */
    public function setCapitalYear($capitalYear)
    {
        $this->capitalYear = $capitalYear;

        return $this;
    }

    /**
     * Get capitalYear
     *
     * @return string
     */
    public function getCapitalYear()
    {
        return $this->capitalYear;
    }

    /**
     * Set money
     *
     * @param string $money
     *
     * @return Sales
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return string
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set moneyExtra
     *
     * @param string $moneyExtra
     *
     * @return Sales
     */
    public function setMoneyExtra($moneyExtra)
    {
        $this->moneyExtra = $moneyExtra;

        return $this;
    }

    /**
     * Get moneyExtra
     *
     * @return string
     */
    public function getMoneyExtra()
    {
        return $this->moneyExtra;
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
