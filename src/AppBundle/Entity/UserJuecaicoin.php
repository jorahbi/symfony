<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserJuecaicoin
 *
 * @ORM\Table(name="user_juecaicoin", uniqueConstraints={@ORM\UniqueConstraint(name="user_createtime", columns={"userId", "createtime"})})
 * @ORM\Entity
 */
class UserJuecaicoin
{
    /**
     * @var integer
     *
     * @ORM\Column(name="userId", type="integer", nullable=true)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="allMoney", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $allmoney = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="currentMoney", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $currentmoney = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="addfrequency", type="integer", nullable=true)
     */
    private $addfrequency = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="consumeMoney", type="integer", nullable=true)
     */
    private $consumemoney = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="createtime", type="integer", nullable=true)
     */
    private $createtime;

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
     * @return UserJuecaicoin
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
     * Set allmoney
     *
     * @param string $allmoney
     *
     * @return UserJuecaicoin
     */
    public function setAllmoney($allmoney)
    {
        $this->allmoney = $allmoney;

        return $this;
    }

    /**
     * Get allmoney
     *
     * @return string
     */
    public function getAllmoney()
    {
        return $this->allmoney;
    }

    /**
     * Set currentmoney
     *
     * @param string $currentmoney
     *
     * @return UserJuecaicoin
     */
    public function setCurrentmoney($currentmoney)
    {
        $this->currentmoney = $currentmoney;

        return $this;
    }

    /**
     * Get currentmoney
     *
     * @return string
     */
    public function getCurrentmoney()
    {
        return $this->currentmoney;
    }

    /**
     * Set addfrequency
     *
     * @param integer $addfrequency
     *
     * @return UserJuecaicoin
     */
    public function setAddfrequency($addfrequency)
    {
        $this->addfrequency = $addfrequency;

        return $this;
    }

    /**
     * Get addfrequency
     *
     * @return integer
     */
    public function getAddfrequency()
    {
        return $this->addfrequency;
    }

    /**
     * Set consumemoney
     *
     * @param integer $consumemoney
     *
     * @return UserJuecaicoin
     */
    public function setConsumemoney($consumemoney)
    {
        $this->consumemoney = $consumemoney;

        return $this;
    }

    /**
     * Get consumemoney
     *
     * @return integer
     */
    public function getConsumemoney()
    {
        return $this->consumemoney;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return UserJuecaicoin
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
     * Set createtime
     *
     * @param integer $createtime
     *
     * @return UserJuecaicoin
     */
    public function setCreatetime($createtime)
    {
        $this->createtime = $createtime;

        return $this;
    }

    /**
     * Get createtime
     *
     * @return integer
     */
    public function getCreatetime()
    {
        return $this->createtime;
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
