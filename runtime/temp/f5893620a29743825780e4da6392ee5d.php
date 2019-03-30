<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"/www/wwwroot/finance/public/../application/admin/view/home/product_brand_list.html";i:1552439613;s:61:"/www/wwwroot/finance/application/admin/view/Public/_meta.html";i:1551859606;s:63:"/www/wwwroot/finance/application/admin/view/Public/_footer.html";i:1551859723;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/static/H-ui.admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/static/H-ui.admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/H-ui.admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/H-ui.admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/H-ui.admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/H-ui.admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/H-ui.admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/static/H-ui.admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>品牌管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span
        class="c-gray en">&gt;</span> 品牌管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px"
                                              href="javascript:location.replace(location.href);" title="刷新"><i
        class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
    <div class="text-c">

    </div>
    <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l"><a href="javascript:;" onclick="datadel()"
                                                               class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a></span>
        <span class="r">共有数据：<strong>54</strong> 条</span></div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-bg table-sort">
            <thead>
            <tr class="text-c">
                <th width="25"><input type="checkbox" name="" value=""></th>
                <th width="70">产品名称</th>
                <th width="120">公司名称</th>
                <th width="80">是否开户</th>
                <th width="80">联系人</th>
                <th width="120">联系电话</th>
                <th width="120">时间</th>
                <th width="100">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if($arr == ''): ?>
                <tr class="text-c">
                    还没有任何数据提交
                </tr>
            <?php else: if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <tr class="text-c">
                    <td><input name="" type="checkbox" value=""></td>
                    <td>
                        <?php if($v['category_id'] == 1): ?>
                        香港公司开户
                        <?php elseif($v['category_id'] == 2): ?>
                        水牌展示
                        <?php elseif($v['category_id'] == 3): ?>
                        经营范围
                        <?php elseif($v['category_id'] == 4): ?>
                        SCR备存
                        <?php endif; ?>
                    </td>
                    <td class="text-l"><?php echo $v['company_name']; ?></td>
                    <td class="text-l">
                        <?php if($v['open_account'] == 0): ?>
                        开户
                        <?php else: ?>
                        不开户
                        <?php endif; ?>
                    </td>
                    <td class="text-l"><?php echo $v['category_name']; ?></td>
                    <td class="text-l"><?php echo $v['category_tel']; ?></td>
                    <td class="text-l"><?php echo $v['create_time']; ?></td>
                    <td class="f-14 product-brand-manage"><a style="text-decoration:none"
                                                             onClick="product_brand_edit('品牌编辑','codeing.html','1')"
                                                             href="javascript:;" title="编辑"><i
                            class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5"
                                                                     onClick="active_del(this,'10001')" href="javascript:;"
                                                                     title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
                    </td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript" src="/static/H-ui.admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/H-ui.admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/H-ui.admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/H-ui.admin/static/h-ui.admin/js/H-ui.admin.js"></script>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
    $('.table-sort').dataTable({
        "aaSorting": [[1, "desc"]],//默认第几个排序
        "bStateSave": true,//状态保存
        "aoColumnDefs": [
            //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
            {"orderable": false, "aTargets": [0, 6]}// 制定列不参与排序
        ]
    });
</script>
</body>
</html>