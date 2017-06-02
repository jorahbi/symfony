<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdvertiserData
 *
 * @ORM\Table(name="advertiser_data")
 * @ORM\Entity
 */
class AdvertiserData
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
     * @ORM\Column(name="first_user", type="integer", nullable=true)
     */
    private $firstUser;

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
     * @var string
     *
     * @ORM\Column(name="first_invest", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $firstInvest;

    /**
     * @var string
     *
     * @ORM\Column(name="after_invest", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $afterInvest;

    /**
     * @var string
     *
     * @ORM\Column(name="again_invest", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $againInvest;

    /**
     * @var integer
     *
     * @ORM\Column(name="code", type="integer", nullable=false)
     */
    private $code = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="channel", type="string", length=255, nullable=true)
     */
    private $channel = '';

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
     * @return AdvertiserData
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
     * @return AdvertiserData
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
     * @return AdvertiserData
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
     * @return AdvertiserData
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
     * @return AdvertiserData
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
     * @return AdvertiserData
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
     * @return AdvertiserData
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
     * @return AdvertiserData
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
     * @return AdvertiserData
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
     * Set firstUser
     *
     * @param integer $firstUser
     *
     * @return AdvertiserData
     */
    public function setFirstUser($firstUser)
    {
        $this->firstUser = $firstUser;

        return $this;
    }

    /**
     * Get firstUser
     *
     * @return integer
     */
    public function getFirstUser()
    {
        return $this->firstUser;
    }

    /**
     * Set againUser
     *
     * @param integer $againUser
     *
     * @return AdvertiserData
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
     * @return AdvertiserData
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
     * Set firstInvest
     *
     * @param string $firstInvest
     *
     * @return AdvertiserData
     */
    public function setFirstInvest($firstInvest)
    {
        $this->firstInvest = $firstInvest;

        return $this;
    }

    /**
     * Get firstInvest
     *
     * @return string
     */
    public function getFirstInvest()
    {
        return $this->firstInvest;
    }

    /**
     * Set afterInvest
     *
     * @param string $afterInvest
     *
     * @return AdvertiserData
     */
    public function setAfterInvest($afterInvest)
    {
        $this->afterInvest = $afterInvest;

        return $this;
    }

    /**
     * Get afterInvest
     *
     * @return string
     */
    public function getAfterInvest()
    {
        return $this->afterInvest;
    }

    /**
     * Set againInvest
     *
     * @param string $againInvest
     *
     * @return AdvertiserData
     */
    public function setAgainInvest($againInvest)
    {
        $this->againInvest = $againInvest;

        return $this;
    }

    /**
     * Get againInvest
     *
     * @return string
     */
    public function getAgainInvest()
    {
        return $this->againInvest;
    }

    /**
     * Set code
     *
     * @param integer $code
     *
     * @return AdvertiserData
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
     * Set channel
     *
     * @param string $channel
     *
     * @return AdvertiserData
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
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
