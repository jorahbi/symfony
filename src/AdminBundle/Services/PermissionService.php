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

	public function __construct(ArrayService $arrayService, Container $container)
	{
		$this->arrayService = $arrayService;
		$this->container = $container;
		$this->doctrine = $this->container->get('doctrine')->getManager();
		$this->fileCache = $this->container->get('common.fileCache');
	}

	public function savePermission()
	{
		//print_r(get_class($this->container));
		/*$menusAll = $this->getPermissionAll();
		$permission = new Permission();
		foreach ($menusAll as $key => $value) 
		{
			
		}*/
		
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
        $perCache = (new FilesystemAdapter())->getItem('stats.crumbs')->get();
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
	 * 获取后台权限
	 * @param $cacheKey 获取类型（menus 菜单显示| permission分配权限）
	 * @param $isNew 是否拉取最新数据
	 * @return Array 
	 */
	public function &permissions($cacheKey = 'menus', $isNew = false)
	{
		$where = $cacheKey == 'menus' ? ['status' => 1, 'isMenu' => 1] : ['lv' => 1];
		$isNew && $this->fileCache->deleteItem('stats.' . $cacheKey);//删除缓存
		$perCache = $this->fileCache->getItem('stats.' . $cacheKey);
		var_dump($perCache->isHit());
		if($perCache->isHit()){
			$resultCache = $perCache->get();
			return $resultCache;
		}
		$permissions = $this->doctrine->getRepository('AdminBundle:Permission')->findBy($where);
		$tree = $this->arrayService->objectToTree($permissions);
		$perCache->set($tree);
        $this->fileCache->save($perCache);
        return $tree;
	}

	/**
	 * 后台面包屑
	 * 
	 */
	public function &getCrumbs()
	{
		//$cache->deleteItem('stats.permissionsAll');//删除缓存
		//set cache item 根据后台管理员id设置对应的缓存
		$perCache = $this->fileCache->getItem('stats.crumbs');
		if($perCache->isHit()){
			$resultCache = $perCache->get();
			return $resultCache;
		}
		$result = $this->doctrine->getRepository('AdminBundle:Permission')->getCrumbs();
		$perCache->set($result);
        $this->fileCache->save($perCache);
        return $result;
	}

	public function getPath()
	{
		
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