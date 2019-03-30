<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/30
 * Time: 14:16
 */

namespace app\index\controller;

use think\Controller;

class Fina extends Controller
{
    public function index()
    {
        return $this->fetch("fina/index");
    }
}
