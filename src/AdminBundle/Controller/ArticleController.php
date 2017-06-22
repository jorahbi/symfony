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
        return $this->render('AdminBundle:Article:index.html.twig');
    }

    /**
     * 帮助信息
     * @Route("/help", name="/admin/article/help")
     */
    public function helpAction()
    {
        return $this->render('AdminBundle:Article:help.html.twig');
    }

    /**
     * 添加文章
     * @Route("/add", name="/admin/article/add")
     */
    public function addAction()
    {
        return $this->render('AdminBundle:Article:add.html.twig');
    }

    /**
     * 短信模板
     * @Route("/msm", name="/admin/article/msm")
     */
    public function msmAction()
    {
        return $this->render('AdminBundle:Article:msm.html.twig');
    }

    /**
     * 发送短信
     * @Route("/sendMsm", name="/admin/article/sendMsm")
     */
    public function sendMsmAction()
    {
        return $this->render('AdminBundle:Article:sendMsm.html.twig');
    }

    /**
     * 文章分类
     * @Route("/category", name="/admin/article/category")
     */
    public function categoryAction()
    {
        return $this->render('AdminBundle:Article:category.html.twig');
    }

    /**
     * 添加|编辑文章分类
     * @Route("/saveCat", name="/admin/article/saveCat")
     */
    public function saveCatAction()
    {
        return $this->render('AdminBundle:Article:save.html.twig');
    }

    /**
     * 文章分类异常列表
     * @Route("/exception", name="/admin/article/exception")
     */
    public function exceptionAction()
    {
        return $this->render('AdminBundle:Article:exception.html.twig');
    }
}