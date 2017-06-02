<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activity
 *
 * @ORM\Table(name="activity")
 * @ORM\Entity
 */
class Activity
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cover", type="string", length=255, nullable=false)
     */
    private $cover = '';

    /**
     * @var string
     *
     * @ORM\Column(name="intro", type="string", length=255, nullable=false)
     */
    private $intro = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="start_time", type="integer", nullable=false)
     */
    private $startTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="end_time", type="integer", nullable=false)
     */
    private $endTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_show", type="boolean", nullable=false)
     */
    private $isShow = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="borrow_ids", type="string", length=255, nullable=false)
     */
    private $borrowIds = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="click", type="integer", nullable=true)
     */
    private $click = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="seo_title", type="string", length=255, nullable=true)
     */
    private $seoTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_des", type="string", length=255, nullable=true)
     */
    private $seoDes;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_kwd", type="string", length=255, nullable=true)
     */
    private $seoKwd;

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
     * @return Activity
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
     * Set url
     *
     * @param string $url
     *
     * @return Activity
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set cover
     *
     * @param string $cover
     *
     * @return Activity
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return string
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set intro
     *
     * @param string $intro
     *
     * @return Activity
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
     * Set startTime
     *
     * @param integer $startTime
     *
     * @return Activity
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return integer
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param integer $endTime
     *
     * @return Activity
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return integer
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return Activity
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
     * Set isShow
     *
     * @param boolean $isShow
     *
     * @return Activity
     */
    public function setIsShow($isShow)
    {
        $this->isShow = $isShow;

        return $this;
    }

    /**
     * Get isShow
     *
     * @return boolean
     */
    public function getIsShow()
    {
        return $this->isShow;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return Activity
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
     * Set borrowIds
     *
     * @param string $borrowIds
     *
     * @return Activity
     */
    public function setBorrowIds($borrowIds)
    {
        $this->borrowIds = $borrowIds;

        return $this;
    }

    /**
     * Get borrowIds
     *
     * @return string
     */
    public function getBorrowIds()
    {
        return $this->borrowIds;
    }

    /**
     * Set click
     *
     * @param integer $click
     *
     * @return Activity
     */
    public function setClick($click)
    {
        $this->click = $click;

        return $this;
    }

    /**
     * Get click
     *
     * @return integer
     */
    public function getClick()
    {
        return $this->click;
    }

    /**
     * Set seoTitle
     *
     * @param string $seoTitle
     *
     * @return Activity
     */
    public function setSeoTitle($seoTitle)
    {
        $this->seoTitle = $seoTitle;

        return $this;
    }

    /**
     * Get seoTitle
     *
     * @return string
     */
    public function getSeoTitle()
    {
        return $this->seoTitle;
    }

    /**
     * Set seoDes
     *
     * @param string $seoDes
     *
     * @return Activity
     */
    public function setSeoDes($seoDes)
    {
        $this->seoDes = $seoDes;

        return $this;
    }

    /**
     * Get seoDes
     *
     * @return string
     */
    public function getSeoDes()
    {
        return $this->seoDes;
    }

    /**
     * Set seoKwd
     *
     * @param string $seoKwd
     *
     * @return Activity
     */
    public function setSeoKwd($seoKwd)
    {
        $this->seoKwd = $seoKwd;

        return $this;
    }

    /**
     * Get seoKwd
     *
     * @return string
     */
    public function getSeoKwd()
    {
        return $this->seoKwd;
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
