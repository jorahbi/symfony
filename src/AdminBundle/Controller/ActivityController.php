<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 活动列表
 */

class ActivityController extends Controller
{
    /**
     * 活动列表
     * @Route("activity/index", name="activity_index")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }

    /**
     * APP 欢迎页
     * @Route("activity/appWelcome", name="activity_appWelcome")
     */
    public function appWelcomeAction()
    {
        var_dump('app welcome');
        return $this->render('AdminBundle:Default:index.html.twig');
    }

    /**
     * APP 主导航图标
     * @Route ("activity/appNav", name="activity_appNav")
     */
    public function appNavAction()
    {
        
    }

    /**
     * APP注册推荐页图片
     * @Route ("activity/marker", name="activity_marker")
     */
    public function markerAction()
    {
        
    }

    /**
     * 任务列表
     * @Route ("activity/task", name="activity_task")
     */
    public function taskAction()
    {
        
    }

    /**
     * 添加任务
     * @Route ("activity/addTask", name="activity_addTask")
     */
    public function addTaskAction()
    {
        
    }

    /**
     * 奖品列表
     * @Route ("activity/prize", name="activity_prize")
     */
    public function prizeAction()
    {
        
    }

    /**
     * 添加奖品
     * @Route ("activity/addPrize", name="activity_addPrize")
     */
    public function addPrizeAction()
    {
        
    }

    /**
     * 续投奖励
     * @Route ("activity/continue", name="activity_continued")
     */
    public function continuedAction()
    {
        
    }

    /**
     * 奖品兑换列表
     * @Route ("activity/exchange", name="activity_exchange")
     */
    public function exchangeAction()
    {
        
    }

    /**
     * 签到事件列表
     * @Route ("activity/sign", name="activity_sign")
     */
    public function signAction()
    {
        
    }

    /**
     * 签到事件列表
     * @Route ("activity/addSign", name="activity_addSign")
     */
    public function addSignAction()
    {
        
    }

    /**
     * 积分
     * @Route ("activity/integral", name="activity_integral")
     */
    public function integralAction()
    {
        
    }

    /**
     * 添加积分
     * @Route ("activity/addIntegral", name="activity_addIntegral")
     */
    public function addIntegralAction()
    {
        
    }
}
