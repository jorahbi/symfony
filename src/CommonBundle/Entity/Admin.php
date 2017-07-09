<?php

namespace CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity
 */
class Admin
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
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password = '';

    /**
     * @var string
     *
     * @ORM\Column(name="admin_limit", type="text", length=65535, nullable=true)
     */
    private $adminLimit;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     */
    private $groupId = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="position_id", type="integer", nullable=false)
     */
    private $positionId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="real_name", type="string", length=20, nullable=false)
     */
    private $realName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="job_num", type="string", length=10, nullable=false)
     */
    private $jobNum = '';

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=18, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="qq", type="string", length=20, nullable=false)
     */
    private $qq;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sex", type="boolean", nullable=false)
     */
    private $sex;

    /**
     * @var integer
     *
     * @ORM\Column(name="bbs_uid", type="integer", nullable=false)
     */
    private $bbsUid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="valid", type="boolean", nullable=false)
     */
    private $valid = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_service", type="boolean", nullable=false)
     */
    private $isService = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_investment_adviser", type="boolean", nullable=false)
     */
    private $isInvestmentAdviser = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_bbs_admin", type="boolean", nullable=false)
     */
    private $isBbsAdmin = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_part_time", type="boolean", nullable=false)
     */
    private $isPartTime = '2';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_auto_allot", type="boolean", nullable=false)
     */
    private $isAutoAllot = '2';

    /**
     * @var boolean
     *
     * @ORM\Column(name="skin", type="boolean", nullable=false)
     */
    private $skin = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_service_online", type="boolean", nullable=false)
     */
    private $isServiceOnline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="cno", type="integer", nullable=true)
     */
    private $cno;


}

