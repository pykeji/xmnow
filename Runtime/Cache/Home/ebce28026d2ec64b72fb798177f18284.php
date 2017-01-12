<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>中医辅助开方</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="/work/Public/muban/assets/css/style.css">
<link rel="stylesheet" href="/work/Public/muban/assets/css/loader-style.css">
<link rel="stylesheet" href="/work/Public/muban/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/work/Public/css/tizhi.css">

<style type="text/css">
</style>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="shortcut icon" href="/work/Public/muban/assets/ico/minus.png">
</head>
<body>
<nav role="navigation" class="navbar navbar-static-top">
<div class="container-fluid">
	<div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i style="font-size:20px" class="icon-conversation"></i>
			<div class="noft-red">
				3
			</div>
			</a>
			<ul style="margin:11px 0 0 9px" role="menu" class="dropdown-menu dropdown-wrap">
				<li><a href="#"><img alt="" class="img-msg img-circle" src="http://api.randomuser.me/portraits/thumb/men/3.jpg"><i>寒冰</i></a></li>
				<li class="divider"></li>
				<li><a href="#"><img alt="" class="img-msg img-circle" src="http://api.randomuser.me/portraits/thumb/men/4.jpg"><i>盖伦</i></a></li>
			</ul>
			</li>
		</ul>
		<div id="nt-title-container" class="navbar-left running-text visible-lg">
			<ul class="date-top">
				<div id="time">
				</div>
				<script>setInterval("document.getElementById('time').innerHTML=new Date().toLocaleString();",1e3);</script>
			</ul>
			<ul id="nt-title">
				<div style="margin-top:-3px;margin-left:10%">
					<iframe width="300" scrolling="no" height="25" frameborder="0" allowtransparency="true" src="/work/Public/tqyxy.html">
					</iframe>
				</div>
			</ul>
		</div>
		<ul style="margin-right:0" class="nav navbar-nav navbar-right">
			<li><a data-toggle="dropdown" class="dropdown-toggle" href="#"><img alt="" class="admin-pic img-circle" src="/work/Public/muban/assets/img/canga.jpg"> Hi, 帅气的xxoo <b class="caret"></b></a>
			<ul style="margin-top:14px" role="menu" class="dropdown-setting dropdown-menu">
				<li><a href="#"><span class="entypo-user"></span>&#160;&#160;个人信息</a></li>
				<li><a href="#"><span class="entypo-vcard"></span>&#160;&#160;详细信息</a></li>
				<li><a href="<?php echo U('Index/index');?>"><span class="glyphicon glyphicon-record"></span>&#160;&#160;退出</a></li>
			</ul>
			</li>
			<li><a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-heart-empty"></span>&#160;自定义</a>
			<ul role="menu" class="dropdown-setting dropdown-menu">
				<li class="theme-bg">
				<div id="button-bg">
				</div>
				<div id="button-bg2">
				</div>
				<div id="button-bg3">
				</div>
				<div id="button-bg5">
				</div>
				<div id="button-bg6">
				</div>
				<div id="button-bg7">
				</div>
				<div id="button-bg8">
				</div>
				<div id="button-bg9">
				</div>
				<div id="button-bg10">
				</div>
				<div id="button-bg11">
				</div>
				<div id="button-bg12">
				</div>
				<div id="button-bg13">
				</div>
				</li>
			</ul>
			</li>
			<li class="hidden-xs"><a class="toggle-left" href="#"><span style="font-size:20px" class="entypo-list-add">&nbsp;<span style="font-size:13px">知识库</span></span></a></li>
		</ul>
	</div>
