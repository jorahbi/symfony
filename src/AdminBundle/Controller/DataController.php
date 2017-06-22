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
        return $this->render('AdminBundle:Data:index.html.twig');
    }
    
    /**
     * 资金数据列表
     * @Route("/money", name="/admin/data/money")
     */
    public function moneyAction()
    {
        return $this->render('AdminBundle:Data:money.html.twig');
    }

    /**
     * 资金综合数据
     * @Route("/overallMoney", name="/admin/data/overallMoney")
     */
    public function overallMoneyAction()
    {
        return $this->render('AdminBundle:Data:overallMoney.html.twig');
    }

    /**
     * 数据分析
     * @Route("/operate", name="/admin/data/operate")
     */
    public function operateAction()
    {
        return $this->render('AdminBundle:Data:operate.html.twig');
    }

    /**
     * 登录统计
     * @Route("/loginCount", name="/admin/data/loginCount")
     */
    public function loginCountAction()
    {
        return $this->render('AdminBundle:Data:loginCount.html.twig');
    }

    /**
     * 我的情况回访表
     * @Route("/visit", name="/admin/data/visit")
     */
    public function visitAction()
    {
        return $this->render('AdminBundle:Data:visit.html.twig');
    }

    /**
     * 今日回访表
     * @Route("/visitDay", name="/admin/data/visitDay")
     */
    public function visitDayAction()
    {
        return $this->render('AdminBundle:Data:visitDay.html.twig');
    }

    /**
     * 客服拔打名单
     * @Route("/staffVisit", name="/admin/data/staffVisit")
     */
    public function staffVisitAction()
    {
        return $this->render('AdminBundle:Data:staffVisit.html.twig');
    }

    /**
     * 销售顾问拔打名单
     * @Route("/adviserVisit", name="/admin/data/adviserVisit")
     */
    public function adviserVisitAction()
    {
        return $this->render('AdminBundle:Data:adviserVisit.html.twig');
    }

    /**
     * 再分配顾客名单
     * @Route("/revisit", name="/admin/data/revisit")
     */
    public function revisitAction()
    {
        return $this->render('AdminBundle:Data:revisit.html.twig');
    }

    /**
     * 客户投资分析
     * @Route("/invest", name="/admin/data/invest")
     */
    public function investAction()
    {
        return $this->render('AdminBundle:Data:invest.html.twig');
    }
}