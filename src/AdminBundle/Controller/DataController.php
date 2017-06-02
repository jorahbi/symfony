<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 数据中心
 */

class DataController extends Controller
{
    /**
     * 商家推广数据列表
     * @Route("data/index", name="data_index")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }
    
    /**
     * 资金数据列表
     * @Route("data/money", name="data_money")
     */
    public function moneyAction()
    {
        
    }

    /**
     * 资金综合数据
     * @Route("data/overallMoney", name="data_overallMoney")
     */
    public function overallMoneyAction()
    {
        
    }

    /**
     * 数据分析
     * @Route("data/operate", name="data_operate")
     */
    public function operateAction()
    {
        
    }

    /**
     * 登录统计
     * @Route("data/loginCount", name="data_loginCount")
     */
    public function loginCountAction()
    {
        
    }

    /**
     * 我的情况回访表
     * @Route("data/visit", name="data_visit")
     */
    public function visitAction()
    {
        
    }

    /**
     * 今日回访表
     * @Route("data/visitDay", name="data_visitDay")
     */
    public function visitDayAction()
    {
        
    }

    /**
     * 客服拔打名单
     * @Route("data/staffVisit", name="data_staffVisit")
     */
    public function staffVisitAction()
    {
        
    }

    /**
     * 销售顾问拔打名单
     * @Route("data/adviserVisit", name="data_adviserVisit")
     */
    public function adviserVisitAction()
    {
        
    }

    /**
     * 再分配顾客名单
     * @Route("data/revisit", name="data_revisit")
     */
    public function revisitAction()
    {
        
    }

    /**
     * 客户投资分析
     * @Route("data/invest", name="data_invest")
     */
    public function investAction()
    {
        
    }
}