</div>
</nav>
<div id="skin-select">
	<div style="margin-top:-20px">
		<a href="http://www.pengyukeji.com"><img src="/work/Public/muban/assets/img/pengyu1.png" alt="logo" style="width:150px;margin-left:30px"></a>
	</div>
	<a id="toggle"><span class="entypo-menu"></span></a>
	<div class="skin-part">
		<div id="tree-wrap">
			<div class="side-bar">
				<ul class="topnav menu-left-nest">
					<li><a href="#" style="border-left:0 solid!important" class="title-menu-left"><span>登记功能</span><i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i></a></li>
					<li><a class="tooltip-tip ajax-load" href="#" title="接诊区"><i class="icon-document-edit"></i><span>接诊区</span></a>
					<ul>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/home','');?>" title="接诊区">&nbsp;&nbsp;<i class="icon-document-edit"></i><span>接诊区</span></a></li>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/dengji','');?>" title="自己登记">&nbsp;&nbsp;<i class="glyphicon glyphicon-user"></i><span>患者登记</span></a></li>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/yuyue','');?>" title="患者预约">&nbsp;&nbsp;<i class="glyphicon glyphicon-user"></i><span>患者预约</span></a></li>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/chaxun','');?>" title="查询">&nbsp;&nbsp;<i class="icon-search"></i><span>查询</span></a></li>
					</ul>
					</li>
					<li><a class="tooltip-tip ajax-load" href="#" title="健康档案"><i class="entypo-newspaper"></i><span>健康档案</span></a>
					<ul>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/jiankang','');?>" title="健康档案">&nbsp;&nbsp;<i class="entypo-doc-text"></i><span>健康档案</span></a></li>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/tizhi','');?>" title="体质辨识">&nbsp;&nbsp;<i class="entypo-doc-text"></i><span>体质辨识</span></a></li>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/tiaoyang','');?>" title="中医调养">&nbsp;&nbsp;<i class="entypo-doc-text"></i><span>中医调养</span></a></li>
					</ul>
					</li>
				</ul>
				<ul class="topnav menu-left-nest">
					<li><a href="#" style="border-left:0 solid!important" class="title-menu-left"><span>开方功能</span><i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i></a></li>
					<li><a class="tooltip-tip ajax-load" href="#" title="中药开方"><i class="icon-window"></i><span>中药开方</span></a>
					<ul>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Kaifang/bingMing');?>" title="病名开方">&nbsp; &nbsp;<i class="entypo-doc-text"></i><span>病名开方</span></a></li>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Kaifang/zhengxing');?>" title="证型开方">&nbsp; &nbsp;<i class="entypo-doc-text"></i><span>证型开方</span></a></li>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Kaifang/zhiLiaoZhinan');?>" title="诊疗指南开方">&nbsp; &nbsp;<i class="entypo-doc-text"></i><span>诊疗指南开方</span></a></li>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Kaifang/jingDian');?>" title="取经典方">&nbsp; &nbsp;<i class="entypo-doc-text"></i><span>取经典方</span></a></li>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Kaifang/jingYan');?>" title="取经验方">&nbsp; &nbsp;<i class="entypo-doc-text"></i><span>取经验方</span></a></li>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Kaifang/bianZheng');?>" title="辩证开方">&nbsp; &nbsp;<i class="entypo-doc-text"></i><span>辩证开方</span></a></li>
					</ul>
					</li>
					<li><a class="tooltip-tip ajax-load" href="<?php echo U('Kaifang/west');?>" title="西药开方"><i class="icon-window"></i><span>西（中成）药开方</span></a></li>
				</ul>
				<ul class="topnav menu-left-nest">
					<li><a href="#" style="border-left:0 solid!important" class="title-menu-left"><span>其他功能</span><i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i></a></li>
					<li><a class="tooltip-tip ajax-load" href="<?php echo U('Huajia/index');?>" title="划价收费"><i class="glyphicon glyphicon-credit-card"></i><span>划价收费</span></a></li>
					<li><a class="tooltip-tip ajax-load" href="#" title="统计查询"><i class="glyphicon glyphicon-search"></i><span>统计查询</span></a>
					<ul>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Chaxun/sfzonghe');?>" title="收费综合查询">&nbsp; &nbsp; <i class="icon-search"></i><span>收费综合查询</span></a></li>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Chaxun/fyhuizong');?>" title="费用汇总">&nbsp; &nbsp; <i class="icon-search"></i><span>费用汇总</span></a></li>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Chaxun/yptongji');?>" title="药品使用统计">&nbsp; &nbsp; <i class="icon-search"></i><span>药品使用统计</span></a></li>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Chaxun/blchaxun');?>" title="病例查询">&nbsp; &nbsp; <i class="icon-search"></i><span>病例查询</span></a></li>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Chaxun/zyzzchaxun');?>" title="中医诊治查询统计">&nbsp; &nbsp; <i class="icon-search"></i><span>中医诊治查询统计</span></a></li>
						<li><a class="tooltip-tip2 ajax-load" href="<?php echo U('Chaxun/xyzzchaxun');?>" title="西医诊治查询统计">&nbsp; &nbsp; <i class="icon-search"></i><span>西医诊治查询统计</span></a></li>
					</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="wrap-fluid" style="height:85%">
	<div class="container-fluid paper-wrap bevel tlbr" style="height:100%">
		
    <div class="bg">
        <div class="xxk">
            <ul id="myTab" class="nav nav-tabs">
                <li class="active">
                    <a href="#home" data-toggle="tab">
                        录入基本项目
                    </a>
                </li>
                <li><a href="#res" data-toggle="tab">查看结果</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <!--题目-->
                    <div class="tab-content" id="myTi">
                        <!--第一题-->
                        <div class="ti tab-pane fade in active" id="ti1">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx1"><span>1、没有</span></label>
                                <label><input type="radio" name="xx1"><span>2、很少</span></label>
                                <label><input type="radio" name="xx1"><span>3、有时</span></label>
                                <label><input type="radio" name="xx1"><span>4、经常</span></label>
                                <label><input type="radio" name="xx1"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第二题-->
                        <div class="ti tab-pane fade" id="ti2">
                            <div class="ti-title">
                                （2）您容易疲乏吗？（指体力如何，是否稍微活动一下或做一点家务劳动就感到累）
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx2"><span>1、没有</span></label>
                                <label><input type="radio" name="xx2"><span>2、很少</span></label>
                                <label><input type="radio" name="xx2"><span>3、有时</span></label>
                                <label><input type="radio" name="xx2"><span>4、经常</span></label>
                                <label><input type="radio" name="xx2"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第三题-->
                        <div class="ti tab-pane fade" id="ti3">
                            <div class="ti-title">
                                （3）您容易气短，呼吸短促，接不上气吗？
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx3"><span>1、没有</span></label>
                                <label><input type="radio" name="xx3"><span>2、很少</span></label>
                                <label><input type="radio" name="xx3"><span>3、有时</span></label>
                                <label><input type="radio" name="xx3"><span>4、经常</span></label>
                                <label><input type="radio" name="xx3"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第四题-->
                        <div class="ti tab-pane fade" id="ti4">
                            <div class="ti-title">
                                （4）您说话声音低弱无力吗？（指说话没有力气）
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx4"><span>1、没有</span></label>
                                <label><input type="radio" name="xx4"><span>2、很少</span></label>
                                <label><input type="radio" name="xx4"><span>3、有时</span></label>
                                <label><input type="radio" name="xx4"><span>4、经常</span></label>
                                <label><input type="radio" name="xx4"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第五题-->
                        <div class="ti tab-pane fade" id="ti5">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx5"><span>1、没有</span></label>
                                <label><input type="radio" name="xx5"><span>2、很少</span></label>
                                <label><input type="radio" name="xx5"><span>3、有时</span></label>
                                <label><input type="radio" name="xx5"><span>4、经常</span></label>
                                <label><input type="radio" name="xx5"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第六题-->
                        <div class="ti tab-pane fade" id="ti6">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx6"><span>1、没有</span></label>
                                <label><input type="radio" name="xx6"><span>2、很少</span></label>
                                <label><input type="radio" name="xx6"><span>3、有时</span></label>
                                <label><input type="radio" name="xx6"><span>4、经常</span></label>
                                <label><input type="radio" name="xx6"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第七题-->
                        <div class="ti tab-pane fade" id="ti7">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx7"><span>1、没有</span></label>
                                <label><input type="radio" name="xx7"><span>2、很少</span></label>
                                <label><input type="radio" name="xx7"><span>3、有时</span></label>
                                <label><input type="radio" name="xx7"><span>4、经常</span></label>
                                <label><input type="radio" name="xx7"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第八题-->
                        <div class="ti tab-pane fade" id="ti8">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx8"><span>1、没有</span></label>
                                <label><input type="radio" name="xx8"><span>2、很少</span></label>
                                <label><input type="radio" name="xx8"><span>3、有时</span></label>
                                <label><input type="radio" name="xx8"><span>4、经常</span></label>
                                <label><input type="radio" name="xx8"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第九题-->
                        <div class="ti tab-pane fade" id="ti9">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx9"><span>1、没有</span></label>
                                <label><input type="radio" name="xx9"><span>2、很少</span></label>
                                <label><input type="radio" name="xx9"><span>3、有时</span></label>
                                <label><input type="radio" name="xx9"><span>4、经常</span></label>
                                <label><input type="radio" name="xx9"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第十题-->
                        <div class="ti tab-pane fade" id="ti10">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx10"><span>1、没有</span></label>
                                <label><input type="radio" name="xx10"><span>2、很少</span></label>
                                <label><input type="radio" name="xx10"><span>3、有时</span></label>
                                <label><input type="radio" name="xx10"><span>4、经常</span></label>
                                <label><input type="radio" name="xx10"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第十一题-->
                        <div class="ti tab-pane fade" id="ti11">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx11"><span>1、没有</span></label>
                                <label><input type="radio" name="xx11"><span>2、很少</span></label>
                                <label><input type="radio" name="xx11"><span>3、有时</span></label>
                                <label><input type="radio" name="xx11"><span>4、经常</span></label>
                                <label><input type="radio" name="xx11"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第12题-->
                        <div class="ti tab-pane fade" id="ti12">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx12"><span>1、没有</span></label>
                                <label><input type="radio" name="xx12"><span>2、很少</span></label>
                                <label><input type="radio" name="xx12"><span>3、有时</span></label>
                                <label><input type="radio" name="xx12"><span>4、经常</span></label>
                                <label><input type="radio" name="xx12"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第13题-->
                        <div class="ti tab-pane fade" id="ti13">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx13"><span>1、没有</span></label>
                                <label><input type="radio" name="xx13"><span>2、很少</span></label>
                                <label><input type="radio" name="xx13"><span>3、有时</span></label>
                                <label><input type="radio" name="xx13"><span>4、经常</span></label>
                                <label><input type="radio" name="xx13"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第14题-->
                        <div class="ti tab-pane fade" id="ti14">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx14"><span>1、没有</span></label>
                                <label><input type="radio" name="xx14"><span>2、很少</span></label>
                                <label><input type="radio" name="xx14"><span>3、有时</span></label>
                                <label><input type="radio" name="xx14"><span>4、经常</span></label>
                                <label><input type="radio" name="xx14"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第15题-->
                        <div class="ti tab-pane fade" id="ti15">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx15"><span>1、没有</span></label>
                                <label><input type="radio" name="xx15"><span>2、很少</span></label>
                                <label><input type="radio" name="xx15"><span>3、有时</span></label>
                                <label><input type="radio" name="xx15"><span>4、经常</span></label>
                                <label><input type="radio" name="xx15"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第16题-->
                        <div class="ti tab-pane fade" id="ti16">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx16"><span>1、没有</span></label>
                                <label><input type="radio" name="xx16"><span>2、很少</span></label>
                                <label><input type="radio" name="xx16"><span>3、有时</span></label>
                                <label><input type="radio" name="xx16"><span>4、经常</span></label>
                                <label><input type="radio" name="xx16"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第17题-->
                        <div class="ti tab-pane fade" id="ti17">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx17"><span>1、没有</span></label>
                                <label><input type="radio" name="xx17"><span>2、很少</span></label>
                                <label><input type="radio" name="xx17"><span>3、有时</span></label>
                                <label><input type="radio" name="xx17"><span>4、经常</span></label>
                                <label><input type="radio" name="xx17"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第18题-->
                        <div class="ti tab-pane fade" id="ti18">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx18"><span>1、没有</span></label>
                                <label><input type="radio" name="xx18"><span>2、很少</span></label>
                                <label><input type="radio" name="xx18"><span>3、有时</span></label>
                                <label><input type="radio" name="xx18"><span>4、经常</span></label>
                                <label><input type="radio" name="xx18"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第19题-->
                        <div class="ti tab-pane fade" id="ti19">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx19"><span>1、没有</span></label>
                                <label><input type="radio" name="xx19"><span>2、很少</span></label>
                                <label><input type="radio" name="xx19"><span>3、有时</span></label>
                                <label><input type="radio" name="xx19"><span>4、经常</span></label>
                                <label><input type="radio" name="xx19"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第20题-->
                        <div class="ti tab-pane fade" id="ti20">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx20"><span>1、没有</span></label>
                                <label><input type="radio" name="xx20"><span>2、很少</span></label>
                                <label><input type="radio" name="xx20"><span>3、有时</span></label>
                                <label><input type="radio" name="xx20"><span>4、经常</span></label>
                                <label><input type="radio" name="xx20"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第21题-->
                        <div class="ti tab-pane fade" id="ti21">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx21"><span>1、没有</span></label>
                                <label><input type="radio" name="xx21"><span>2、很少</span></label>
                                <label><input type="radio" name="xx21"><span>3、有时</span></label>
                                <label><input type="radio" name="xx21"><span>4、经常</span></label>
                                <label><input type="radio" name="xx21"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第22题-->
                        <div class="ti tab-pane fade" id="ti22">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx22"><span>1、没有</span></label>
                                <label><input type="radio" name="xx22"><span>2、很少</span></label>
                                <label><input type="radio" name="xx22"><span>3、有时</span></label>
                                <label><input type="radio" name="xx22"><span>4、经常</span></label>
                                <label><input type="radio" name="xx22"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第23题-->
                        <div class="ti tab-pane fade" id="ti23">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx23"><span>1、没有</span></label>
                                <label><input type="radio" name="xx23"><span>2、很少</span></label>
                                <label><input type="radio" name="xx23"><span>3、有时</span></label>
                                <label><input type="radio" name="xx23"><span>4、经常</span></label>
                                <label><input type="radio" name="xx23"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第24题-->
                        <div class="ti tab-pane fade" id="ti24">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx24"><span>1、没有</span></label>
                                <label><input type="radio" name="xx24"><span>2、很少</span></label>
                                <label><input type="radio" name="xx24"><span>3、有时</span></label>
                                <label><input type="radio" name="xx24"><span>4、经常</span></label>
                                <label><input type="radio" name="xx24"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第25题-->
                        <div class="ti tab-pane fade" id="ti25">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx25"><span>1、没有</span></label>
                                <label><input type="radio" name="xx25"><span>2、很少</span></label>
                                <label><input type="radio" name="xx25"><span>3、有时</span></label>
                                <label><input type="radio" name="xx25"><span>4、经常</span></label>
                                <label><input type="radio" name="xx25"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第26题-->
                        <div class="ti tab-pane fade" id="ti26">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx26"><span>1、没有</span></label>
                                <label><input type="radio" name="xx26"><span>2、很少</span></label>
                                <label><input type="radio" name="xx26"><span>3、有时</span></label>
                                <label><input type="radio" name="xx26"><span>4、经常</span></label>
                                <label><input type="radio" name="xx26"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第27题-->
                        <div class="ti tab-pane fade" id="ti27">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx27"><span>1、没有</span></label>
                                <label><input type="radio" name="xx27"><span>2、很少</span></label>
                                <label><input type="radio" name="xx27"><span>3、有时</span></label>
                                <label><input type="radio" name="xx27"><span>4、经常</span></label>
                                <label><input type="radio" name="xx27"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第28题-->
                        <div class="ti tab-pane fade" id="ti28">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx28"><span>1、没有</span></label>
                                <label><input type="radio" name="xx28"><span>2、很少</span></label>
                                <label><input type="radio" name="xx28"><span>3、有时</span></label>
                                <label><input type="radio" name="xx28"><span>4、经常</span></label>
                                <label><input type="radio" name="xx28"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第29题-->
                        <div class="ti tab-pane fade" id="ti29">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx29"><span>1、没有</span></label>
                                <label><input type="radio" name="xx29"><span>2、很少</span></label>
                                <label><input type="radio" name="xx29"><span>3、有时</span></label>
                                <label><input type="radio" name="xx29"><span>4、经常</span></label>
                                <label><input type="radio" name="xx29"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第30题-->
                        <div class="ti tab-pane fade" id="ti30">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx30"><span>1、没有</span></label>
                                <label><input type="radio" name="xx30"><span>2、很少</span></label>
                                <label><input type="radio" name="xx30"><span>3、有时</span></label>
                                <label><input type="radio" name="xx30"><span>4、经常</span></label>
                                <label><input type="radio" name="xx30"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第31题-->
                        <div class="ti tab-pane fade" id="ti31">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx31"><span>1、没有</span></label>
                                <label><input type="radio" name="xx31"><span>2、很少</span></label>
                                <label><input type="radio" name="xx31"><span>3、有时</span></label>
                                <label><input type="radio" name="xx31"><span>4、经常</span></label>
                                <label><input type="radio" name="xx31"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第32题-->
                        <div class="ti tab-pane fade" id="ti32">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx32"><span>1、没有</span></label>
                                <label><input type="radio" name="xx32"><span>2、很少</span></label>
                                <label><input type="radio" name="xx32"><span>3、有时</span></label>
                                <label><input type="radio" name="xx32"><span>4、经常</span></label>
                                <label><input type="radio" name="xx32"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                        <!--第33题-->
                        <div class="ti tab-pane fade" id="ti33">
                            <div class="ti-title">
                                （1）您精力充沛吗？（指精神头足，乐于做事）3
                            </div>
                            <div class="ti-content">
                                <label><input type="radio" name="xx33"><span>1、没有</span></label>
                                <label><input type="radio" name="xx33"><span>2、很少</span></label>
                                <label><input type="radio" name="xx33"><span>3、有时</span></label>
                                <label><input type="radio" name="xx33"><span>4、经常</span></label>
                                <label><input type="radio" name="xx33"><span>5、总是</span></label>
                            </div>
                            <!--提示-->
                            <div class="prompt">
                                <div class="pro-title">选项提示</div>
                                <div class="pro-inf">
                                    <span>1、没有（根本不/从来没有）</span>
                                    <span>2、很少（有一点/偶尔）</span>
                                    <span>3、有时（有些/少数时间）</span>
                                    <span>4、经常（相当/多数时间）</span>
                                    <span>5、总是（非常/每天）</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--上下题-->
                    <div class="updown">
                        <button type="button" class="but" id="syt">上一题</button>
                        <button type="button" id="xyt">下一题</button>
                    </div>
                    <!--题号-->
                    <div class="tiNum">
                        <table class="nav nav-tabs" id="myTiContent">
                            <tr>
                                <td class="sty1" id="xx1"><a href="#ti1" data-toggle="tab">1</a></td>
                                <td id="xx2"><a href="#ti2" data-toggle="tab">2</a></td>
                                <td id="xx3"><a href="#ti3" data-toggle="tab">3</a></td>
                                <td id="xx4"><a href="#ti4" data-toggle="tab">4</a></td>
                                <td id="xx5"><a href="#ti5" data-toggle="tab">5</a></td>
                                <td id="xx6"><a href="#ti6" data-toggle="tab">6</a></td>
                                <td id="xx7"><a href="#ti7" data-toggle="tab">7</a></td>
                                <td id="xx8"><a href="#ti8" data-toggle="tab">8</a></td>
                                <td id="xx9"><a href="#ti9" data-toggle="tab">9</a></td>
                                <td id="xx10"><a href="#ti10" data-toggle="tab">10</a></td>
                                <td id="xx11"><a href="#ti11" data-toggle="tab">11</a></td>
                            </tr>
                            <tr>
                                <td id="xx12"><a href="#ti12" data-toggle="tab">12</a></td>
                                <td id="xx13"><a href="#ti13" data-toggle="tab">13</a></td>
                                <td id="xx14"><a href="#ti14" data-toggle="tab">14</a></td>
                                <td id="xx15"><a href="#ti15" data-toggle="tab">15</a></td>
                                <td id="xx16"><a href="#ti16" data-toggle="tab">16</a></td>
                                <td id="xx17"><a href="#ti17" data-toggle="tab">17</a></td>
                                <td id="xx18"><a href="#ti18" data-toggle="tab">18</a></td>
                                <td id="xx19"><a href="#ti19" data-toggle="tab">19</a></td>
                                <td id="xx20"><a href="#ti20" data-toggle="tab">20</a></td>
                                <td id="xx21"><a href="#ti21" data-toggle="tab">21</a></td>
                                <td id="xx22"><a href="#ti22" data-toggle="tab">22</a></td>
                            </tr>
                            <tr>
                                <td id="xx23"><a href="#ti23" data-toggle="tab">23</a></td>
                                <td id="xx24"><a href="#ti24" data-toggle="tab">24</a></td>
                                <td id="xx25"><a href="#ti25" data-toggle="tab">25</a></td>
                                <td id="xx26"><a href="#ti26" data-toggle="tab">26</a></td>
                                <td id="xx27"><a href="#ti27" data-toggle="tab">27</a></td>
                                <td id="xx28"><a href="#ti28" data-toggle="tab">28</a></td>
                                <td id="xx29"><a href="#ti29" data-toggle="tab">29</a></td>
                                <td id="xx30"><a href="#ti30" data-toggle="tab">30</a></td>
                                <td id="xx31"><a href="#ti31" data-toggle="tab">31</a></td>
                                <td id="xx32"><a href="#ti32" data-toggle="tab">32</a></td>
                                <td id="xx33"><a href="#ti33" data-toggle="tab">33</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="res">
                    <!--报告-->
                    <div class="report">
                        <div class="reportinf center">
                            <!--报告表单-->
                            <form action="#" method="post">
                                <div class="rep-title">中医体制辨识鉴定报告</div>
                                <div>
                                    <table border="1" width="90%" class="center">
                                        <tr>
                                            <td>姓名</td>
                                            <td colspan="2">阿布</td>
                                            <td>性别</td>
                                            <td>男</td>
                                            <td>年龄</td>
                                            <td>36岁</td>
                                            <td>日期</td>
                                            <td colspan="3">2016-12-16</td>
                                        </tr>
                                        <tr>
                                            <td>身份证号</td>
                                            <td colspan="6"></td>
                                            <td>联系方式</td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tr>
                                            <td>工作单位</td>
                                            <td colspan="10"></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">体制类型</td>
                                            <td colspan="2">平和质[体制1]</td>
                                            <td colspan="2">气虚质[体制2]</td>
                                            <td colspan="2">阳虚质[体制3]</td>
                                            <td colspan="2">阴虚质[体制4]</td>
                                            <td colspan="2">痰湿质[体制5]</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">湿热质[体制6]</td>
                                            <td colspan="2">血瘀质[体制7]</td>
                                            <td colspan="2">气郁质[体制8]</td>
                                            <td colspan="2">特禀质[体制9]</td>
                                            <td colspan="2"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="rep-title1">气虚质</div>
                                <div class="rep-title1">1.情致调摄</div>
                                <div class="rep-inf">
                                    <p>以保持稳定乐观心态</p>
                                </div>
                            </form>
                            <!--分类-->
                            <div class="tztitle">测试结果表</div>
                            <div class="tzstyle">
                                <table width="98%" border="1" bordercolor="#cccccc" class="center">
                                    <tr>
                                        <td>体制分类</td>
                                        <td>总分</td>
                                        <td>测试结果</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="anniu">
                    <button type="button" class="btn btn-warning">提交</button>
                    <button type="button" class="btn btn-warning">保存</button>
                    <button type="button" class="btn btn-warning">另存为</button>
                    <button type="button" class="btn btn-warning">打印</button>
                </div>
            </div>
        </div>
    </div>

	</div>
