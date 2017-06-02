<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminServiceLog
 *
 * @ORM\Table(name="admin_service_log", indexes={@ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class AdminServiceLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="old_service_id", type="integer", nullable=false)
     */
    private $oldServiceId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="old_name", type="string", length=15, nullable=false)
     */
    private $oldName = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="new_service_id", type="integer", nullable=false)
     */
    private $newServiceId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="new_name", type="string", length=15, nullable=false)
     */
    private $newName = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="add_day", type="integer", nullable=false)
     */
    private $addDay = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="allocation_type", type="integer", nullable=false)
     */
    private $allocationType = '0';

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
     * @return AdminServiceLog
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
     * Set type
     *
     * @param boolean $type
     *
     * @return AdminServiceLog
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
     * Set oldServiceId
     *
     * @param integer $oldServiceId
     *
     * @return AdminServiceLog
     */
    public function setOldServiceId($oldServiceId)
    {
        $this->oldServiceId = $oldServiceId;

        return $this;
    }

    /**
     * Get oldServiceId
     *
     * @return integer
     */
    public function getOldServiceId()
    {
        return $this->oldServiceId;
    }

    /**
     * Set oldName
     *
     * @param string $oldName
     *
     * @return AdminServiceLog
     */
    public function setOldName($oldName)
    {
        $this->oldName = $oldName;

        return $this;
    }

    /**
     * Get oldName
     *
     * @return string
     */
    public function getOldName()
    {
        return $this->oldName;
    }

    /**
     * Set newServiceId
     *
     * @param integer $newServiceId
     *
     * @return AdminServiceLog
     */
    public function setNewServiceId($newServiceId)
    {
        $this->newServiceId = $newServiceId;

        return $this;
    }

    /**
     * Get newServiceId
     *
     * @return integer
     */
    public function getNewServiceId()
    {
        return $this->newServiceId;
    }

    /**
     * Set newName
     *
     * @param string $newName
     *
     * @return AdminServiceLog
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;

        return $this;
    }

    /**
     * Get newName
     *
     * @return string
     */
    public function getNewName()
    {
        return $this->newName;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return AdminServiceLog
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
     * Set addDay
     *
     * @param integer $addDay
     *
     * @return AdminServiceLog
     */
    public function setAddDay($addDay)
    {
        $this->addDay = $addDay;

        return $this;
    }

    /**
     * Get addDay
     *
     * @return integer
     */
    public function getAddDay()
    {
        return $this->addDay;
    }

    /**
     * Set allocationType
     *
     * @param integer $allocationType
     *
     * @return AdminServiceLog
     */
    public function setAllocationType($allocationType)
    {
        $this->allocationType = $allocationType;

        return $this;
    }

    /**
     * Get allocationType
     *
     * @return integer
     */
    public function getAllocationType()
    {
        return $this->allocationType;
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
