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
    public function indexAction()
    {
        return $this->render('AdminBundle:Members:index.html.twig');
    }
    
    /**
     * 短信用户列表
     * @Route("/msm", name="/admin/members/msm")
     */
    public function msmAction()
    {
        return $this->render('AdminBundle:Members:msm.html.twig');
    }

    /**
     * 企业用户列表
     * @Route("/company", name="/admin/members/company")
     */
    public function companyAction()
    {
        return $this->render('AdminBundle:Members:company.html.twig');
    }

    /**
     * 添加企业用户
     * @Route("/addCompany", name="/admin/members/addCompany")
     */
    public function addCompanyAction()
    {
        return $this->render('AdminBundle:Members:addCompany.html.twig');
    }

    /**
     * 推广渠道
     * @Route("/market", name="/admin/members/market")
     */
    public function marketAction()
    {
        return $this->render('AdminBundle:Members:market.html.twig');
    }

    /**
     * 添加推广渠道
     * @Route("/addMarket", name="/admin/members/addMarket")
     */
    public function addMarketAction()
    {
        return $this->render('AdminBundle:Members:addMarket.html.twig');
    }

    /**
     * 推广统计
     * @Route("/marketDetail", name="/admin/members/marketDetail")
     */
    public function marketDetailAction()
    {
        return $this->render('AdminBundle:Members:marketDetail.html.twig');
    }

    /**
     * 删除推广渠道
     * @Route("/delMarket", name="/admin/members/delMarket")
     */
    public function delMarketAction()
    {
        return $this->render('AdminBundle:Members:delMarket.html.twig');
    }

    /**
     * 生成二维码
     * @Route("/qrcode", name="/admin/members/qrcode")
     */
    public function qrcodeAction()
    {
        return $this->render('AdminBundle:Members:qrcode.html.twig');
    }

    /**
     * vip客户管理
     * @Route("/vip", name="/admin/members/vip")
     */
    public function vipAction()
    {
        return $this->render('AdminBundle:Members:vip.html.twig');
    }

    /**
     * vip续期
     * @Route("/vipRenewal", name="/admin/members/vipRenewal")
     */
    public function vipRenewalAction()
    {
        return $this->render('AdminBundle:Members:vipRenewal.html.twig');
    }
}