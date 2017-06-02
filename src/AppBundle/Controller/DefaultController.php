<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR . 'testest',
        ]);
    }

    /**
     * 测试api请求返回json 
     * @Route("api/json/{test}")
     */
    public function jsonAction($test, Request $request)
    {
        $data = array(
            'lucky_number' => rand(0, 100),
        );
 
        return new Response(
            json_encode($data),
            200,
            array('Content-Type' => 'application/json')
        );
    }

    /**
     * 测试参数接收页面展示
     * @Route("default/{count}", name="default_test")
     */
    public function testAction($count)
    {
        print_r($count);
        return $this->render('default/test.html', ['luckyNumberList' => $count]);
    }
}
