<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OfflineMember
 *
 * @ORM\Table(name="offline_member")
 * @ORM\Entity
 */
class OfflineMember
{
    /**
     * @var integer
     *
     * @ORM\Column(name="service_id", type="integer", nullable=false)
     */
    private $serviceId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_register", type="boolean", nullable=false)
     */
    private $isRegister = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="real_name", type="string", length=50, nullable=false)
     */
    private $realName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone", type="string", length=20, nullable=false)
     */
    private $userPhone = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="id_card_type", type="boolean", nullable=false)
     */
    private $idCardType = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="id_card", type="string", length=50, nullable=false)
     */
    private $idCard = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date", nullable=false)
     */
    private $birthday = '0000-00-00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sex", type="boolean", nullable=false)
     */
    private $sex = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="recommend", type="string", length=10, nullable=false)
     */
    private $recommend = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_golden", type="boolean", nullable=false)
     */
    private $isGolden = '2';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="service_time", type="integer", nullable=false)
     */
    private $serviceTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set serviceId
     *
     * @param integer $serviceId
     *
     * @return OfflineMember
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
     * Set isRegister
     *
     * @param boolean $isRegister
     *
     * @return OfflineMember
     */
    public function setIsRegister($isRegister)
    {
        $this->isRegister = $isRegister;

        return $this;
    }

    /**
     * Get isRegister
     *
     * @return boolean
     */
    public function getIsRegister()
    {
        return $this->isRegister;
    }

    /**
     * Set realName
     *
     * @param string $realName
     *
     * @return OfflineMember
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
     * @return OfflineMember
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
     * Set idCardType
     *
     * @param boolean $idCardType
     *
     * @return OfflineMember
     */
    public function setIdCardType($idCardType)
    {
        $this->idCardType = $idCardType;

        return $this;
    }

    /**
     * Get idCardType
     *
     * @return boolean
     */
    public function getIdCardType()
    {
        return $this->idCardType;
    }

    /**
     * Set idCard
     *
     * @param string $idCard
     *
     * @return OfflineMember
     */
    public function setIdCard($idCard)
    {
        $this->idCard = $idCard;

        return $this;
    }

    /**
     * Get idCard
     *
     * @return string
     */
    public function getIdCard()
    {
        return $this->idCard;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return OfflineMember
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
     * Set sex
     *
     * @param boolean $sex
     *
     * @return OfflineMember
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
     * Set recommend
     *
     * @param string $recommend
     *
     * @return OfflineMember
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
     * Set isGolden
     *
     * @param boolean $isGolden
     *
     * @return OfflineMember
     */
    public function setIsGolden($isGolden)
    {
        $this->isGolden = $isGolden;

        return $this;
    }

    /**
     * Get isGolden
     *
     * @return boolean
     */
    public function getIsGolden()
    {
        return $this->isGolden;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return OfflineMember
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * Get addTime
     *
     * @return integer
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * Set serviceTime
     *
     * @param integer $serviceTime
     *
     * @return OfflineMember
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
