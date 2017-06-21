<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleMembers
 *
 * @ORM\Table(name="sale_members")
 * @ORM\Entity
 */
class SaleMembers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone", type="string", length=11, nullable=true)
     */
    private $userPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=50, nullable=true)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_pass", type="string", length=32, nullable=true)
     */
    private $userPass;

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=true)
     */
    private $addTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="friend_id", type="integer", nullable=true)
     */
    private $friendId;


}

