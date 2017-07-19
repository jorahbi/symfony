<?php 

namespace AdminBundle\Services;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use AdminBundle\Entity\Activity;
use CommonBundle\Services\ArrayService;
use Doctrine\Common\Cache\CacheProvider;
use Symfony\Component\Cache\Adapter\ArrayAdapter;
use Symfony\Component\Cache\DoctrineProvider;
use AdminBundle\Entity\Permission;
use AdminBundle\Entity\Cat;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * 后台权限服务
 */
class PermissionService
{
	//数组操作类
	protected $arrayService;
	protected $container;
	protected $doctrine;
	protected $currentRoute;
	protected $fileCache;

	public function __construct(Container $container)
	{
		$this->container = $container;
		$this->arrayService = $this->container->get('common.array');
		$this->doctrine = $this->container->get('doctrine')->getManager();
		$this->fileCache = $this->container->get('common.fileCache');
	}

	public function setCurrentRoute($route)
	{
		$this->currentRoute = $route;
	}

	public function getCurrentRoute()
	{
		return $this->currentRoute;
	}
	
	/**
	 * 返回当前选中菜单与页面面包屑
	 *	@return []
	 */
	public function &getCurrentMenu()
	{
		//get cache item 根据后台管理员id获取对应的缓存
        $perCache = $this->getCrumbs();
        //菜单栏选中路径
        $menuTmp = isset($perCache['menus'][$this->getCurrentRoute()]) ? $perCache['menus'][$this->getCurrentRoute()] : '';
        $currentMenu['parent'] = explode(',', $menuTmp);
        //后台面包屑
        foreach ($currentMenu['parent'] as $v) 
        {
            $currentMenu['crumbs'][] = $perCache['crumbs'][$v];
        }
        unset($perCache);
        return $currentMenu;
	}

	/**
	 * 后台修改角色权限页面，权限展示
	 */
	public function &permissionTree($cacheKey = 'admin.permissions')
	{
		$perCache = $this->fileCache->getItem($cacheKey);
		if($perCache->isHit())
		{
			$resultCache = $perCache->get();
			return $resultCache;
		}
		$filter = [
			'admin.menus' => ['status' => 1, 'isMenu' => 1],
			'admin.permissions' => []
		];
		$permissions = $this->doctrine->getRepository('AdminBundle:Permission')->findBy($filter[$cacheKey]);
		$this->doctrine->getRepository('AdminBundle:Permission')->clear();
		$permissions = $this->arrayService->objectGenerateTree($permissions);
		$perCache->set($permissions);
        $this->fileCache->save($perCache);
        return $permissions;
	}


	/**
	 * 后台面包屑
	 * 
	 */
	public function &getCrumbs()
	{
		//set cache item 根据后台管理员id设置对应的缓存
		$perCache = $this->fileCache->getItem('admin.crumbs');
		if($perCache->isHit())
		{
			$resultCache = $perCache->get();
			return $resultCache;
		}
		$result = $this->doctrine->getRepository('AdminBundle:Permission')->getCrumbs();
		$perCache->set($result);
        $this->fileCache->save($perCache);
        return $result;
	}

	/**
	 * 清除文件缓存
	 */
	public function cacheClear()
	{
		$this->fileCache->deleteItem('admin.menus');
		$this->fileCache->deleteItem('admin.permissions');
		$this->fileCache->deleteItem('admin.crumbs');
	}

	public function test($object)
	{
		$pool = new ArrayAdapter();
        $cache = new DoctrineProvider($pool);
        
		$key = 'key';
		echo "=================================\n";

		var_dump($cache->save($key, $object));
		var_dump($cache->contains($key));
		print_r($cache->fetch($key));
	}
}