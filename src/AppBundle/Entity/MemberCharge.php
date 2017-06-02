<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberCharge
 *
 * @ORM\Table(name="member_charge", uniqueConstraints={@ORM\UniqueConstraint(name="order_no", columns={"order_no"})}, indexes={@ORM\Index(name="u_s", columns={"uid", "status"})})
 * @ORM\Entity
 */
class MemberCharge
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
     * @ORM\Column(name="money", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $money = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="fee", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $fee = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="user_fee", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $userFee = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="order_no", type="string", length=32, nullable=false)
     */
    private $orderNo = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pay_time", type="integer", nullable=false)
     */
    private $payTime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="account_type", type="string", length=10, nullable=false)
     */
    private $accountType = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="pay_method", type="boolean", nullable=false)
     */
    private $payMethod = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bank_code", type="string", length=15, nullable=false)
     */
    private $bankCode = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="add_ip", type="string", length=20, nullable=false)
     */
    private $addIp = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="client", type="boolean", nullable=false)
     */
    private $client = '0';

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
     * @return MemberCharge
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
     * Set money
     *
     * @param string $money
     *
     * @return MemberCharge
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return string
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set fee
     *
     * @param string $fee
     *
     * @return MemberCharge
     */
    public function setFee($fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * Get fee
     *
     * @return string
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Set userFee
     *
     * @param string $userFee
     *
     * @return MemberCharge
     */
    public function setUserFee($userFee)
    {
        $this->userFee = $userFee;

        return $this;
    }

    /**
     * Get userFee
     *
     * @return string
     */
    public function getUserFee()
    {
        return $this->userFee;
    }

    /**
     * Set orderNo
     *
     * @param string $orderNo
     *
     * @return MemberCharge
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;

        return $this;
    }

    /**
     * Get orderNo
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return MemberCharge
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
     * Set payTime
     *
     * @param integer $payTime
     *
     * @return MemberCharge
     */
    public function setPayTime($payTime)
    {
        $this->payTime = $payTime;

        return $this;
    }

    /**
     * Get payTime
     *
     * @return integer
     */
    public function getPayTime()
    {
        return $this->payTime;
    }

    /**
     * Set accountType
     *
     * @param string $accountType
     *
     * @return MemberCharge
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * Get accountType
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Set payMethod
     *
     * @param boolean $payMethod
     *
     * @return MemberCharge
     */
    public function setPayMethod($payMethod)
    {
        $this->payMethod = $payMethod;

        return $this;
    }

    /**
     * Get payMethod
     *
     * @return boolean
     */
    public function getPayMethod()
    {
        return $this->payMethod;
    }

    /**
     * Set bankCode
     *
     * @param string $bankCode
     *
     * @return MemberCharge
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
     * Set status
     *
     * @param boolean $status
     *
     * @return MemberCharge
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
     * Set addIp
     *
     * @param string $addIp
     *
     * @return MemberCharge
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
     * Set client
     *
     * @param boolean $client
     *
     * @return MemberCharge
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return boolean
     */
    public function getClient()
    {
        return $this->client;
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
