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

    public function index()
    {

        $list = Db::table('foods')
            ->field('name, foods_id, thumb')
            ->orderRaw('rand()')
            ->limit(20)
            ->select();

        return json_encode($list);
    }
}