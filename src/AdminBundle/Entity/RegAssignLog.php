<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegAssignLog
 *
 * @ORM\Table(name="reg_assign_log")
 * @ORM\Entity
 */
class RegAssignLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="total_reg_number", type="integer", nullable=false)
     */
    private $totalRegNumber = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="avg_reg_number", type="integer", nullable=false)
     */
    private $avgRegNumber = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="service_number", type="integer", nullable=false)
     */
    private $serviceNumber = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=true)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="members_sql", type="text", length=65535, nullable=true)
     */
    private $membersSql;

    /**
     * @var string
     *
     * @ORM\Column(name="memberinfo_sql", type="text", length=65535, nullable=true)
     */
    private $memberinfoSql;

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set totalRegNumber
     *
     * @param integer $totalRegNumber
     *
     * @return RegAssignLog
     */
    public function setTotalRegNumber($totalRegNumber)
    {
        $this->totalRegNumber = $totalRegNumber;

        return $this;
    }

    /**
     * Get totalRegNumber
     *
     * @return integer
     */
    public function getTotalRegNumber()
    {
        return $this->totalRegNumber;
    }

    /**
     * Set avgRegNumber
     *
     * @param integer $avgRegNumber
     *
     * @return RegAssignLog
     */
    public function setAvgRegNumber($avgRegNumber)
    {
        $this->avgRegNumber = $avgRegNumber;

        return $this;
    }

    /**
     * Get avgRegNumber
     *
     * @return integer
     */
    public function getAvgRegNumber()
    {
        return $this->avgRegNumber;
    }

    /**
     * Set serviceNumber
     *
     * @param integer $serviceNumber
     *
     * @return RegAssignLog
     */
    public function setServiceNumber($serviceNumber)
    {
        $this->serviceNumber = $serviceNumber;

        return $this;
    }

    /**
     * Get serviceNumber
     *
     * @return integer
     */
    public function getServiceNumber()
    {
        return $this->serviceNumber;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return RegAssignLog
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set membersSql
     *
     * @param string $membersSql
     *
     * @return RegAssignLog
     */
    public function setMembersSql($membersSql)
    {
        $this->membersSql = $membersSql;

        return $this;
    }

    /**
     * Get membersSql
     *
     * @return string
     */
    public function getMembersSql()
    {
        return $this->membersSql;
    }

    /**
     * Set memberinfoSql
     *
     * @param string $memberinfoSql
     *
     * @return RegAssignLog
     */
    public function setMemberinfoSql($memberinfoSql)
    {
        $this->memberinfoSql = $memberinfoSql;

        return $this;
    }

    /**
     * Get memberinfoSql
     *
     * @return string
     */
    public function getMemberinfoSql()
    {
        return $this->memberinfoSql;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     *
     * @return RegAssignLog
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
     * Set type
     *
     * @param integer $type
     *
     * @return RegAssignLog
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
     * Set status
     *
     * @param integer $status
     *
     * @return RegAssignLog
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
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
