<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article", indexes={@ORM\Index(name="type_id", columns={"type_id"})})
 * @ORM\Entity
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="type_id", type="integer", nullable=false)
     */
    private $typeId = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="content", type="text", length=65535, nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=20, nullable=false)
     */
    private $author = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=200, nullable=false)
     */
    private $url = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cover", type="string", length=200, nullable=false)
     */
    private $cover = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="hits", type="integer", nullable=false)
     */
    private $hits = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="hot", type="boolean", nullable=false)
     */
    private $hot = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="seo_title", type="string", length=255, nullable=false)
     */
    private $seoTitle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="seo_des", type="text", length=65535, nullable=true)
     */
    private $seoDes;

    /**
     * @var string
     *
     * @ORM\Column(name="seo_kwd", type="text", length=65535, nullable=true)
     */
    private $seoKwd;

    /**
     * @var integer
     *
     * @ORM\Column(name="sort", type="smallint", nullable=true)
     */
    private $sort = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set typeId
     *
     * @param integer $typeId
     *
     * @return Article
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * Get typeId
     *
     * @return integer
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return Article
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
     * Set title
     *
     * @param string $title
     *
     * @return Article
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
     * @return Article
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
     * Set content
     *
     * @param string $content
     *
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Article
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Article
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
     * @return Article
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
     * Set hits
     *
     * @param integer $hits
     *
     * @return Article
     */
    public function setHits($hits)
    {
        $this->hits = $hits;

        return $this;
    }

    /**
     * Get hits
     *
     * @return integer
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Set hot
     *
     * @param boolean $hot
     *
     * @return Article
     */
    public function setHot($hot)
    {
        $this->hot = $hot;

        return $this;
    }

    /**
     * Get hot
     *
     * @return boolean
     */
    public function getHot()
    {
        return $this->hot;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return Article
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
     * Set seoTitle
     *
     * @param string $seoTitle
     *
     * @return Article
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
     * @return Article
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
     * @return Article
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
     * Set sort
     *
     * @param integer $sort
     *
     * @return Article
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return integer
     */
    public function getSort()
    {
        return $this->sort;
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
