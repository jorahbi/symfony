<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 用户注册登录
 *  @Route("/passport")
 */

class PassportController extends Controller
{
    /**
     * 用户登录
     * @Route("/login", name="/admin/passport/login")
     */
    public function loginAction()
    {

        /*$user = new \AdminBundle\Entity\Admin();
        $plainPassword = 'admin123';
        $encoder = $this->container->get('security.password_encoder');
        $encoded = $encoder->encodePassword($user, $plainPassword);
        var_dump($encoder);*/

        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one / 获取可能存在的登录错误信息
        $error = $authenticationUtils->getLastAuthenticationError();
        
        // last username entered by the user / 获取用户输入的username（用户名）
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('AdminBundle:Passport:login.html.twig', [
            'username' => $lastUsername,
            'error' => $error
        ]);
    }

    /**
     * 用户注册
     * @Route("/register", name="/admin/passport/register")
     */
    public function registerAction()
    {
        return $this->render('AdminBundle:Passport:register.html.twig');
    }

    /**
     * 用户找回密码
     * @Route("/resetPassword", name="/admin/passport/resetPassword")
     */
    public function resetPasswordAction()
    {
        return $this->render('AdminBundle:Passport:resetPassword.html.twig');
    }

    /**
     * 退出登录
     * @Route("/loginOut", name="/admin/passport/loginOut")
     */
    public function loginOutAction()
    {
        return $this->render('AdminBundle:Passport:loginOut.html.twig');
    }
}