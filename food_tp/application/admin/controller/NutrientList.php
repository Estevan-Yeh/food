<?php
/**
 * Created by PhpStorm.
 * User: ztbsj
 * Date: 2019/8/10
 * Time: 16:26
 */

namespace app\admin\controller;
use  think\Controller;
use think\Db;


class NutrientList extends Controller
{
    // 根据前端发送的参数返回对应的食物列表
    public function index () {

        $sum = 1;
        // 分页页数
        if (isset($_GET['sum']))
            $sum = $_GET['sum'];
        $start = ($sum-1)*20;
        $length = 20;  // 每页 20 个数据

        // 根据前端发送的 category 返回对应的食物列表
        if (isset($_GET['category']) && $_GET['category']!='') {
            $category = $_GET['category'];


            // 获取该 category 的食物列表 food_id 范围
            $id_max = Db::table('foods')
                ->where('category', $category)
                ->max('foods_id');
            $id_min = Db::table('foods')
                ->where('category', $category)
                ->min('foods_id');


            // 查询此 category 中的 nutrient 返回食物列表
            if (isset($_GET['nutrient']) && $_GET['nutrient']!='') {
                $sort = 1;

                // sort 为 1 即升序，根据 value 排序
                if (isset($_GET['sort']) && $_GET['sort']!='')
                    $sort = $_GET['sort'];

                $sort = $sort==1 ? 'asc' : 'desc';

                $nutrient = $_GET['nutrient'];
                $list = Db::table('foods_nutrient')
                    ->where('foods_id', '>=', $id_min)
                    ->where('foods_id', '<=', $id_max)
                    ->where('name', $nutrient)
                    ->where('value', '>', 0.1)
                    ->field('value AS energy, unit, foods_id')
                    ->order('value', $sort)
                    ->limit($start, $length)
                    ->select();
            } else {
                // nutrient 为空时默认查询‘热量’
                $nutrient = '热量';
                $list = Db::table('foods_nutrient')
                    ->where('foods_id', '>=', $id_min)
                    ->where('foods_id', '<=', $id_max)
                    ->where('name', $nutrient)
                    ->field('value AS energy, unit, foods_id')
                    ->limit($start, $length)
//                    ->orderRaw('rand()')
                    ->select();
            }
            foreach ($list as $key => $value) {
                $foods_id = $value['foods_id'];
                $child = Db::table('foods')
                    ->where('foods_id', $foods_id)
                    ->field('name, thumb')
                    ->find();
                $list[$key]['name'] = $child['name'];
                $list[$key]['thumb'] = $child['thumb'];
            }

        } else {
            // category 为空默认查询返回 nutrient 属性名
            $list = Db::table('foods_nutrient')
                ->group('name')
                ->order('foods_nutrient_id')
                ->column('name');
        }
        return json_encode($list);

        /*$category = $_GET['category'];
        $name = $_GET['name'];
        $sort = $_GET['sort'];*/

        /*$category = '谷薯主食';
        $name = '热量';
        $sort = 0;*/

        /*$sort = $sort==1 ? 'asc' : 'desc';

        $id = Db::table('foods')
            ->where('category', $category)
            ->order('foods_id', 'desc')
            ->field('foods_id')
            ->find();
        $id = $id['foods_id'] + 1;

        $list = Db::table('foods_nutrient')
            ->where('foods_id','<', $id)
            ->where('name', $name)
            ->order('value', $sort)
            ->field('value AS energy, unit, foods_id')
            ->limit(20)
            ->select();

        foreach ($list as $key => $value) {
            $foods_id = $value['foods_id'];
            $child = Db::table('foods')
                ->where('foods_id', $foods_id)
                ->field('name, thumb')
                ->find();
            $list[$key]['name'] = $child['name'];
            $list[$key]['thumb'] = $child['thumb'];
        }
        echo json_encode($list);*/
    }

    /*public function index_2()
    {

        $list = Db::table('foods_nutrient')
            ->group('name')
            ->order('foods_nutrient_id')
            ->column('name');

        return json_encode($list);
    }


    public function child () {
        $name = $_GET['name'];
        $category = $_GET['category'];
        $list = Db::table('foods_nutrient')
            ->alias('fn')
            ->join('foods fd', 'fn.name = "'.$name.'" and fn.foods_id = fd.foods_id and fn.value>0.1 and fd.category = "'.$category.'"')
            ->field('fd.name AS name, fd.foods_id, fd.thumb, fn.value AS energy')
            ->order('fn.value')
            ->limit(20)
            ->select();

        return json_encode($list);
    }

    public function sort () {
        $sort = $_GET['sort'];
        if ($sort==1)
            $sort = 'asc';
        else
            $sort = 'desc';
        $name = $_GET['name'];
        $category = $_GET['category'];
        $list = Db::table('foods_nutrient')
            ->alias('fn')
            ->join('foods fd', 'fn.foods_id = fd.foods_id and fn.value > 0.01')
            ->field('fd.name AS name, fd.foods_id, fd.thumb, fn.value AS energy')
            ->order('value',$sort)
            ->limit(20)
            ->select();

        return json_encode($list);
    }*/
}