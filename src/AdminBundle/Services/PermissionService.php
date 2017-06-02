<?php 

namespace AdminBundle\Services;

use AdminBundle\Entity\Activity;

/**
 * 后台权限服务
 */
class PermissionService
{
	/**
	 * 后台菜单显示 
	 */
	public function menu()
	{
		$result = [];
		for($i = 0; $i < 10; $i++)
		{
			$activity = new Activity();
			$activity->setTitle('title:' . $i);
			$result[$i] = $activity;
		}
		return $result;
	}
}