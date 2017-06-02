<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OfflineList
 *
 * @ORM\Table(name="offline_list")
 * @ORM\Entity
 */
class OfflineList
{
    /**
     * @var string
     *
     * @ORM\Column(name="real_name", type="string", length=150, nullable=false)
     */
    private $realName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone", type="string", length=33, nullable=false)
     */
    private $userPhone;

    /**
     * @var integer
     *
     * @ORM\Column(name="service_id", type="integer", nullable=false)
     */
    private $serviceId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_call", type="integer", nullable=false)
     */
    private $isCall = '2';

    /**
     * @var integer
     *
     * @ORM\Column(name="create_time", type="integer", nullable=false)
     */
    private $createTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_reg", type="boolean", nullable=false)
     */
    private $isReg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="text", length=65535, nullable=true)
     */
    private $desc;

    /**
     * @var integer
     *
     * @ORM\Column(name="next_call_time", type="integer", nullable=true)
     */
    private $nextCallTime;

    /**
     * @var string
     *
     * @ORM\Column(name="investment_history", type="text", length=65535, nullable=true)
     */
    private $investmentHistory;

    /**
     * @var string
     *
     * @ORM\Column(name="assets_info", type="string", length=500, nullable=true)
     */
    private $assetsInfo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="age", type="boolean", nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sex", type="boolean", nullable=true)
     */
    private $sex;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_l1", type="integer", nullable=true)
     */
    private $areaL1;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_l2", type="integer", nullable=true)
     */
    private $areaL2;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_l3", type="integer", nullable=true)
     */
    private $areaL3;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_l4", type="integer", nullable=true)
     */
    private $areaL4;

    /**
     * @var string
     *
     * @ORM\Column(name="industry_l1", type="string", length=11, nullable=true)
     */
    private $industryL1;

    /**
     * @var string
     *
     * @ORM\Column(name="industry_l2", type="string", length=100, nullable=true)
     */
    private $industryL2;

    /**
     * @var string
     *
     * @ORM\Column(name="industry_l3", type="string", length=100, nullable=true)
     */
    private $industryL3;

    /**
     * @var string
     *
     * @ORM\Column(name="industry_l4", type="string", length=100, nullable=true)
     */
    private $industryL4;

    /**
     * @var string
     *
     * @ORM\Column(name="area_name_l1", type="string", length=100, nullable=true)
     */
    private $areaNameL1;

    /**
     * @var string
     *
     * @ORM\Column(name="area_name_l2", type="string", length=100, nullable=true)
     */
    private $areaNameL2;

    /**
     * @var string
     *
     * @ORM\Column(name="area_name_l3", type="string", length=100, nullable=true)
     */
    private $areaNameL3;

    /**
     * @var string
     *
     * @ORM\Column(name="area_name_l4", type="string", length=100, nullable=true)
     */
    private $areaNameL4;

    /**
     * @var string
     *
     * @ORM\Column(name="industry_name_l1", type="string", length=100, nullable=true)
     */
    private $industryNameL1;

    /**
     * @var string
     *
     * @ORM\Column(name="industry_name_l2", type="string", length=100, nullable=true)
     */
    private $industryNameL2;

    /**
     * @var string
     *
     * @ORM\Column(name="industry_name_l3", type="string", length=100, nullable=true)
     */
    private $industryNameL3;

    /**
     * @var string
     *
     * @ORM\Column(name="industry_name_l4", type="string", length=100, nullable=true)
     */
    private $industryNameL4;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_time", type="integer", nullable=true)
     */
    private $lastTime = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="tools_source", type="boolean", nullable=true)
     */
    private $toolsSource = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="listen_status", type="boolean", nullable=true)
     */
    private $listenStatus = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="spread", type="boolean", nullable=true)
     */
    private $spread = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="channels", type="boolean", nullable=true)
     */
    private $channels = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set realName
     *
     * @param string $realName
     *
     * @return OfflineList
     */
    public function setRealName($realName)
    {
        $this->realName = $realName;

        return $this;
    }

    /**
     * Get realName
     *
     * @return string
     */
    public function getRealName()
    {
        return $this->realName;
    }

    /**
     * Set userPhone
     *
     * @param string $userPhone
     *
     * @return OfflineList
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
     * Set serviceId
     *
     * @param integer $serviceId
     *
     * @return OfflineList
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;

        return $this;
    }

    /**
     * Get serviceId
     *
     * @return integer
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return OfflineList
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set isCall
     *
     * @param integer $isCall
     *
     * @return OfflineList
     */
    public function setIsCall($isCall)
    {
        $this->isCall = $isCall;

        return $this;
    }

    /**
     * Get isCall
     *
     * @return integer
     */
    public function getIsCall()
    {
        return $this->isCall;
    }

    /**
     * Set createTime
     *
     * @param integer $createTime
     *
     * @return OfflineList
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return integer
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     *
     * @return OfflineList
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
     * Set isReg
     *
     * @param boolean $isReg
     *
     * @return OfflineList
     */
    public function setIsReg($isReg)
    {
        $this->isReg = $isReg;

        return $this;
    }

    /**
     * Get isReg
     *
     * @return boolean
     */
    public function getIsReg()
    {
        return $this->isReg;
    }

    /**
     * Set desc
     *
     * @param string $desc
     *
     * @return OfflineList
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get desc
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set nextCallTime
     *
     * @param integer $nextCallTime
     *
     * @return OfflineList
     */
    public function setNextCallTime($nextCallTime)
    {
        $this->nextCallTime = $nextCallTime;

        return $this;
    }

    /**
     * Get nextCallTime
     *
     * @return integer
     */
    public function getNextCallTime()
    {
        return $this->nextCallTime;
    }

    /**
     * Set investmentHistory
     *
     * @param string $investmentHistory
     *
     * @return OfflineList
     */
    public function setInvestmentHistory($investmentHistory)
    {
        $this->investmentHistory = $investmentHistory;

        return $this;
    }

    /**
     * Get investmentHistory
     *
     * @return string
     */
    public function getInvestmentHistory()
    {
        return $this->investmentHistory;
    }

    /**
     * Set assetsInfo
     *
     * @param string $assetsInfo
     *
     * @return OfflineList
     */
    public function setAssetsInfo($assetsInfo)
    {
        $this->assetsInfo = $assetsInfo;

        return $this;
    }

    /**
     * Get assetsInfo
     *
     * @return string
     */
    public function getAssetsInfo()
    {
        return $this->assetsInfo;
    }

    /**
     * Set age
     *
     * @param boolean $age
     *
     * @return OfflineList
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return boolean
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return OfflineList
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set sex
     *
     * @param boolean $sex
     *
     * @return OfflineList
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return boolean
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set areaL1
     *
     * @param integer $areaL1
     *
     * @return OfflineList
     */
    public function setAreaL1($areaL1)
    {
        $this->areaL1 = $areaL1;

        return $this;
    }

    /**
     * Get areaL1
     *
     * @return integer
     */
    public function getAreaL1()
    {
        return $this->areaL1;
    }

    /**
     * Set areaL2
     *
     * @param integer $areaL2
     *
     * @return OfflineList
     */
    public function setAreaL2($areaL2)
    {
        $this->areaL2 = $areaL2;

        return $this;
    }

    /**
     * Get areaL2
     *
     * @return integer
     */
    public function getAreaL2()
    {
        return $this->areaL2;
    }

    /**
     * Set areaL3
     *
     * @param integer $areaL3
     *
     * @return OfflineList
     */
    public function setAreaL3($areaL3)
    {
        $this->areaL3 = $areaL3;

        return $this;
    }

    /**
     * Get areaL3
     *
     * @return integer
     */
    public function getAreaL3()
    {
        return $this->areaL3;
    }

    /**
     * Set areaL4
     *
     * @param integer $areaL4
     *
     * @return OfflineList
     */
    public function setAreaL4($areaL4)
    {
        $this->areaL4 = $areaL4;

        return $this;
    }

    /**
     * Get areaL4
     *
     * @return integer
     */
    public function getAreaL4()
    {
        return $this->areaL4;
    }

    /**
     * Set industryL1
     *
     * @param string $industryL1
     *
     * @return OfflineList
     */
    public function setIndustryL1($industryL1)
    {
        $this->industryL1 = $industryL1;

        return $this;
    }

    /**
     * Get industryL1
     *
     * @return string
     */
    public function getIndustryL1()
    {
        return $this->industryL1;
    }

    /**
     * Set industryL2
     *
     * @param string $industryL2
     *
     * @return OfflineList
     */
    public function setIndustryL2($industryL2)
    {
        $this->industryL2 = $industryL2;

        return $this;
    }

    /**
     * Get industryL2
     *
     * @return string
     */
    public function getIndustryL2()
    {
        return $this->industryL2;
    }

    /**
     * Set industryL3
     *
     * @param string $industryL3
     *
     * @return OfflineList
     */
    public function setIndustryL3($industryL3)
    {
        $this->industryL3 = $industryL3;

        return $this;
    }

    /**
     * Get industryL3
     *
     * @return string
     */
    public function getIndustryL3()
    {
        return $this->industryL3;
    }

    /**
     * Set industryL4
     *
     * @param string $industryL4
     *
     * @return OfflineList
     */
    public function setIndustryL4($industryL4)
    {
        $this->industryL4 = $industryL4;

        return $this;
    }

    /**
     * Get industryL4
     *
     * @return string
     */
    public function getIndustryL4()
    {
        return $this->industryL4;
    }

    /**
     * Set areaNameL1
     *
     * @param string $areaNameL1
     *
     * @return OfflineList
     */
    public function setAreaNameL1($areaNameL1)
    {
        $this->areaNameL1 = $areaNameL1;

        return $this;
    }

    /**
     * Get areaNameL1
     *
     * @return string
     */
    public function getAreaNameL1()
    {
        return $this->areaNameL1;
    }

    /**
     * Set areaNameL2
     *
     * @param string $areaNameL2
     *
     * @return OfflineList
     */
    public function setAreaNameL2($areaNameL2)
    {
        $this->areaNameL2 = $areaNameL2;

        return $this;
    }

    /**
     * Get areaNameL2
     *
     * @return string
     */
    public function getAreaNameL2()
    {
        return $this->areaNameL2;
    }

    /**
     * Set areaNameL3
     *
     * @param string $areaNameL3
     *
     * @return OfflineList
     */
    public function setAreaNameL3($areaNameL3)
    {
        $this->areaNameL3 = $areaNameL3;

        return $this;
    }

    /**
     * Get areaNameL3
     *
     * @return string
     */
    public function getAreaNameL3()
    {
        return $this->areaNameL3;
    }

    /**
     * Set areaNameL4
     *
     * @param string $areaNameL4
     *
     * @return OfflineList
     */
    public function setAreaNameL4($areaNameL4)
    {
        $this->areaNameL4 = $areaNameL4;

        return $this;
    }

    /**
     * Get areaNameL4
     *
     * @return string
     */
    public function getAreaNameL4()
    {
        return $this->areaNameL4;
    }

    /**
     * Set industryNameL1
     *
     * @param string $industryNameL1
     *
     * @return OfflineList
     */
    public function setIndustryNameL1($industryNameL1)
    {
        $this->industryNameL1 = $industryNameL1;

        return $this;
    }

    /**
     * Get industryNameL1
     *
     * @return string
     */
    public function getIndustryNameL1()
    {
        return $this->industryNameL1;
    }

    /**
     * Set industryNameL2
     *
     * @param string $industryNameL2
     *
     * @return OfflineList
     */
    public function setIndustryNameL2($industryNameL2)
    {
        $this->industryNameL2 = $industryNameL2;

        return $this;
    }

    /**
     * Get industryNameL2
     *
     * @return string
     */
    public function getIndustryNameL2()
    {
        return $this->industryNameL2;
    }

    /**
     * Set industryNameL3
     *
     * @param string $industryNameL3
     *
     * @return OfflineList
     */
    public function setIndustryNameL3($industryNameL3)
    {
        $this->industryNameL3 = $industryNameL3;

        return $this;
    }

    /**
     * Get industryNameL3
     *
     * @return string
     */
    public function getIndustryNameL3()
    {
        return $this->industryNameL3;
    }

    /**
     * Set industryNameL4
     *
     * @param string $industryNameL4
     *
     * @return OfflineList
     */
    public function setIndustryNameL4($industryNameL4)
    {
        $this->industryNameL4 = $industryNameL4;

        return $this;
    }

    /**
     * Get industryNameL4
     *
     * @return string
     */
    public function getIndustryNameL4()
    {
        return $this->industryNameL4;
    }

    /**
     * Set lastTime
     *
     * @param integer $lastTime
     *
     * @return OfflineList
     */
    public function setLastTime($lastTime)
    {
        $this->lastTime = $lastTime;

        return $this;
    }

    /**
     * Get lastTime
     *
     * @return integer
     */
    public function getLastTime()
    {
        return $this->lastTime;
    }

    /**
     * Set toolsSource
     *
     * @param boolean $toolsSource
     *
     * @return OfflineList
     */
    public function setToolsSource($toolsSource)
    {
        $this->toolsSource = $toolsSource;

        return $this;
    }

    /**
     * Get toolsSource
     *
     * @return boolean
     */
    public function getToolsSource()
    {
        return $this->toolsSource;
    }

    /**
     * Set listenStatus
     *
     * @param boolean $listenStatus
     *
     * @return OfflineList
     */
    public function setListenStatus($listenStatus)
    {
        $this->listenStatus = $listenStatus;

        return $this;
    }

    /**
     * Get listenStatus
     *
     * @return boolean
     */
    public function getListenStatus()
    {
        return $this->listenStatus;
    }

    /**
     * Set spread
     *
     * @param boolean $spread
     *
     * @return OfflineList
     */
    public function setSpread($spread)
    {
        $this->spread = $spread;

        return $this;
    }

    /**
     * Get spread
     *
     * @return boolean
     */
    public function getSpread()
    {
        return $this->spread;
    }

    /**
     * Set channels
     *
     * @param boolean $channels
     *
     * @return OfflineList
     */
    public function setChannels($channels)
    {
        $this->channels = $channels;

        return $this;
    }

    /**
     * Get channels
     *
     * @return boolean
     */
    public function getChannels()
    {
        return $this->channels;
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
