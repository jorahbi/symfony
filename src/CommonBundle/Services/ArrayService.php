<?php 

namespace CommonBundle\Services;

use \Doctrine\Common\Collections\ArrayCollection;

/**
 * 数组操作类
 */
class ArrayService
{
	/**
     * 转换key值
     * @param $source 原数据
     * @param $key 目标key值
     * @param $isResultsetArray 是否是二维数组
     * @return [];
     */
	public function &arrayChangeKey(Array &$source, $key, $isResultsetArray = false)
    {
        $result = [];
        foreach ($source as $_k => $_item) {
            if ($isResultsetArray) 
                $result[$_item[$key]][] = &$source[$_k];
            else 
                $result[$_item[$key]] = &$source[$_k];
        }
        return $result;
    }

    /**
     * 转换key值
     * @param $source 原数据
     * @param $key 目标key值
     * @param $isResultsetArray 是否是二维数组
     * @return [];
     */
	public function &objectChangeKey(Array &$source, $key, $isResultsetArray = false)
    {
        $result = [];
        $getKey = 'get' . ucfirst($key);
        foreach ($source as $_k => $_item) {
            if ($isResultsetArray) 
                $result[$_item->$getKey()][] = &$source[$_k];
            else 
                $result[$_item->$getKey()] = &$source[$_k];
        }
        return $result;
    }

    /**
     * 转换树结构
     * @param $source 原数据
     * @param $key 主键id
     * @param $parentId 父id
     * @param $childer 孩子key
     * @return [];
     */
	public function &objectTree(Array &$source, $key, $parent, $children = 'children')
	{
		$tree = [];
		$arrayCollection = new ArrayCollection();
		$getKey = 'get' . ucfirst($key);
		$getParent = 'get' . ucfirst($parent);
		$setChildren = 'set' . ucfirst($children);
        foreach($source as $item){
            if(isset($source[$item->$getParent()])) {
                $source[$item->$getParent()]->$setChildren($source[$item->$getKey()]);
            }
            else{
                $tree[] = $source[$item->$getKey()];
            }
        }
        return $tree;
	}

	/**
     * 转换树结构
     * @param $source 原数据
     * @param $key 主键id
     * @param $parentId 父id
     * @param $childer 孩子key
     * @return [];
     */
	public function &arrayTree(Array &$source, $key, $parentId, $children = 'children')
	{
		$tree = [];
        foreach($source as $item){
            if(isset($source[$item[$parentId]])) 
                $source[$item[$parentId]][$children][] = &$source[$item[$key]];
            else
                $tree[] = &$source[$item[$key]];
        }
        return $tree;
	}

	/**
     * 转换key值
     * @param $source 原数据
     * @param $key 目标key值
     * @param $isResultsetArray 是否是二维数组
     * @return [Object];
     */
	public function &arrayToObject(Array &$source, $object, $key = 'id', $isResultsetArray = false)
    {
        $result = [];
        foreach ($source as $_k => $_item) 
        {
        	$newObject = clone $object;
			foreach (array_keys($source) as $value) 
			{
				$setAttribute = 'set' . ucfirst($value);
				method_exists($newObject, $setAttribute) && $newObject->$setAttribute($source[$value]);
			}
            if ($isResultsetArray) 
                $result[$_item[$key]][] = $newObject;
            else 
                $result[$_item[$key]] = $newObject;
        }
        return $result;
    }
}