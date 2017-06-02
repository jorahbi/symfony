<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Temp
 *
 * @ORM\Table(name="temp", uniqueConstraints={@ORM\UniqueConstraint(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class Temp
{
    /**
     * @var string
     *
     * @ORM\Column(name="order_no", type="string", length=50, nullable=true)
     */
    private $orderNo = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=true)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="money", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $money = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="red", type="text", length=65535, nullable=true)
     */
    private $red;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set orderNo
     *
     * @param string $orderNo
     *
     * @return Temp
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
     * Set uid
     *
     * @param integer $uid
     *
     * @return Temp
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
     * @return Temp
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
     * Set red
     *
     * @param string $red
     *
     * @return Temp
     */
    public function setRed($red)
    {
        $this->red = $red;

        return $this;
    }

    /**
     * Get red
     *
     * @return string
     */
    public function getRed()
    {
        return $this->red;
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
