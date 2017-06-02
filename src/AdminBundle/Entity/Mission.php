<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mission
 *
 * @ORM\Table(name="mission")
 * @ORM\Entity
 */
class Mission
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="param", type="string", length=100, nullable=false)
     */
    private $param = '';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=200, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="intro", type="string", length=255, nullable=false)
     */
    private $intro = '';

    /**
     * @var string
     *
     * @ORM\Column(name="link_url", type="string", length=255, nullable=false)
     */
    private $linkUrl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="text", length=65535, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="check_func", type="string", length=100, nullable=false)
     */
    private $checkFunc = '';

    /**
     * @var string
     *
     * @ORM\Column(name="finish_func", type="string", length=100, nullable=false)
     */
    private $finishFunc = '';

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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return Mission
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Mission
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set param
     *
     * @param string $param
     *
     * @return Mission
     */
    public function setParam($param)
    {
        $this->param = $param;

        return $this;
    }

    /**
     * Get param
     *
     * @return string
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Mission
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
     * Set intro
     *
     * @param string $intro
     *
     * @return Mission
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Get intro
     *
     * @return string
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * Set linkUrl
     *
     * @param string $linkUrl
     *
     * @return Mission
     */
    public function setLinkUrl($linkUrl)
    {
        $this->linkUrl = $linkUrl;

        return $this;
    }

    /**
     * Get linkUrl
     *
     * @return string
     */
    public function getLinkUrl()
    {
        return $this->linkUrl;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Mission
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set checkFunc
     *
     * @param string $checkFunc
     *
     * @return Mission
     */
    public function setCheckFunc($checkFunc)
    {
        $this->checkFunc = $checkFunc;

        return $this;
    }

    /**
     * Get checkFunc
     *
     * @return string
     */
    public function getCheckFunc()
    {
        return $this->checkFunc;
    }

    /**
     * Set finishFunc
     *
     * @param string $finishFunc
     *
     * @return Mission
     */
    public function setFinishFunc($finishFunc)
    {
        $this->finishFunc = $finishFunc;

        return $this;
    }

    /**
     * Get finishFunc
     *
     * @return string
     */
    public function getFinishFunc()
    {
        return $this->finishFunc;
    }

    /**
     * Set stime
     *
     * @param integer $stime
     *
     * @return Mission
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
     * @return Mission
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
