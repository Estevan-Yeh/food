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

    public function index()
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

            //->join('foods fd', 'fn.name = "'.$name.'" and fn.foods_id = fd.foods_id and fn.value>0.01 and fd.category = "'.$category.'"')
            //->field('fd.name AS name, fd.foods_id, fd.thumb, fn.value AS energy')
                ->where('name', $name)
            ->order('value',$sort)
//                ->order('fn.value desc')
            ->limit(20)
            ->select();

        return json_encode($list);
    }
}