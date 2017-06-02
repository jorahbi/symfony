<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperateDataCount
 *
 * @ORM\Table(name="operate_data_count")
 * @ORM\Entity
 */
class OperateDataCount
{
    /**
     * @var string
     *
     * @ORM\Column(name="record_date", type="string", length=20, nullable=true)
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
     * @ORM\Column(name="invest_num", type="integer", nullable=true)
     */
    private $investNum;

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
     * @var integer
     *
     * @ORM\Column(name="again_user", type="integer", nullable=true)
     */
    private $againUser;

    /**
     * @var string
     *
     * @ORM\Column(name="ave_invest", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $aveInvest;

    /**
     * @var integer
     *
     * @ORM\Column(name="code", type="integer", nullable=false)
     */
    private $code = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="first_invest_num", type="integer", nullable=true)
     */
    private $firstInvestNum;

    /**
     * @var string
     *
     * @ORM\Column(name="first_invest_money", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $firstInvestMoney;

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
     * @param string $recordDate
     *
     * @return OperateDataCount
     */
    public function setRecordDate($recordDate)
    {
        $this->recordDate = $recordDate;

        return $this;
    }

    /**
     * Get recordDate
     *
     * @return string
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
     * @return OperateDataCount
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
     * @return OperateDataCount
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
     * @return OperateDataCount
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
     * Set investNum
     *
     * @param integer $investNum
     *
     * @return OperateDataCount
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
     * Set chargeNum
     *
     * @param integer $chargeNum
     *
     * @return OperateDataCount
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
     * @return OperateDataCount
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
     * @return OperateDataCount
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
     * @return OperateDataCount
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
     * Set againUser
     *
     * @param integer $againUser
     *
     * @return OperateDataCount
     */
    public function setAgainUser($againUser)
    {
        $this->againUser = $againUser;

        return $this;
    }

    /**
     * Get againUser
     *
     * @return integer
     */
    public function getAgainUser()
    {
        return $this->againUser;
    }

    /**
     * Set aveInvest
     *
     * @param string $aveInvest
     *
     * @return OperateDataCount
     */
    public function setAveInvest($aveInvest)
    {
        $this->aveInvest = $aveInvest;

        return $this;
    }

    /**
     * Get aveInvest
     *
     * @return string
     */
    public function getAveInvest()
    {
        return $this->aveInvest;
    }

    /**
     * Set code
     *
     * @param integer $code
     *
     * @return OperateDataCount
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return integer
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set firstInvestNum
     *
     * @param integer $firstInvestNum
     *
     * @return OperateDataCount
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
     * Set firstInvestMoney
     *
     * @param string $firstInvestMoney
     *
     * @return OperateDataCount
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
     * Set againMoney
     *
     * @param string $againMoney
     *
     * @return OperateDataCount
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
     * @return OperateDataCount
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
     * @return OperateDataCount
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
