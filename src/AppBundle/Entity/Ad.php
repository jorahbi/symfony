<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ad
 *
 * @ORM\Table(name="ad")
 * @ORM\Entity
 */
class Ad
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=200, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=true)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="stime", type="integer", nullable=false)
     */
    private $stime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="etime", type="integer", nullable=false)
     */
    private $etime = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="version", type="boolean", nullable=false)
     */
    private $version = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set title
     *
     * @param string $title
     *
     * @return Ad
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return Ad
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set stime
     *
     * @param integer $stime
     *
     * @return Ad
     */
    public function setStime($stime)
    {
        $this->stime = $stime;

        return $this;
    }

    /**
     * Get stime
     *
     * @return integer
     */
    public function getStime()
    {
        return $this->stime;
    }

    /**
     * Set etime
     *
     * @param integer $etime
     *
     * @return Ad
     */
    public function setEtime($etime)
    {
        $this->etime = $etime;

        return $this;
    }

    /**
     * Get etime
     *
     * @return integer
     */
    public function getEtime()
    {
        return $this->etime;
    }

    /**
     * Set version
     *
     * @param boolean $version
     *
     * @return Ad
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return boolean
     */
    public function getVersion()
    {
        return $this->version;
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
