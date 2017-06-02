<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomServiceMessage
 *
 * @ORM\Table(name="custom_service_message", indexes={@ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class CustomServiceMessage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="cno", type="string", length=10, nullable=false)
     */
    private $cno;

    /**
     * @var string
     *
     * @ORM\Column(name="service_message", type="string", length=50, nullable=true)
     */
    private $serviceMessage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="addtime", type="datetime", nullable=true)
     */
    private $addtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="top", type="integer", nullable=false)
     */
    private $top = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="top_time", type="integer", nullable=false)
     */
    private $topTime;

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
     * @return CustomServiceMessage
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
     * Set cno
     *
     * @param string $cno
     *
     * @return CustomServiceMessage
     */
    public function setCno($cno)
    {
        $this->cno = $cno;

        return $this;
    }

    /**
     * Get cno
     *
     * @return string
     */
    public function getCno()
    {
        return $this->cno;
    }

    /**
     * Set serviceMessage
     *
     * @param string $serviceMessage
     *
     * @return CustomServiceMessage
     */
    public function setServiceMessage($serviceMessage)
    {
        $this->serviceMessage = $serviceMessage;

        return $this;
    }

    /**
     * Get serviceMessage
     *
     * @return string
     */
    public function getServiceMessage()
    {
        return $this->serviceMessage;
    }

    /**
     * Set addtime
     *
     * @param \DateTime $addtime
     *
     * @return CustomServiceMessage
     */
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;

        return $this;
    }

    /**
     * Get addtime
     *
     * @return \DateTime
     */
    public function getAddtime()
    {
        return $this->addtime;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return CustomServiceMessage
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set top
     *
     * @param integer $top
     *
     * @return CustomServiceMessage
     */
    public function setTop($top)
    {
        $this->top = $top;

        return $this;
    }

    /**
     * Get top
     *
     * @return integer
     */
    public function getTop()
    {
        return $this->top;
    }

    /**
     * Set topTime
     *
     * @param integer $topTime
     *
     * @return CustomServiceMessage
     */
    public function setTopTime($topTime)
    {
        $this->topTime = $topTime;

        return $this;
    }

    /**
     * Get topTime
     *
     * @return integer
     */
    public function getTopTime()
    {
        return $this->topTime;
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
