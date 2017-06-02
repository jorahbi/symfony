<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleType
 *
 * @ORM\Table(name="article_type")
 * @ORM\Entity
 */
class ArticleType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     */
    private $pid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pnum", type="integer", nullable=false)
     */
    private $pnum = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=200, nullable=false)
     */
    private $url = '';

    /**
     * @var string
     *
     * @ORM\Column(name="intro", type="string", length=200, nullable=false)
     */
    private $intro = '';

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=true)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="sort", type="integer", nullable=false)
     */
    private $sort = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="column", type="boolean", nullable=false)
     */
    private $column = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="warning", type="boolean", nullable=false)
     */
    private $warning = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="seo_title", type="string", length=255, nullable=true)
     */
    private $seoTitle;

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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set pid
     *
     * @param integer $pid
     *
     * @return ArticleType
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return integer
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set pnum
     *
     * @param integer $pnum
     *
     * @return ArticleType
     */
    public function setPnum($pnum)
    {
        $this->pnum = $pnum;

        return $this;
    }

    /**
     * Get pnum
     *
     * @return integer
     */
    public function getPnum()
    {
        return $this->pnum;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return ArticleType
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
     * Set name
     *
     * @param string $name
     *
     * @return ArticleType
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
     * Set url
     *
     * @param string $url
     *
     * @return ArticleType
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
     * Set intro
     *
     * @param string $intro
     *
     * @return ArticleType
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
     * @return ArticleType
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
     * Set sort
     *
     * @param integer $sort
     *
     * @return ArticleType
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
     * Set status
     *
     * @param boolean $status
     *
     * @return ArticleType
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
     * Set column
     *
     * @param boolean $column
     *
     * @return ArticleType
     */
    public function setColumn($column)
    {
        $this->column = $column;

        return $this;
    }

    /**
     * Get column
     *
     * @return boolean
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * Set warning
     *
     * @param boolean $warning
     *
     * @return ArticleType
     */
    public function setWarning($warning)
    {
        $this->warning = $warning;

        return $this;
    }

    /**
     * Get warning
     *
     * @return boolean
     */
    public function getWarning()
    {
        return $this->warning;
    }

    /**
     * Set seoTitle
     *
     * @param string $seoTitle
     *
     * @return ArticleType
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
     * @return ArticleType
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
     * @return ArticleType
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
