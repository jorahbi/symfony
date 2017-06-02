<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberWithdraw
 *
 * @ORM\Table(name="member_withdraw", uniqueConstraints={@ORM\UniqueConstraint(name="order", columns={"order_no"})}, indexes={@ORM\Index(name="u_s", columns={"uid", "status"})})
 * @ORM\Entity
 */
class MemberWithdraw
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
     * @ORM\Column(name="receive_money", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $receiveMoney = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="fee", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $fee = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="user_fee", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $userFee = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="card_id", type="integer", nullable=false)
     */
    private $cardId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bank_code", type="string", length=15, nullable=false)
     */
    private $bankCode = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bank_card", type="string", length=30, nullable=false)
     */
    private $bankCard = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="order_no", type="string", length=100, nullable=false)
     */
    private $orderNo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="freeze_no", type="string", length=100, nullable=false)
     */
    private $freezeNo = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="op_apply", type="integer", nullable=false)
     */
    private $opApply = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="op_verify", type="integer", nullable=false)
     */
    private $opVerify = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="op_confirm", type="integer", nullable=false)
     */
    private $opConfirm = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="apply_time", type="integer", nullable=false)
     */
    private $applyTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="verify_time", type="integer", nullable=false)
     */
    private $verifyTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="confirm_time", type="integer", nullable=false)
     */
    private $confirmTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pay_time", type="integer", nullable=false)
     */
    private $payTime = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="client", type="boolean", nullable=false)
     */
    private $client = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="string", length=255, nullable=false)
     */
    private $info = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="service_id", type="integer", nullable=false)
     */
    private $serviceId = '0';

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
     * @return MemberWithdraw
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
     * @return MemberWithdraw
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
     * Set receiveMoney
     *
     * @param string $receiveMoney
     *
     * @return MemberWithdraw
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
     * Set fee
     *
     * @param string $fee
     *
     * @return MemberWithdraw
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
     * @return MemberWithdraw
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
     * Set cardId
     *
     * @param integer $cardId
     *
     * @return MemberWithdraw
     */
    public function setCardId($cardId)
    {
        $this->cardId = $cardId;

        return $this;
    }

    /**
     * Get cardId
     *
     * @return integer
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
     * @return MemberWithdraw
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
     * Set bankCard
     *
     * @param string $bankCard
     *
     * @return MemberWithdraw
     */
    public function setBankCard($bankCard)
    {
        $this->bankCard = $bankCard;

        return $this;
    }

    /**
     * Get bankCard
     *
     * @return string
     */
    public function getBankCard()
    {
        return $this->bankCard;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return MemberWithdraw
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
     * Set orderNo
     *
     * @param string $orderNo
     *
     * @return MemberWithdraw
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
     * Set freezeNo
     *
     * @param string $freezeNo
     *
     * @return MemberWithdraw
     */
    public function setFreezeNo($freezeNo)
    {
        $this->freezeNo = $freezeNo;

        return $this;
    }

    /**
     * Get freezeNo
     *
     * @return string
     */
    public function getFreezeNo()
    {
        return $this->freezeNo;
    }

    /**
     * Set opApply
     *
     * @param integer $opApply
     *
     * @return MemberWithdraw
     */
    public function setOpApply($opApply)
    {
        $this->opApply = $opApply;

        return $this;
    }

    /**
     * Get opApply
     *
     * @return integer
     */
    public function getOpApply()
    {
        return $this->opApply;
    }

    /**
     * Set opVerify
     *
     * @param integer $opVerify
     *
     * @return MemberWithdraw
     */
    public function setOpVerify($opVerify)
    {
        $this->opVerify = $opVerify;

        return $this;
    }

    /**
     * Get opVerify
     *
     * @return integer
     */
    public function getOpVerify()
    {
        return $this->opVerify;
    }

    /**
     * Set opConfirm
     *
     * @param integer $opConfirm
     *
     * @return MemberWithdraw
     */
    public function setOpConfirm($opConfirm)
    {
        $this->opConfirm = $opConfirm;

        return $this;
    }

    /**
     * Get opConfirm
     *
     * @return integer
     */
    public function getOpConfirm()
    {
        return $this->opConfirm;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return MemberWithdraw
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
     * Set applyTime
     *
     * @param integer $applyTime
     *
     * @return MemberWithdraw
     */
    public function setApplyTime($applyTime)
    {
        $this->applyTime = $applyTime;

        return $this;
    }

    /**
     * Get applyTime
     *
     * @return integer
     */
    public function getApplyTime()
    {
        return $this->applyTime;
    }

    /**
     * Set verifyTime
     *
     * @param integer $verifyTime
     *
     * @return MemberWithdraw
     */
    public function setVerifyTime($verifyTime)
    {
        $this->verifyTime = $verifyTime;

        return $this;
    }

    /**
     * Get verifyTime
     *
     * @return integer
     */
    public function getVerifyTime()
    {
        return $this->verifyTime;
    }

    /**
     * Set confirmTime
     *
     * @param integer $confirmTime
     *
     * @return MemberWithdraw
     */
    public function setConfirmTime($confirmTime)
    {
        $this->confirmTime = $confirmTime;

        return $this;
    }

    /**
     * Get confirmTime
     *
     * @return integer
     */
    public function getConfirmTime()
    {
        return $this->confirmTime;
    }

    /**
     * Set payTime
     *
     * @param integer $payTime
     *
     * @return MemberWithdraw
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
     * Set client
     *
     * @param boolean $client
     *
     * @return MemberWithdraw
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
     * Set info
     *
     * @param string $info
     *
     * @return MemberWithdraw
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set serviceId
     *
     * @param integer $serviceId
     *
     * @return MemberWithdraw
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
