<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpringCoupons
 *
 * @ORM\Table(name="spring_coupons")
 * @ORM\Entity
 */
class SpringCoupons
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
     * @ORM\Column(name="uid", type="integer", nullable=true)
     */
    private $uid;

    /**
     * @var integer
     *
     * @ORM\Column(name="share_time", type="integer", nullable=true)
     */
    private $shareTime;

    /**
     * @var string
     *
     * @ORM\Column(name="order_no", type="string", length=255, nullable=true)
     */
    private $orderNo;

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
     * @return SpringCoupons
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
     * @return SpringCoupons
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
     * Set shareTime
     *
     * @param integer $shareTime
     *
     * @return SpringCoupons
     */
    public function setShareTime($shareTime)
    {
        $this->shareTime = $shareTime;

        return $this;
    }

    /**
     * Get shareTime
     *
     * @return integer
     */
    public function getShareTime()
    {
        return $this->shareTime;
    }

    /**
     * Set orderNo
     *
     * @param string $orderNo
     *
     * @return SpringCoupons
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
