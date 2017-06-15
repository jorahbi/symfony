<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 文案管理
 * @Route ("/article")
 */

class ArticleController extends Controller
{
    /**
     * 文章列表
     * @Route("/index", name="/admin/article/index")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }

    /**
     * 帮助信息
     * @Route("/help", name="/admin/article/help")
     */
    public function helpAction()
    {
        
    }

    /**
     * 添加文章
     * @Route("/add", name="/admin/article/add")
     */
    public function addAction()
    {
        
    }

    /**
     * 短信模板
     * @Route("/msm", name="/admin/article/msm")
     */
    public function msmAction()
    {
        
    }

    /**
     * 发送短信
     * @Route("/sendMsm", name="/admin/article/sendMsm")
     */
    public function sendMsmAction()
    {
        
    }

    /**
     * 文章分类
     * @Route("/category", name="/admin/article/category")
     */
    public function categoryAction()
    {
        
    }

    /**
     * 添加|编辑文章分类
     * @Route("/saveCat", name="/admin/article/saveCat")
     */
    public function saveCatAction()
    {
        
    }

    /**
     * 文章分类异常列表
     * @Route("/exception", name="/admin/article/exception")
     */
    public function exceptionAction()
    {
        
    }
}