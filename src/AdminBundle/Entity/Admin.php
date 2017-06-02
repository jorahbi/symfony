<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="admin", indexes={@ORM\Index(name="job_num,id", columns={"job_num", "id"}), @ORM\Index(name="IDX_IS_LF_JO", columns={"is_service", "lft", "job_num"}), @ORM\Index(name="lft", columns={"lft"})})
 * @ORM\Entity
 */
class Admin
{
    /**
     * @var string
     *
     * @ORM\Column(name="admin_name", type="string", length=50, nullable=false)
     */
    private $adminName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="admin_pass", type="string", length=50, nullable=false)
     */
    private $adminPass = '';

    /**
     * @var string
     *
     * @ORM\Column(name="admin_limit", type="text", length=65535, nullable=true)
     */
    private $adminLimit;

    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     */
    private $pid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lft", type="integer", nullable=false)
     */
    private $lft = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rgt", type="integer", nullable=false)
     */
    private $rgt = '0';

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

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set adminName
     *
     * @param string $adminName
     *
     * @return Admin
     */
    public function setAdminName($adminName)
    {
        $this->adminName = $adminName;

        return $this;
    }

    /**
     * Get adminName
     *
     * @return string
     */
    public function getAdminName()
    {
        return $this->adminName;
    }

    /**
     * Set adminPass
     *
     * @param string $adminPass
     *
     * @return Admin
     */
    public function setAdminPass($adminPass)
    {
        $this->adminPass = $adminPass;

        return $this;
    }

    /**
     * Get adminPass
     *
     * @return string
     */
    public function getAdminPass()
    {
        return $this->adminPass;
    }

    /**
     * Set adminLimit
     *
     * @param string $adminLimit
     *
     * @return Admin
     */
    public function setAdminLimit($adminLimit)
    {
        $this->adminLimit = $adminLimit;

        return $this;
    }

    /**
     * Get adminLimit
     *
     * @return string
     */
    public function getAdminLimit()
    {
        return $this->adminLimit;
    }

    /**
     * Set pid
     *
     * @param integer $pid
     *
     * @return Admin
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return integer
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set lft
     *
     * @param integer $lft
     *
     * @return Admin
     */
    public function setLft($lft)
    {
        $this->lft = $lft;

        return $this;
    }

    /**
     * Get lft
     *
     * @return integer
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set rgt
     *
     * @param integer $rgt
     *
     * @return Admin
     */
    public function setRgt($rgt)
    {
        $this->rgt = $rgt;

        return $this;
    }

    /**
     * Get rgt
     *
     * @return integer
     */
    public function getRgt()
    {
        return $this->rgt;
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
