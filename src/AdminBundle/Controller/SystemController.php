<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 系统管理
 */

class SystemController extends Controller
{
    /**
     * 活动列表
     * @Route("/")
     */
    /*public function indexActionAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }*/

    /**
     * 管理员列表
     * @Route("system/users", name="system_users")
     */
    public function usersAction()
    {
        
    }

    /**
     * 禁用管理员列表
     * @Route("system/disabledUsers", name="system_disabledUsers")
     */
    public function disabledUsersAction()
    {
        
    }

    /**
     * 管理员登录日志
     * @Route("system/operationLog", name="system_operationLog")
     */
    public function operationLogAction()
    {
        
    }

    /**
     * 管理员管理
     * @Route("system/manager", name="system_manager")
     */
    public function managerAction()
    {
        
    }

    /**
     * 部门管理
     * @Route("system/department", name="system_department")
     */
    public function departmentAction()
    {
        
    }

    /**
     * 职位管理
     * @Route("system/position", name="system_position")
     */
    public function positionAction()
    {
        
    }

    /**
     * 消息列表
     * @Route("system/message", name="system_message")
     */
    public function messageAction()
    {
        
    }

    /**
     * 发送消息
     * @Route("system/pushMsg", name="system_pushMsg")
     */
    public function pushMsgAction()
    {
        
    }

    /**
     * 清除数据缓存
     * @Route("system/cleanData", name="system_cleanData")
     */
    public function cleanDataAction()
    {
        
    }
}