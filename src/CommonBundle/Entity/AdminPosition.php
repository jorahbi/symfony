<?php

namespace CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminPosition
 *
 * @ORM\Table(name="admin_position")
 * @ORM\Entity
 */
class AdminPosition
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
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=45, nullable=false)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="admin_id", type="integer", nullable=false)
     */
    private $adminId;

    /**
     * @var integer
     *
     * @ORM\Column(name="createtime", type="integer", nullable=false)
     */
    private $createtime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_enable", type="boolean", nullable=false)
     */
    private $isEnable = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="permission", type="text", length=65535, nullable=true)
     */
    private $permission;


}

