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
	protected $doctrine;

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

	
	/**
	 * 后台菜单显示 
	 */
	public function &menu()
	{
		return $this->doctrine->getRepository('AdminBundle:Permission')->getMenus();
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