<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 支付管理
 */

class PayController extends Controller
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
     * 创建激活会员
     * @Route("pay/active", name="/admin/pay/active")
     */
    public function activeAction()
    {
        
    }
}