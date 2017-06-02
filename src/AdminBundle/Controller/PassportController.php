<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 用户注册登录
 */

class ArticleController extends Controller
{
    /**
     * 活动列表
     * @Route("/")
     */
   /* public function indexAction()
    {
        Route("passport/login", name="passport_") $this->render('AdminBundle:Default:index.html.twig');
    }*/

    /**
     * 用户登录
     * @Route("passport/login", name="passport_login")
     */
    public function login()
    {
        
    }

    /**
     * 用户注册
     * @Route("passport/register", name="passport_register")
     */
    public function register()
    {
        
    }

    /**
     * 退出登录
     * @Route("passport/loginOut", name="passport_loginOut")
     */
    public function loginOut()
    {

    }
}