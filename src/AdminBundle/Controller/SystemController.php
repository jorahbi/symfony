<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AdminBundle\Form\PermissionType;
use AdminBundle\Entity\Permission;

/**
 * 系统管理
 * @Route ("/system")
 */

class SystemController extends Controller
{
    /**
     * 管理员列表
     * @Route("/users/{parent}", name="/admin/system/users", defaults={"parent": "0"})
     *  
     */
    public function usersAction(Request $request)
    {
        if($request->isXmlHttpRequest())
        {
            $result = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Permission')->getPermission($request);
            $result['draw'] = $request->get('draw');
            return $this->json($result);
        }
        return $this->render('AdminBundle:System:users.html.twig', ['parent' => $request->get('parent')]);
    }

    /**
     * 禁用管理员列表
     * @Route("/disabledUsers", name="/admin/system/disabledUsers")
     */
    public function disabledUsersAction()
    {
        return $this->render('AdminBundle:System:disabledUsers.html.twig');
    }

    /**
     * 管理员登录日志
     * @Route("/operationLog", name="/admin/system/operationLog")
     */
    public function operationLogAction()
    {
        
        return $this->render('AdminBundle:System:operationLog.html.twig');
    }

    /**
     * 管理员管理
     * @Route("/manager", name="/admin/system/manager")
     */
    public function managerAction()
    {
        return $this->render('AdminBundle:System:manager.html.twig');
    }

    /**
     * 部门管理
     * @Route("/department", name="/admin/system/department")
     */
    public function departmentAction()
    {
        return $this->render('AdminBundle:System:department.html.twig');
    }

    /**
     * 职位管理
     * @Route("/position", name="/admin/system/position")
     */
    public function positionAction()
    {
        return $this->render('AdminBundle:System:position.html.twig');
    }

    /**
     * 消息列表
     * @Route("/message", name="/admin/system/message")
     */
    public function messageAction()
    {
        return $this->render('AdminBundle:System:message.html.twig');
    }

    /**
     * 发送消息
     * @Route("/pushMsg", name="/admin/system/pushMsg")
     */
    public function pushMsgAction()
    {
        return $this->render('AdminBundle:System:pushMsg.html.twig');
    }

    /**
     * 清除数据缓存
     * @Route("/cleanData", name="/admin/system/cleanData")
     */
    public function cleanDataAction()
    {
        return $this->render('AdminBundle:System:cleanData.html.twig');
    }

    /**
     * 添加后台权限
     * @Route("/savePermission/{pid}/{type}", name="/admin/system/savePermission", defaults={"pid": 0, "type": "add"})
     * 默认pid为0 初始为添加菜单
     */
    public function savePermissionAction(Request $request)
    {
        $permission = new Permission();
        $form = $this->createForm(PermissionType::class, $permission);
        
            $form->handleRequest($request);
            $permission = $form->getData();
            var_dump($form->isSubmitted(), $form->isValid());
            $errors = $this->get('validator')->validate($permission);
        var_dump($request->get('pid'));
        return $this->render('AdminBundle:System:savePermission.html.twig', ['form' => $form->createView()]);
    }

    /**
     * 添加后台权限
     * @Route("/delPermission/{pid}", name="/admin/system/delPermission")
     * 默认pid为0 初始为添加菜单
     */
    public function delPermissionAction()
    {
        return $this->json(['status' => 1]);
    }

}