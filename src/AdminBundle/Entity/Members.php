<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Members
 *
 * @ORM\Table(name="members")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\MembersRepository")
 */
class Members
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=50, nullable=false)
     */
    private $userName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nick_name", type="string", length=50, nullable=false)
     */
    private $nickName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="real_name", type="string", length=50, nullable=false)
     */
    private $realName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_pass", type="string", length=32, nullable=false)
     */
    private $userPass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="deal_pass", type="string", length=32, nullable=false)
     */
    private $dealPass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="app_deal_pass", type="string", length=10, nullable=false)
     */
    private $appDealPass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=50, nullable=false)
     */
    private $userEmail = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone", type="string", length=11, nullable=false)
     */
    private $userPhone = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_age", type="boolean", nullable=true)
     */
    private $userAge;

    /**
     * @var string
     *
     * @ORM\Column(name="user_idcard", type="string", length=30, nullable=false)
     */
    private $userIdcard = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_idcard_type", type="boolean", nullable=false)
     */
    private $userIdcardType = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_growth", type="integer", nullable=false)
     */
    private $userGrowth = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_integral", type="integer", nullable=false)
     */
    private $userIntegral = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_experience", type="boolean", nullable=false)
     */
    private $userExperience = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_novice", type="boolean", nullable=true)
     */
    private $userNovice = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_type", type="boolean", nullable=false)
     */
    private $userType = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="user_head", type="string", length=255, nullable=false)
     */
    private $userHead = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="vip_level", type="boolean", nullable=false)
     */
    private $vipLevel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="vip_time", type="integer", nullable=false)
     */
    private $vipTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bbs_level_id", type="integer", nullable=false)
     */
    private $bbsLevelId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bbs_exp", type="integer", nullable=false)
     */
    private $bbsExp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="account_money", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $accountMoney = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="receive_money", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $receiveMoney = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="recommend", type="string", length=20, nullable=false)
     */
    private $recommend = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="friend_id", type="integer", nullable=false)
     */
    private $friendId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="id_status", type="boolean", nullable=false)
     */
    private $idStatus = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="email_status", type="boolean", nullable=false)
     */
    private $emailStatus = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="account_status", type="boolean", nullable=false)
     */
    private $accountStatus = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="weixin_status", type="boolean", nullable=false)
     */
    private $weixinStatus = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="question_status", type="boolean", nullable=false)
     */
    private $questionStatus = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="client", type="integer", nullable=false)
     */
    private $client = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="service_id", type="integer", nullable=false)
     */
    private $serviceId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="investment_adviser_id", type="integer", nullable=false)
     */
    private $investmentAdviserId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="qq_id", type="string", length=255, nullable=false)
     */
    private $qqId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="wx_id", type="string", length=255, nullable=false)
     */
    private $wxId = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="login_protect", type="boolean", nullable=false)
     */
    private $loginProtect = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="login_error_num", type="boolean", nullable=false)
     */
    private $loginErrorNum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="login_num", type="integer", nullable=false)
     */
    private $loginNum = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="member_status", type="boolean", nullable=false)
     */
    private $memberStatus = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="last_time", type="integer", nullable=false)
     */
    private $lastTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sina_passwd", type="boolean", nullable=true)
     */
    private $sinaPasswd = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="invest_num", type="integer", nullable=true)
     */
    private $investNum = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="gesture", type="string", length=9, nullable=true)
     */
    private $gesture = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Advertisement", type="boolean", nullable=false)
     */
    private $advertisement = '0';

    /**
     * @ORM\OneToMany(targetEntity="BorrowInvest", mappedBy="uid", cascade={"persist"})
     */
    private $memberInvest;

     /**
      * 
      * @ORM\OneToMany(targetEntity="BorrowInfo", mappedBy="borrow_uid", cascade={"persist"})
      */
    private $memberBorrow;
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return Members
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set nickName
     *
     * @param string $nickName
     *
     * @return Members
     */
    public function setNickName($nickName)
    {
        $this->nickName = $nickName;

        return $this;
    }

    /**
     * Get nickName
     *
     * @return string
     */
    public function getNickName()
    {
        return $this->nickName;
    }

    /**
     * Set realName
     *
     * @param string $realName
     *
     * @return Members
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
     * Set userPass
     *
     * @param string $userPass
     *
     * @return Members
     */
    public function setUserPass($userPass)
    {
        $this->userPass = $userPass;

        return $this;
    }

    /**
     * Get userPass
     *
     * @return string
     */
    public function getUserPass()
    {
        return $this->userPass;
    }

    /**
     * Set dealPass
     *
     * @param string $dealPass
     *
     * @return Members
     */
    public function setDealPass($dealPass)
    {
        $this->dealPass = $dealPass;

        return $this;
    }

    /**
     * Get dealPass
     *
     * @return string
     */
    public function getDealPass()
    {
        return $this->dealPass;
    }

    /**
     * Set appDealPass
     *
     * @param string $appDealPass
     *
     * @return Members
     */
    public function setAppDealPass($appDealPass)
    {
        $this->appDealPass = $appDealPass;

        return $this;
    }

    /**
     * Get appDealPass
     *
     * @return string
     */
    public function getAppDealPass()
    {
        return $this->appDealPass;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     *
     * @return Members
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userPhone
     *
     * @param string $userPhone
     *
     * @return Members
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
     * Set userAge
     *
     * @param boolean $userAge
     *
     * @return Members
     */
    public function setUserAge($userAge)
    {
        $this->userAge = $userAge;

        return $this;
    }

    /**
     * Get userAge
     *
     * @return boolean
     */
    public function getUserAge()
    {
        return $this->userAge;
    }

    /**
     * Set userIdcard
     *
     * @param string $userIdcard
     *
     * @return Members
     */
    public function setUserIdcard($userIdcard)
    {
        $this->userIdcard = $userIdcard;

        return $this;
    }

    /**
     * Get userIdcard
     *
     * @return string
     */
    public function getUserIdcard()
    {
        return $this->userIdcard;
    }

    /**
     * Set userIdcardType
     *
     * @param boolean $userIdcardType
     *
     * @return Members
     */
    public function setUserIdcardType($userIdcardType)
    {
        $this->userIdcardType = $userIdcardType;

        return $this;
    }

    /**
     * Get userIdcardType
     *
     * @return boolean
     */
    public function getUserIdcardType()
    {
        return $this->userIdcardType;
    }

    /**
     * Set userGrowth
     *
     * @param integer $userGrowth
     *
     * @return Members
     */
    public function setUserGrowth($userGrowth)
    {
        $this->userGrowth = $userGrowth;

        return $this;
    }

    /**
     * Get userGrowth
     *
     * @return integer
     */
    public function getUserGrowth()
    {
        return $this->userGrowth;
    }

    /**
     * Set userIntegral
     *
     * @param integer $userIntegral
     *
     * @return Members
     */
    public function setUserIntegral($userIntegral)
    {
        $this->userIntegral = $userIntegral;

        return $this;
    }

    /**
     * Get userIntegral
     *
     * @return integer
     */
    public function getUserIntegral()
    {
        return $this->userIntegral;
    }

    /**
     * Set userExperience
     *
     * @param boolean $userExperience
     *
     * @return Members
     */
    public function setUserExperience($userExperience)
    {
        $this->userExperience = $userExperience;

        return $this;
    }

    /**
     * Get userExperience
     *
     * @return boolean
     */
    public function getUserExperience()
    {
        return $this->userExperience;
    }

    /**
     * Set userNovice
     *
     * @param boolean $userNovice
     *
     * @return Members
     */
    public function setUserNovice($userNovice)
    {
        $this->userNovice = $userNovice;

        return $this;
    }

    /**
     * Get userNovice
     *
     * @return boolean
     */
    public function getUserNovice()
    {
        return $this->userNovice;
    }

    /**
     * Set userType
     *
     * @param boolean $userType
     *
     * @return Members
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return boolean
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set userHead
     *
     * @param string $userHead
     *
     * @return Members
     */
    public function setUserHead($userHead)
    {
        $this->userHead = $userHead;

        return $this;
    }

    /**
     * Get userHead
     *
     * @return string
     */
    public function getUserHead()
    {
        return $this->userHead;
    }

    /**
     * Set vipLevel
     *
     * @param boolean $vipLevel
     *
     * @return Members
     */
    public function setVipLevel($vipLevel)
    {
        $this->vipLevel = $vipLevel;

        return $this;
    }

    /**
     * Get vipLevel
     *
     * @return boolean
     */
    public function getVipLevel()
    {
        return $this->vipLevel;
    }

    /**
     * Set vipTime
     *
     * @param integer $vipTime
     *
     * @return Members
     */
    public function setVipTime($vipTime)
    {
        $this->vipTime = $vipTime;

        return $this;
    }

    /**
     * Get vipTime
     *
     * @return integer
     */
    public function getVipTime()
    {
        return $this->vipTime;
    }

    /**
     * Set bbsLevelId
     *
     * @param integer $bbsLevelId
     *
     * @return Members
     */
    public function setBbsLevelId($bbsLevelId)
    {
        $this->bbsLevelId = $bbsLevelId;

        return $this;
    }

    /**
     * Get bbsLevelId
     *
     * @return integer
     */
    public function getBbsLevelId()
    {
        return $this->bbsLevelId;
    }

    /**
     * Set bbsExp
     *
     * @param integer $bbsExp
     *
     * @return Members
     */
    public function setBbsExp($bbsExp)
    {
        $this->bbsExp = $bbsExp;

        return $this;
    }

    /**
     * Get bbsExp
     *
     * @return integer
     */
    public function getBbsExp()
    {
        return $this->bbsExp;
    }

    /**
     * Set accountMoney
     *
     * @param string $accountMoney
     *
     * @return Members
     */
    public function setAccountMoney($accountMoney)
    {
        $this->accountMoney = $accountMoney;

        return $this;
    }

    /**
     * Get accountMoney
     *
     * @return string
     */
    public function getAccountMoney()
    {
        return $this->accountMoney;
    }

    /**
     * Set receiveMoney
     *
     * @param string $receiveMoney
     *
     * @return Members
     */
    public function setReceiveMoney($receiveMoney)
    {
        $this->receiveMoney = $receiveMoney;

        return $this;
    }

    /**
     * Get receiveMoney
     *
     * @return string
     */
    public function getReceiveMoney()
    {
        return $this->receiveMoney;
    }

    /**
     * Set recommend
     *
     * @param string $recommend
     *
     * @return Members
     */
    public function setRecommend($recommend)
    {
        $this->recommend = $recommend;

        return $this;
    }

    /**
     * Get recommend
     *
     * @return string
     */
    public function getRecommend()
    {
        return $this->recommend;
    }

    /**
     * Set friendId
     *
     * @param integer $friendId
     *
     * @return Members
     */
    public function setFriendId($friendId)
    {
        $this->friendId = $friendId;

        return $this;
    }

    /**
     * Get friendId
     *
     * @return integer
     */
    public function getFriendId()
    {
        return $this->friendId;
    }

    /**
     * Set idStatus
     *
     * @param boolean $idStatus
     *
     * @return Members
     */
    public function setIdStatus($idStatus)
    {
        $this->idStatus = $idStatus;

        return $this;
    }

    /**
     * Get idStatus
     *
     * @return boolean
     */
    public function getIdStatus()
    {
        return $this->idStatus;
    }

    /**
     * Set emailStatus
     *
     * @param boolean $emailStatus
     *
     * @return Members
     */
    public function setEmailStatus($emailStatus)
    {
        $this->emailStatus = $emailStatus;

        return $this;
    }

    /**
     * Get emailStatus
     *
     * @return boolean
     */
    public function getEmailStatus()
    {
        return $this->emailStatus;
    }

    /**
     * Set accountStatus
     *
     * @param boolean $accountStatus
     *
     * @return Members
     */
    public function setAccountStatus($accountStatus)
    {
        $this->accountStatus = $accountStatus;

        return $this;
    }

    /**
     * Get accountStatus
     *
     * @return boolean
     */
    public function getAccountStatus()
    {
        return $this->accountStatus;
    }

    /**
     * Set weixinStatus
     *
     * @param boolean $weixinStatus
     *
     * @return Members
     */
    public function setWeixinStatus($weixinStatus)
    {
        $this->weixinStatus = $weixinStatus;

        return $this;
    }

    /**
     * Get weixinStatus
     *
     * @return boolean
     */
    public function getWeixinStatus()
    {
        return $this->weixinStatus;
    }

    /**
     * Set questionStatus
     *
     * @param boolean $questionStatus
     *
     * @return Members
     */
    public function setQuestionStatus($questionStatus)
    {
        $this->questionStatus = $questionStatus;

        return $this;
    }

    /**
     * Get questionStatus
     *
     * @return boolean
     */
    public function getQuestionStatus()
    {
        return $this->questionStatus;
    }

    /**
     * Set client
     *
     * @param integer $client
     *
     * @return Members
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return integer
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set serviceId
     *
     * @param integer $serviceId
     *
     * @return Members
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
     * Set investmentAdviserId
     *
     * @param integer $investmentAdviserId
     *
     * @return Members
     */
    public function setInvestmentAdviserId($investmentAdviserId)
    {
        $this->investmentAdviserId = $investmentAdviserId;

        return $this;
    }

    /**
     * Get investmentAdviserId
     *
     * @return integer
     */
    public function getInvestmentAdviserId()
    {
        return $this->investmentAdviserId;
    }

    /**
     * Set qqId
     *
     * @param string $qqId
     *
     * @return Members
     */
    public function setQqId($qqId)
    {
        $this->qqId = $qqId;

        return $this;
    }

    /**
     * Get qqId
     *
     * @return string
     */
    public function getQqId()
    {
        return $this->qqId;
    }

    /**
     * Set wxId
     *
     * @param string $wxId
     *
     * @return Members
     */
    public function setWxId($wxId)
    {
        $this->wxId = $wxId;

        return $this;
    }

    /**
     * Get wxId
     *
     * @return string
     */
    public function getWxId()
    {
        return $this->wxId;
    }

    /**
     * Set loginProtect
     *
     * @param boolean $loginProtect
     *
     * @return Members
     */
    public function setLoginProtect($loginProtect)
    {
        $this->loginProtect = $loginProtect;

        return $this;
    }

    /**
     * Get loginProtect
     *
     * @return boolean
     */
    public function getLoginProtect()
    {
        return $this->loginProtect;
    }

    /**
     * Set loginErrorNum
     *
     * @param boolean $loginErrorNum
     *
     * @return Members
     */
    public function setLoginErrorNum($loginErrorNum)
    {
        $this->loginErrorNum = $loginErrorNum;

        return $this;
    }

    /**
     * Get loginErrorNum
     *
     * @return boolean
     */
    public function getLoginErrorNum()
    {
        return $this->loginErrorNum;
    }

    /**
     * Set loginNum
     *
     * @param integer $loginNum
     *
     * @return Members
     */
    public function setLoginNum($loginNum)
    {
        $this->loginNum = $loginNum;

        return $this;
    }

    /**
     * Get loginNum
     *
     * @return integer
     */
    public function getLoginNum()
    {
        return $this->loginNum;
    }

    /**
     * Set memberStatus
     *
     * @param boolean $memberStatus
     *
     * @return Members
     */
    public function setMemberStatus($memberStatus)
    {
        $this->memberStatus = $memberStatus;

        return $this;
    }

    /**
     * Get memberStatus
     *
     * @return boolean
     */
    public function getMemberStatus()
    {
        return $this->memberStatus;
    }

    /**
     * Set lastTime
     *
     * @param integer $lastTime
     *
     * @return Members
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
     * Set sinaPasswd
     *
     * @param boolean $sinaPasswd
     *
     * @return Members
     */
    public function setSinaPasswd($sinaPasswd)
    {
        $this->sinaPasswd = $sinaPasswd;

        return $this;
    }

    /**
     * Get sinaPasswd
     *
     * @return boolean
     */
    public function getSinaPasswd()
    {
        return $this->sinaPasswd;
    }

    /**
     * Set investNum
     *
     * @param integer $investNum
     *
     * @return Members
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
     * Set gesture
     *
     * @param string $gesture
     *
     * @return Members
     */
    public function setGesture($gesture)
    {
        $this->gesture = $gesture;

        return $this;
    }

    /**
     * Get gesture
     *
     * @return string
     */
    public function getGesture()
    {
        return $this->gesture;
    }

    /**
     * Set advertisement
     *
     * @param boolean $advertisement
     *
     * @return Members
     */
    public function setAdvertisement($advertisement)
    {
        $this->advertisement = $advertisement;

        return $this;
    }

    /**
     * Get advertisement
     *
     * @return boolean
     */
    public function getAdvertisement()
    {
        return $this->advertisement;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->memberInvest = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add memberInvest
     *
     * @param \AdminBundle\Entity\BorrowInvest $memberInvest
     *
     * @return Members
     */
    public function addMemberInvest(\AdminBundle\Entity\BorrowInvest $memberInvest)
    {
        $this->memberInvest[] = $memberInvest;

        return $this;
    }

    /**
     * Remove memberInvest
     *
     * @param \AdminBundle\Entity\BorrowInvest $memberInvest
     */
    public function removeMemberInvest(\AdminBundle\Entity\BorrowInvest $memberInvest)
    {
        $this->memberInvest->removeElement($memberInvest);
    }

    /**
     * Get memberInvest
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMemberInvest()
    {
        return $this->memberInvest;
    }

    /**
     * Add memberBorrow
     *
     * @param \AdminBundle\Entity\BorrowInfo $memberBorrow
     *
     * @return Members
     */
    public function addMemberBorrow(\AdminBundle\Entity\BorrowInfo $memberBorrow)
    {
        $this->memberBorrow[] = $memberBorrow;

        return $this;
    }

    /**
     * Remove memberBorrow
     *
     * @param \AdminBundle\Entity\BorrowInfo $memberBorrow
     */
    public function removeMemberBorrow(\AdminBundle\Entity\BorrowInfo $memberBorrow)
    {
        $this->memberBorrow->removeElement($memberBorrow);
    }

    /**
     * Get memberBorrow
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMemberBorrow()
    {
        return $this->memberBorrow;
    }
}
