<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 数据中心
 * @Route ("/data")
 */

class DataController extends Controller
{
    /**
     * 商家推广数据列表
     * @Route("/index", name="/admin/data/index")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }
    
    /**
     * 资金数据列表
     * @Route("/money", name="/admin/data/money")
     */
    public function moneyAction()
    {
        
    }

    /**
     * 资金综合数据
     * @Route("/overallMoney", name="/admin/data/overallMoney")
     */
    public function overallMoneyAction()
    {
        
    }

    /**
     * 数据分析
     * @Route("/operate", name="/admin/data/operate")
     */
    public function operateAction()
    {
        
    }

    /**
     * 登录统计
     * @Route("/loginCount", name="/admin/data/loginCount")
     */
    public function loginCountAction()
    {
        
    }

    /**
     * 我的情况回访表
     * @Route("/visit", name="/admin/data/visit")
     */
    public function visitAction()
    {
        
    }

    /**
     * 今日回访表
     * @Route("/visitDay", name="/admin/data/visitDay")
     */
    public function visitDayAction()
    {
        
    }

    /**
     * 客服拔打名单
     * @Route("/staffVisit", name="/admin/data/staffVisit")
     */
    public function staffVisitAction()
    {
        
    }

    /**
     * 销售顾问拔打名单
     * @Route("/adviserVisit", name="/admin/data/adviserVisit")
     */
    public function adviserVisitAction()
    {
        
    }

    /**
     * 再分配顾客名单
     * @Route("/revisit", name="/admin/data/revisit")
     */
    public function revisitAction()
    {
        
    }

    /**
     * 客户投资分析
     * @Route("/invest", name="/admin/data/invest")
     */
    public function investAction()
    {
        
    }
}