<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ThanksgivingCoupons
 *
 * @ORM\Table(name="thanksgiving_coupons")
 * @ORM\Entity
 */
class ThanksgivingCoupons
{
    /**
     * @var string
     *
     * @ORM\Column(name="href", type="string", length=255, nullable=true)
     */
    private $href;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="get_coupon_id", type="string", length=50, nullable=false)
     */
    private $getCouponId;

    /**
     * @var integer
     *
     * @ORM\Column(name="addtime", type="integer", nullable=true)
     */
    private $addtime;

    /**
     * @var string
     *
     * @ORM\Column(name="receiver", type="string", length=255, nullable=true)
     */
    private $receiver;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_open", type="boolean", nullable=false)
     */
    private $isOpen = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set href
     *
     * @param string $href
     *
     * @return ThanksgivingCoupons
     */
    public function setHref($href)
    {
        $this->href = $href;

        return $this;
    }

    /**
     * Get href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     *
     * @return ThanksgivingCoupons
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
     * Set getCouponId
     *
     * @param string $getCouponId
     *
     * @return ThanksgivingCoupons
     */
    public function setGetCouponId($getCouponId)
    {
        $this->getCouponId = $getCouponId;

        return $this;
    }

    /**
     * Get getCouponId
     *
     * @return string
     */
    public function getGetCouponId()
    {
        return $this->getCouponId;
    }

    /**
     * Set addtime
     *
     * @param integer $addtime
     *
     * @return ThanksgivingCoupons
     */
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;

        return $this;
    }

    /**
     * Get addtime
     *
     * @return integer
     */
    public function getAddtime()
    {
        return $this->addtime;
    }

    /**
     * Set receiver
     *
     * @param string $receiver
     *
     * @return ThanksgivingCoupons
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return string
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set isOpen
     *
     * @param boolean $isOpen
     *
     * @return ThanksgivingCoupons
     */
    public function setIsOpen($isOpen)
    {
        $this->isOpen = $isOpen;

        return $this;
    }

    /**
     * Get isOpen
     *
     * @return boolean
     */
    public function getIsOpen()
    {
        return $this->isOpen;
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
