<?php
/**
 * Created by PhpStorm.
 * User: ztbsj
 * Date: 2019/8/10
 * Time: 15:59
 */

namespace app\admin\controller;
use  think\Controller;
use think\Db;


class RankList extends Controller
{
    // 排行榜页面，根据 value 从低到高排序
    public function index()
    {
        $sum = 1;
        // 分页页数
        if (isset($_GET['sum']))
            $sum = $_GET['sum'];
        $length = 15;  // 每页 15 个数据
        $start = ($sum-1)*$length;

        // nutrient: 查询该 nutrient 的食物列表，不分 category
        if (isset($_GET['nutrient']) && $_GET['nutrient']!='') {
            $nutrient = $_GET['nutrient'];
            $list = Db::table('foods_nutrient')
                ->where('name', $nutrient)
                ->order('value', 'asc')
                ->limit($start, $length)
                ->field('foods_id, value')
                ->select();
        } else {
            // nutrient 为空默认查询所有 nutrient
            $list = Db::table('foods_nutrient')
                ->order('value', 'asc')
                ->limit($start, $length)
                ->field('foods_id, value')
                ->select();
        }
        foreach ($list as $key => $value) {
            $child = Db::table('foods')
                ->where('foods_id', $value['foods_id'])
                ->field('name, thumb')
                ->find();
            $list[$key]['name'] = $child['name'];
            $list[$key]['thumb'] = $child['thumb'];
        }

        return json_encode($list);
    }
}