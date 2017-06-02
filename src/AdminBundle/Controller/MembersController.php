<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 会员管理
 */

class ArticleController extends Controller
{
    /**
     * 用户列表
     * @Route("members/index", name="members_index")
     */
    public function indexActionAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }
    
    /**
     * 短信用户列表
     * @Route("members/msm", name="members_msm")
     */
    public function msmAction()
    {
        
    }

    /**
     * 企业用户列表
     * @Route("members/company", name="members_company")
     */
    public function companyAction()
    {
        
    }

    /**
     * 添加企业用户
     * @Route("members/addCompany", name="members_addCompany")
     */
    public function addCompanyAction()
    {
        
    }

    /**
     * 推广渠道
     * @Route("members/market", name="members_market")
     */
    public function marketAction()
    {
        
    }

    /**
     * 添加推广渠道
     * @Route("members/addMarket", name="members_addMarket")
     */
    public function addMarketAction()
    {
        
    }

    /**
     * 推广统计
     * @Route("members/marketDetail", name="members_marketDetail")
     */
    public function marketDetailAction()
    {
        
    }

    /**
     * 删除推广渠道
     * @Route("members/delMarket", name="members_delMarket")
     */
    public function delMarketAction()
    {
        
    }

    /**
     * 生成二维码
     * @Route("members/qrcode", name="members_qrcode")
     */
    public function qrcodeAction()
    {
        
    }

    /**
     * vip客户管理
     * @Route("members/vip", name="members_vip")
     */
    public function vipAction()
    {
        
    }

    /**
     * vip续期
     * @Route("members/vipRenewal", name="members_vipRenewal")
     */
    public function vipRenewalAction()
    {
        
    }
}