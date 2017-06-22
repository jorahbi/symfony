<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 财务
 * @Route ("/finance")
 */

class FinanceController extends Controller
{
        
    /**
     * 融资租赁还款中借款
     * @Route("/borrowRepay", name="/admin/finance/borrowRepay")
     */
    public function borrowRepayAction()
    {
        return $this->render('AdminBundle:Finance:borrowRepay.html.twig');
    }

    /**
     * 体验标还款
     * @Route("/experienceRepay", name="/admin/finance/experienceRepay")
     */
    public function experienceRepayAction()
    {
        return $this->render('AdminBundle:Finance:experienceRepay.html.twig');
    }

    /**
     * 好友推荐奖励
     * @Route("/friendReward", name="/admin/finance/friendReward")
     */
    public function friendRewardAction()
    {
        return $this->render('AdminBundle:Finance:friendReward.html.twig');
    }

    /**
     * 充值记录
     * @Route("/recharge", name="/admin/finance/recharge")
     */
    public function rechargeAction()
    {
        return $this->render('AdminBundle:Finance:recharge.html.twig');
    }

    /**
     * 资金汇总
     * @Route("/money", name="/admin/finance/money")
     */
    public function moneyAction()
    {
        return $this->render('AdminBundle:Finance:money.html.twig');
    }

    /**
     * 资金总览
     * @Route("/moneyOverview", name="/admin/finance/moneyOverview")
     */
    public function moneyOverviewAction()
    {
        return $this->render('AdminBundle:Finance:moneyOverview.html.twig');
    }

    /**
     * 投资汇总
     * @Route("/invest", name="/admin/finance/invest")
     */
    public function investAction()
    {
        return $this->render('AdminBundle:Finance:invest.html.twig');
    }

    /**
     * 发标概览
     * @Route("/borrowOverview", name="/admin/finance/borrowOverview")
     */
    public function borrowOverviewAction()
    {
        return $this->render('AdminBundle:Finance:borrowOverview.html.twig');
    }

    /**
     * 红包
     * @Route("/coupons", name="/admin/finance/coupons")
     */
    public function couponsAction()
    {
        return $this->render('AdminBundle:Finance:coupons.html.twig');
    }

    /**
     * 添加红包
     * @Route("/addCoupons", name="/admin/finance/addCoupons")
     */
    public function addCouponsAction()
    {
        return $this->render('AdminBundle:Finance:addCoupons.html.twig');
    }

    /**
     * 红包明细
     * @Route("/couponDetail", name="/admin/finance/couponDetail")
     */
    public function couponDetailAction()
    {
        return $this->render('AdminBundle:Finance:couponDetail.html.twig');
    }

    /**
     * 红包统计
     * @Route("/couponCount", name="/admin/finance/couponCount")
     */
    public function couponCountAction()
    {
        return $this->render('AdminBundle:Finance:couponCount.html.twig');
    }

    /**
     * 投融
     * @Route("/outTrade", name="/admin/finance/outTrade")
     */
    public function outTradeAction()
    {
        return $this->render('AdminBundle:Finance:outTrade.html.twig');
    }

    /**
     * 投融放款总记录
     * @Route("/trade", name="/admin/finance/trade")
     */
    public function tradeAction()
    {
        return $this->render('AdminBundle:Finance:trade.html.twig');
    }

    /**
     * 投融放款审核
     * @Route("/checkTrade", name="/admin/finance/checkTrade")
     */
    public function checkTradeAction()
    {
        return $this->render('AdminBundle:Finance:checkTrade.html.twig');
    }

    /**
     * 投融放款划拨
     * @Route("/tradePay", name="/admin/finance/tradePay")
     */
    public function tradePayAction()
    {
        return $this->render('AdminBundle:Finance:tradePay.html.twig');
    }

    /**
     * 贷款
     * @Route("/inTrade", name="/admin/finance/inTrade")
     */
    public function inTradeAction()
    {
        return $this->render('AdminBundle:Finance:inTrade.html.twig');
    }

    /**
     * 虚拟标投资记录
     * @Route("/investList", name="/admin/finance/investList")
     */
    public function investListAction()
    {
        return $this->render('AdminBundle:Finance:investList.html.twig');
    }

    /**
     * 投融端
     * @Route("/investTerminal", name="/admin/finance/investTerminal")
     */
    public function investTerminalAction()
    {
        return $this->render('AdminBundle:Finance:investTerminal.html.twig');
    }

    /**
     * 融资租赁端
     * @Route("/lease", name="/admin/finance/lease")
     */
    public function leaseAction()
    {
        return $this->render('AdminBundle:Finance:lease.html.twig');
    }

    /**
     * 资金情况表
     * @Route("/moneyDetail", name="/admin/finance/moneyDetail")
     */
    public function moneyDetailAction()
    {
        return $this->render('AdminBundle:Finance:moneyDetail.html.twig');
    }

    /**
     * 债权转让放款总记录
     * @Route("/debt", name="/admin/finance/debt")
     */
    public function debtAction()
    {
        return $this->render('AdminBundle:Finance:debt.html.twig');
    }

    /**
     * 债权转让放款审核
     * @Route("/checkDebt", name="/admin/finance/checkDebt")
     */
    public function checkDebtAction()
    {
        return $this->render('AdminBundle:Finance:checkDebt.html.twig');
    }

    /**
     * 债权转让放款划拨
     * @Route("/repayDebt", name="/admin/finance/repayDebt")
     */
    public function repayDebtAction()
    {
        return $this->render('AdminBundle:Finance:repayDebt.html.twig');
    }

    /**
     * 提现总记录
     * @Route("/take", name="/admin/finance/take")
     */
    public function takeAction()
    {
        return $this->render('AdminBundle:Finance:take.html.twig');
    }

    /**
     * 提现申请
     * @Route("/applyTake", name="/admin/finance/applyTake")
     */
    public function applyTakeAction()
    {
        return $this->render('AdminBundle:Finance:applyTake.html.twig');
    }

    /**
     * 提现审核
     * @Route("/checkTake", name="/admin/finance/checkTake")
     */
    public function checkTakeAction()
    {
        return $this->render('AdminBundle:Finance:checkTake.html.twig');
    }

    /**
     * 提现确认
     * @Route("/confirmTake", name="/admin/finance/confirmTake")
     */
    public function confirmTakeAction()
    {
        return $this->render('AdminBundle:Finance:confirmTake.html.twig');
    }
}