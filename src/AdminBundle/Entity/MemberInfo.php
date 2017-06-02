<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberInfo
 *
 * @ORM\Table(name="member_info", uniqueConstraints={@ORM\UniqueConstraint(name="uid", columns={"uid"})}, indexes={@ORM\Index(name="birthday_y", columns={"birthday_year"}), @ORM\Index(name="birthday_m", columns={"birthday_month"}), @ORM\Index(name="birthday_d", columns={"birthday_day"})})
 * @ORM\Entity
 */
class MemberInfo
{
    /**
     * @var string
     *
     * @ORM\Column(name="sex", type="string", length=20, nullable=false)
     */
    private $sex = '';

    /**
     * @var string
     *
     * @ORM\Column(name="marry", type="string", length=20, nullable=false)
     */
    private $marry = '';

    /**
     * @var string
     *
     * @ORM\Column(name="education", type="string", length=50, nullable=false)
     */
    private $education = '';

    /**
     * @var string
     *
     * @ORM\Column(name="income", type="string", length=20, nullable=false)
     */
    private $income = '';

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=100, nullable=false)
     */
    private $address = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date", nullable=false)
     */
    private $birthday = '0000-00-00';

    /**
     * @var integer
     *
     * @ORM\Column(name="birthday_year", type="smallint", nullable=false)
     */
    private $birthdayYear = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="birthday_month", type="smallint", nullable=false)
     */
    private $birthdayMonth = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="birthday_day", type="smallint", nullable=false)
     */
    private $birthdayDay = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="homeplace", type="string", length=100, nullable=false)
     */
    private $homeplace = '';

    /**
     * @var string
     *
     * @ORM\Column(name="school", type="string", length=100, nullable=false)
     */
    private $school = '';

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=100, nullable=false)
     */
    private $company = '';

    /**
     * @var string
     *
     * @ORM\Column(name="occupation", type="string", length=100, nullable=false)
     */
    private $occupation = '';

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=100, nullable=false)
     */
    private $position = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="reg_time", type="integer", nullable=false)
     */
    private $regTime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="reg_ip", type="string", length=30, nullable=false)
     */
    private $regIp = '';

    /**
     * @var string
     *
     * @ORM\Column(name="reg_addr", type="string", length=50, nullable=false)
     */
    private $regAddr = '';

    /**
     * @var string
     *
     * @ORM\Column(name="reg_way", type="string", length=100, nullable=false)
     */
    private $regWay = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="reg_keyword", type="string", length=255, nullable=false)
     */
    private $regKeyword = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="qa_id", type="integer", nullable=false)
     */
    private $qaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="qa_answer", type="string", length=255, nullable=false)
     */
    private $qaAnswer = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="qb_id", type="integer", nullable=false)
     */
    private $qbId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="qb_answer", type="string", length=255, nullable=false)
     */
    private $qbAnswer = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="sign_total", type="integer", nullable=false)
     */
    private $signTotal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sign_max_continue", type="integer", nullable=false)
     */
    private $signMaxContinue = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sign_now_continue", type="integer", nullable=false)
     */
    private $signNowContinue = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bbs_sign_total", type="integer", nullable=false)
     */
    private $bbsSignTotal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bbs_sign_max_continue", type="integer", nullable=false)
     */
    private $bbsSignMaxContinue = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bbs_sign_now_continue", type="integer", nullable=false)
     */
    private $bbsSignNowContinue = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="string", length=255, nullable=false)
     */
    private $signature = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="service_time", type="integer", nullable=false)
     */
    private $serviceTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mika_uid", type="integer", nullable=true)
     */
    private $mikaUid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mika_zid", type="integer", nullable=true)
     */
    private $mikaZid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="call_cno", type="integer", nullable=false)
     */
    private $callCno;

    /**
     * @var string
     *
     * @ORM\Column(name="user_tag", type="string", length=100, nullable=true)
     */
    private $userTag;

    /**
     * @var string
     *
     * @ORM\Column(name="invest_tag", type="string", length=100, nullable=true)
     */
    private $investTag;

    /**
     * @var integer
     *
     * @ORM\Column(name="appointment_time", type="integer", nullable=false)
     */
    private $appointmentTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="invest_tag_id", type="integer", nullable=false)
     */
    private $investTagId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;



    /**
     * Set sex
     *
     * @param string $sex
     *
     * @return MemberInfo
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set marry
     *
     * @param string $marry
     *
     * @return MemberInfo
     */
    public function setMarry($marry)
    {
        $this->marry = $marry;

        return $this;
    }

    /**
     * Get marry
     *
     * @return string
     */
    public function getMarry()
    {
        return $this->marry;
    }

    /**
     * Set education
     *
     * @param string $education
     *
     * @return MemberInfo
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return string
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set income
     *
     * @param string $income
     *
     * @return MemberInfo
     */
    public function setIncome($income)
    {
        $this->income = $income;

        return $this;
    }

    /**
     * Get income
     *
     * @return string
     */
    public function getIncome()
    {
        return $this->income;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return MemberInfo
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return MemberInfo
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set birthdayYear
     *
     * @param integer $birthdayYear
     *
     * @return MemberInfo
     */
    public function setBirthdayYear($birthdayYear)
    {
        $this->birthdayYear = $birthdayYear;

        return $this;
    }

    /**
     * Get birthdayYear
     *
     * @return integer
     */
    public function getBirthdayYear()
    {
        return $this->birthdayYear;
    }

    /**
     * Set birthdayMonth
     *
     * @param integer $birthdayMonth
     *
     * @return MemberInfo
     */
    public function setBirthdayMonth($birthdayMonth)
    {
        $this->birthdayMonth = $birthdayMonth;

        return $this;
    }

    /**
     * Get birthdayMonth
     *
     * @return integer
     */
    public function getBirthdayMonth()
    {
        return $this->birthdayMonth;
    }

    /**
     * Set birthdayDay
     *
     * @param integer $birthdayDay
     *
     * @return MemberInfo
     */
    public function setBirthdayDay($birthdayDay)
    {
        $this->birthdayDay = $birthdayDay;

        return $this;
    }

    /**
     * Get birthdayDay
     *
     * @return integer
     */
    public function getBirthdayDay()
    {
        return $this->birthdayDay;
    }

    /**
     * Set homeplace
     *
     * @param string $homeplace
     *
     * @return MemberInfo
     */
    public function setHomeplace($homeplace)
    {
        $this->homeplace = $homeplace;

        return $this;
    }

    /**
     * Get homeplace
     *
     * @return string
     */
    public function getHomeplace()
    {
        return $this->homeplace;
    }

    /**
     * Set school
     *
     * @param string $school
     *
     * @return MemberInfo
     */
    public function setSchool($school)
    {
        $this->school = $school;

        return $this;
    }

    /**
     * Get school
     *
     * @return string
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return MemberInfo
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set occupation
     *
     * @param string $occupation
     *
     * @return MemberInfo
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * Get occupation
     *
     * @return string
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return MemberInfo
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set regTime
     *
     * @param integer $regTime
     *
     * @return MemberInfo
     */
    public function setRegTime($regTime)
    {
        $this->regTime = $regTime;

        return $this;
    }

    /**
     * Get regTime
     *
     * @return integer
     */
    public function getRegTime()
    {
        return $this->regTime;
    }

    /**
     * Set regIp
     *
     * @param string $regIp
     *
     * @return MemberInfo
     */
    public function setRegIp($regIp)
    {
        $this->regIp = $regIp;

        return $this;
    }

    /**
     * Get regIp
     *
     * @return string
     */
    public function getRegIp()
    {
        return $this->regIp;
    }

    /**
     * Set regAddr
     *
     * @param string $regAddr
     *
     * @return MemberInfo
     */
    public function setRegAddr($regAddr)
    {
        $this->regAddr = $regAddr;

        return $this;
    }

    /**
     * Get regAddr
     *
     * @return string
     */
    public function getRegAddr()
    {
        return $this->regAddr;
    }

    /**
     * Set regWay
     *
     * @param string $regWay
     *
     * @return MemberInfo
     */
    public function setRegWay($regWay)
    {
        $this->regWay = $regWay;

        return $this;
    }

    /**
     * Get regWay
     *
     * @return string
     */
    public function getRegWay()
    {
        return $this->regWay;
    }

    /**
     * Set regKeyword
     *
     * @param string $regKeyword
     *
     * @return MemberInfo
     */
    public function setRegKeyword($regKeyword)
    {
        $this->regKeyword = $regKeyword;

        return $this;
    }

    /**
     * Get regKeyword
     *
     * @return string
     */
    public function getRegKeyword()
    {
        return $this->regKeyword;
    }

    /**
     * Set qaId
     *
     * @param integer $qaId
     *
     * @return MemberInfo
     */
    public function setQaId($qaId)
    {
        $this->qaId = $qaId;

        return $this;
    }

    /**
     * Get qaId
     *
     * @return integer
     */
    public function getQaId()
    {
        return $this->qaId;
    }

    /**
     * Set qaAnswer
     *
     * @param string $qaAnswer
     *
     * @return MemberInfo
     */
    public function setQaAnswer($qaAnswer)
    {
        $this->qaAnswer = $qaAnswer;

        return $this;
    }

    /**
     * Get qaAnswer
     *
     * @return string
     */
    public function getQaAnswer()
    {
        return $this->qaAnswer;
    }

    /**
     * Set qbId
     *
     * @param integer $qbId
     *
     * @return MemberInfo
     */
    public function setQbId($qbId)
    {
        $this->qbId = $qbId;

        return $this;
    }

    /**
     * Get qbId
     *
     * @return integer
     */
    public function getQbId()
    {
        return $this->qbId;
    }

    /**
     * Set qbAnswer
     *
     * @param string $qbAnswer
     *
     * @return MemberInfo
     */
    public function setQbAnswer($qbAnswer)
    {
        $this->qbAnswer = $qbAnswer;

        return $this;
    }

    /**
     * Get qbAnswer
     *
     * @return string
     */
    public function getQbAnswer()
    {
        return $this->qbAnswer;
    }

    /**
     * Set signTotal
     *
     * @param integer $signTotal
     *
     * @return MemberInfo
     */
    public function setSignTotal($signTotal)
    {
        $this->signTotal = $signTotal;

        return $this;
    }

    /**
     * Get signTotal
     *
     * @return integer
     */
    public function getSignTotal()
    {
        return $this->signTotal;
    }

    /**
     * Set signMaxContinue
     *
     * @param integer $signMaxContinue
     *
     * @return MemberInfo
     */
    public function setSignMaxContinue($signMaxContinue)
    {
        $this->signMaxContinue = $signMaxContinue;

        return $this;
    }

    /**
     * Get signMaxContinue
     *
     * @return integer
     */
    public function getSignMaxContinue()
    {
        return $this->signMaxContinue;
    }

    /**
     * Set signNowContinue
     *
     * @param integer $signNowContinue
     *
     * @return MemberInfo
     */
    public function setSignNowContinue($signNowContinue)
    {
        $this->signNowContinue = $signNowContinue;

        return $this;
    }

    /**
     * Get signNowContinue
     *
     * @return integer
     */
    public function getSignNowContinue()
    {
        return $this->signNowContinue;
    }

    /**
     * Set bbsSignTotal
     *
     * @param integer $bbsSignTotal
     *
     * @return MemberInfo
     */
    public function setBbsSignTotal($bbsSignTotal)
    {
        $this->bbsSignTotal = $bbsSignTotal;

        return $this;
    }

    /**
     * Get bbsSignTotal
     *
     * @return integer
     */
    public function getBbsSignTotal()
    {
        return $this->bbsSignTotal;
    }

    /**
     * Set bbsSignMaxContinue
     *
     * @param integer $bbsSignMaxContinue
     *
     * @return MemberInfo
     */
    public function setBbsSignMaxContinue($bbsSignMaxContinue)
    {
        $this->bbsSignMaxContinue = $bbsSignMaxContinue;

        return $this;
    }

    /**
     * Get bbsSignMaxContinue
     *
     * @return integer
     */
    public function getBbsSignMaxContinue()
    {
        return $this->bbsSignMaxContinue;
    }

    /**
     * Set bbsSignNowContinue
     *
     * @param integer $bbsSignNowContinue
     *
     * @return MemberInfo
     */
    public function setBbsSignNowContinue($bbsSignNowContinue)
    {
        $this->bbsSignNowContinue = $bbsSignNowContinue;

        return $this;
    }

    /**
     * Get bbsSignNowContinue
     *
     * @return integer
     */
    public function getBbsSignNowContinue()
    {
        return $this->bbsSignNowContinue;
    }

    /**
     * Set signature
     *
     * @param string $signature
     *
     * @return MemberInfo
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * Get signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Set serviceTime
     *
     * @param integer $serviceTime
     *
     * @return MemberInfo
     */
    public function setServiceTime($serviceTime)
    {
        $this->serviceTime = $serviceTime;

        return $this;
    }

    /**
     * Get serviceTime
     *
     * @return integer
     */
    public function getServiceTime()
    {
        return $this->serviceTime;
    }

    /**
     * Set mikaUid
     *
     * @param integer $mikaUid
     *
     * @return MemberInfo
     */
    public function setMikaUid($mikaUid)
    {
        $this->mikaUid = $mikaUid;

        return $this;
    }

    /**
     * Get mikaUid
     *
     * @return integer
     */
    public function getMikaUid()
    {
        return $this->mikaUid;
    }

    /**
     * Set mikaZid
     *
     * @param integer $mikaZid
     *
     * @return MemberInfo
     */
    public function setMikaZid($mikaZid)
    {
        $this->mikaZid = $mikaZid;

        return $this;
    }

    /**
     * Get mikaZid
     *
     * @return integer
     */
    public function getMikaZid()
    {
        return $this->mikaZid;
    }

    /**
     * Set callCno
     *
     * @param integer $callCno
     *
     * @return MemberInfo
     */
    public function setCallCno($callCno)
    {
        $this->callCno = $callCno;

        return $this;
    }

    /**
     * Get callCno
     *
     * @return integer
     */
    public function getCallCno()
    {
        return $this->callCno;
    }

    /**
     * Set userTag
     *
     * @param string $userTag
     *
     * @return MemberInfo
     */
    public function setUserTag($userTag)
    {
        $this->userTag = $userTag;

        return $this;
    }

    /**
     * Get userTag
     *
     * @return string
     */
    public function getUserTag()
    {
        return $this->userTag;
    }

    /**
     * Set investTag
     *
     * @param string $investTag
     *
     * @return MemberInfo
     */
    public function setInvestTag($investTag)
    {
        $this->investTag = $investTag;

        return $this;
    }

    /**
     * Get investTag
     *
     * @return string
     */
    public function getInvestTag()
    {
        return $this->investTag;
    }

    /**
     * Set appointmentTime
     *
     * @param integer $appointmentTime
     *
     * @return MemberInfo
     */
    public function setAppointmentTime($appointmentTime)
    {
        $this->appointmentTime = $appointmentTime;

        return $this;
    }

    /**
     * Get appointmentTime
     *
     * @return integer
     */
    public function getAppointmentTime()
    {
        return $this->appointmentTime;
    }

    /**
     * Set investTagId
     *
     * @param integer $investTagId
     *
     * @return MemberInfo
     */
    public function setInvestTagId($investTagId)
    {
        $this->investTagId = $investTagId;

        return $this;
    }

    /**
     * Get investTagId
     *
     * @return integer
     */
    public function getInvestTagId()
    {
        return $this->investTagId;
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
}
