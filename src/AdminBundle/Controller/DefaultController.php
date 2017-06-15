<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Repository\PermissionRepository;
use AdminBundle\Entity\Permission;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use AdminBundle\Form\PermissionType;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * 后台首页
 * @Route("/")
 */

class DefaultController extends Controller
{
    /**
     * 后台首页
     * @Route("/", name="/admin")
     * Template()
     */
    public function indexAction(Request $request)
    {
        //var_dump($request->isXmlHttpRequest());
        //$mPermission->findAll();
        //extends EntityRepository model
    	//global $kernel; $kernel->getContainer()->get('snc_redis.default');

    	//$permissionService = $this->get('admin.permissionService');
    	//$permissionService->savePermission();
    	//$result1 = $permissionService->menu();
    	//$em = $this->getDoctrine()->getManager();
		//$mPermission = $em->getRepository('AdminBundle:Permission')->add();
        //$em->persist($result1[0]);
		//$em->flush();
		//var_dump($result1[0]->getId());
		//$repository = $em->getRepository('AdminBundle:Cat');
		//print_r($repository->findAll());
		//print_r($this);
        return $this->stream('AdminBundle:Default:index.html.twig');
    }

    /**
     * 表单
     * @Route("/form", name="form")
     */
    public function formAction(Request $request)
    {
        $permission = new Permission();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(PermissionType::class, $permission);
        $form->handleRequest($request);
        $permission = $form->getData();
        $errors = $this->get('validator')->validate($permission);
        //var_dump($form->isSubmitted(), $form->isValid(), count($errors), $permission);

        /*$permission->setParent(1);
        $parent = $em->getRepository('AdminBundle:Permission')->findOneById($permission->getParent());
        var_dump($parent);*/
        if ($form->isSubmitted() && $form->isValid()) 
        { 
            $parentId = $form->get('parentId')->getData();
            $path = '';
            if($parentId){
                $parent = $em->getRepository('AdminBundle:Permission')->find(['id' => $parentId]);
                $permission->setParent($parent);
                $path = $parent->getPath();
            }
            $permission->setIcon('icon-diamond');
            
            $em->persist($permission);
            $em->flush();
            $path .= ',' . $permission->getId(); 
            $permission->setPath(trim($path, ','));
            $em->flush();
        }
        return $this->render('AdminBundle:Default:test.html.twig', ['form' => $form->createView()]);   
    }


    public function getUrl()
    {
         /*$url = $this->generateUrl(
            'activity_index'
        );

        $url2 = $this->generateUrl(
            'activity_index',
            [],
            UrlGeneratorInterface::ABSOLUTE_URL
        );

        $url1 = $this->get('router')->generate('activity_index');
        print_r($url);echo "<br />";
        print_r($url1);echo "<br />";
        print_r($url2);echo "<br />";*/
    }

    /**
     * 表单
     * @Route("/database", name="database")
     */
    public function databaseAction()
    {
        $em = $this->getDoctrine()->getManager();
        $permission = new Permission();
        $permission->setLabel('label1');
        $children = new Permission();
        $children->setLabel('children1');
        $children->setParent($permission);
        $permission->addChild($children);
        $em->persist($permission);
        $em->flush();

        $result = $em->getRepository('AdminBundle:Permission')->find(['id' => 1]);
        foreach($result->getChildren() as $children)
        {
            print_r($children->getLabel());
        }
        

        return $this->render('AdminBundle:Default:database.html.twig');  
    }
}
