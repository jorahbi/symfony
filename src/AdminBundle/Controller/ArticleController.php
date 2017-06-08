<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 文案管理
 */

class ArticleController extends Controller
{
    /**
     * 文章列表
     * @Route("article/index", name="article_index")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }

    /**
     * 帮助信息
     * @Route("article/help", name="article_help")
     */
    public function helpAction()
    {
        
    }

    /**
     * 添加文章
     * @Route("article/add", name="article_add")
     */
    public function addAction()
    {
        
    }

    /**
     * 短信模板
     * @Route("article/msm", name="article_msm")
     */
    public function msmAction()
    {
        
    }

    /**
     * 发送短信
     * @Route("article/sendMsm", name="article_sendMsm")
     */
    public function sendMsmAction()
    {
        
    }

    /**
     * 文章分类
     * @Route("article/category", name="article_category")
     */
    public function categoryAction()
    {
        
    }

    /**
     * 添加|编辑文章分类
     * @Route("article/saveCat", name="article_saveCat")
     */
    public function saveCatAction()
    {
        
    }

    /**
     * 文章分类异常列表
     * @Route("article/exception", name="article_exception")
     */
    public function exceptionAction()
    {
        
    }
}