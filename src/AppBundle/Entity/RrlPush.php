<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RrlPush
 *
 * @ORM\Table(name="rrl_push")
 * @ORM\Entity
 */
class RrlPush
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer", nullable=true)
     */
    private $bid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="push_time", type="integer", nullable=true)
     */
    private $pushTime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="push_back", type="string", length=255, nullable=true)
     */
    private $pushBack = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="push_day", type="integer", nullable=true)
     */
    private $pushDay = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="code", type="integer", nullable=true)
     */
    private $code = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rrl_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rrlId;



    /**
     * Set bid
     *
     * @param integer $bid
     *
     * @return RrlPush
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
     * Set pushTime
     *
     * @param integer $pushTime
     *
     * @return RrlPush
     */
    public function setPushTime($pushTime)
    {
        $this->pushTime = $pushTime;

        return $this;
    }

    /**
     * Get pushTime
     *
     * @return integer
     */
    public function getPushTime()
    {
        return $this->pushTime;
    }

    /**
     * Set pushBack
     *
     * @param string $pushBack
     *
     * @return RrlPush
     */
    public function setPushBack($pushBack)
    {
        $this->pushBack = $pushBack;

        return $this;
    }

    /**
     * Get pushBack
     *
     * @return string
     */
    public function getPushBack()
    {
        return $this->pushBack;
    }

    /**
     * Set pushDay
     *
     * @param integer $pushDay
     *
     * @return RrlPush
     */
    public function setPushDay($pushDay)
    {
        $this->pushDay = $pushDay;

        return $this;
    }

    /**
     * Get pushDay
     *
     * @return integer
     */
    public function getPushDay()
    {
        return $this->pushDay;
    }

    /**
     * Set code
     *
     * @param integer $code
     *
     * @return RrlPush
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return integer
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Get rrlId
     *
     * @return integer
     */
    public function getRrlId()
    {
        return $this->rrlId;
    }
}
