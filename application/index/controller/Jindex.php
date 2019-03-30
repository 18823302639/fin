<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Request;
use app\index\common;

class Jindex extends Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->isMobile()){
            $this->redirect('http://www.zgxmall.com');
        }
    }

    function isMobile()
    {
        // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
        if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
        {
            return true;
        }
        // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
        if (isset ($_SERVER['HTTP_VIA']))
        {
            // 找不到为flase,否则为true
            return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
        }
        // 脑残法，判断手机发送的客户端标志,兼容性有待提高
        if (isset ($_SERVER['HTTP_USER_AGENT']))
        {
            $clientkeywords = array ('nokia',
                'sony',
                'ericsson',
                'mot',
                'samsung',
                'htc',
                'sgh',
                'lg',
                'sharp',
                'sie-',
                'philips',
                'panasonic',
                'alcatel',
                'lenovo',
                'iphone',
                'ipod',
                'blackberry',
                'meizu',
                'android',
                'netfront',
                'symbian',
                'ucweb',
                'windowsce',
                'palm',
                'operamini',
                'operamobi',
                'openwave',
                'nexusone',
                'cldc',
                'midp',
                'wap',
                'mobile'
            );
            // 从HTTP_USER_AGENT中查找手机浏览器的关键字
            if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
            {
                return true;
            }
        }
        // 协议法，因为有可能不准确，放到最后判断
        if (isset ($_SERVER['HTTP_ACCEPT']))
        {
            // 如果只支持wml并且不支持html那一定是移动设备
            // 如果支持wml和html但是wml在html之前则是移动设备
            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
            {
                return true;
            }
        }
        return false;
    }

    public function index()
    {
        return $this->fetch();
    }

    public function hongk()
    {
        if(Request::instance()->isPost()){
            $request = Request::instance();
            $data = $request->post();
            // 获取表单上传文件 例如上传了001.jpg
            $file = request()->file('file_image');
            if($file){
                $data['file_image'] = $this->upload($file);
            }
            $data['create_time'] = time();
//            print_r($data);die;
            $res = Db::table('fin_product_copy')->insert($data);
            if($res){
                $this->success("您的信息已经提交成功，稍后会有专员联系您",url('Jindex/index'));
            }else{
                $this->error("信息有误，请重新提交",8);
            }
        }
        return $this->fetch();
    }

    public function scr_remarks()
    {
        if(Request::instance()->isPost()){
            $request = Request::instance();
            $data = $request->post();
            // 获取表单上传文件 例如上传了001.jpg
            $file = request()->file('file_image');
            if($file){
                $data['file_image'] = $this->upload($file);
            }
            $data['create_time'] = time();
            $res = Db::table('fin_product_copy')->insert($data);
            if($res){
                $this->success("您的信息已经提交成功，稍后会有专员联系您",url('Jindex/index'));
//                $this->redirect("http://www.zgxmall.com/cwap/cwap_product_list.html?keyword=scr");
            }else{
                $this->error("信息有误，请重新提交",8);
            }
        }
        return $this->fetch();
    }

    public function upload($file){
        // 移动到框架应用根目录/public/uploads/ 目录下
        if($file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                echo $info->getSaveName();die;
                return $file_image = $info->getSaveName();
            }else{
                // 上传失败获取错误信息
                return $file->getError();
            }
        }
    }

    public function hkcompany()
    {
        if(Request::instance()->isPost()){
            $request = Request::instance();
            $data = $request->post();
            // 获取表单上传文件 例如上传了001.jpg
            $file = request()->file('file_image');
            if($file){
                $data['file_image'] = $this->upload($file);
            }
            print_r($data);die;
            $data['create_time'] = time();
            $res = Db::table('fin_product_copy')->insert($data);
            if($res){
                $this->success("您的信息已经提交成功，稍后会有专员联系您",url('Jindex/index'));
            }else{
                $this->error("信息有误，请重新提交",8);
            }
        }
        return $this->fetch();
    }

    public function hkpersonal()
    {
        if(Request::instance()->isPost()){
            $request = Request::instance();
            $data = $request->post();
            // 获取表单上传文件 例如上传了001.jpg
            $file = request()->file('file_image');
            if($file){
                $data['file_image'] = $this->upload($file);
            }
            $data['create_time'] = time();
            $res = Db::table('fin_product_copy')->insert($data);
            if($res){
                $this->success("您的信息已经提交成功，稍后会有专员联系您",url('Jindex/index'));
//                $this->redirect("http://www.zgxmall.com/cwap/cwap_product_detail.html?gid=3833");
            }else{
                $this->error("信息有误，请重新提交",8);
            }
        }
        return $this->fetch();
    }


}
