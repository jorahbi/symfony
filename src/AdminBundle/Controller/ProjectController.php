<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 项目管理
 */

class ProjectController extends Controller
{
    /**
     * 活动列表
     * @Route("/")
     */
    /*public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }*/

    /**
     * 创建新项目
     * @Route("project/borrow", name="project_borrow")
     */
    public function borrowAction()
    {
        
    }

    /**
     * 项目详情
     * @Route("project/borrowDetail", name="project_borrowDetail")
     */
    public function borrowDetailAction()
    {
        
    }

    /**
     * 待审核借款
     * @Route("project/waits", name="project_waits")
     */
    public function waitsAction()
    {
        
    }

    /**
     * 投标中的借款
     * @Route("project/ongoing", name="project_ongoing")
     */
    public function ongoingAction()
    {
        
    }

    /**
     * 已完成的借款
     * @Route("project/complete", name="project_complete")
     */
    public function completeAction()
    {
        
    }

    /**
     * 还款中的借款
     * @Route("project/repaying", name="project_repaying")
     */
    public function repayingAction()
    {
        
    }

    /**
     * 已流标的借款
     * @Route("project/failed", name="project_failed")
     */
    public function failedAction()
    {
        
    }

    /**
     * 费用规则
     * @Route("project/money", name="project_money")
     */
    public function moneyAction()
    {
        
    }

    /**
     * 添加费用规则
     * @Route("project/addMoney", name="project_addMoney")
     */
    public function addMoneyAction()
    {
        
    }

    /**
     * 奖励规则
     * @Route("project/award", name="project_award")
     */
    public function awardAction()
    {
        
    }

    /**
     * 添加奖励规则
     * @Route("project/addAward", name="project_addAward")
     */
    public function addAwardAction()
    {
        
    }

    /**
     * 资产包管理
     * @Route("project/box", name="project_box")
     */
    public function boxAction()
    {
        
    }

    /**
     * 创建资产包
     * @Route("project/addBox", name="project_addBox")
     */
    public function addBoxAction()
    {
        
    }

    /**
     * 项目到期数据
     * @Route("project/endTime", name="project_endTime")
     */
    public function endTimeAction()
    {
        
    }

    /**
     * 投资人还款详情汇总
     * @Route("project/investRepay", name="project_investRepay")
     */
    public function investRepayAction()
    {
        
    }

    /**
     * 借款人还款详情汇总
     * @Route("project/loanRepay", name="project_loanRepay")
     */
    public function loanRepayAction()
    {
        
    }
}