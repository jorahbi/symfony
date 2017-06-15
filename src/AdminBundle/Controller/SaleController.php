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
        return $this->render('AdminBundle:Default:index.html.twig');
    }

    /**
     * 业绩列表
     * @Route("/achievement", name="/admin/sale/achievement")
     */
    public function achievementAction()
    {
        
    }

    /**
     * 佣金详细列表
     * @Route("/saleDetail", name="/admin/sale/saleDetail")
     */
    public function saleDetailAction()
    {
        
    }

    /**
     * 团队查询
     * @Route("/team", name="/admin/sale/team")
     */
    public function teamAction()
    {
        
    }

    /**
     * 客服佣金
     * @Route("/staff", name="/admin/sale/staff")
     */
    public function staffAction()
    {
        
    }

    /**
     * 客服佣金详细列表
     * @Route("/staffDetail", name="/admin/sale/staffDetail")
     */
    public function staffDetailAction()
    {
        
    }
}