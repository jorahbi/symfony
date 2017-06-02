<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BorrowRule
 *
 * @ORM\Table(name="borrow_rule")
 * @ORM\Entity
 */
class BorrowRule
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="cate", type="boolean", nullable=false)
     */
    private $cate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="func", type="string", length=255, nullable=false)
     */
    private $func = '';

    /**
     * @var string
     *
     * @ORM\Column(name="param", type="string", length=255, nullable=false)
     */
    private $param = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="sign", type="boolean", nullable=false)
     */
    private $sign = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="min_val", type="string", length=255, nullable=false)
     */
    private $minVal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="max_val", type="string", length=255, nullable=false)
     */
    private $maxVal = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '1';

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
     * @return BorrowRule
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
     * Set cate
     *
     * @param boolean $cate
     *
     * @return BorrowRule
     */
    public function setCate($cate)
    {
        $this->cate = $cate;

        return $this;
    }

    /**
     * Get cate
     *
     * @return boolean
     */
    public function getCate()
    {
        return $this->cate;
    }

    /**
     * Set type
     *
     * @param boolean $type
     *
     * @return BorrowRule
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
     * Set func
     *
     * @param string $func
     *
     * @return BorrowRule
     */
    public function setFunc($func)
    {
        $this->func = $func;

        return $this;
    }

    /**
     * Get func
     *
     * @return string
     */
    public function getFunc()
    {
        return $this->func;
    }

    /**
     * Set param
     *
     * @param string $param
     *
     * @return BorrowRule
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
     * Set sign
     *
     * @param boolean $sign
     *
     * @return BorrowRule
     */
    public function setSign($sign)
    {
        $this->sign = $sign;

        return $this;
    }

    /**
     * Get sign
     *
     * @return boolean
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * Set minVal
     *
     * @param string $minVal
     *
     * @return BorrowRule
     */
    public function setMinVal($minVal)
    {
        $this->minVal = $minVal;

        return $this;
    }

    /**
     * Get minVal
     *
     * @return string
     */
    public function getMinVal()
    {
        return $this->minVal;
    }

    /**
     * Set maxVal
     *
     * @param string $maxVal
     *
     * @return BorrowRule
     */
    public function setMaxVal($maxVal)
    {
        $this->maxVal = $maxVal;

        return $this;
    }

    /**
     * Get maxVal
     *
     * @return string
     */
    public function getMaxVal()
    {
        return $this->maxVal;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return BorrowRule
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
