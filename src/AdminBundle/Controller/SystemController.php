<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 系统管理
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
     * 管理员列表
     * @return ModelAndView
     */
    @RequestMapping("users")
    public ModelAndView users()
    {
        return new ModelAndView();
    }

    /**
     * 禁用管理员列表
     * @return ModelAndView
     */
    @RequestMapping("disabledUsers")
    public ModelAndView disabledUsers()
    {
        return new ModelAndView();
    }

    /**
     * 管理员登录日志
     * @return ModelAndView
     */
    @RequestMapping("operationLog")
    public ModelAndView operationLog()
    {
        return new ModelAndView();
    }

    /**
     * 管理员管理
     * @return ModelAndView
     */
    @RequestMapping("manager")
    public ModelAndView manager()
    {
        return new ModelAndView();
    }

    /**
     * 部门管理
     * @return ModelAndView
     */
    @RequestMapping("department")
    public ModelAndView department()
    {
        return new ModelAndView();
    }

    /**
     * 职位管理
     * @return ModelAndView
     */
    @RequestMapping("position")
    public ModelAndView position()
    {
        return new ModelAndView();
    }

    /**
     * 消息列表
     * @return ModelAndView
     */
    @RequestMapping("message")
    public ModelAndView message()
    {
        return new ModelAndView();
    }

    /**
     * 发送消息
     * @return ModelAndView
     */
    @RequestMapping("pushMsg")
    public ModelAndView pushMsg()
    {
        return new ModelAndView();
    }

    /**
     * 清除数据缓存
     * @return ModelAndView
     */
    @RequestMapping("cleanData")
    public ModelAndView cleanData()
    {
        return new ModelAndView();
    }
}