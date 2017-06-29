<?php

namespace AdminBundle\Repository;

use AdminBundle\Entity\Permission;
use Symfony\Component\Cache\Adapter\ArrayAdapter;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\DoctrineProvider;
use Symfony\Component\HttpFoundation\Request;
#use Doctrine\ORM\Tools\Pagination\Paginator; 
/**
 * PermissionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PermissionRepository extends \Doctrine\ORM\EntityRepository
{

	protected $queryBuilder = null;

	protected function mapRequest()
	{
		empty($this->queryBuilder) && $this->queryBuilder = $this->getEntityManager()->createQueryBuilder()->from($this->getEntityName(), 'p');
	}

	public function add (Permission $permission)
	{	
		$this->mapRequest($permission);
		$query = $this->getEntityManager();
		$query->persist($permission);
		$query->flush();
		return $permission->getId();
	}


	public function getRoot()
	{
		/*$query = $this->getEntityManager();
		$result = $this->findBy(['label' => '测试']);
		var_dump($result->getResult());*/
		$query = $this->getEntityManager()->createQueryBuilder()
		->select('p')
		->from($this->getEntityName(), 'p')
		->where('p.lv = :lv')
		->setParameter('lv', '2')
		->getQuery();
		return $query->getResult();
		//return $query->getArrayResult();
	}

	public function &getPermission(Request $request)
	{
		$result = [];
		$this->mapRequest();

		if($request->get('parent') !== 0)
		{
			$this->queryBuilder->andWhere('p.parent = :parent')
				->setParameter('parent', $request->get('parent'));
		}
		else
		{
			$this->queryBuilder
			->andWhere('p.lv = :lv')
			->setParameter('lv', 1);
		}
		$result['recordsTotal'] = $result['recordsFiltered'] = $this->queryBuilder->select('count(p.id)')->getQuery()->getSingleScalarResult();

		$this->queryBuilder->select('p');
		$this->queryBuilder->setFirstResult($request->get('start'))->setMaxResults($request->get('length'));
		$result['data'] = $this->queryBuilder->getQuery()->getArrayResult();
		return $result;
	}

	/**
	 * 后台面包屑
	 * 
	 */
	public function &getCrumbs()
	{
		$cache = new FilesystemAdapter();
		//$cache->deleteItem('stats.permissionsAll');//删除缓存
		//set cache item 根据后台管理员id设置对应的缓存
		$perCache = $cache->getItem('stats.crumbs');
		if($perCache->isHit()){
			$resultCache = $perCache->get();
			return $resultCache;
		}
		$result = [];
		foreach($this->findAll() as &$item)
		{
			//菜单栏选中路径
			$result['menus'][$item->getLink()] = $item->getPath();
			//面包屑
			$result['crumbs'][$item->getId()] = [
				'link' => $item->getLink(),
				'label' => $item->getLabel(),
				'path' => $item->getPath(),
				'icon' => $item->getIcon()
			];
		}
		$perCache->set($result);
        $cache->save($perCache);
        return $result;
	}

	/**
	 * 获取全部菜单树排列
	 */
	public function &getMenus()
	{
		//$this->getCrumbs();
		$cache = new FilesystemAdapter();
		//$cache->deleteItem('stats.permissions');//删除缓存
		$perCache = $cache->getItem('stats.permissions');
		if($perCache->isHit()){
			$resultCache = $perCache->get();
			return $resultCache;
		}
		$permissions = $this->findBy(['status' => 1, 'isMenu' => 1]);
		$convertTmp = [];
		//[0 => $item] 转换为 [$item->getId() => $item]
        foreach ($permissions as $_item) {
                $convertTmp[$_item->getId()] = $_item;
        }
        unset($permissions);
        // 转换成树
        $tree = [];
        foreach($convertTmp as $item){
            if(!empty($item->getParent())) 
                $convertTmp[$item->getParent()->getId()]->addChild($convertTmp[$item->getId()]);
            else
                $tree[] = $convertTmp[$item->getId()];
        }
        unset($convertTmp);
        $perCache->set($tree);
        $cache->save($perCache);
        return $tree;
	}
}
