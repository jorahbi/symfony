<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppPopup
 *
 * @ORM\Table(name="app_popup")
 * @ORM\Entity
 */
class AppPopup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="start_time", type="integer", nullable=true)
     */
    private $startTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="end_time", type="integer", nullable=true)
     */
    private $endTime;

    /**
     * @var string
     *
     * @ORM\Column(name="img_url", type="string", length=255, nullable=true)
     */
    private $imgUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="app_interface", type="integer", nullable=true)
     */
    private $appInterface;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set startTime
     *
     * @param integer $startTime
     *
     * @return AppPopup
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
     * @return AppPopup
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
     * Set imgUrl
     *
     * @param string $imgUrl
     *
     * @return AppPopup
     */
    public function setImgUrl($imgUrl)
    {
        $this->imgUrl = $imgUrl;

        return $this;
    }

    /**
     * Get imgUrl
     *
     * @return string
     */
    public function getImgUrl()
    {
        return $this->imgUrl;
    }

    /**
     * Set appInterface
     *
     * @param integer $appInterface
     *
     * @return AppPopup
     */
    public function setAppInterface($appInterface)
    {
        $this->appInterface = $appInterface;

        return $this;
    }

    /**
     * Get appInterface
     *
     * @return integer
     */
    public function getAppInterface()
    {
        return $this->appInterface;
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
