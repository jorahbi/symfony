<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 销售管理
 */

class SaleController extends Controller
{
    /**
     * 佣金列表
     * @Route("sale/index", name="sale_index")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }

    /**
     * 业绩列表
     * @Route("sale/achievement", name="sale_achievement")
     */
    public function achievementAction()
    {
        
    }

    /**
     * 佣金详细列表
     * @Route("sale/saleDetail", name="sale_saleDetail")
     */
    public function saleDetailAction()
    {
        
    }

    /**
     * 团队查询
     * @Route("sale/team", name="sale_team")
     */
    public function teamAction()
    {
        
    }

    /**
     * 客服佣金
     * @Route("sale/staff", name="sale_staff")
     */
    public function staffAction()
    {
        
    }

    /**
     * 客服佣金详细列表
     * @Route("sale/staffDetail", name="sale_staffDetail")
     */
    public function staffDetailAction()
    {
        
    }
}