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
        return $this->render('AdminBundle:Default:index.html.twig');
    }

    /**
     * 体验标还款
     * @Route("/experienceRepay", name="/admin/finance/experienceRepay")
     */
    public function experienceRepayAction()
    {
        
    }

    /**
     * 好友推荐奖励
     * @Route("/friendReward", name="/admin/finance/friendReward")
     */
    public function friendRewardAction()
    {
        
    }

    /**
     * 充值记录
     * @Route("/recharge", name="/admin/finance/recharge")
     */
    public function rechargeAction()
    {
        
    }

    /**
     * 资金汇总
     * @Route("/money", name="/admin/finance/money")
     */
    public function moneyAction()
    {
        
    }

    /**
     * 资金总览
     * @Route("/moneyOverview", name="/admin/finance/moneyOverview")
     */
    public function moneyOverviewAction()
    {
        
    }

    /**
     * 投资汇总
     * @Route("/invest", name="/admin/finance/invest")
     */
    public function investAction()
    {
        
    }

    /**
     * 发标概览
     * @Route("/borrowOverview", name="/admin/finance/borrowOverview")
     */
    public function borrowOverviewAction()
    {
        
    }

    /**
     * 红包
     * @Route("/coupons", name="/admin/finance/coupons")
     */
    public function couponsAction()
    {
        
    }

    /**
     * 添加红包
     * @Route("/addCoupons", name="/admin/finance/addCoupons")
     */
    public function addCouponsAction()
    {
        
    }

    /**
     * 红包明细
     * @Route("/couponDetail", name="/admin/finance/couponDetail")
     */
    public function couponDetailAction()
    {
        
    }

    /**
     * 红包统计
     * @Route("/couponCount", name="/admin/finance/couponCount")
     */
    public function couponCountAction()
    {
        
    }

    /**
     * 投融
     * @Route("/outTrade", name="/admin/finance/outTrade")
     */
    public function outTradeAction()
    {
        
    }

    /**
     * 投融放款总记录
     * @Route("/trade", name="/admin/finance/trade")
     */
    public function tradeAction()
    {
        
    }

    /**
     * 投融放款审核
     * @Route("/checkTrade", name="/admin/finance/checkTrade")
     */
    public function checkTradeAction()
    {
        
    }

    /**
     * 投融放款划拨
     * @Route("/tradePay", name="/admin/finance/tradePay")
     */
    public function tradePayAction()
    {
        
    }

    /**
     * 贷款
     * @Route("/inTrade", name="/admin/finance/inTrade")
     */
    public function inTradeAction()
    {
        
    }

    /**
     * 虚拟标投资记录
     * @Route("/investList", name="/admin/finance/investList")
     */
    public function investListAction()
    {
        
    }

    /**
     * 投融端
     * @Route("/investTerminal", name="/admin/finance/investTerminal")
     */
    public function investTerminalAction()
    {
        
    }

    /**
     * 融资租赁端
     * @Route("/lease", name="/admin/finance/lease")
     */
    public function leaseAction()
    {
        
    }

    /**
     * 资金情况表
     * @Route("/moneyDetail", name="/admin/finance/moneyDetail")
     */
    public function moneyDetailAction()
    {
        
    }

    /**
     * 债权转让放款总记录
     * @Route("/debt", name="/admin/finance/debt")
     */
    public function debtAction()
    {
        
    }

    /**
     * 债权转让放款审核
     * @Route("/checkDebt", name="/admin/finance/checkDebt")
     */
    public function checkDebtAction()
    {
        
    }

    /**
     * 债权转让放款划拨
     * @Route("/repayDebt", name="/admin/finance/repayDebt")
     */
    public function repayDebtAction()
    {
        
    }

    /**
     * 提现总记录
     * @Route("/take", name="/admin/finance/take")
     */
    public function takeAction()
    {
        
    }

    /**
     * 提现申请
     * @Route("/applyTake", name="/admin/finance/applyTake")
     */
    public function applyTakeAction()
    {
        
    }

    /**
     * 提现审核
     * @Route("/checkTake", name="/admin/finance/checkTake")
     */
    public function checkTakeAction()
    {
        
    }

    /**
     * 提现确认
     * @Route("/confirmTake", name="/admin/finance/confirmTake")
     */
    public function confirmTakeAction()
    {
        
    }
}