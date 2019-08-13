<?php
/**
 * Created by PhpStorm.
 * User: ztbsj
 * Date: 2019/8/12
 * Time: 14:45
 */

namespace app\admin\controller;
use  think\Controller;
use think\Db;


class FoodDetails extends Controller
{
    // 通过 foods_id 获取食物详情信息
    public function index () {
        $foods_id = $_GET['foods_id'];

        $list = Db::table('foods_nutrient')
            ->where('foods_id', $foods_id)
            ->field('foods_id, value AS energy, name AS nutrient, unit')
            ->select();

        $child = Db::table('foods')
            ->where('foods_id', $foods_id)
            ->field('name, thumb')
            ->find();
        $list[0]['name'] = $child['name'];
        $list[0]['thumb'] = $child['thumb'];

        return json_encode($list);
    }
}