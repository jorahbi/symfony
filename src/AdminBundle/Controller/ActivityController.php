<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 活动管理
 * @Route("/activity")
 */

class ActivityController extends Controller
{
    /**
     * 活动列表
     * @Route("/index", name="/admin/activity/index")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }

    /**
     * APP 欢迎页
     * @Route("/appWelcome", name="/admin/activity/appWelcome")
     */
    public function appWelcomeAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }

    /**
     * APP 主导航图标
     * @Route("/appNav", name="/admin/activity/appNav")
     */
    public function appNavAction()
    {
        
    }

    /**
     * APP注册推荐页图片
     * @Route("/marker", name="/admin/activity/marker")
     */
    public function markerAction()
    {
        
    }

    /**
     * 任务列表
     * @Route("/task", name="/admin/activity/task")
     */
    public function taskAction()
    {
        
    }

    /**
     * 添加任务
     * @Route("/addTask", name="/admin/activity/addTask")
     */
    public function addTaskAction()
    {
        
    }

    /**
     * 奖品列表
     * @Route("/prize", name="/admin/activity/prize")
     */
    public function prizeAction()
    {
        
    }

    /**
     * 添加奖品
     * @Route("/addPrize", name="/admin/activity/addPrize")
     */
    public function addPrizeAction()
    {
        
    }

    /**
     * 续投奖励
     * @Route("/continued", name="/admin/activity/continued")
     */
    public function continuedAction()
    {
        
    }

    /**
     * 奖品兑换列表
     * @Route("/exchange", name="/admin/activity/exchange")
     */
    public function exchangeAction()
    {
        
    }

    /**
     * 签到事件列表
     * @Route("/sign", name="/admin/activity/sign")
     */
    public function signAction()
    {
        
    }

    /**
     * 添加签到事件
     * @Route("/addSign", name="/admin/activity/addSign")
     */
    public function addSignAction()
    {
        
    }

    /**
     * 积分
     * @Route("/integral", name="/admin/activity/integral")
     */
    public function integralAction()
    {
        
    }

    /**
     * 添加积分
     * @Route("/addIntegral", name="/admin/activity/addIntegral")
     */
    public function addIntegralAction()
    {
        
    }
}
