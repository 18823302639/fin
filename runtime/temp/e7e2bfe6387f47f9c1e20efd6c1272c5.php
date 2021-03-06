<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\myphp_www\WWW\finance\public/../application/index\view\fina\index.html";i:1553938858;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="Bookmark" href="/favicon.ico">
    <link rel="Shortcut Icon" href="/favicon.ico"/>
    <link rel="stylesheet" href="/static/css/style.css">
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/static/H-ui.admin/lib/html5shiv.js"></script>
    <script type="text/javascript" src="/static/H-ui.admin/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/static/H-ui.admin/static/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="/static/H-ui.admin/static/h-ui.admin/css/H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="/static/H-ui.admin/lib/Hui-iconfont/1.0.8/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="/static/H-ui.admin/static/h-ui.admin/skin/default/skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="/static/H-ui.admin/static/h-ui.admin/css/style.css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="/static/H-ui.admin/lib/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
</head>
<body>

<div class="container-fluid loan">
    <div class="row">

        <div class="col-xs-12">

            <form id="loan_form"  >
                <div class="mt-30 skin-minimal">
                    <p>1. 请问您的年龄是否满足25岁以上？</p>
                    <div class="radio-box">
                        <input type="radio" id="loan_age_1" name="loan_age" value="1">
                        <label for="loan_age_1">是</label>
                    </div>
                    <div class="radio-box">
                        <input type="radio" id="loan_age_2" name="loan_age" value="0">
                        <label for="loan_age_2">否</label>
                    </div>
                </div>
                <div class="mt-30 skin-minimal">
                    <p>2. 请问您是企业法人或是股东吗？</p>
                    <div class="radio-box">
                        <input type="radio" id="loan_boss_1" name="loan_boss" value="1">
                        <label for="loan_boss_1">是</label>
                    </div>
                    <div class="radio-box">
                        <input type="radio" id="loan_boss_2" name="loan_boss" value="0">
                        <label for="loan_boss_2">否</label>
                    </div>
                </div>
                <div class="mt-30 skin-minimal">
                    <p>3. 请问您的企业是否已经满足2年以上？</p>
                    <div class="radio-box">
                        <input type="radio" id="loan_boss_age_1" name="loan_boss_age" value="1">
                        <label for="loan_boss_age_1">是</label>
                    </div>
                    <div class="radio-box">
                        <input type="radio" id="loan_boss_age_2" name="loan_boss_age" value="0">
                        <label for="loan_boss_age_2">否</label>
                    </div>
                </div>
                <div class="mt-30 skin-minimal">
                    <p>4. 请问公司近期是否有变更企业法人及一级股东信息？</p>
                    <div class="radio-box">
                        <input type="radio" id="loan_change_boss_1" name="loan_change_boss" value="1" >
                        <label for="loan_change_boss_1">是</label>
                    </div>
                    <div class="radio-box">
                        <input type="radio" id="loan_change_boss_2" name="loan_change_boss" value="0">
                        <label for="loan_change_boss_2">否</label>
                    </div>
                </div>
                <div class="mt-30 skin-minimal">
                    <p>5. 请问企业年报税销售额是否达到200万以上并且无税务逾期和零申报情况？</p>
                    <div class="radio-box">
                        <input type="radio" id="loan_overdue_1" name="loan_overdue" value="1">
                        <label for="loan_overdue_1">是</label>
                    </div>
                    <div class="radio-box">
                        <input type="radio" id="loan_overdue_2" name="loan_overdue" value="0">
                        <label for="loan_overdue_2">否</label>
                    </div>
                </div>
                <div class="mt-30 skin-minimal">
                    <p>6. 当前是否是无小额贷款，无信用逾期</p>
                    <div class="radio-box">
                        <input type="radio" id="loan_overdue_credit_1" name="loan_overdue_credit" value="1">
                        <label for="loan_overdue_credit_1">是</label>
                    </div>
                    <div class="radio-box">
                        <input type="radio" id="loan_overdue_credit_2" name="loan_overdue_credit" value="0" >
                        <label for="loan_overdue_credit_2">否</label>
                    </div>
                </div>
                <div class="mt-30 text-c">
                    <button type="submit" class="btn btn-danger">提交</button>
                </div>

            </form>
        </div>
    </div>

</div>


<script type="text/javascript" src="/static/H-ui.admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/H-ui.admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/H-ui.admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/H-ui.admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="/static/H-ui.admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/H-ui.admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/H-ui.admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>

<script>
    $(function () {
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });
        $("#loan_form").validate({
            errorPlacement: function(error, element) {
                if (element.is(":checkbox") || element.is(":radio")) {
                    error.appendTo(element.parent().parent().parent());
                } else {
                    error.insertAfter(element);
                }
            },
            onkeyup : false,
            rules: {
                loan_age: {
                    required:true
                },
                loan_boss: {
                    required: true
                },
                loan_boss_age: {
                    required: true
                },
                loan_change_boss: {
                    required: true
                },
                loan_overdue: {
                    required: true
                },
                loan_overdue_credit: {
                    required: true
                }
            },
            message: {
                loan_age: {
                    required: "请填写此项"
                },
                loan_boss: {
                    required: "请填写此项"
                },
                loan_boss_age: {
                    required: "请填写此项"
                },
                loan_change_boss: {
                    required: "请填写此项"
                },
                loan_overdue: {
                    required: "请填写此项"
                },
                loan_overdue_credit: {
                    required: "请填写此项"
                }

            },
            submitHandler: function () {
                var data = $("#loan_form").serializeArray();
                console.log(data);
                // if(){
                //
                // }
                layer.confirm("恭喜您！<br>根据您录入的条件您的公司符合申请企业税金贷！<br>是否需要测测企业的额度？",{
                    btn:["确定","取消"]
                    },function(){
                        layer.msg('的确很重要', {icon: 1});
                    },function(){
                        layer.msg('也可以这样', {
                            time: 20000, //20s后自动关闭
                            btn: ['明白了', '知道了']
                        });
                    }
                );
                /*$.ajax({
                    url:"<?php echo url(); ?>",
                    type:"POST",
                    dataType:"JSON",
                    data:data,
                    success: function(res){
                        console.log(res)
                        if(res == true){
                            layer.msg("提交成功");
                            $("#form_course_add input").val("");
                        }else{
                            layer.msg(res);
                        }
                    },
                    error: function(res){
                        console.log(res)
                        layer.msg("提交失败");
                    }
                });*/
            }



        })

    });



</script>
</body>
</html>