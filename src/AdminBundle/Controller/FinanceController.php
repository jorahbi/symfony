<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 财务
 */

class FinanceController extends Controller
{
        
    /**
     * 融资租赁还款中借款
     * @Route("finance/borrowRepay", name="finance_borrowRepay")
     */
    public function borrowRepayAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }

    /**
     * 体验标还款
     * @Route("finance/experienceRepay", name="finance_experienceRepay")
     */
    public function experienceRepayAction()
    {
        
    }

    /**
     * 好友推荐奖励
     * @Route("finance/friendReward", name="finance_friendReward")
     */
    public function friendRewardAction()
    {
        
    }

    /**
     * 充值记录
     * @Route("finance/recharge", name="finance_recharge")
     */
    public function rechargeAction()
    {
        
    }

    /**
     * 资金汇总
     * @Route("finance/money", name="finance_money")
     */
    public function moneyAction()
    {
        
    }

    /**
     * 资金总览
     * @Route("finance/moneyOverview", name="finance_moneyOverview")
     */
    public function moneyOverviewAction()
    {
        
    }

    /**
     * 投资汇总
     * @Route("finance/invest", name="finance_invest")
     */
    public function investAction()
    {
        
    }

    /**
     * 发标概览
     * @Route("finance/borrowOverview", name="finance_borrowOverview")
     */
    public function borrowOverviewAction()
    {
        
    }

    /**
     * 红包
     * @Route("finance/coupons", name="finance_coupons")
     */
    public function couponsAction()
    {
        
    }

    /**
     * 添加红包
     * @Route("finance/addCoupons", name="finance_addCoupons")
     */
    public function addCouponsAction()
    {
        
    }

    /**
     * 红包明细
     * @Route("finance/couponDetail", name="finance_couponDetail")
     */
    public function couponDetailAction()
    {
        
    }

    /**
     * 红包统计
     * @Route("finance/couponCount", name="finance_couponCount")
     */
    public function couponCountAction()
    {
        
    }

    /**
     * 投融
     * @Route("finance/outTrade", name="finance_outTrade")
     */
    public function outTradeAction()
    {
        
    }

    /**
     * 投融放款总记录
     * @Route("finance/trade", name="finance_trade")
     */
    public function tradeAction()
    {
        
    }

    /**
     * 投融放款审核
     * @Route("finance/checkTrade", name="finance_checkTrade")
     */
    public function checkTradeAction()
    {
        
    }

    /**
     * 投融放款划拨
     * @Route("finance/tradePay", name="finance_tradePay")
     */
    public function tradePayAction()
    {
        
    }

    /**
     * 贷款
     * @Route("finance/inTrade", name="finance_inTrade")
     */
    public function inTradeAction()
    {
        
    }

    /**
     * 虚拟标投资记录
     * @Route("finance/investList", name="finance_investList")
     */
    public function investListAction()
    {
        
    }

    /**
     * 投融端
     * @Route("finance/investTerminal", name="finance_investTerminal")
     */
    public function investTerminalAction()
    {
        
    }

    /**
     * 融资租赁端
     * @Route("finance/lease", name="finance_lease")
     */
    public function leaseAction()
    {
        
    }

    /**
     * 资金情况表
     * @Route("finance/moneyDetail", name="finance_moneyDetail")
     */
    public function moneyDetailAction()
    {
        
    }

    /**
     * 债权转让放款总记录
     * @Route("finance/debt", name="finance_debt")
     */
    public function debtAction()
    {
        
    }

    /**
     * 债权转让放款审核
     * @Route("finance/checkDebt", name="finance_checkDebt")
     */
    public function checkDebtAction()
    {
        
    }

    /**
     * 债权转让放款划拨
     * @Route("finance/repayDebt", name="finance_repayDebt")
     */
    public function repayDebtAction()
    {
        
    }

    /**
     * 提现总记录
     * @Route("finance/take", name="finance_take")
     */
    public function takeAction()
    {
        
    }

    /**
     * 提现申请
     * @Route("finance/applyTake", name="finance_applyTake")
     */
    public function applyTakeAction()
    {
        
    }

    /**
     * 提现审核
     * @Route("finance/checkTake", name="finance_checkTake")
     */
    public function checkTakeAction()
    {
        
    }

    /**
     * 提现确认
     * @Route("finance/confirmTake", name="finance_confirmTake")
     */
    public function confirmTakeAction()
    {
        
    }
}