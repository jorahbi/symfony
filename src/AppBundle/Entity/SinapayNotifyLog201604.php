<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SinapayNotifyLog201604
 *
 * @ORM\Table(name="sinapay_notify_log201604")
 * @ORM\Entity
 */
class SinapayNotifyLog201604
{
    /**
     * @var string
     *
     * @ORM\Column(name="notify_path", type="string", length=255, nullable=false)
     */
    private $notifyPath = '';

    /**
     * @var string
     *
     * @ORM\Column(name="order_no", type="string", length=255, nullable=false)
     */
    private $orderNo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="error_msg", type="string", length=255, nullable=false)
     */
    private $errorMsg = '';

    /**
     * @var string
     *
     * @ORM\Column(name="query_json", type="text", length=65535, nullable=true)
     */
    private $queryJson;

    /**
     * @var string
     *
     * @ORM\Column(name="notify_time", type="string", length=20, nullable=false)
     */
    private $notifyTime = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set notifyPath
     *
     * @param string $notifyPath
     *
     * @return SinapayNotifyLog201604
     */
    public function setNotifyPath($notifyPath)
    {
        $this->notifyPath = $notifyPath;

        return $this;
    }

    /**
     * Get notifyPath
     *
     * @return string
     */
    public function getNotifyPath()
    {
        return $this->notifyPath;
    }

    /**
     * Set orderNo
     *
     * @param string $orderNo
     *
     * @return SinapayNotifyLog201604
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;

        return $this;
    }

    /**
     * Get orderNo
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * Set errorMsg
     *
     * @param string $errorMsg
     *
     * @return SinapayNotifyLog201604
     */
    public function setErrorMsg($errorMsg)
    {
        $this->errorMsg = $errorMsg;

        return $this;
    }

    /**
     * Get errorMsg
     *
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->errorMsg;
    }

    /**
     * Set queryJson
     *
     * @param string $queryJson
     *
     * @return SinapayNotifyLog201604
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
     * Set notifyTime
     *
     * @param string $notifyTime
     *
     * @return SinapayNotifyLog201604
     */
    public function setNotifyTime($notifyTime)
    {
        $this->notifyTime = $notifyTime;

        return $this;
    }

    /**
     * Get notifyTime
     *
     * @return string
     */
    public function getNotifyTime()
    {
        return $this->notifyTime;
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
