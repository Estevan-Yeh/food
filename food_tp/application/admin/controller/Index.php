<?php
/**
 * Created by PhpStorm.
 * User: ztbsj
 * Date: 2019/8/5
 * Time: 16:07
 */
namespace app\admin\controller;
use  think\Controller;
use think\Db;


class Index extends Controller {
    public function index () {

        $categories = Db::table('foods')
            ->group('category')
            ->order('foods_id')
            ->column('category');
//        $categories = Db::table('foods')->where('category','谷薯主食')->field('category',true)->select();
//        $categories = Db::table('foods')
//            ->alias('a')
//            ->join('foods_nutrient s',"s.name = '热量' and s.foods_id = a.foods_id and a.category = '谷薯主食'")
//            ->field('a.name AS name, a.foods_id, a.thumb, s.name AS energy')
//            ->limit(50)
//            ->select();
       $categories = json_encode($categories);
//        var_dump($categories);
        return $categories;
    }

    public function category () {

//        $category = $_POST['category'];
        $category = $_GET['category'];
//        $list = Db::table('foods')->where('category', $category)->limit(20)->select();
//        $list = Db::table('foods')->where('id', 1)->select();
//        echo $category;
       $list = Db::table('foods')
            ->alias('a')
            ->join('foods_nutrient s',"s.name = '热量' and s.foods_id = a.foods_id and a.category = "."'".$category."'")
//           ->join('foods_nutrient s',$map)
            ->field('a.name AS name, a.foods_id, a.thumb, s.value AS energy')
            ->limit(20)
            ->select();

        return json_encode($list);
//        return json_encode($list);
    }
}