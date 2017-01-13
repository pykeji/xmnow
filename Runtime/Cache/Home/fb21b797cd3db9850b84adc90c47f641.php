<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

    <title>患者登记</title>

<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="/TP3.2.3pykj/Public/muban/assets/css/style.css">
<link rel="stylesheet" href="/TP3.2.3pykj/Public/muban/assets/css/loader-style.css">
<link rel="stylesheet" href="/TP3.2.3pykj/Public/muban/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/TP3.2.3pykj/Public/css/chaxun.css">
    <script src="/TP3.2.3pykj/Public/js/jeDate/jedate.js"></script>

<style type="text/css">
</style>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="shortcut icon" href="/TP3.2.3pykj/Public/muban/assets/ico/minus.png">
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
					<iframe width="300" scrolling="no" height="25" frameborder="0" allowtransparency="true" src="/TP3.2.3pykj/Public/tqyxy.html">
					</iframe>
				</div>
			</ul>
		</div>
		<ul style="margin-right:0" class="nav navbar-nav navbar-right">
			<li><a data-toggle="dropdown" class="dropdown-toggle" href="#"><img alt="" class="admin-pic img-circle" src="/TP3.2.3pykj/Public/muban/assets/img/canga.jpg"> Hi, 帅气的xxoo <b class="caret"></b></a>
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
		<a href="http://www.pengyukeji.com"><img src="/TP3.2.3pykj/Public/muban/assets/img/pengyu1.png" alt="logo" style="width:150px;margin-left:30px"></a>
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
        <div class="title center" id="title">
            查询窗口
        </div>
        <div class="chaxun center">
            <div>
                <img src="/TP3.2.3pykj/Public/img/chaxun.png" alt="图片加载失败！">
            </div>
            <div class="cxfont">
                查询条件:
            </div>
            <div class="nb">
                <label for="userName">姓名：</label>
                <span><input type="text" id="userName"></span>
            </div>
            <div class="nb">
                <span>挂号日期：</span>
                <span><input type="text" class="ghrq" id="datebut1" onClick="jeDate({dateCell:'#datebut1',isTime:true,format:'YYYY-MM-DD'})" readonly="readonly"></span>
                <span>至</span>
                <span><input type="text" class="ghrq" id="datebut2" onClick="jeDate({dateCell:'#datebut2',isTime:true,format:'YYYY-MM-DD'})" onfocus="new Calendar().show(this)" readonly="readonly"></span>
            </div>
            <div class="nb">
                <span><label for="blh">病历号：</label></span>
                <span><input type="text" id="blh"></span>
            </div>
            <div class="nb">
                <label><span><input type="checkbox"></span><span>性别：</span></label>
                <label><span><input type="radio" name="sex" checked="checked"><span>男</span></span></label>
                <label><span><input type="radio" name="sex"><span>女</span></span></label>
            </div>
            <div class="but">
                <button class="btn btn-warning"><i class="glyphicon glyphicon-search"></i>查询</button>
            </div>
        </div>
        <div class="cxtable center">
            <table border="0" width="100%" class="table1">
                <tr>
                    <td width="5%">病历号</td>
                    <td width="5%">姓名</td>
                    <td width="3%">性别</td>
                    <td width="8%">挂号日期</td>
                    <!--<td width="10%">身份证</td>-->
                    <!--<td width="8%">出生日期</td>-->
                    <!--<td width="20%">单位</td>-->
                    <td width="8%">电话</td>
                    <!--<td width="8%">传真</td>-->
                    <!--<td width="10%">E-Mail</td>-->
                    <td width="8%">预约日期</td>
                    <td width="7%">操作</td>
                </tr>
                <tr class="cxtr1">
                    <td>000011</td>
                    <td>阿布</td>
                    <td>男</td>
                    <td>2016-12-07</td>
                    <!--<td>133333333333333333</td>-->
                    <!--<td>1993-01-11</td>-->
                    <!--<td>河北省石家庄市睿和中心河北鹏宇电子科技有限公司</td>-->
                    <td>18333333333</td>
                    <!--<td>0311-4545454564</td>-->
                    <!--<td>asdsa@qq.com</td>-->
                    <td>2016-12-07</td>
                    <td>
                        <span data-toggle="modal" data-target="#myModal">详细信息</span>
                        <span>登记</span>
                        <span>预约</span>
                    </td>
                </tr>
                <tr class="cxtr1">
                    <td>000011</td>
                    <td>阿布</td>
                    <td>男</td>
                    <td>2016-12-07</td>
                    <!--<td>133333333333333333</td>-->
                    <!--<td>1993-01-11</td>-->
                    <!--<td>河北省石家庄市睿和中心河北鹏宇电子科技有限公司</td>-->
                    <td>18333333333</td>
                    <!--<td>0311-4545454564</td>-->
                    <!--<td>asdsa@qq.com</td>-->
                    <td>2016-12-07</td>
                    <td>
                        <span data-toggle="modal" data-target="#myModal">详细信息</span>
                        <span>登记</span>
                        <span>预约</span>
                    </td>
                </tr>
            </table>
        </div>
        <div class="fenye center">
            <span>共查询出<span id="sickNum">0</span>位病人</span>
            <span>当前第1/N页</span>
            <span>上一页</span>
            <span>下一页</span>
        </div>
    </div>
    <script type="text/javascript">
        jeDate.skin('gray');
    </script>
    <!--查询患者详细信息模态框-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">患者详细信息</h4>
                </div>
                <div class="modal-body">
                    <table border="0" class="mbt">
                        <tr>
                            <td>病历号：</td>
                            <td><input type="text" readonly="readonly"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>姓名：</td>
                            <td><input type="text" readonly="readonly"></td>
                            <td>性别：</td>
                            <td>
                                <label><input type="radio" name="sex" checked="checked" disabled="disabled"><span>男</span></label>
                                <label><input type="radio" name="sex" disabled="disabled"><span>女</span></label>
                            </td>
                        </tr>
                        <tr>
                            <td>电话：</td>
                            <td><input type="text" readonly="readonly"></td>
                            <td>出生年月：</td>
                            <td><input type="text" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td>身份证号：</td>
                            <td colspan="3"><input type="text" class="lontext" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td>单位：</td>
                            <td colspan="3"><input type="text" class="lontext" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td>E-Mail：</td>
                            <td><input type="text" readonly="readonly"></td>
                            <td>传真：</td>
                            <td><input type="text" readonly="readonly"></td>
                        </tr>
                        <tr>
                            <td>挂号日期：</td>
                            <td><input type="text" readonly="readonly"></td>
                            <td>预约日期：</td>
                            <td><input type="text" readonly="readonly"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <!--<button type="button" class="btn btn-primary">提交更改</button>-->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>

	</div>
</div>
<div class="sb-slidebar sb-right">
	<div class="right-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<span class="label label-warning label-chat">中医四大名著</span>
				<ul class="chat">
					<li><a href="<?php echo U();?>"><span></span><b>伤寒论</b></a></li>
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
<script type="text/javascript" src="/TP3.2.3pykj/Public/muban/assets/js/jquery.js"></script>
<script type="text/javascript" src="/TP3.2.3pykj/Public/muban/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="/TP3.2.3pykj/Public/muban/assets/js/app.js"></script>
<script type="text/javascript" src="/TP3.2.3pykj/Public/muban/assets/js/load.js"></script>
<script type="text/javascript" src="/TP3.2.3pykj/Public/muban/assets/js/main.js"></script>
<script type="text/javascript" src="/TP3.2.3pykj/Public/muban/assets/js/jquery.easyui.min.js"></script>
<center>
<p>
</p>
<p>
	<a href="http://www.pengyukeji.com/" target="_blank">河北鹏宇电子科技有限公司</a>
</p>
</center>
<script src="/TP3.2.3pykj/Public/js/shijian.js"></script>

</body>
</html>