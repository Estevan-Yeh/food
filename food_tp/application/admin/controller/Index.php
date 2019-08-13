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
        // 查询 category 返回首页食物分类名字
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
}