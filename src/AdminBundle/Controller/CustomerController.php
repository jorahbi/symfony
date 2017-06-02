<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 客户管理
 */

class CustomerController extends Controller
{
    /**
     * 个人用户列表
     * @Route("customer/index", name="customer_index")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }
    
    /**
     * 个人用户列表
     * @Route("customer/users", name="customer_users")
     */
    public function usersAction()
    {
        
    }

    /**
     * 回款列表
     * @Route("customer/payment", name="customer_payment")
     */
    public function paymentAction()
    {
        
    }

    /**
     * 个人用户销售版
     * @Route("customer/selfList", name="customer_selfList")
     */
    public function selfListAction()
    {
        
    }

    /**
     * 任务中心用户列表
     * @Route("customer/lists", name="customer_lists")
     */
    public function listsAction()
    {
        
    }
}