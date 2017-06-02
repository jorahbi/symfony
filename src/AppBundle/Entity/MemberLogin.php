<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MemberLogin
 *
 * @ORM\Table(name="member_login", uniqueConstraints={@ORM\UniqueConstraint(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class MemberLogin
{
    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=20, nullable=false)
     */
    private $ip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=20, nullable=false)
     */
    private $address = '';

    /**
     * @var string
     *
     * @ORM\Column(name="browser", type="string", length=20, nullable=false)
     */
    private $browser = '';

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string", length=20, nullable=false)
     */
    private $client = '';

    /**
     * @var string
     *
     * @ORM\Column(name="login_type", type="string", length=20, nullable=false)
     */
    private $loginType = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer", nullable=false)
     */
    private $time = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="logs", type="text", length=65535, nullable=false)
     */
    private $logs;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lock", type="boolean", nullable=false)
     */
    private $lock = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;



    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return MemberLogin
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return MemberLogin
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set browser
     *
     * @param string $browser
     *
     * @return MemberLogin
     */
    public function setBrowser($browser)
    {
        $this->browser = $browser;

        return $this;
    }

    /**
     * Get browser
     *
     * @return string
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * Set client
     *
     * @param string $client
     *
     * @return MemberLogin
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set loginType
     *
     * @param string $loginType
     *
     * @return MemberLogin
     */
    public function setLoginType($loginType)
    {
        $this->loginType = $loginType;

        return $this;
    }

    /**
     * Get loginType
     *
     * @return string
     */
    public function getLoginType()
    {
        return $this->loginType;
    }

    /**
     * Set time
     *
     * @param integer $time
     *
     * @return MemberLogin
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return integer
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set logs
     *
     * @param string $logs
     *
     * @return MemberLogin
     */
    public function setLogs($logs)
    {
        $this->logs = $logs;

        return $this;
    }

    /**
     * Get logs
     *
     * @return string
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * Set lock
     *
     * @param boolean $lock
     *
     * @return MemberLogin
     */
    public function setLock($lock)
    {
        $this->lock = $lock;

        return $this;
    }

    /**
     * Get lock
     *
     * @return boolean
     */
    public function getLock()
    {
        return $this->lock;
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
}
