<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Occupation
 *
 * @ORM\Table(name="occupation")
 * @ORM\Entity
 */
class Occupation
{
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     */
    private $code = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="descrition", type="text", length=65535, nullable=true)
     */
    private $descrition;

    /**
     * @var string
     *
     * @ORM\Column(name="pcode", type="string", length=20, nullable=true)
     */
    private $pcode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createTime", type="datetime", nullable=true)
     */
    private $createtime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateTime", type="datetime", nullable=true)
     */
    private $updatetime;

    /**
     * @var integer
     *
     * @ORM\Column(name="vision", type="integer", nullable=true)
     */
    private $vision;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set code
     *
     * @param string $code
     *
     * @return Occupation
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Occupation
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set descrition
     *
     * @param string $descrition
     *
     * @return Occupation
     */
    public function setDescrition($descrition)
    {
        $this->descrition = $descrition;

        return $this;
    }

    /**
     * Get descrition
     *
     * @return string
     */
    public function getDescrition()
    {
        return $this->descrition;
    }

    /**
     * Set pcode
     *
     * @param string $pcode
     *
     * @return Occupation
     */
    public function setPcode($pcode)
    {
        $this->pcode = $pcode;

        return $this;
    }

    /**
     * Get pcode
     *
     * @return string
     */
    public function getPcode()
    {
        return $this->pcode;
    }

    /**
     * Set createtime
     *
     * @param \DateTime $createtime
     *
     * @return Occupation
     */
    public function setCreatetime($createtime)
    {
        $this->createtime = $createtime;

        return $this;
    }

    /**
     * Get createtime
     *
     * @return \DateTime
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }

    /**
     * Set updatetime
     *
     * @param \DateTime $updatetime
     *
     * @return Occupation
     */
    public function setUpdatetime($updatetime)
    {
        $this->updatetime = $updatetime;

        return $this;
    }

    /**
     * Get updatetime
     *
     * @return \DateTime
     */
    public function getUpdatetime()
    {
        return $this->updatetime;
    }

    /**
     * Set vision
     *
     * @param integer $vision
     *
     * @return Occupation
     */
    public function setVision($vision)
    {
        $this->vision = $vision;

        return $this;
    }

    /**
     * Get vision
     *
     * @return integer
     */
    public function getVision()
    {
        return $this->vision;
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