</div>
<div class="sb-slidebar sb-right">
	<div class="right-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<span class="label label-warning label-chat">中医四大名著</span>
				<ul class="chat">
					<li><a href="#"><span></span><b>伤寒论</b></a></li>
					<li><a href="#"><span></span><b>黄帝内经</b></a></li>
					<li><a href="#"><span></span><b>金匮要略</b></a></li>
					<li><a href="#"><span></span><b>温病条辨</b></a></li>
				</ul>
			</div>
			<div>
				<br>
				<br>
			</div>
			<div class="col-lg-12">
				<span class="label label-warning label-chat">其他</span>
				<ul class="chat">
					<li><a href="#"><span></span><b>我的文档</b></a></li>
					<li><a href="#"><span></span><b>临床诊断</b></a></li>
					<li><a href="#"><span></span><b>中医药学会诊断指南</b></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="/work/Public/muban/assets/js/jquery.js"></script>
<script type="text/javascript" src="/work/Public/muban/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="/work/Public/muban/assets/js/app.js"></script>
<script type="text/javascript" src="/work/Public/muban/assets/js/load.js"></script>
<script type="text/javascript" src="/work/Public/muban/assets/js/main.js"></script>
<script type="text/javascript" src="/work/Public/muban/assets/js/jquery.easyui.min.js"></script>
<center>
<p>
</p>
<p>
	<a href="http://www.pengyukeji.com/" target="_blank">河北鹏宇电子科技有限公司</a>
</p>
</center>
<script src="/work/Public/js/shijian.js"></script>

    <script type="text/javascript" src="/work/Public/js/tizhi.js"></script>

</body>
</html>