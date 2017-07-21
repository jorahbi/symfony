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
     * 对象数组转换树结构
     * @param $source 原数组对象
     * @param $getkey 目标key值
     * @param $getParent 获取上级元素
     * @param $addChild 设置子元素
     * @return [];
     */
    public function objectGenerateTree(&$source, $getKey = 'getId', $getParent = 'getParent', $addChild = 'addChild')
    {
        $convertTmp = [];
        foreach ($source as $_item) 
        {
            $convertTmp[$_item->$getKey()] = $_item;
        }
        // 转换成树
        $tree = [];
        foreach($convertTmp as $item)
        {
            if(!empty($item->$getParent())) 
                $convertTmp[$item->$getParent()->$getKey()]->$addChild($convertTmp[$item->$getKey()]);
            else
                $tree[] = $convertTmp[$item->$getKey()];
        }
        unset($convertTmp);
        //\Doctrine\Common\Util\Debug::dump($tree[0]->getChildren());die;
        return $tree;

    }

    /**
     * 数组转换树结构
     * @param $source 原数组对象
     * @param $key 目标key值
     * @param $Parent 获取上级元素
     * @param $children 设置子元素
     * @return [];
     */
    public function &arrayGenerateTree(&$source, $key = 'id', $parent = 'parent_id', $children = 'children')
    {
        $tree = [];
        foreach($source as $key1 => $item)
        {
            if(isset($source[$item[$parent]])){ 
                $source[$item[$parent]][$children][] = &$source[$item[$key]];
            }else{
                $tree[] = &$source[$item[$key]];
            }
        }
        return $tree;
    }


    public function objectToArray($object)
    {
        $array = new ArrayCollection();
        foreach($object as $key => $value)
        {
            \Doctrine\Common\Util\Debug::dump($value);die;
        }
        
    }
}