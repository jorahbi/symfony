<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="team")
 * @ORM\Entity
 */
class Team
{
    /**
     * @var string
     *
     * @ORM\Column(name="team_name", type="string", length=255, nullable=false)
     */
    private $teamName;

    /**
     * @var string
     *
     * @ORM\Column(name="total_invest", type="decimal", precision=50, scale=2, nullable=false)
     */
    private $totalInvest = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set teamName
     *
     * @param string $teamName
     *
     * @return Team
     */
    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;

        return $this;
    }

    /**
     * Get teamName
     *
     * @return string
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * Set totalInvest
     *
     * @param string $totalInvest
     *
     * @return Team
     */
    public function setTotalInvest($totalInvest)
    {
        $this->totalInvest = $totalInvest;

        return $this;
    }

    /**
     * Get totalInvest
     *
     * @return string
     */
    public function getTotalInvest()
    {
        return $this->totalInvest;
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
