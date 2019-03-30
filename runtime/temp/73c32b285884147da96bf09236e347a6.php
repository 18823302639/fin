<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"/www/wwwroot/finance/public/../application/index/view/index/index.html";i:1552386986;s:60:"/www/wwwroot/finance/application/index/view/public/meta.html";i:1552361986;s:62:"/www/wwwroot/finance/application/index/view/public/button.html";i:1552375917;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="/static/H-ui.admin/static/h-ui/css/H-ui.min.css">
<link rel="stylesheet" href="/static/css/style.css">
<link href="/static/H-ui.admin/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div class="container-fluid finance-body" style="padding-bottom:50px;">

    <div class="row hui-header">
        <div class="col-xs-12">
            <div style="width:100%;height: 55px;background: url('/static/images/xslogin.jpg')no-repeat center top;background-size: 100%;"></div>
        </div>
    </div>
    <div class="row fina-ones">
        <a href="http://www.zgxmall.com/cwap/">
            <img style="width:100%;" src="/static/images/xg_banner.jpg" alt="">
        </a>
    </div>

    <div class="row fina-toos">
        <div class="col-xs-12">
            <p class="hui-mina mt-10 text-c"> 在港注册公司优势</p>
            <div class="col-xs-6">
                <p>1、外汇收支自由</p>
            </div>
            <div class="col-xs-6">
                <p>2、提升品牌形象</p>
            </div>
            <div class="col-xs-6">
                <p>3、公司命名自由</p>
            </div>
            <div class="col-xs-6">
                <p>4、税收优惠</p>
            </div>
        </div>

    </div>

    <div class="row fina-threes text-c">
        <div class="col-xs-6 mt-15">
            <a href="<?php echo url('Index/hongk'); ?>">
                <div class="thumbnail">
                    <p>政府授牌商务<br>秘书公司为您服务</p>
                </div>
            </a>
        </div>
        <div class="col-xs-6 mt-15">
            <a href="<?php echo url('Index/hongk'); ?>">
                <div class="thumbnail">
                    <p>在港实地办公<br>可提供地址挂靠</p>
                </div>
            </a>
        </div>
        <div class="col-xs-6 mt-15">
            <a href="<?php echo url('Index/hongk'); ?>">
                <div class="thumbnail">
                    <p class="min-a">最快当天拿照</p>
                </div>
            </a>
        </div>
        <div class="col-xs-6 mt-15">
            <a href="<?php echo url('Index/hongk'); ?>">
                <div class="thumbnail">
                    <p class="min-a">VIP通道办理</p>
                </div>
            </a>
        </div>
    </div>

    <div class="row fina-ones text-c mt-15">
        <div class="col-xs-6">
            <a href="https://zgxjt.udesk.cn/im_client/?web_plugin_id=44253" class="btn btn-default  radius">点击咨询</a>
        </div>
        <div class="col-xs-6">
            <a href="<?php echo url('Index/hongk'); ?>" class="btn  btn-danger radius">立即办理</a>
        </div>
    </div>

</div>

<style>
    .nav-button {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1030;
        padding: 0px 15px;
        background: #f5f5f6;
    }

    .nav-button .col-xs-4 {
        padding: 13px 0px 5px;
        border: 1px solid #ccc;
        line-height: 19px;
    }

    .nav-button .col-xs-4:nth-last-child(1) {
        border-left: 0px solid red;
    }

    .nav-button .col-xs-4:nth-last-child(2) {
        padding-left: 5px;
    }

    .nav-button .col-xs-4:nth-last-child(3) {
        border-right: 0px solid red;
    }

    .nav-button .col-xs-4 div {
        text-align: center;
    }

    .nav-button i {
        font-size: 26px;
    }
</style>
<div class="nav-button ">

    <div class="row text-c">
        <a href="<?php echo url('Index/index'); ?>">
            <div class="col-xs-4">
                <i class="Hui-iconfont Hui-iconfont-home2"></i>
                <div class="but-left">
                    首页
                </div>
            </div>
        </a>
        <a href="https://zgxjt.udesk.cn/im_client/?web_plugin_id=44253">
            <div class="col-xs-4">
                <i class="Hui-iconfont Hui-iconfont-kefu"></i>
                <div class="but-cen">
                    客服
                </div>
            </div>
        </a>
        <a href="http://www.zgxmall.com">
            <div class="col-xs-4">
                <i class="Hui-iconfont Hui-iconfont-avatar2"></i>
                <div class="but-right">
                    商城
                </div>
            </div>
        </a>
    </div>

</div>


</body>
</html>