<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 项目管理
 * @Route ("/project")
 */

class ProjectController extends Controller
{
    /**
     * 创建新项目
     * @Route("/borrow", name="/admin/project/borrow")
     */
    public function borrowAction()
    {
        
    }

    /**
     * 项目详情
     * @Route("/borrowDetail", name="/admin/project/borrowDetail")
     */
    public function borrowDetailAction()
    {
        
    }

    /**
     * 待审核借款
     * @Route("/waits", name="/admin/project/waits")
     */
    public function waitsAction()
    {
        
    }

    /**
     * 投标中的借款
     * @Route("/ongoing", name="/admin/project/ongoing")
     */
    public function ongoingAction()
    {
        
    }

    /**
     * 已完成的借款
     * @Route("/complete", name="/admin/project/complete")
     */
    public function completeAction()
    {
        
    }

    /**
     * 还款中的借款
     * @Route("/repaying", name="/admin/project/repaying")
     */
    public function repayingAction()
    {
        
    }

    /**
     * 已流标的借款
     * @Route("/failed", name="/admin/project/failed")
     */
    public function failedAction()
    {
        
    }

    /**
     * 费用规则
     * @Route("/money", name="/admin/project/money")
     */
    public function moneyAction()
    {
        
    }

    /**
     * 添加费用规则
     * @Route("/addMoney", name="/admin/project/addMoney")
     */
    public function addMoneyAction()
    {
        
    }

    /**
     * 奖励规则
     * @Route("/award", name="/admin/project/award")
     */
    public function awardAction()
    {
        
    }

    /**
     * 添加奖励规则
     * @Route("/addAward", name="/admin/project/addAward")
     */
    public function addAwardAction()
    {
        
    }

    /**
     * 资产包管理
     * @Route("/box", name="/admin/project/box")
     */
    public function boxAction()
    {
        
    }

    /**
     * 创建资产包
     * @Route("/addBox", name="/admin/project/addBox")
     */
    public function addBoxAction()
    {
        
    }

    /**
     * 项目到期数据
     * @Route("/endTime", name="/admin/project/endTime")
     */
    public function endTimeAction()
    {
        
    }

    /**
     * 投资人还款详情汇总
     * @Route("/investRepay", name="/admin/project/investRepay")
     */
    public function investRepayAction()
    {
        
    }

    /**
     * 借款人还款详情汇总
     * @Route("/loanRepay", name="/admin/project/loanRepay")
     */
    public function loanRepayAction()
    {
        
    }
}