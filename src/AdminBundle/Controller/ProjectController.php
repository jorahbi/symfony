<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 项目管理
 */

class ArticleController extends Controller
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
    public ModelAndView borrow()
    {
        return new ModelAndView();
    }

    /**
     * 项目详情
     * @Route("project/borrowDetail", name="project_borrowDetail")
     */
    public ModelAndView borrowDetail()
    {
        return new ModelAndView();
    }

    /**
     * 待审核借款
     * @Route("project/waits", name="project_waits")
     */
    public ModelAndView waits()
    {
        return new ModelAndView();
    }

    /**
     * 投标中的借款
     * @Route("project/ongoing", name="project_ongoing")
     */
    public ModelAndView ongoing()
    {
        return new ModelAndView();
    }

    /**
     * 已完成的借款
     * @Route("project/complete", name="project_complete")
     */
    public ModelAndView complete()
    {
        return new ModelAndView();
    }

    /**
     * 还款中的借款
     * @Route("project/repaying", name="project_repaying")
     */
    public ModelAndView repaying()
    {
        return new ModelAndView();
    }

    /**
     * 已流标的借款
     * @Route("project/failed", name="project_failed")
     */
    public ModelAndView failed()
    {
        return new ModelAndView();
    }

    /**
     * 费用规则
     * @Route("project/money", name="project_money")
     */
    public ModelAndView money()
    {
        return new ModelAndView();
    }

    /**
     * 添加费用规则
     * @Route("project/addMoney", name="project_addMoney")
     */
    public ModelAndView addMoney()
    {
        return new ModelAndView();
    }

    /**
     * 奖励规则
     * @Route("project/award", name="project_award")
     */
    public ModelAndView award()
    {
        return new ModelAndView();
    }

    /**
     * 添加奖励规则
     * @Route("project/addAward", name="project_addAward")
     */
    public ModelAndView addAward()
    {
        return new ModelAndView();
    }

    /**
     * 资产包管理
     * @Route("project/box", name="project_box")
     */
    public ModelAndView box()
    {
        return new ModelAndView();
    }

    /**
     * 创建资产包
     * @Route("project/addBox", name="project_addBox")
     */
    public ModelAndView addBox()
    {
        return new ModelAndView();
    }

    /**
     * 项目到期数据
     * @Route("project/endTime", name="project_endTime")
     */
    public ModelAndView endTime()
    {
        return new ModelAndView();
    }

    /**
     * 投资人还款详情汇总
     * @Route("project/investRepay", name="project_investRepay")
     */
    public ModelAndView investRepay()
    {
        return new ModelAndView();
    }

    /**
     * 借款人还款详情汇总
     * @Route("project/loanRepay", name="project_loanRepay")
     */
    public ModelAndView loanRepay()
    {
        return new ModelAndView();
    }
}