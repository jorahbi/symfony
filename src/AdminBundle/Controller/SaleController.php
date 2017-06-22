<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 销售管理
 * @Route ("/sale")
 */

class SaleController extends Controller
{
    /**
     * 佣金列表
     * @Route("/index", name="/admin/sale/index")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Sale:index.html.twig');
    }

    /**
     * 业绩列表
     * @Route("/achievement", name="/admin/sale/achievement")
     */
    public function achievementAction()
    {
        return $this->render('AdminBundle:Sale:achievement.html.twig');
    }

    /**
     * 佣金详细列表
     * @Route("/saleDetail", name="/admin/sale/saleDetail")
     */
    public function saleDetailAction()
    {
        return $this->render('AdminBundle:Sale:saleDetail.html.twig');
    }

    /**
     * 团队查询
     * @Route("/team", name="/admin/sale/team")
     */
    public function teamAction()
    {
        return $this->render('AdminBundle:Sale:team.html.twig');
    }

    /**
     * 客服佣金
     * @Route("/staff", name="/admin/sale/staff")
     */
    public function staffAction()
    {
        return $this->render('AdminBundle:Sale:staff.html.twig');
    }

    /**
     * 客服佣金详细列表
     * @Route("/staffDetail", name="/admin/sale/staffDetail")
     */
    public function staffDetailAction()
    {
        return $this->render('AdminBundle:Sale:staffDetail.html.twig');
    }
}