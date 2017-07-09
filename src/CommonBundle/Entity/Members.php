<?php

namespace CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Members
 *
 * @ORM\Table(name="members", indexes={@ORM\Index(name="user_type", columns={"user_type"}), @ORM\Index(name="user_integral", columns={"user_integral"}), @ORM\Index(name="user_phone", columns={"user_phone"}), @ORM\Index(name="user_name", columns={"user_name"})})
 * @ORM\Entity
 */
class Members
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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


}

