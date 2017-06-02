<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OldUser
 *
 * @ORM\Table(name="old_user", indexes={@ORM\Index(name="attestation_id", columns={"attestation_id"})})
 * @ORM\Entity
 */
class OldUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="type_id", type="integer", nullable=true)
     */
    private $typeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="attestation_id", type="integer", nullable=true)
     */
    private $attestationId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_account", type="string", length=100, nullable=true)
     */
    private $userAccount;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=100, nullable=true)
     */
    private $userPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="user_paypassword", type="string", length=100, nullable=true)
     */
    private $userPaypassword;

    /**
     * @var string
     *
     * @ORM\Column(name="user_realname", type="string", length=20, nullable=true)
     */
    private $userRealname;

    /**
     * @var string
     *
     * @ORM\Column(name="user_tel", type="string", length=20, nullable=true)
     */
    private $userTel;

    /**
     * @var string
     *
     * @ORM\Column(name="user_sex", type="string", length=10, nullable=true)
     */
    private $userSex;

    /**
     * @var string
     *
     * @ORM\Column(name="user_qq", type="string", length=20, nullable=true)
     */
    private $userQq;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_birthday", type="datetime", nullable=true)
     */
    private $userBirthday;

    /**
     * @var string
     *
     * @ORM\Column(name="user_province", type="string", length=20, nullable=true)
     */
    private $userProvince;

    /**
     * @var string
     *
     * @ORM\Column(name="user_city", type="string", length=20, nullable=true)
     */
    private $userCity;

    /**
     * @var string
     *
     * @ORM\Column(name="user_area", type="string", length=20, nullable=true)
     */
    private $userArea;

    /**
     * @var string
     *
     * @ORM\Column(name="user_type", type="string", length=100, nullable=true)
     */
    private $userType;

    /**
     * @var string
     *
     * @ORM\Column(name="apply_dsc", type="string", length=100, nullable=true)
     */
    private $applyDsc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="apply_time", type="datetime", nullable=true)
     */
    private $applyTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_status", type="integer", nullable=true)
     */
    private $userStatus = '-1';

    /**
     * @var string
     *
     * @ORM\Column(name="files_url", type="string", length=220, nullable=true)
     */
    private $filesUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="nation", type="string", length=10, nullable=true)
     */
    private $nation;

    /**
     * @var integer
     *
     * @ORM\Column(name="info_completed", type="integer", nullable=true)
     */
    private $infoCompleted = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="is_lock", type="integer", nullable=true)
     */
    private $isLock = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;



    /**
     * Set typeId
     *
     * @param integer $typeId
     *
     * @return OldUser
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * Get typeId
     *
     * @return integer
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * Set attestationId
     *
     * @param integer $attestationId
     *
     * @return OldUser
     */
    public function setAttestationId($attestationId)
    {
        $this->attestationId = $attestationId;

        return $this;
    }

    /**
     * Get attestationId
     *
     * @return integer
     */
    public function getAttestationId()
    {
        return $this->attestationId;
    }

    /**
     * Set userAccount
     *
     * @param string $userAccount
     *
     * @return OldUser
     */
    public function setUserAccount($userAccount)
    {
        $this->userAccount = $userAccount;

        return $this;
    }

    /**
     * Get userAccount
     *
     * @return string
     */
    public function getUserAccount()
    {
        return $this->userAccount;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     *
     * @return OldUser
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set userPaypassword
     *
     * @param string $userPaypassword
     *
     * @return OldUser
     */
    public function setUserPaypassword($userPaypassword)
    {
        $this->userPaypassword = $userPaypassword;

        return $this;
    }

    /**
     * Get userPaypassword
     *
     * @return string
     */
    public function getUserPaypassword()
    {
        return $this->userPaypassword;
    }

    /**
     * Set userRealname
     *
     * @param string $userRealname
     *
     * @return OldUser
     */
    public function setUserRealname($userRealname)
    {
        $this->userRealname = $userRealname;

        return $this;
    }

    /**
     * Get userRealname
     *
     * @return string
     */
    public function getUserRealname()
    {
        return $this->userRealname;
    }

    /**
     * Set userTel
     *
     * @param string $userTel
     *
     * @return OldUser
     */
    public function setUserTel($userTel)
    {
        $this->userTel = $userTel;

        return $this;
    }

    /**
     * Get userTel
     *
     * @return string
     */
    public function getUserTel()
    {
        return $this->userTel;
    }

    /**
     * Set userSex
     *
     * @param string $userSex
     *
     * @return OldUser
     */
    public function setUserSex($userSex)
    {
        $this->userSex = $userSex;

        return $this;
    }

    /**
     * Get userSex
     *
     * @return string
     */
    public function getUserSex()
    {
        return $this->userSex;
    }

    /**
     * Set userQq
     *
     * @param string $userQq
     *
     * @return OldUser
     */
    public function setUserQq($userQq)
    {
        $this->userQq = $userQq;

        return $this;
    }

    /**
     * Get userQq
     *
     * @return string
     */
    public function getUserQq()
    {
        return $this->userQq;
    }

    /**
     * Set userBirthday
     *
     * @param \DateTime $userBirthday
     *
     * @return OldUser
     */
    public function setUserBirthday($userBirthday)
    {
        $this->userBirthday = $userBirthday;

        return $this;
    }

    /**
     * Get userBirthday
     *
     * @return \DateTime
     */
    public function getUserBirthday()
    {
        return $this->userBirthday;
    }

    /**
     * Set userProvince
     *
     * @param string $userProvince
     *
     * @return OldUser
     */
    public function setUserProvince($userProvince)
    {
        $this->userProvince = $userProvince;

        return $this;
    }

    /**
     * Get userProvince
     *
     * @return string
     */
    public function getUserProvince()
    {
        return $this->userProvince;
    }

    /**
     * Set userCity
     *
     * @param string $userCity
     *
     * @return OldUser
     */
    public function setUserCity($userCity)
    {
        $this->userCity = $userCity;

        return $this;
    }

    /**
     * Get userCity
     *
     * @return string
     */
    public function getUserCity()
    {
        return $this->userCity;
    }

    /**
     * Set userArea
     *
     * @param string $userArea
     *
     * @return OldUser
     */
    public function setUserArea($userArea)
    {
        $this->userArea = $userArea;

        return $this;
    }

    /**
     * Get userArea
     *
     * @return string
     */
    public function getUserArea()
    {
        return $this->userArea;
    }

    /**
     * Set userType
     *
     * @param string $userType
     *
     * @return OldUser
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set applyDsc
     *
     * @param string $applyDsc
     *
     * @return OldUser
     */
    public function setApplyDsc($applyDsc)
    {
        $this->applyDsc = $applyDsc;

        return $this;
    }

    /**
     * Get applyDsc
     *
     * @return string
     */
    public function getApplyDsc()
    {
        return $this->applyDsc;
    }

    /**
     * Set applyTime
     *
     * @param \DateTime $applyTime
     *
     * @return OldUser
     */
    public function setApplyTime($applyTime)
    {
        $this->applyTime = $applyTime;

        return $this;
    }

    /**
     * Get applyTime
     *
     * @return \DateTime
     */
    public function getApplyTime()
    {
        return $this->applyTime;
    }

    /**
     * Set userStatus
     *
     * @param integer $userStatus
     *
     * @return OldUser
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * Get userStatus
     *
     * @return integer
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * Set filesUrl
     *
     * @param string $filesUrl
     *
     * @return OldUser
     */
    public function setFilesUrl($filesUrl)
    {
        $this->filesUrl = $filesUrl;

        return $this;
    }

    /**
     * Get filesUrl
     *
     * @return string
     */
    public function getFilesUrl()
    {
        return $this->filesUrl;
    }

    /**
     * Set nation
     *
     * @param string $nation
     *
     * @return OldUser
     */
    public function setNation($nation)
    {
        $this->nation = $nation;

        return $this;
    }

    /**
     * Get nation
     *
     * @return string
     */
    public function getNation()
    {
        return $this->nation;
    }

    /**
     * Set infoCompleted
     *
     * @param integer $infoCompleted
     *
     * @return OldUser
     */
    public function setInfoCompleted($infoCompleted)
    {
        $this->infoCompleted = $infoCompleted;

        return $this;
    }

    /**
     * Get infoCompleted
     *
     * @return integer
     */
    public function getInfoCompleted()
    {
        return $this->infoCompleted;
    }

    /**
     * Set isLock
     *
     * @param integer $isLock
     *
     * @return OldUser
     */
    public function setIsLock($isLock)
    {
        $this->isLock = $isLock;

        return $this;
    }

    /**
     * Get isLock
     *
     * @return integer
     */
    public function getIsLock()
    {
        return $this->isLock;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
