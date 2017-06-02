<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminSales
 *
 * @ORM\Table(name="admin_sales")
 * @ORM\Entity
 */
class AdminSales
{
    /**
     * @var string
     *
     * @ORM\Column(name="job_num", type="string", length=10, nullable=false)
     */
    private $jobNum = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255, nullable=false)
     */
    private $position = '';

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=255, nullable=false)
     */
    private $department = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set jobNum
     *
     * @param string $jobNum
     *
     * @return AdminSales
     */
    public function setJobNum($jobNum)
    {
        $this->jobNum = $jobNum;

        return $this;
    }

    /**
     * Get jobNum
     *
     * @return string
     */
    public function getJobNum()
    {
        return $this->jobNum;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return AdminSales
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
     * Set position
     *
     * @param string $position
     *
     * @return AdminSales
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set department
     *
     * @param string $department
     *
     * @return AdminSales
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
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
