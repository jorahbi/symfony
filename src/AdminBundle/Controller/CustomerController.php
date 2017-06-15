<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 客户管理
 * @Route ("/customer")
 */

class CustomerController extends Controller
{
    /**
     * 个人用户列表
     * @Route("/index", name="/admin/customer/index")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }
    
    /**
     * 个人用户列表
     * @Route("/users", name="/admin/customer/users")
     */
    public function usersAction()
    {
        
    }

    /**
     * 回款列表
     * @Route("/payment", name="/admin/customer/payment")
     */
    public function paymentAction()
    {
        
    }

    /**
     * 个人用户销售版
     * @Route("/selfList", name="/admin/customer/selfList")
     */
    public function selfListAction()
    {
        
    }

    /**
     * 任务中心用户列表
     * @Route("/lists", name="/admin/customer/lists")
     */
    public function listsAction()
    {
        
    }
}