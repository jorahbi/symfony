<?php 

namespace AdminBundle\Services;

use Symfony\Component\DependencyInjection\Container;
use AdminBundle\Entity\Activity;
use UtilsBundle\Services\ArrayService;
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

	public function setContainer($container)
	{
		$this->$container = $container;
	}

	public function __construct(ArrayService $arrayService, Container $container)
	{
		$this->arrayService = $arrayService;
		$this->container = $container;
	}

	public function savePermission()
	{
		print_r(get_class($this->container));
		/*$menusAll = $this->getPermissionAll();
		$permission = new Permission();
		foreach ($menusAll as $key => $value) 
		{
			
		}*/
		
	}

	/**
	 * 后台菜单显示 
	 */
	public function menutest()
	{

		$permission = new Permission();
		$result = $this->arrayService->arrayToObject($this->getPermissionAll(), $permission);
		$result1 = $this->arrayService->objectTree($result, 'id', 'parent');
		print_r($result1);
		$em = $this->getDoctrine()->getManager();
		$em->persist($result1[0]);
		for($i = 0; $i < 10; $i++)
		{
			$activity = new Permission();
			$activity->setLabel('title:' . $i);
			$result[$i] = $activity;
		}
		return $result;
	}


	/**
	 * 后台菜单显示 
	 */
	public function menu()
	{

		$permission = new Permission();
		$result = $this->arrayService->arrayToObject($this->getPermissionAll(), $permission);
		$result1 = $this->arrayService->objectTree($result, 'id', 'parent');
		//print_r($result1);
		return $result1;
	}

	/**
	 * 获取全部权限
	 */
	public function &getPermissionAll()
	{
		$menus = [
			[
				'id' => 1,
				'label' => '活动管理',
				//'parent' => 0,
				'path' => '1',
				'link' => '#',
				'icon' => 'icon-home',
				'status' => '1',
				'isMenu' => '1',
				//'orderBy' => '1',
				//'extra' => ''
			],
			[
				'id' => 2,
				'label' => '活动列表',
				//'parent' => 1,
				'path' => '1,2',
				'link' => 'admin/activity/index',
				'icon' => 'icon-home',
				'status' => '1',
				'isMenu' => '1',
				//'orderBy' => '1',
				//'extra' => ''
			]/*,
			[
				'id' => 3,
				'label' => 'APP欢迎页',
				'parent' => '1',
				'path' => '1,3',
				'link' => 'admin/activity/appWelcome',
				'icon' => 'icon-home',
				'status' => '1',
				'isMenu' => '1',
				//'orderBy' => '1',
				//'extra' => ''
			],
			[
				'id' => 4,
				'label' => 'APP主导航图标',
				'parent' => '2',
				'path' => '1,4',
				'link' => 'admin/activity/appNav',
				'icon' => 'icon-home',
				'status' => '1',
				'isMenu' => '1',
				//'orderBy' => '1',
				//'extra' => ''
			],
			[
				'id' => 5,
				'label' => 'APP注册推荐页图片',
				'parent' => '2',
				'path' => '1,5',
				'link' => 'admin/activity/marker',
				'icon' => 'icon-home',
				'status' => '1',
				'isMenu' => '1',
				//'orderBy' => '1',
				//'extra' => ''
			],
			[
				'id' => 6,
				'label' => '任务列表',
				'parent' => '3',
				'path' => '1,6',
				'link' => 'admin/activity/task',
				'icon' => 'icon-home',
				'status' => '1',
				'isMenu' => '1',
				//'orderBy' => '1',
				//'extra' => ''
			],
			[
				'id' => 7,
				'label' => '添加任务',
				'parent' => '3',
				'path' => '1,7',
				'link' => 'admin/activity/task',
				'icon' => 'icon-home',
				'status' => '1',
				'isMenu' => '1',
				//'orderBy' => '1',
				//'extra' => ''
			],*/
		];
		return $menus;
	}


	public function test()
	{
		$pool = new ArrayAdapter();
        $cache = new DoctrineProvider($pool);
        
		$key = 'key';
		echo "=================================\n";

		var_dump($cache->save($key, ['aaa' => 'bbb']));
		var_dump($cache->contains($key));
		var_dump($cache->fetch($key, 'bar'));
	}
}