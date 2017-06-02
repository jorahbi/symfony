<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SendJuecaicoin
 *
 * @ORM\Table(name="send_juecaicoin", uniqueConstraints={@ORM\UniqueConstraint(name="order_on", columns={"order_on"})})
 * @ORM\Entity
 */
class SendJuecaicoin
{
    /**
     * @var integer
     *
     * @ORM\Column(name="userId", type="integer", nullable=true)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="sendTime", type="bigint", nullable=true)
     */
    private $sendtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="investId", type="integer", nullable=true)
     */
    private $investid;

    /**
     * @var integer
     *
     * @ORM\Column(name="projectId", type="integer", nullable=true)
     */
    private $projectid;

    /**
     * @var string
     *
     * @ORM\Column(name="money", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $money = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="month", type="boolean", nullable=true)
     */
    private $month = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="juecaibi", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $juecaibi = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="order_on", type="string", length=31, nullable=false)
     */
    private $orderOn;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return SendJuecaicoin
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set sendtime
     *
     * @param integer $sendtime
     *
     * @return SendJuecaicoin
     */
    public function setSendtime($sendtime)
    {
        $this->sendtime = $sendtime;

        return $this;
    }

    /**
     * Get sendtime
     *
     * @return integer
     */
    public function getSendtime()
    {
        return $this->sendtime;
    }

    /**
     * Set investid
     *
     * @param integer $investid
     *
     * @return SendJuecaicoin
     */
    public function setInvestid($investid)
    {
        $this->investid = $investid;

        return $this;
    }

    /**
     * Get investid
     *
     * @return integer
     */
    public function getInvestid()
    {
        return $this->investid;
    }

    /**
     * Set projectid
     *
     * @param integer $projectid
     *
     * @return SendJuecaicoin
     */
    public function setProjectid($projectid)
    {
        $this->projectid = $projectid;

        return $this;
    }

    /**
     * Get projectid
     *
     * @return integer
     */
    public function getProjectid()
    {
        return $this->projectid;
    }

    /**
     * Set money
     *
     * @param string $money
     *
     * @return SendJuecaicoin
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
     * Set month
     *
     * @param boolean $month
     *
     * @return SendJuecaicoin
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return boolean
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set juecaibi
     *
     * @param string $juecaibi
     *
     * @return SendJuecaicoin
     */
    public function setJuecaibi($juecaibi)
    {
        $this->juecaibi = $juecaibi;

        return $this;
    }

    /**
     * Get juecaibi
     *
     * @return string
     */
    public function getJuecaibi()
    {
        return $this->juecaibi;
    }

    /**
     * Set orderOn
     *
     * @param string $orderOn
     *
     * @return SendJuecaicoin
     */
    public function setOrderOn($orderOn)
    {
        $this->orderOn = $orderOn;

        return $this;
    }

    /**
     * Get orderOn
     *
     * @return string
     */
    public function getOrderOn()
    {
        return $this->orderOn;
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
