<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\myphp_www\WWW\finance\public/../application/index\view\jindex\index.html";i:1553581358;s:64:"D:\myphp_www\WWW\finance\application\index\view\public\meta.html";i:1552361986;s:66:"D:\myphp_www\WWW\finance\application\index\view\public\button.html";i:1552375917;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>银行贷款首页--中港星</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="/static/H-ui.admin/static/h-ui/css/H-ui.min.css">
<link rel="stylesheet" href="/static/css/style.css">
<link href="/static/H-ui.admin/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
    <style>
        .fina-threes .thumbnail {
            box-shadow: 3px 3px 3px #ccc;
            width: 100%;
            line-height: 28px;
            background: #fd7635;
            color: #fff;
        }
        .fina-threes .thumbnail p.min-a {
            font-size:22px;
        }
    </style>
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
            <img style="width:100%;" src="/static/images/je_banner.jpg" alt="">
        </a>
    </div>

    <div class="row fina-toos">
        <div class="col-xs-12">
            <p class="hui-mina mt-10 text-c">平安数字金融</p>
            <div class="col-xs-6">
                <p>1、条件低  </p>
            </div>
            <div class="col-xs-6">
                <p>2、贷款金额高</p>
            </div>
            <div class="col-xs-6">
                <p>3、审核速度快</p>
            </div>
            <div class="col-xs-6">
                <p>4、放款迅速</p>
            </div>
        </div>

    </div>

    <div class="row fina-threes text-c" style="padding-bottom:15px;">
        <p class="hui-mina mt-10 text-c" style="font-size: 1.2rem;line-height: 28px;font-weight:600"> 平安金融贷</p>
        <div class="col-xs-6 mt-15">
            <a href="<?php echo url('Jindex/hongk'); ?>">
                <div class="thumbnail">
                    <p class="min-a">平台大</p>
                </div>
            </a>
        </div>
        <div class="col-xs-6 mt-15">
            <a href="<?php echo url('Jindex/hongk'); ?>">
                <div class="thumbnail">
                    <p class="min-a">贷款方式多</p>
                </div>
            </a>
        </div>
        <div class="col-xs-6 mt-15">
            <a href="<?php echo url('Jindex/hongk'); ?>">
                <div class="thumbnail">
                    <p class="min-a">安全保障</p>
                </div>
            </a>
        </div>
        <div class="col-xs-6 mt-15">
            <a href="<?php echo url('Jindex/hongk'); ?>">
                <div class="thumbnail">
                    <p class="min-a">资金实力雄厚 </p>
                </div>
            </a>
        </div>
    </div>

    <div class="row fina-ones text-c mt-15">
        <div class="col-xs-6">
            <a href="https://zgxjt.udesk.cn/im_client/?web_plugin_id=44253" class="btn btn-default  radius">点击咨询</a>
        </div>
        <div class="col-xs-6">
            <a href="<?php echo url('Jindex/hongk'); ?>" class="btn  btn-danger radius">立即办理</a>
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