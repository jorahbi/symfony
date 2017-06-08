<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Model\PermissionModel;

/**
 * 后台首页
 */

class DefaultController extends Controller
{
    /**
     * 后台首页
     * @Route("/")
     */
    public function indexAction()
    {
    	//global $kernel; $kernel->getContainer()->get('snc_redis.default');

    	$permissionService = $this->get('admin.permissionService');
    	$permissionService->savePermission();
    	/*$result1 = $permissionService->menu();
    	$em = $this->getDoctrine()->getManager();
		//$em->persist($result1[0]);
		//$em->flush();
		//var_dump($result1[0]->getId());
		$repository = $em->getRepository('AdminBundle:Cat');
		echo "<pre>";
		print_r($repository->findAll());
		echo "<pre/>";*/
		//print_r($this);
        return $this->render('AdminBundle:Default:test.html.twig');
    }
}
