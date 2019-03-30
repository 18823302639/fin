<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/6
 * Time: 15:56
 */
namespace app\admin\controller;

use think\Session;
use think\Request;

class Home extends LayHome
{

    public function index(){
        if(!Session::has('name')){

            $this->redirect(url("Admin/login"));
//            $this->error("您还未登录，请登录",url("Admin/login"));
        }
        return $this->fetch();
    }

    public function product_category_add(){
        return $this->fetch();
    }
    public function product_list(){
        return $this->fetch();
    }
    public function product_add(){
        return $this->fetch();
    }
    public function product_brand(){
        return $this->fetch();
    }



    public function welcome(){
        return view("home/welcome");
    }






}