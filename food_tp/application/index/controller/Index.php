<?php
/**
 * Created by PhpStorm.
 * User: ztbsj
 * Date: 2019/8/5
 * Time: 16:22
 */

namespace app\index\controller;
use think\Controller;

class Index extends Controller {
    public function index() {
        return $this -> fetch();
    }
}