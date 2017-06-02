<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminOperationLogs
 *
 * @ORM\Table(name="admin_operation_logs")
 * @ORM\Entity
 */
class AdminOperationLogs
{
    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="operator", type="integer", nullable=false)
     */
    private $operator;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=60, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="operate_time", type="integer", nullable=false)
     */
    private $operateTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="operate_type", type="boolean", nullable=false)
     */
    private $operateType = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set url
     *
     * @param string $url
     *
     * @return AdminOperationLogs
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
     * Set operator
     *
     * @param integer $operator
     *
     * @return AdminOperationLogs
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * Get operator
     *
     * @return integer
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return AdminOperationLogs
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set operateTime
     *
     * @param integer $operateTime
     *
     * @return AdminOperationLogs
     */
    public function setOperateTime($operateTime)
    {
        $this->operateTime = $operateTime;

        return $this;
    }

    /**
     * Get operateTime
     *
     * @return integer
     */
    public function getOperateTime()
    {
        return $this->operateTime;
    }

    /**
     * Set operateType
     *
     * @param boolean $operateType
     *
     * @return AdminOperationLogs
     */
    public function setOperateType($operateType)
    {
        $this->operateType = $operateType;

        return $this;
    }

    /**
     * Get operateType
     *
     * @return boolean
     */
    public function getOperateType()
    {
        return $this->operateType;
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
