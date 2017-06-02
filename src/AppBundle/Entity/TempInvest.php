<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TempInvest
 *
 * @ORM\Table(name="temp_invest")
 * @ORM\Entity
 */
class TempInvest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer", nullable=true)
     */
    private $bid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="capital", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $capital = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=true)
     */
    private $addTime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="interest", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $interest = '0.00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="client", type="boolean", nullable=true)
     */
    private $client = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone", type="string", length=11, nullable=true)
     */
    private $userPhone = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set bid
     *
     * @param integer $bid
     *
     * @return TempInvest
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
     * Set capital
     *
     * @param string $capital
     *
     * @return TempInvest
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * Get capital
     *
     * @return string
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return TempInvest
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
     * Set interest
     *
     * @param string $interest
     *
     * @return TempInvest
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;

        return $this;
    }

    /**
     * Get interest
     *
     * @return string
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * Set client
     *
     * @param boolean $client
     *
     * @return TempInvest
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
     * Set status
     *
     * @param boolean $status
     *
     * @return TempInvest
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
     * Set userPhone
     *
     * @param string $userPhone
     *
     * @return TempInvest
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
