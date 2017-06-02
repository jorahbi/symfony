<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * 销售管理
 */

class ArticleController extends Controller
{
    /**
     * 佣金列表
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }

    /**
     * 业绩列表
     * @return ModelAndView
     */
    @RequestMapping("achievement")
    public ModelAndView achievement()
    {
        return new ModelAndView();
    }

    /**
     * 佣金列表
     * @return ModelAndView
     */
    @RequestMapping("sale")
    public ModelAndView sale()
    {
        return new ModelAndView();
    }

    /**
     * 佣金详细列表
     * @return ModelAndView
     */
    @RequestMapping("saleDetail")
    public ModelAndView saleDetail()
    {
        return new ModelAndView();
    }

    /**
     * 团队查询
     * @return ModelAndView
     */
    @RequestMapping("team")
    public ModelAndView team()
    {
        return new ModelAndView();
    }

    /**
     * 客服佣金
     * @return ModelAndView
     */
    @RequestMapping("staff")
    public ModelAndView staff()
    {
        return new ModelAndView();
    }

    /**
     * 客服佣金详细列表
     * @return ModelAndView
     */
    @RequestMapping("staffDetail")
    public ModelAndView staffDetail()
    {
        return new ModelAndView();
    }
}