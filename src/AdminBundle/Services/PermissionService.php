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

	public function __construct(ArrayService $arrayService, Container $container)
	{
		$this->arrayService = $arrayService;
		$this->container = $container;
		$this->doctrine = $this->container->get('doctrine')->getManager();
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
	 * 后台菜单显示 
	 */
	public function &menu()
	{
		return $this->doctrine->getRepository('AdminBundle:Permission')->getMenus();
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