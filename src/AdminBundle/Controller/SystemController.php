<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AdminBundle\Form\PermissionType;
use AdminBundle\Entity\Permission;
use AdminBundle\Entity\AdminPosition;
use AdminBundle\Form\AdminPositionType;

/**
 * 系统管理
 * @Route ("/system")
 */

class SystemController extends Controller
{
    /**
     * 管理员列表
     * @Route("/users", name="/admin/system/users")
     *  
     */
    public function usersAction()
    {
        return $this->render('AdminBundle:System:users.html.twig');
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
     * 职位管理添加|修改
     * @Route("/position", name="/admin/system/position")
     */
    public function positionAction(Request $request)
    {
        if($request->isXmlHttpRequest())
        {
            $result = $this->getDoctrine()->getManager()->getRepository('AdminBundle:AdminPosition')->getPosition($request);
            $result['draw'] = $request->get('draw');
            return $this->json($result);
        }
        return $this->render('AdminBundle:System:position.html.twig');
    }

    /**
     * 职位管理添加|修改
     * @Route("/savePosition/{role}", name="/admin/system/savePosition", defaults={"role": 0}, requirements={"role": "\d+"})
     */
    public function savePositionAction(Request $request)
    {
        $mAdminPosition = $this->getDoctrine()->getManager()->getRepository('AdminBundle:AdminPosition');
        $adminPosition = $request->get('role') == 0 ? new AdminPosition() : $mAdminPosition->findBy(['id' => $request->get('role')]);
        $form = $this->createForm(AdminPositionType::class, $adminPosition);
        $form->handleRequest($request);
        if($request->isXmlHttpRequest() && $form->isSubmitted())
        {
            $errors = $this->get('validator')->validate($adminPosition);
            if(count($errors) > 0)
            {
                return $this->json(['status' => -1, 'message' => (string) $errors]);
            }
            $adminPosition->setAdminId($this->getUser()->getId())->setPermission($request->get('permission_id'));
            $positionId = $mAdminPosition->add($adminPosition);
            if($positionId > 0)
            {
                return $this->json(['status' => 1, 'data' => ['positionId' => $positionId], 'message' => '添加成功']);
            }
            return $this->json(['status' => -1, 'data' => [], 'message' => '添加失败']);
        }
        return $this->render('AdminBundle:System:savePosition.html.twig', [
            'form' => $form->createView(),
            'permissionList' => $adminPosition->getPermission()
        ]);
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
     * @Route("/savePermission/{pid}/{type}", name="/admin/system/savePermission", defaults={"pid": 0, "type": "add"}, requirements={"pid": "\d+"})
     * 默认pid为0 初始为添加菜单
     */
    public function savePermissionAction(Request $request)
    {
        $permission = new Permission();
        $form = $this->createForm(PermissionType::class, $permission);
        $form->handleRequest($request);
        
        if($request->isXmlHttpRequest() && $form->isSubmitted())
        {
            $errors = $this->get('validator')->validate($permission);
            if(count($errors) > 0)
            {
                return $this->json(['status' => -1, 'message' => (string) $errors]);
            }
            $this->getDoctrine()->getManager()->getRepository('AdminBundle:Permission')->add($form->getData());
            $this->get('admin.permissionService')->cacheClear();
            return $this->json(['status' => 1]);
        }
        return $this->render('AdminBundle:System:savePermission.html.twig', ['form' => $form->createView()]);
    }

    /**
     * 添加后台权限
     * @Route("/permission/{parent}", name="/admin/system/permission", defaults={"parent": "0"})
     */
    public function permissionAction(Request $request)
    {
        if($request->isXmlHttpRequest())
        {
            $result = $this->getDoctrine()->getManager()->getRepository('AdminBundle:Permission')->getPermission($request);
            $result['draw'] = $request->get('draw');
            return $this->json($result);
        }
        return $this->render('AdminBundle:System:permission.html.twig', ['parent' => $request->get('parent')]);
    }

    /**
     * 删除后台权限
     * @Route("/delPermission/{pid}", name="/admin/system/delPermission", defaults={"pid": 0})
     * 默认pid为0 初始为添加菜单
     */
    public function delPermissionAction()
    {
        return $this->json(['status' => 1]);
    }

}