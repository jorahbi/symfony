<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 用户注册登录
 */

class PassportController extends Controller
{
    /**
     * 用户登录
     * @Route("passport/login", name="/admin/members/login")
     */
    public function loginAction()
    {
        return $this->render('AdminBundle:Passport:login.html.twig');
    }

    /**
     * 用户注册
     * @Route("passport/register", name="/admin/members/register")
     */
    public function registerAction()
    {
        return $this->render('AdminBundle:Passport:register.html.twig');
    }

    /**
     * 退出登录
     * @Route("passport/loginOut", name="/admin/members/loginOut")
     */
    public function loginOutAction()
    {
        return $this->render('AdminBundle:Passport:loginOut.html.twig');
    }
}