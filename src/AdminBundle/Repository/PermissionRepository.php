<?php

namespace AdminBundle\Repository;

use AdminBundle\Entity\Permission;
use Symfony\Component\Cache\Adapter\ArrayAdapter;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\DoctrineProvider;
/**
 * PermissionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PermissionRepository extends \Doctrine\ORM\EntityRepository
{
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

	/**
	 * 获取全部菜单树排列
	 */
	public function &getMenus()
	{
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
