<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SinapayLog
 *
 * @ORM\Table(name="sinapay_log")
 * @ORM\Entity
 */
class SinapayLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="api_name", type="string", length=255, nullable=false)
     */
    private $apiName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="query_json", type="text", length=65535, nullable=true)
     */
    private $queryJson;

    /**
     * @var string
     *
     * @ORM\Column(name="result", type="string", length=255, nullable=false)
     */
    private $result = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set uid
     *
     * @param integer $uid
     *
     * @return SinapayLog
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set apiName
     *
     * @param string $apiName
     *
     * @return SinapayLog
     */
    public function setApiName($apiName)
    {
        $this->apiName = $apiName;

        return $this;
    }

    /**
     * Get apiName
     *
     * @return string
     */
    public function getApiName()
    {
        return $this->apiName;
    }

    /**
     * Set queryJson
     *
     * @param string $queryJson
     *
     * @return SinapayLog
     */
    public function setQueryJson($queryJson)
    {
        $this->queryJson = $queryJson;

        return $this;
    }

    /**
     * Get queryJson
     *
     * @return string
     */
    public function getQueryJson()
    {
        return $this->queryJson;
    }

    /**
     * Set result
     *
     * @param string $result
     *
     * @return SinapayLog
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return SinapayLog
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
