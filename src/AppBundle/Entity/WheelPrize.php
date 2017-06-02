<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WheelPrize
 *
 * @ORM\Table(name="wheel_prize")
 * @ORM\Entity
 */
class WheelPrize
{
    /**
     * @var string
     *
     * @ORM\Column(name="prize_name", type="string", length=255, nullable=false)
     */
    private $prizeName;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     */
    private $groupId;

    /**
     * @var string
     *
     * @ORM\Column(name="group_name", type="string", length=255, nullable=false)
     */
    private $groupName;

    /**
     * @var integer
     *
     * @ORM\Column(name="prize_rate", type="integer", nullable=false)
     */
    private $prizeRate;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_transfer", type="integer", nullable=false)
     */
    private $isTransfer = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_enable", type="integer", nullable=false)
     */
    private $isEnable = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="prize_icon", type="string", length=255, nullable=true)
     */
    private $prizeIcon;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_prize", type="integer", nullable=true)
     */
    private $totalPrize = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="daily_prize", type="integer", nullable=true)
     */
    private $dailyPrize = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="result_info", type="string", length=255, nullable=true)
     */
    private $resultInfo;

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
     * @return WheelPrize
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
     * Set groupId
     *
     * @param integer $groupId
     *
     * @return WheelPrize
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId
     *
     * @return integer
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set groupName
     *
     * @param string $groupName
     *
     * @return WheelPrize
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set prizeRate
     *
     * @param integer $prizeRate
     *
     * @return WheelPrize
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
     * Set isTransfer
     *
     * @param integer $isTransfer
     *
     * @return WheelPrize
     */
    public function setIsTransfer($isTransfer)
    {
        $this->isTransfer = $isTransfer;

        return $this;
    }

    /**
     * Get isTransfer
     *
     * @return integer
     */
    public function getIsTransfer()
    {
        return $this->isTransfer;
    }

    /**
     * Set isEnable
     *
     * @param integer $isEnable
     *
     * @return WheelPrize
     */
    public function setIsEnable($isEnable)
    {
        $this->isEnable = $isEnable;

        return $this;
    }

    /**
     * Get isEnable
     *
     * @return integer
     */
    public function getIsEnable()
    {
        return $this->isEnable;
    }

    /**
     * Set prizeIcon
     *
     * @param string $prizeIcon
     *
     * @return WheelPrize
     */
    public function setPrizeIcon($prizeIcon)
    {
        $this->prizeIcon = $prizeIcon;

        return $this;
    }

    /**
     * Get prizeIcon
     *
     * @return string
     */
    public function getPrizeIcon()
    {
        return $this->prizeIcon;
    }

    /**
     * Set totalPrize
     *
     * @param integer $totalPrize
     *
     * @return WheelPrize
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
     * Set dailyPrize
     *
     * @param integer $dailyPrize
     *
     * @return WheelPrize
     */
    public function setDailyPrize($dailyPrize)
    {
        $this->dailyPrize = $dailyPrize;

        return $this;
    }

    /**
     * Get dailyPrize
     *
     * @return integer
     */
    public function getDailyPrize()
    {
        return $this->dailyPrize;
    }

    /**
     * Set resultInfo
     *
     * @param string $resultInfo
     *
     * @return WheelPrize
     */
    public function setResultInfo($resultInfo)
    {
        $this->resultInfo = $resultInfo;

        return $this;
    }

    /**
     * Get resultInfo
     *
     * @return string
     */
    public function getResultInfo()
    {
        return $this->resultInfo;
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
