<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberBank
 *
 * @ORM\Table(name="member_bank", indexes={@ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class MemberBank
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="card_id", type="string", length=50, nullable=false)
     */
    private $cardId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bank_code", type="string", length=50, nullable=false)
     */
    private $bankCode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bank_name", type="string", length=50, nullable=false)
     */
    private $bankName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bank_account_no", type="string", length=50, nullable=false)
     */
    private $bankAccountNo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="province", type="string", length=20, nullable=false)
     */
    private $province = '';

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=20, nullable=false)
     */
    private $city = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bank_branch", type="string", length=100, nullable=false)
     */
    private $bankBranch = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="add_ip", type="string", length=16, nullable=false)
     */
    private $addIp = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set uid
     *
     * @param integer $uid
     *
     * @return MemberBank
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
     * Set cardId
     *
     * @param string $cardId
     *
     * @return MemberBank
     */
    public function setCardId($cardId)
    {
        $this->cardId = $cardId;

        return $this;
    }

    /**
     * Get cardId
     *
     * @return string
     */
    public function getCardId()
    {
        return $this->cardId;
    }

    /**
     * Set bankCode
     *
     * @param string $bankCode
     *
     * @return MemberBank
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;

        return $this;
    }

    /**
     * Get bankCode
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Set bankName
     *
     * @param string $bankName
     *
     * @return MemberBank
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * Get bankName
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Set bankAccountNo
     *
     * @param string $bankAccountNo
     *
     * @return MemberBank
     */
    public function setBankAccountNo($bankAccountNo)
    {
        $this->bankAccountNo = $bankAccountNo;

        return $this;
    }

    /**
     * Get bankAccountNo
     *
     * @return string
     */
    public function getBankAccountNo()
    {
        return $this->bankAccountNo;
    }

    /**
     * Set province
     *
     * @param string $province
     *
     * @return MemberBank
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return MemberBank
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set bankBranch
     *
     * @param string $bankBranch
     *
     * @return MemberBank
     */
    public function setBankBranch($bankBranch)
    {
        $this->bankBranch = $bankBranch;

        return $this;
    }

    /**
     * Get bankBranch
     *
     * @return string
     */
    public function getBankBranch()
    {
        return $this->bankBranch;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return MemberBank
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
     * Set addIp
     *
     * @param string $addIp
     *
     * @return MemberBank
     */
    public function setAddIp($addIp)
    {
        $this->addIp = $addIp;

        return $this;
    }

    /**
     * Get addIp
     *
     * @return string
     */
    public function getAddIp()
    {
        return $this->addIp;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return MemberBank
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
