<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Queue
 *
 * @ORM\Table(name="queue")
 * @ORM\Entity
 */
class Queue
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="func", type="string", length=100, nullable=false)
     */
    private $func = '';

    /**
     * @var string
     *
     * @ORM\Column(name="param", type="string", length=100, nullable=false)
     */
    private $param = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Queue
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
     * Set func
     *
     * @param string $func
     *
     * @return Queue
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
     * @return Queue
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
