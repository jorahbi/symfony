<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperateDataDayCount
 *
 * @ORM\Table(name="operate_data_day_count")
 * @ORM\Entity
 */
class OperateDataDayCount
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="record_date", type="datetime", nullable=true)
     */
    private $recordDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="reg_num", type="integer", nullable=true)
     */
    private $regNum;

    /**
     * @var integer
     *
     * @ORM\Column(name="real_num", type="integer", nullable=true)
     */
    private $realNum;

    /**
     * @var integer
     *
     * @ORM\Column(name="card_num", type="integer", nullable=true)
     */
    private $cardNum;

    /**
     * @var integer
     *
     * @ORM\Column(name="first_invest_num", type="integer", nullable=true)
     */
    private $firstInvestNum;

    /**
     * @var integer
     *
     * @ORM\Column(name="invest_num", type="integer", nullable=true)
     */
    private $investNum;

    /**
     * @var string
     *
     * @ORM\Column(name="first_invest_money", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $firstInvestMoney;

    /**
     * @var integer
     *
     * @ORM\Column(name="charge_num", type="integer", nullable=true)
     */
    private $chargeNum;

    /**
     * @var string
     *
     * @ORM\Column(name="charge_money", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $chargeMoney;

    /**
     * @var string
     *
     * @ORM\Column(name="invest_money", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $investMoney;

    /**
     * @var string
     *
     * @ORM\Column(name="draw_money", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $drawMoney;

    /**
     * @var string
     *
     * @ORM\Column(name="again_money", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $againMoney;

    /**
     * @var string
     *
     * @ORM\Column(name="repay_money", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $repayMoney;

    /**
     * @var string
     *
     * @ORM\Column(name="com_draw_money", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $comDrawMoney;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set recordDate
     *
     * @param \DateTime $recordDate
     *
     * @return OperateDataDayCount
     */
    public function setRecordDate($recordDate)
    {
        $this->recordDate = $recordDate;

        return $this;
    }

    /**
     * Get recordDate
     *
     * @return \DateTime
     */
    public function getRecordDate()
    {
        return $this->recordDate;
    }

    /**
     * Set regNum
     *
     * @param integer $regNum
     *
     * @return OperateDataDayCount
     */
    public function setRegNum($regNum)
    {
        $this->regNum = $regNum;

        return $this;
    }

    /**
     * Get regNum
     *
     * @return integer
     */
    public function getRegNum()
    {
        return $this->regNum;
    }

    /**
     * Set realNum
     *
     * @param integer $realNum
     *
     * @return OperateDataDayCount
     */
    public function setRealNum($realNum)
    {
        $this->realNum = $realNum;

        return $this;
    }

    /**
     * Get realNum
     *
     * @return integer
     */
    public function getRealNum()
    {
        return $this->realNum;
    }

    /**
     * Set cardNum
     *
     * @param integer $cardNum
     *
     * @return OperateDataDayCount
     */
    public function setCardNum($cardNum)
    {
        $this->cardNum = $cardNum;

        return $this;
    }

    /**
     * Get cardNum
     *
     * @return integer
     */
    public function getCardNum()
    {
        return $this->cardNum;
    }

    /**
     * Set firstInvestNum
     *
     * @param integer $firstInvestNum
     *
     * @return OperateDataDayCount
     */
    public function setFirstInvestNum($firstInvestNum)
    {
        $this->firstInvestNum = $firstInvestNum;

        return $this;
    }

    /**
     * Get firstInvestNum
     *
     * @return integer
     */
    public function getFirstInvestNum()
    {
        return $this->firstInvestNum;
    }

    /**
     * Set investNum
     *
     * @param integer $investNum
     *
     * @return OperateDataDayCount
     */
    public function setInvestNum($investNum)
    {
        $this->investNum = $investNum;

        return $this;
    }

    /**
     * Get investNum
     *
     * @return integer
     */
    public function getInvestNum()
    {
        return $this->investNum;
    }

    /**
     * Set firstInvestMoney
     *
     * @param string $firstInvestMoney
     *
     * @return OperateDataDayCount
     */
    public function setFirstInvestMoney($firstInvestMoney)
    {
        $this->firstInvestMoney = $firstInvestMoney;

        return $this;
    }

    /**
     * Get firstInvestMoney
     *
     * @return string
     */
    public function getFirstInvestMoney()
    {
        return $this->firstInvestMoney;
    }

    /**
     * Set chargeNum
     *
     * @param integer $chargeNum
     *
     * @return OperateDataDayCount
     */
    public function setChargeNum($chargeNum)
    {
        $this->chargeNum = $chargeNum;

        return $this;
    }

    /**
     * Get chargeNum
     *
     * @return integer
     */
    public function getChargeNum()
    {
        return $this->chargeNum;
    }

    /**
     * Set chargeMoney
     *
     * @param string $chargeMoney
     *
     * @return OperateDataDayCount
     */
    public function setChargeMoney($chargeMoney)
    {
        $this->chargeMoney = $chargeMoney;

        return $this;
    }

    /**
     * Get chargeMoney
     *
     * @return string
     */
    public function getChargeMoney()
    {
        return $this->chargeMoney;
    }

    /**
     * Set investMoney
     *
     * @param string $investMoney
     *
     * @return OperateDataDayCount
     */
    public function setInvestMoney($investMoney)
    {
        $this->investMoney = $investMoney;

        return $this;
    }

    /**
     * Get investMoney
     *
     * @return string
     */
    public function getInvestMoney()
    {
        return $this->investMoney;
    }

    /**
     * Set drawMoney
     *
     * @param string $drawMoney
     *
     * @return OperateDataDayCount
     */
    public function setDrawMoney($drawMoney)
    {
        $this->drawMoney = $drawMoney;

        return $this;
    }

    /**
     * Get drawMoney
     *
     * @return string
     */
    public function getDrawMoney()
    {
        return $this->drawMoney;
    }

    /**
     * Set againMoney
     *
     * @param string $againMoney
     *
     * @return OperateDataDayCount
     */
    public function setAgainMoney($againMoney)
    {
        $this->againMoney = $againMoney;

        return $this;
    }

    /**
     * Get againMoney
     *
     * @return string
     */
    public function getAgainMoney()
    {
        return $this->againMoney;
    }

    /**
     * Set repayMoney
     *
     * @param string $repayMoney
     *
     * @return OperateDataDayCount
     */
    public function setRepayMoney($repayMoney)
    {
        $this->repayMoney = $repayMoney;

        return $this;
    }

    /**
     * Get repayMoney
     *
     * @return string
     */
    public function getRepayMoney()
    {
        return $this->repayMoney;
    }

    /**
     * Set comDrawMoney
     *
     * @param string $comDrawMoney
     *
     * @return OperateDataDayCount
     */
    public function setComDrawMoney($comDrawMoney)
    {
        $this->comDrawMoney = $comDrawMoney;

        return $this;
    }

    /**
     * Get comDrawMoney
     *
     * @return string
     */
    public function getComDrawMoney()
    {
        return $this->comDrawMoney;
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
