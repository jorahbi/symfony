<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberMoneylog
 *
 * @ORM\Table(name="member_moneylog", indexes={@ORM\Index(name="add_time", columns={"add_time"}), @ORM\Index(name="uid", columns={"uid", "type", "id"})})
 * @ORM\Entity
 */
class MemberMoneylog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer", nullable=false)
     */
    private $bid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     */
    private $tid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="affect_money", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $affectMoney = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="affect_receive_money", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $affectReceiveMoney = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="receive_money", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $receiveMoney = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="string", length=100, nullable=false)
     */
    private $info = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="add_ip", type="string", length=30, nullable=false)
     */
    private $addIp = '';

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
     * @return MemberMoneylog
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
     * Set bid
     *
     * @param integer $bid
     *
     * @return MemberMoneylog
     */
    public function setBid($bid)
    {
        $this->bid = $bid;

        return $this;
    }

    /**
     * Get bid
     *
     * @return integer
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * Set tid
     *
     * @param integer $tid
     *
     * @return MemberMoneylog
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

    /**
     * Get tid
     *
     * @return integer
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return MemberMoneylog
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set affectMoney
     *
     * @param string $affectMoney
     *
     * @return MemberMoneylog
     */
    public function setAffectMoney($affectMoney)
    {
        $this->affectMoney = $affectMoney;

        return $this;
    }

    /**
     * Get affectMoney
     *
     * @return string
     */
    public function getAffectMoney()
    {
        return $this->affectMoney;
    }

    /**
     * Set affectReceiveMoney
     *
     * @param string $affectReceiveMoney
     *
     * @return MemberMoneylog
     */
    public function setAffectReceiveMoney($affectReceiveMoney)
    {
        $this->affectReceiveMoney = $affectReceiveMoney;

        return $this;
    }

    /**
     * Get affectReceiveMoney
     *
     * @return string
     */
    public function getAffectReceiveMoney()
    {
        return $this->affectReceiveMoney;
    }

    /**
     * Set receiveMoney
     *
     * @param string $receiveMoney
     *
     * @return MemberMoneylog
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
     * Set info
     *
     * @param string $info
     *
     * @return MemberMoneylog
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
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return MemberMoneylog
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
     * @return MemberMoneylog
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
