<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivitySource
 *
 * @ORM\Table(name="activity_source", indexes={@ORM\Index(name="uid", columns={"uid"}), @ORM\Index(name="channel", columns={"channel"})})
 * @ORM\Entity
 */
class ActivitySource
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=true)
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="from_msg", type="string", length=255, nullable=true)
     */
    private $fromMsg;

    /**
     * @var string
     *
     * @ORM\Column(name="channel", type="string", length=255, nullable=true)
     */
    private $channel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="addtime", type="datetime", nullable=true)
     */
    private $addtime;

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
     * @return ActivitySource
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
     * Set fromMsg
     *
     * @param string $fromMsg
     *
     * @return ActivitySource
     */
    public function setFromMsg($fromMsg)
    {
        $this->fromMsg = $fromMsg;

        return $this;
    }

    /**
     * Get fromMsg
     *
     * @return string
     */
    public function getFromMsg()
    {
        return $this->fromMsg;
    }

    /**
     * Set channel
     *
     * @param string $channel
     *
     * @return ActivitySource
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set addtime
     *
     * @param \DateTime $addtime
     *
     * @return ActivitySource
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
