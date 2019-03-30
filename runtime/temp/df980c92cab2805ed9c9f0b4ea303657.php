<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:70:"/www/wwwroot/finance/public/../application/index/view/index/hongk.html";i:1552388249;s:60:"/www/wwwroot/finance/application/index/view/public/meta.html";i:1552361986;s:62:"/www/wwwroot/finance/application/index/view/public/header.html";i:1552387642;s:60:"/www/wwwroot/finance/application/index/view/public/cent.html";i:1552387129;s:62:"/www/wwwroot/finance/application/index/view/public/button.html";i:1552375917;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>香港公司注册 -- 在线办理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="/static/H-ui.admin/static/h-ui/css/H-ui.min.css">
<link rel="stylesheet" href="/static/css/style.css">
<link href="/static/H-ui.admin/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
    <style>
        .hongk{color:#fff;background-color:#dd514c; border-color:#dd514c}
        .hongk:hover,
        .hongk:focus,
        .hongk:active,
        .hongk.active{color:#fff;background-color:#c62b26;border-color:#c62b26}

    </style>
</head>
<body>

<style>
    .scrtop {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1030;
        padding: 0px 15px;
    }
</style>
<div class="row scrtop" >
    <div class="col-xs-12 text-l">
        <i style="font-size:1.3rem;" onclick="javascript:history.back(-1);" class="Hui-iconfont Hui-iconfont-arrow2-left"></i>
    </div>
</div>
<div class="container-fluid details-body finance-body">

    <div class="row hui-header text-c">
        <div class="col-xs-12">
            <p class="mt-0">香港公司注册在线办理</p>
            <div class="line "></div>
        </div>
    </div>

    <div class="row hui-ones text-c">
    <div class="col-xs-6 ">
        <div class="thumbnail">
            <a class="btn btn-primary radius box-shadow hongk" href="<?php echo url('Index/hongk'); ?>">香港公司注册</a>
        </div>
    </div>
    <div class="col-xs-6">
        <div class="thumbnail">
            <a class="btn btn-primary radius box-shadow hkcompany" href="<?php echo url('Index/hkcompany'); ?>">经营范围</a>
        </div>
    </div>
    <div class="col-xs-6">
        <div class="thumbnail">
            <a class="btn btn-primary radius box-shadow hkpersonal" href="<?php echo url('Index/hkpersonal'); ?>">水牌展示</a>
        </div>
    </div>
    <div class="col-xs-6">
        <div class="thumbnail">
            <a class="btn btn-primary radius box-shadow scr_remarks" href="<?php echo url('Index/scr_remarks'); ?>">SCR备存</a>
        </div>
    </div>
</div>

    <div class="row hui-toos">
        <div class="col-xs-12"><!--action="hongk.html" method="post"-->
            <form action="<?php echo url('Index/hongk'); ?>" method="post"  class="form form-horizontal" id="signupForm">
                <div class="row cl">
                    <input type="hidden" name="category_id" value="1">
                    <label class="form-label col-xs-3 col-sm-3">公司名称：</label>
                    <div class="formControls col-xs-9 col-sm-9">
                        <input type="text" class="input-text" name="company_name" autocomplete="off" placeholder="请输入公司名称" required="required" >
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-3 col-sm-3">是否开户：</label>
                    <div class="formControls">
                        <div class="radio-box">
                            <input type="radio" id="radio-1" name="open_account" checked value="0">
                            <label for="radio-1">是</label>
                        </div>
                        <div class="radio-box">
                            <input type="radio" id="radio-2" name="open_account"  value="1">
                            <label for="radio-2">否 </label>
                        </div>
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-3 col-sm-3">联系人：</label>
                    <div class="formControls col-xs-9 col-sm-9">
                        <input type="text" path="category_name" required="required" class="input-text" name="category_name"  placeholder="请输入您的姓名">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-3 col-sm-3">联系电话：</label>
                    <div class="formControls col-xs-9 col-sm-9">
                        <input type="tel" class="input-text" name="category_tel"  required="required" placeholder="请输入您的联系方式">
                    </div>
                </div>
                <div class="row cl">
                    <div class="formControls">
                        <div class="radio-box">
                            <input type="checkbox" id="checkbox-1"  required="required" >
                            <label for="checkbox-1"  >我已确认提供的个人信息准确无误，并以此作为项目办理的有效信息。</label>
                        </div>
                    </div>
                </div>
                <div class="row cl">
                    <div class="formControls">
                        <div class="radio-box">
                            <input type="checkbox" id="checkbox-2"  checked required="required">
                            <label for="checkbox-2" class="checkout" >请详细阅读并确认《中港星企业服务商城服务条款》。 </label>
                        </div>
                    </div>
                </div>
                <div class="row cl text-c" style="margin-top:25px;">
                    <div class="col-xs-12 col-sm-12 ">
                        <input style="height:100%;padding:8px 35px;"  class="btn btn-danger radius goHongk" type="submit"  value="立即办理">
                    </div>
                </div>
            </form>
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
<script src="/static/H-ui.admin/lib/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript" src="/static/H-ui.admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/H-ui.admin/static/h-ui/js/H-ui.js"></script>
<script>

    $(function(){
        $(".checkout").click(function(){
            layer.open({
                title: '中港星商城平台服务协议'
                ,content: "中港星商城平台服务协议\n" +
                    "\n" +
                    "中港星（以下简称“本网站”）依据《中港星商城平台服务协议》（以下简称“本协议”）的规定提供服务，请您仔细阅读本注册协议，同意本协议并接受全部条款下注册成为会员，本协议具有合同效力。您点击“立即注册”按钮后，本协议即构成对双方有约束力的法律文件。\n" +
                    "\n" +
                    "若您已经注册为本网站用户，即表示您已充分阅读、理解并同意自己与本网站订立本协议，且您自愿受本协议的条款约束。届时您不应以未阅读本协议的内容或者未获得中港星对您问询的解答等理由，主张本协议无效，或要求撤销本协议。\n" +
                    "\n" +
                    "本网站有权随时变更本协议并在本网站上予以公告。经修订的条款一经在本网站的公布后，立即自动生效。如您不同意相关变更，必须停止使用本网站。本协议内容包括协议正文及所有中港星网已经发布的各类规则。所有规则为本协议不可分割的一部分，与本协议正文具有同等法律效力。一旦您继续使用本网站，则表示您已接受并自愿遵守经修订后的条款。\n" +
                    "\n" +
                    " \n" +
                    "\n" +
                    "一、会员注册\n" +
                    "\n" +
                    "1.    用户资格\n" +
                    "\n" +
                    "您必须是具备完全民事权利能力和完全民事行为能力的自然人，或者是具备合法经营资格的法人或其他组织。若您不具备前述主体资格，则您及您的监护人应承担因此而导致的一切后果，且本网站有权注销(永久冻结)您的本网站账户，并向您及您的监护人索偿。\n" +
                    "\n" +
                    "2.    会员注册\n" +
                    "\n" +
                    "(1)       在您登录本网站商城，阅读并同意本协议并完成全部注册程序后或以其他本公司允许的方式实际使用本网站服务时，您即成为本网站会员。\n" +
                    "\n" +
                    "(2)       注册时应自行向本网站商城提供注册资料（包括但不限于电子邮件地址、联系电话、联系地址、邮政编码等联系方式），您需保证提供的注册资料真实、准确、完整、合法有效，您注册资料如有变动的，应及时更新注册资料。如果您提供的注册资料不合法、不真实、不准确、不详尽，导致您在使用本网站服务过程中产生任何损失或增加费用的，应由您完全独自承担；如有合理理由怀疑您提供的资料错误、不实、过时或不完整的，本网站有权向您发出询问及要求改正的通知，并有权直接做出删除相应资料的处理，直至中止、终止对您提供部分或全部本网站上商城服务。本网站对此不承担任何责任，您将承担因此产生的任何直接或间接支出。\n" +
                    "\n" +
                    "3.    会员账户和密码\n" +
                    "\n" +
                    "在您签署本协议，完成会员注册程序或以其他本网站所允许的方式实际使用本网站服务时，本网站为您提供唯一编号的本网站会员账户(以下亦称账户)。您可以对账户设置会员名和密码，通过该会员名密码或与该会员名密码关联的其它会员名密码登陆本网站。您设置的会员名不得侵犯或涉嫌侵犯他人合法权益。当您的账户设立完成后，您应当在此后90日内使用您的会员名和密码登陆本网站。逾期未登录的，本公司有权终止向您提供本网站服务，注销您的账户。账户注销后，相应的会员名将开放给任意会员注册登记使用。您应对您的账户(会员名)和密码的安全，以及对通过您的账户(会员名)和密码实施的行为负责。除非有法律规定或司法裁定，且征得本网站的同意，否则，账户 (会员名)和密码不得以任何方式转让、赠与或继承(与账户相关的财产权益除外)。如果发现任何人不当使用您的账户或有任何其他可能危及您的账户安全的情形时，您应当立即以有效方式通知本网站，要求本网站暂停相关服务。请您理解本网站对您的请求采取相应措施，在采取措施前已经产生的后果(包括但不限于您的任何损失)不承担任何责任。\n" +
                    "\n" +
                    " \n" +
                    "\n" +
                    "二、用户的权利和义务\n" +
                    "\n" +
                    "1.         用户有权根据本协议及本网站发布的相关规则，利用本网站发布需求信息、查询用户信息、邀请关注好友、参与需求投标，在本网站社区及相关产品发布信息、上传服务图片，参加本网站的有关活动及有权享受本网站提供的其他有关资讯及信息服务。\n" +
                    "\n" +
                    "2.         用户须自行负责自己的用户账号和密码，且须对在用户账号密码下发生的所有活动（包括但不限于发布需求信息、网上点击同意各类协议、规则、参与需求投标等）承担责任。用户有权根据需要更改登录和账户提现密码。因用户的过错导致的任何损失由用户自行承担，该过错包括但不限于：不按照交易提示操作，未及时进行交易操作，遗忘或泄漏密码，密码被他人破解，用户使用的计算机被他人侵入。\n" +
                    "\n" +
                    "3.         用户应当保证在本网站消费过程中遵守诚实信用原则，遵守国家法律和本协议，不扰乱网上交易的正常秩序。不得侵犯他人知识产权或其他合法权益的信息，不得违背社会公共利益或公共道德，不得违反本网站的相关规定。\n" +
                    "\n" +
                    "4.         用户在成为本网站商城的成交客户后，可参加本网站举办的各种促销活动，详情请见本网站在网站上公布的活动规则。各项活动的活动规则由本网站提供，该规则连同与该规则相关的条款和条件，构成用户与本网站之间的完整协议。接受本协议，即表明接受促销活动中的条款和条件。\n" +
                    "\n" +
                    "5.         用户享有言论自由权利；并拥有适度修改、删除自己发表的文章的权利。本站保有删除站内各类不符合法律政策或不真实的信息内容而无须通知用户的权利。用户须对自己在网上的言论和行为承担法律责任。\n" +
                    "\n" +
                    "6.         用户在本网站交易中应当遵守诚实信用原则，不得以干预或操纵发布需求等不正当竞争方式扰乱网上交易秩序，不得从事与网上交易无关的不当行为。\n" +
                    "\n" +
                    "7.         用户不应采取不正当手段（包括但不限于虚假需求、互换好评等方式）提高自身或他人信用度，或采用不正当手段恶意评价其他用户，降低其他用户信用度。\n" +
                    "\n" +
                    "8.         用户不得违反《银行卡业务管理办法》使用银行卡，或利用信用卡套取现金（以下简称套现）；用户不得盗刷他人银行卡；用户不得明知或应知他人可能盗刷银行卡而与对方进行交易。\n" +
                    "\n" +
                    "9.         用户承诺自己在使用本网站实施的所有行为遵守法律、法规、行政规章和本网站的相关规定以及各种社会公共利益或公共道德。如有违反导致任何法律后果的发生，用户将以自己的名义独立承担相应的法律责任。\n" +
                    "\n" +
                    "10.     用户在本网站网上交易过程中如与其他用户因交易产生纠纷，可以请求本网站从中予以协调处理。用户如发现其他用户有违法或违反本协议的行为，可以向本网站举报。\n" +
                    "\n" +
                    "11.     除本网站另有规定外，用户应当自行承担因交易产生的相关费用，并依法纳税。\n" +
                    "\n" +
                    "12.     未经本网站书面允许，用户不得将本网站的任何资料以及在交易平台上所展示的任何信息作商业性利用（包括但不限于以复制、修改、翻译等形式制作衍生作品、分发或公开展示）。\n" +
                    "\n" +
                    "13.     不得使用任何装置、软件或例行程序干预或试图干预本网站网上商城的正常运作或正在本网站网上商城上进行的任何交易、活动；不得采取任何将导致不合理的庞大数据负载加诸本网站网上商城网络设备的行动。 \n" +
                    "\n" +
                    "14.     用户有权在同意本网站相关规则的前提下享受消费者保障服务（包括但不限于诚信保证、保证完成、保证原创、保证提供源码、保证推广效果、三个月维护、免费修改等）。\n" +
                    "\n" +
                    "15.     用户同意接收来自本网站的信息，包括但不限于活动信息、交易信息、促销信息等。\n" +
                    "\n" +
                    " \n" +
                    "\n" +
                    "三、中港星的权利和义务\n" +
                    "\n" +
                    "1.         本网站有义务在现有技术水平的基础上努力确保整个网上交流平台的正常运行，尽力避免服务中断或将中断时间限制在最短时间内，保证用户网上交流活动的顺利进行。\n" +
                    "\n" +
                    "2.         本网站有义务对用户在注册使用本网站信息平台中所遇到的与交易或注册有关的问题及反映的情况及时作出回复。\n" +
                    "\n" +
                    "3.         本网站有权对用户的注册资料进行审查，对存在任何问题或怀疑的注册资料，本网站有权发出通知询问用户并要求用户做出解释、改正。\n" +
                    "\n" +
                    "4.         用户因在本网站网上交易与其他用户产生纠纷的，用户将纠纷告知本网站，或本网站知悉纠纷情况的，经审核后，本网站有权通过电子邮件及电话联系向纠纷双方了解纠纷情况，并将所了解的情况通过电子邮件互相通知对方；用户通过司法机关依照法定程序要求本网站提供相关资料，本网站将积极配合并提供有关资料。\n" +
                    "\n" +
                    "5.         因网上信息平台的特殊性，本网站不承担对所有用户的交易行为以及与交易有关的其他事项进行事先审查的义务，但如发生以下情形，本网站有权无需征得用户的同意限制用户的活动、向用户核实有关资料、发出警告通知、暂时中止、无限期中止及拒绝向该用户提供服务：\n" +
                    "\n" +
                    "(1)       用户以非自然人名义进行认证之后认证主体自行注销或者经有权机关吊销或撤销的；\n" +
                    "\n" +
                    "(2)       用户违反本协议或因被提及而纳入本协议的相关规则；\n" +
                    "\n" +
                    "(3)       存在用户或其他第三方通知本网站，认为某个用户或具体交易事项存在违法或不当行为，并提供相关证据，而本网站无法联系到该用户核证或验证该用户向本网站提供的任何资料；\n" +
                    "\n" +
                    "(4)       存在用户或其他第三方通知本网站，认为某个用户或具体交易事项存在违法或不当行为，并提供相关证据。本网站以普通非专业人员的知识水平标准对相关内容进行判别，可以明显认为这些内容或行为可能对他方或本网站造成财务损失或承担法律责任。\n" +
                    "\n" +
                    "6.         根据国家法律、法规、行政规章规定、本协议的内容和本网站所掌握的事实依据，可以认定该用户存在违法或违反本协议行为以及在本网站交易平台上的其他不当行为，本网站有权无需征得用户的同意在本网站交易平台及所在网站上以网络发布形式公布该用户的违法行为，并有权随时作出删除相关信息、终止服务提供等处理。\n" +
                    "\n" +
                    "7.         本网站依据本协议及相关规则，可以冻结、使用、先行赔付、退款、处置用户缴存并冻结在本网站账户内的资金。因违规而被封号的用户账户中的资金在按照规定进行处置后尚有余额的，该用户可申请提现。\n" +
                    "\n" +
                    "8.         本网站有权在不通知用户的前提下，删除或采取其他限制性措施处理下列信息：包括但不限于以规避费用为目的；以炒作信用为目的；存在欺诈等恶意或虚假内容；与网上交易无关或不是以交易为目的；存在恶意竞价或其他试图扰乱正常交易秩序因素；违反公共利益或可能严重损害本网站和其他用户合法利益。\n" +
                    "\n" +
                    " \n" +
                    "\n" +
                    "四、中港星服务范围和责任范围\n" +
                    "\n" +
                    "1.         本网站商城上的服务价格、数量等服务信息随时都有可能发生变动，本站不作特别通知。由于本网站上服务信息的数量极其庞大，虽然本站会尽最大努力保证用户所浏览服务信息的准确性，但由于众所周知的互联网技术因素等客观原因存在，本网站网页显示的信息可能会有一定的滞后性或差错，对此情形用户知悉并理解。\n" +
                    "\n" +
                    "2.         订单交易\n" +
                    "\n" +
                    "(1)       用户在订单交易时，请仔细确认所购服务的名称、价格、数量、联系人、电话、联系人地址等信息。联系人地址与用户本人不一致的，联系人的行为和意思表示视为用户的行为和意思表示，用户应对联系人的行为及意思表示的法律后果承担连带责任。如果联系人在文件配送过程中要求变更接收地址的，本网站视同已经过用户的同意。\n" +
                    "\n" +
                    "(2)       由于市场变化及各种以合理商业努力难以控制的因素的影响，本站无法保证用户提交的订单信息中希望购买的商品本网站均能完成服务；如用户拟购买的商品，无法提供，用户和本站均有权取消订单。\n" +
                    "\n" +
                    "(3)      本网站将尽量保证服务信息及可获性的准确，但仍可能因人员操作、系统问题及其他不可抗原因产生错误，在此情况下本网站将按正确的信息和用户进行确认修改，用户有权取消订单或者按照正确的信息完成交易。\n" +
                    "\n" +
                    "3.         付款与退款\n" +
                    "\n" +
                    "(1)       付款方式将在本网站商城予以公示。用户应在确认订单时，选择付款方式，并严格按照已选择的方式付款。用户未能按照所选择的方式或所要求的时间完成付款的，本网站有权单方取消订单。\n" +
                    "\n" +
                    "(2)       退款方式将在本网站网上商城予以公示。因用户服务内容的修改而产生的退款等现金款项，本网站将退回至用户，退回方式视支付方式的不同而不同。用户应严格依据退款方式及退款周期收回退款。\n" +
                    "\n" +
                    "4.         服务失效\n" +
                    "\n" +
                    "若用户在本网站网上商城公布的服务优惠活动截止时间之后提交的订单，用户和本网站皆有权取消该订单，或者经过协商采用其他方式进行订单处理。本网站也可对用户的此需求进行登记，本网站会尽最大努力在最快时间内满足用户的购买需求，当下次促销活动上架时，本网站将第一时间通过邮件、短信或电话通知用户，方便用户进行购买。该登记并不做订单处理，不构成要约。\n" +
                    "\n" +
                    "5.         服务变更\n" +
                    "\n" +
                    "用户下单成功后，需要变更服务内容的，在不影响本协议正常执行的，本网站可为用户提供变更服务。本网站将针对服务类别的不同实行不同的变更政策和条件，用户在申请变更前应仔细阅读并理解，同时严格按照相关流程和要求完成变更。若该变更影响本协议正常执行的，用户应重新提交订单。\n" +
                    "\n" +
                    "6.         责任限制\n" +
                    "\n" +
                    "(1)       除非另有明确的书面说明,本网站商城及其所包含的或以其它方式通过本站提供给用户的全部信息、内容、材料、产品（包括软件）和服务，均是在“按现状”和“按现有”的基础上提供的。\n" +
                    "\n" +
                    "(2)       在法律法规所允许的限度内，因使用本网站网上商城服务而引起的任何损害或经济损失，本网站承担的全部责任均不超过用户所购买的与该索赔有关的服务价格。这些责任限制条款将在法律所允许的最大限度内适用，并在用户资格被撤销或终止后仍继续有效。\n" +
                    "\n" +
                    "(3)       除非法律法规明确要求，或出现以下情况，否则，本网站没有义务对所有用户的注册数据、交易行为以及与交易有关的其它事项进行事先审查：A、本网站有合理的理由认为特定用户及具体交易事项可能存在重大违法或违约情形；B、本网站有合理的理由认为用户在本网站网上商城的行为涉嫌违法或不当。\n" +
                    "\n" +
                    "(4)       用户了解并同意，本网站及本网站网上商城不对因下述任一情况而导致用户的任何损害赔偿承担责任，包括但不限于利润、商誉、使用、数据等方面的损失或其它无形损失的损害赔偿 (无论本网站及本网站网上商城是否已被告知该等损害赔偿的可能性) ：A、使用或未能使用本网站服务；B、第三方未经批准的使用用户的账户或更改用户的数据；C、用户对本网站服务的误解；D、任何非因本网站及本网站网上商城的原因而引起的与本网站服务有关的其它损失。\n" +
                    "\n" +
                    "7.         不担保原则\n" +
                    "\n" +
                    "(1)       除非另有明确的书面说明，本网站不对本站的运营及其包含在本网站上的信息、内容、材料、产品（包括软件）或服务作任何形式的、明示或默示的声明或担保（根据中华人民共和国法律另有规定的以外）。亦不对这些信息、内容、材料、产品（包括软件）和服务、或用户消费引起的任何损害承担责任（除非根据中华人民共和国法律应承担责任的以外），包括但不限于直接、间接或附带的惩罚性和结果性的损害赔偿。用户明确同意在使用本网站网上商城服务时自担风险。\n" +
                    "\n" +
                    "(2)       本网站不担保本站所包含的或以其它方式通过本站提供给用户的全部信息、内容、材料、产品（包括软件）和服务、其服务器或从本站发出的电子信件、信息没有病毒或其他有害成分。\n" +
                    "\n" +
                    "(3)       如因不可抗力或其它本站无法控制的原因使本站服务系统崩溃或无法正常使用导致网上交易无法完成或丢失有关的信息、记录等，本网站会合理地尽力协助处理善后事宜。\n" +
                    "\n" +
                    "8.         特别授权\n" +
                    "\n" +
                    "用户完全理解并不可撤销地授予本网站及其关联公司下列权利：\n" +
                    "\n" +
                    "(1)       一旦用户向本网站、本网站网上商城及（或）其关联公司作出任何形式的承诺，且相关公司已确认用户违反了该承诺，则本网站有权立即按用户的承诺或协议约定的方式对用户的账户采取限制措施，包括中止或终止向用户提供服务，并公示相关公司确认的用户的违约情况。用户了解并同意，本网站无须就相关确认与用户核对事实，或另行征得用户的同意，且本网站无须就此限制措施或公示行为向用户承担任何的责任。\n" +
                    "\n" +
                    "(2)       一旦用户违反本协议，或与本网站签订的其他协议的约定，本网站有权以任何方式通知本网站关联公司，要求其对用户的权益采取限制措施，包括但不限于将用户账户内的款项支付给本网站指定的对象，要求关联公司中止、终止对该用户提供部分或全部服务，且在其经营或实际控制的任何网站公示用户的违约情况。\n" +
                    "\n" +
                    " \n" +
                    "\n" +
                    "五、中港星知识产权\n" +
                    "\n" +
                    "1.         本网站及本网站所使用的任何相关软件、程序、内容，包括但不限于作品、图片、档案、资料、网站构架、网站版面的安排、网页设计、经由本网站或广告商向用户呈现的广告或资讯，均由本网站或其它权利人依法享有相应的知识产权，包括但不限于著作权、商标权、专利权或其它专属权利等，受到相关法律的保护。未经本网站或权利人明示授权，用户保证不修改、出租、出借、出售、散布本网站及本网站所使用的上述任何资料和资源，或根据上述资料和资源制作成任何种类产品。\n" +
                    "\n" +
                    "2.         本网站授予用户不可转移及非专属的使用权，使用户可以通过单机计算机使用本网站的目标代码（以下简称“软件”），但用户不得且不得允许任何第三方复制、修改、创作衍生作品、进行还原工程、反向组译，或以其它方式破译或试图破译源代码，或出售、转让“软件”或对“软件”进行再授权，或以其它方式移转“软件”之任何权利。用户同意不以任何方式修改“软件”，或使用修改后的“软件”。\n" +
                    "\n" +
                    "3.         用户不得经由非本网站所提供的界面使用本网站。\n" +
                    "\n" +
                    " \n" +
                    "\n" +
                    "六、保密约定\n" +
                    "\n" +
                    "（一）用户\n" +
                    "\n" +
                    "1.         用户保证在使用本网站过程中所获悉的属于本网站及他方的且无法自公开渠道获得的文件及资料（包括但不限于商业秘密、公司计划、运营活动、财务信息、技术信息、经营信息及其他商业秘密）予以保密。未经该资料和文件的原提供方同意，用户不得向第三方泄露该商业秘密的全部或者部分内容。但法律、法规、行政规章另有规定或者本网站关联公司因开展知识产权事务或双方为配合审计工作需提供本合同内容及其附件的除外。\n" +
                    "\n" +
                    "2.  前述商业秘密包括但不限于：注册商标或版权等知识产权的内容或技术信息以及关联信息、经营信息、营销计划、定价政策、不公开的财务资料、进货渠道、产销策略、涉及商业秘密的业务函等。\n" +
                    "\n" +
                    "（二）本网站\n" +
                    "\n" +
                    "1.         信息使用\n" +
                    "\n" +
                    "(1)       本网站不会向任何人出售或出借用户的个人或法人信息，除非事先得到用户得许可；\n" +
                    "\n" +
                    "(2)       本网站亦不允许任何第三方以任何手段收集、编辑、出售或者无偿传播用户的个人或法人信息。任何用户如从事上述活动，一经发现，本网站有权立即终止与该用户的服务协议，查封其账号。\n" +
                    "\n" +
                    "2.         信息披露\n" +
                    "\n" +
                    "用户的个人或法人信息将在下述情况下部分或全部被披露：\n" +
                    "\n" +
                    " \n" +
                    "\n" +
                    "(1)       经用户同意，向第三方披露；\n" +
                    "\n" +
                    "(2)       用户在使用本网站过程中涉及到知识产权类纠纷，有他方主张权利的，本网站在审核主张方提交的资料后认为披露用户信息有助于纠纷解决的；\n" +
                    "\n" +
                    "(3)       根据法律的有关规定，或者行政、司法机关的要求，向第三方或者行政、司法机关披露；\n" +
                    "\n" +
                    "(4)       若用户出现违反中国有关法律或者网站规定的情况，需要向第三方披露；\n" +
                    "\n" +
                    "(5)       为提供你所要求的产品和服务，而必须和第三方分享用户的个人或法人信息；\n" +
                    "\n" +
                    "(6)       为保护您、我们的其他用户或我们的关联方的合法权益，我们可能将您的个人信息用于预防、发现、调查以下事项：欺诈、危害安全、违法或违反与我们或其关联方协议、政策或规则的行为；\n" +
                    "\n" +
                    "(7)       在遵循隐私权保护以及其他相应的保密安全措施的前提下，允许我们将您的个人信息提供给相关合作方，让其根据我方指令处理相关信息；\n" +
                    "\n" +
                    "(8)       其它本网站根据法律或者网站规定认为合适的披露。\n" +
                    "\n" +
                    " \n" +
                    "\n" +
                    "若您不同意以上内容，请立即停止使用本网站服务。\n" +
                    "\n" +
                    "用户或者第三方申请本网站披露其他用户信息的，本网站有权视实际情况要求申请人出具申请书，申请书内容应包含申请披露的信息范围、用途及使用承诺等内容。\n" +
                    "\n" +
                    "3.         信息安全\n" +
                    "\n" +
                    "(1)       在使用本网站服务进行网上交易时，请用户妥善保护自己的个人或法人信息，仅在必要的情形下向他人提供；\n" +
                    "\n" +
                    "(2)       如果用户发现自己的个人或法人信息泄密，尤其是用户账户或“支付账户管理”账户及密码发生泄露，请用户立即联络本网站客服，以便我们采取相应措施。\n" +
                    "\n" +
                    " \n" +
                    "\n" +
                    "七、通知条款\n" +
                    "\n" +
                    "本协议项下本网站对于用户所有的通知均可通过网页公告、电子邮件、手机短信或常规的信函传送等方式进行；该通知于发送之日视为已送达收件人。\n" +
                    "\n" +
                    " \n" +
                    "\n" +
                    "八、免责条款\n" +
                    "\n" +
                    "当发生以下情况时协议可提前解除且协议双方均不承担责任：\n" +
                    "\n" +
                    "1.  由于法律、法规、政府有关规定的要求使本协议无法继续履行的；\n" +
                    "\n" +
                    "2.  由于订立本协议时所处的外部客观情况发生重大变化使得协议无法继续履行的；\n" +
                    "\n" +
                    "3.  由于战争、自然灾害和其它不可抗力而使协议无法继续履行的。以上所称之不可抗力意指不能预见、不能避免并不能克服的客观情况，包括但不限于罢工、暴动、法定疾病、黑客攻击、网络病毒、电信部门技术管制、政府行为或任何其它自然或人为造成的灾难等客观情况。\n" +
                    "\n" +
                    " \n" +
                    "\n" +
                    "九、本协议的中止、终止\n" +
                    "\n" +
                    "1. 在您购买的本网站服务委托项目完成后，本协议自动终止。\n" +
                    "\n" +
                    "2. 本协议内容经双方协商一致后可以变更、中止或提前解除。\n" +
                    "\n" +
                    "3. 乙方遇到不可抗力的因素无法提供本协议规定范围内服务项目。\n" +
                    "\n" +
                    "4. 用户有以下行为之一的，本网站有权单方终止协议：\n" +
                    "\n" +
                    "（1）从事违法经营的；\n" +
                    "\n" +
                    "（2）不缴纳服务费用，且乙方在30日内无法联系到用户的；\n" +
                    "\n" +
                    "（3）用户提供非真实或非法证件及资料，造成本网站无法履行服务的；\n" +
                    "\n" +
                    "5. 本网站开始提供本协议服务项目后，用户因自身原因，单方面提出终止本协议, 本网站有权扣除发生的成本费用以及本协议服务费用总额的20%（不低于500元）作为用户提前终止本协议的违约补偿。\n" +
                    "\n" +
                    " \n" +
                    "\n" +
                    "十、法律的适用与管辖\n" +
                    "\n" +
                    "本协议的订立、执行和解释及争议的解决均应适用在中华人民共和国大陆地区适用之有效法律（但不包括其冲突法规则）。如发生本网站服务条款与适用之法律相抵触时，则这些条款将完全按法律规定重新解释，而其它有效条款继续有效。如缔约方就本协议内容或其执行发生任何争议，双方应尽力友好协商解决；协商不成时，双方均可向本网站所在地法院提请诉讼。\n" +
                    "\n" +
                    " \n" +
                    "\n" +
                    "十一、协议期限\n" +
                    "\n" +
                    "本协议经双方签署且经过乙方审核通过后（或书面签署后）即告生效，除非本协议规定的终止条件发生，本协议将持续有效。双方另有约定的除外。\n" +
                    "\n" +
                    " \n" +
                    "\n" +
                    "十二、附则\n" +
                    "\n" +
                    "本协议的附件也是本协议不可分割的组成部分，与本协议效力均等；\n" +
                    "\n" +
                    "1. 如果在办理途中如遇到不可抗力造成客户证件毁损、灭失的，需双方协商解决；如协商未成本网站按照不超过最高500元的赔付标准赔偿客户损失；\n" +
                    "\n" +
                    "2. 用户声明：用户授权的经办人除对本条款约定文件内容具有签署、认可、确认的权利外，包含在网站购买服务中授权的其他文件签署、书面承诺的权利；\n" +
                    "\n" +
                    "3. 感谢您选择与本网站合作，我们承诺在合作过程中员工不会向您索要回扣或任何形式的礼品，如有违背，请向我们投诉；同理，也希望您能秉承合规方式与本网站合作，不行贿或索要回扣，若有发现，我们将永远不与您合作。感谢理解和支持！"
            });
        })
    })


</script>