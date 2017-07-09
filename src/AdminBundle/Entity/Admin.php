<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity
 */
class Admin implements UserInterFace, \Serializable
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
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password = '';

    /**
     * @var string
     *
     * @ORM\Column(name="permission", type="text", length=65535, nullable=true)
     */
    private $permission;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     */
    private $groupId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="position_id", type="integer", nullable=false)
     */
    private $positionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="real_name", type="string", length=20, nullable=false)
     */
    private $realName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="job_num", type="string", length=10, nullable=false)
     */
    private $jobNum = '';

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=18, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="qq", type="string", length=20, nullable=false)
     */
    private $qq;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sex", type="boolean", nullable=false)
     */
    private $sex;

    /**
     * @var integer
     *
     * @ORM\Column(name="bbs_uid", type="integer", nullable=false)
     */
    private $bbsUid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="valid", type="boolean", nullable=false)
     */
    private $valid = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_service", type="boolean", nullable=false)
     */
    private $isService = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_investment_adviser", type="boolean", nullable=false)
     */
    private $isInvestmentAdviser = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_bbs_admin", type="boolean", nullable=false)
     */
    private $isBbsAdmin = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_part_time", type="boolean", nullable=false)
     */
    private $isPartTime = '2';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_auto_allot", type="boolean", nullable=false)
     */
    private $isAutoAllot = '2';

    /**
     * @var boolean
     *
     * @ORM\Column(name="skin", type="boolean", nullable=false)
     */
    private $skin = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_service_online", type="boolean", nullable=false)
     */
    private $isServiceOnline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="cno", type="integer", nullable=true)
     */
    private $cno;

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getRoles()
    {
        return array('ROLE_ADMIN');
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
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

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Admin
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Admin
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set permission
     *
     * @param string $permission
     *
     * @return Admin
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;
    
        return $this;
    }

    /**
     * Get permission
     *
     * @return string
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Set groupId
     *
     * @param integer $groupId
     *
     * @return Admin
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
     * Set positionId
     *
     * @param integer $positionId
     *
     * @return Admin
     */
    public function setPositionId($positionId)
    {
        $this->positionId = $positionId;
    
        return $this;
    }

    /**
     * Get positionId
     *
     * @return integer
     */
    public function getPositionId()
    {
        return $this->positionId;
    }

    /**
     * Set realName
     *
     * @param string $realName
     *
     * @return Admin
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
     * Set jobNum
     *
     * @param string $jobNum
     *
     * @return Admin
     */
    public function setJobNum($jobNum)
    {
        $this->jobNum = $jobNum;
    
        return $this;
    }

    /**
     * Get jobNum
     *
     * @return string
     */
    public function getJobNum()
    {
        return $this->jobNum;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Admin
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set qq
     *
     * @param string $qq
     *
     * @return Admin
     */
    public function setQq($qq)
    {
        $this->qq = $qq;
    
        return $this;
    }

    /**
     * Get qq
     *
     * @return string
     */
    public function getQq()
    {
        return $this->qq;
    }

    /**
     * Set sex
     *
     * @param boolean $sex
     *
     * @return Admin
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
     * Set bbsUid
     *
     * @param integer $bbsUid
     *
     * @return Admin
     */
    public function setBbsUid($bbsUid)
    {
        $this->bbsUid = $bbsUid;
    
        return $this;
    }

    /**
     * Get bbsUid
     *
     * @return integer
     */
    public function getBbsUid()
    {
        return $this->bbsUid;
    }

    /**
     * Set valid
     *
     * @param boolean $valid
     *
     * @return Admin
     */
    public function setValid($valid)
    {
        $this->valid = $valid;
    
        return $this;
    }

    /**
     * Get valid
     *
     * @return boolean
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Set isService
     *
     * @param boolean $isService
     *
     * @return Admin
     */
    public function setIsService($isService)
    {
        $this->isService = $isService;
    
        return $this;
    }

    /**
     * Get isService
     *
     * @return boolean
     */
    public function getIsService()
    {
        return $this->isService;
    }

    /**
     * Set isInvestmentAdviser
     *
     * @param boolean $isInvestmentAdviser
     *
     * @return Admin
     */
    public function setIsInvestmentAdviser($isInvestmentAdviser)
    {
        $this->isInvestmentAdviser = $isInvestmentAdviser;
    
        return $this;
    }

    /**
     * Get isInvestmentAdviser
     *
     * @return boolean
     */
    public function getIsInvestmentAdviser()
    {
        return $this->isInvestmentAdviser;
    }

    /**
     * Set isBbsAdmin
     *
     * @param boolean $isBbsAdmin
     *
     * @return Admin
     */
    public function setIsBbsAdmin($isBbsAdmin)
    {
        $this->isBbsAdmin = $isBbsAdmin;
    
        return $this;
    }

    /**
     * Get isBbsAdmin
     *
     * @return boolean
     */
    public function getIsBbsAdmin()
    {
        return $this->isBbsAdmin;
    }

    /**
     * Set isPartTime
     *
     * @param boolean $isPartTime
     *
     * @return Admin
     */
    public function setIsPartTime($isPartTime)
    {
        $this->isPartTime = $isPartTime;
    
        return $this;
    }

    /**
     * Get isPartTime
     *
     * @return boolean
     */
    public function getIsPartTime()
    {
        return $this->isPartTime;
    }

    /**
     * Set isAutoAllot
     *
     * @param boolean $isAutoAllot
     *
     * @return Admin
     */
    public function setIsAutoAllot($isAutoAllot)
    {
        $this->isAutoAllot = $isAutoAllot;
    
        return $this;
    }

    /**
     * Get isAutoAllot
     *
     * @return boolean
     */
    public function getIsAutoAllot()
    {
        return $this->isAutoAllot;
    }

    /**
     * Set skin
     *
     * @param boolean $skin
     *
     * @return Admin
     */
    public function setSkin($skin)
    {
        $this->skin = $skin;
    
        return $this;
    }

    /**
     * Get skin
     *
     * @return boolean
     */
    public function getSkin()
    {
        return $this->skin;
    }

    /**
     * Set isServiceOnline
     *
     * @param boolean $isServiceOnline
     *
     * @return Admin
     */
    public function setIsServiceOnline($isServiceOnline)
    {
        $this->isServiceOnline = $isServiceOnline;
    
        return $this;
    }

    /**
     * Get isServiceOnline
     *
     * @return boolean
     */
    public function getIsServiceOnline()
    {
        return $this->isServiceOnline;
    }

    /**
     * Set cno
     *
     * @param integer $cno
     *
     * @return Admin
     */
    public function setCno($cno)
    {
        $this->cno = $cno;
    
        return $this;
    }

    /**
     * Get cno
     *
     * @return integer
     */
    public function getCno()
    {
        return $this->cno;
    }
}
