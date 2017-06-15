<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 会员管理
 * @Route ("/members")
 */

class MembersController extends Controller
{
    /**
     * 用户列表
     * @Route("/index", name="/admin/members/index")
     */
    public function indexActionAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }
    
    /**
     * 短信用户列表
     * @Route("/msm", name="/admin/members/msm")
     */
    public function msmAction()
    {
        
    }

    /**
     * 企业用户列表
     * @Route("/company", name="/admin/members/company")
     */
    public function companyAction()
    {
        
    }

    /**
     * 添加企业用户
     * @Route("/addCompany", name="/admin/members/addCompany")
     */
    public function addCompanyAction()
    {
        
    }

    /**
     * 推广渠道
     * @Route("/market", name="/admin/members/market")
     */
    public function marketAction()
    {
        
    }

    /**
     * 添加推广渠道
     * @Route("/addMarket", name="/admin/members/addMarket")
     */
    public function addMarketAction()
    {
        
    }

    /**
     * 推广统计
     * @Route("/marketDetail", name="/admin/members/marketDetail")
     */
    public function marketDetailAction()
    {
        
    }

    /**
     * 删除推广渠道
     * @Route("/delMarket", name="/admin/members/delMarket")
     */
    public function delMarketAction()
    {
        
    }

    /**
     * 生成二维码
     * @Route("/qrcode", name="/admin/members/qrcode")
     */
    public function qrcodeAction()
    {
        
    }

    /**
     * vip客户管理
     * @Route("/vip", name="/admin/members/vip")
     */
    public function vipAction()
    {
        
    }

    /**
     * vip续期
     * @Route("/vipRenewal", name="/admin/members/vipRenewal")
     */
    public function vipRenewalAction()
    {
        
    }
}