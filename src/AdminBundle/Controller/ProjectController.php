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
        return $this->render('AdminBundle:Project:borrow.html.twig');
    }

    /**
     * 项目详情
     * @Route("/borrowDetail", name="/admin/project/borrowDetail")
     */
    public function borrowDetailAction()
    {
        return $this->render('AdminBundle:Project:borrowDetail.html.twig');
    }

    /**
     * 待审核借款
     * @Route("/waits", name="/admin/project/waits")
     */
    public function waitsAction()
    {
        return $this->render('AdminBundle:Project:waits.html.twig');
    }

    /**
     * 投标中的借款
     * @Route("/ongoing", name="/admin/project/ongoing")
     */
    public function ongoingAction()
    {
        return $this->render('AdminBundle:Project:ongoing.html.twig');
    }

    /**
     * 已完成的借款
     * @Route("/complete", name="/admin/project/complete")
     */
    public function completeAction()
    {
        return $this->render('AdminBundle:Project:complete.html.twig');
    }

    /**
     * 还款中的借款
     * @Route("/repaying", name="/admin/project/repaying")
     */
    public function repayingAction()
    {
        return $this->render('AdminBundle:Project:repaying.html.twig');
    }

    /**
     * 已流标的借款
     * @Route("/failed", name="/admin/project/failed")
     */
    public function failedAction()
    {
        return $this->render('AdminBundle:Project:failed.html.twig');
    }

    /**
     * 费用规则
     * @Route("/money", name="/admin/project/money")
     */
    public function moneyAction()
    {
        return $this->render('AdminBundle:Project:money.html.twig');
    }

    /**
     * 添加费用规则
     * @Route("/addMoney", name="/admin/project/addMoney")
     */
    public function addMoneyAction()
    {
        return $this->render('AdminBundle:Project:addMoney.html.twig');
    }

    /**
     * 奖励规则
     * @Route("/award", name="/admin/project/award")
     */
    public function awardAction()
    {
        return $this->render('AdminBundle:Project:award.html.twig');
    }

    /**
     * 添加奖励规则
     * @Route("/addAward", name="/admin/project/addAward")
     */
    public function addAwardAction()
    {
        return $this->render('AdminBundle:Project:addAward.html.twig');
    }

    /**
     * 资产包管理
     * @Route("/box", name="/admin/project/box")
     */
    public function boxAction()
    {
        return $this->render('AdminBundle:Project:box.html.twig');
    }

    /**
     * 创建资产包
     * @Route("/addBox", name="/admin/project/addBox")
     */
    public function addBoxAction()
    {
        return $this->render('AdminBundle:Project:addBox.html.twig');
    }

    /**
     * 项目到期数据
     * @Route("/endTime", name="/admin/project/endTime")
     */
    public function endTimeAction()
    {
        return $this->render('AdminBundle:Project:endTime.html.twig');
    }

    /**
     * 投资人还款详情汇总
     * @Route("/investRepay", name="/admin/project/investRepay")
     */
    public function investRepayAction()
    {
        return $this->render('AdminBundle:Project:investRepay.html.twig');
    }

    /**
     * 借款人还款详情汇总
     * @Route("/loanRepay", name="/admin/project/loanRepay")
     */
    public function loanRepayAction()
    {
        return $this->render('AdminBundle:Project:loanRepay.html.twig');
    }
}