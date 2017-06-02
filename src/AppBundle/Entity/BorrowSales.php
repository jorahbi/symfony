<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BorrowSales
 *
 * @ORM\Table(name="borrow_sales")
 * @ORM\Entity
 */
class BorrowSales
{
    /**
     * @var integer
     *
     * @ORM\Column(name="aid", type="integer", nullable=false)
     */
    private $aid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="month", type="integer", nullable=false)
     */
    private $month = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="money_total", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $moneyTotal = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="money_year", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $moneyYear = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="brokerage", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $brokerage = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="brokerage_ext", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $brokerageExt = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set aid
     *
     * @param integer $aid
     *
     * @return BorrowSales
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get aid
     *
     * @return integer
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set month
     *
     * @param integer $month
     *
     * @return BorrowSales
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
     * Set moneyTotal
     *
     * @param string $moneyTotal
     *
     * @return BorrowSales
     */
    public function setMoneyTotal($moneyTotal)
    {
        $this->moneyTotal = $moneyTotal;

        return $this;
    }

    /**
     * Get moneyTotal
     *
     * @return string
     */
    public function getMoneyTotal()
    {
        return $this->moneyTotal;
    }

    /**
     * Set moneyYear
     *
     * @param string $moneyYear
     *
     * @return BorrowSales
     */
    public function setMoneyYear($moneyYear)
    {
        $this->moneyYear = $moneyYear;

        return $this;
    }

    /**
     * Get moneyYear
     *
     * @return string
     */
    public function getMoneyYear()
    {
        return $this->moneyYear;
    }

    /**
     * Set brokerage
     *
     * @param string $brokerage
     *
     * @return BorrowSales
     */
    public function setBrokerage($brokerage)
    {
        $this->brokerage = $brokerage;

        return $this;
    }

    /**
     * Get brokerage
     *
     * @return string
     */
    public function getBrokerage()
    {
        return $this->brokerage;
    }

    /**
     * Set brokerageExt
     *
     * @param string $brokerageExt
     *
     * @return BorrowSales
     */
    public function setBrokerageExt($brokerageExt)
    {
        $this->brokerageExt = $brokerageExt;

        return $this;
    }

    /**
     * Get brokerageExt
     *
     * @return string
     */
    public function getBrokerageExt()
    {
        return $this->brokerageExt;
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
