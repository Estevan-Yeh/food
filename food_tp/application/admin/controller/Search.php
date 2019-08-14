<?php
/**
 * Created by PhpStorm.
 * User: ztbsj
 * Date: 2019/8/14
 * Time: 9:32
 */

namespace app\admin\controller;
use  think\Controller;
use think\Db;


class Search extends controller
{
    public function index () {

        if (isset($_GET['search']) && $_GET['search']!='') {
            $search = '%' . $_GET['search'] . '%';
            $list = Db::table('foods')
                ->where('name', 'like', $search)
                ->field('foods_id, name, thumb')
                ->select();
            foreach ($list as $key => $value) {
                $foods_id = $value['foods_id'];
                $child = Db::table('foods_nutrient')
                    ->where('foods_id', $foods_id)
                    ->field('value AS energy, unit')
                    ->find();
                $list[$key]['energy'] = $child['energy'];
                $list[$key]['unit'] = $child['unit'];
            }
            return json_encode($list);
        }

        return 0;
    }

}