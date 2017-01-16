<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>中医辅助开方</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="/tp3.2.3pykj/Public/muban/assets/css/style.css">
<link rel="stylesheet" href="/tp3.2.3pykj/Public/muban/assets/css/loader-style.css">
<link rel="stylesheet" href="/tp3.2.3pykj/Public/muban/assets/css/bootstrap.css">

	<link rel="stylesheet" href="/tp3.2.3pykj/Public/css/zykf.css">
	<script type="text/javascript" src="/tp3.2.3pykj/Public/jq/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/tp3.2.3pykj/Public/js/zykf.js"></script>
	<script src="/tp3.2.3pykj/Public/js/echarts.simple.min.js"></script>

<style type="text/css">
</style>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="shortcut icon" href="/tp3.2.3pykj/Public/muban/assets/ico/minus.png">
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
					<iframe width="300" scrolling="no" height="25" frameborder="0" allowtransparency="true" src="/tp3.2.3pykj/Public/tqyxy.html">
					</iframe>
				</div>
			</ul>
		</div>
		<ul style="margin-right:0" class="nav navbar-nav navbar-right">
			<li><a data-toggle="dropdown" class="dropdown-toggle" href="#"><img alt="" class="admin-pic img-circle" src="/tp3.2.3pykj/Public/muban/assets/img/canga.jpg"> Hi, 帅气的xxoo <b class="caret"></b></a>
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
		<a href="http://www.pengyukeji.com"><img src="/tp3.2.3pykj/Public/muban/assets/img/pengyu1.png" alt="logo" style="width:150px;margin-left:30px"></a>
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
		
<div id="waibig">
	<!-- 最上方药品处理等	 -->
	<div id="dfww">
		<div id="lscf">药品处理</div>
		<div id="ylcf">预览处方</div>
		<div id="xtys">系统预审</div>
	</div>
	<!-- 历史处方，当天处方 -->
	<div id="zccfls">
		当<br/>天<br/>处<br/>方
	</div>
	<div id="zccfdt">
		历<br/>史<br/>处<br/>方
	</div>
	<!-- 历史处方菜单 -->
	<div id="lscfcd">
		history
	</div>
	<!-- 当天处方菜单 -->
	<div id="dtcfcd">
		today
	</div>
	<!-- 左边大div -->
	<div id="left_big">
		<!-- 历史处方详情 -->
		<div id="lscfxq">
			<table>
				<tr class="trr">
					<td>药解</td>
				</tr>
				<tr class="trr">
					<td>上移</td>
				</tr>
				<tr class="trr">
					<td>下移</td>
				</tr>
				<tr class="trr">
					<td>随症加减</td>
				</tr>
			</table>
		</div>
		<!-- 当天处方详情 -->
		<div id="dtcfxq">当天处方</div>
		<!-- 病人信息div -->
		<div id="brxx">
			病人ID:1612130001&nbsp;&nbsp;&nbsp;姓名:张三&nbsp;&nbsp;&nbsp;性别:男&nbsp;&nbsp;&nbsp;年龄:21&nbsp;&nbsp;&nbsp;出生日期:1996-12-14
		</div>
		<!-- 用户操作调整div -->
		<div id="yhcz">
		<div id="gd">
			<label id="yf">
				<input type="checkbox" name="yfche" id="yfchecked">孕妇
			</label>
			<span class="span">
				剂量：<input type="text" name="jiliang" value="1" class="text">
			</span>
			<span class="span">
				<label id="zykf_bl1"><input type="radio" name="bltz" checked="checked" value="1">比例</label>&nbsp;&nbsp;
				<label id="zykf_tz1"><input type="radio" name="bltz" value="2">体重</label>
			</span>
			
			<span class="span" id="blspan">
				<input type="text" name="bl1" value="1" class="text" id="t1">
					/
				<input type="text" name="bl1" value="1" class="text" id="t2">
			</span>
			<span id="tzspan">
				<input type="text" name="bl1" value="50" class="text" id="ttzz">kg
			</span>
		</div>
			<button class="btn btn-info" id="tzan">
				调整
			</button>
			<button class="btn btn-success" id="jyan">
				加药
			</button>
			<label id="qxspan">
				<input type="checkbox" name="quan" id="qxche">全选
			</label>
		</div>
		<!-- 处方明细div -->
		<div id="cfmx">
		<!-- 查询药品框 -->
		<div id="zykf_cxypk">
			
		</div>
		<!-- 系统预审详情 -->
		<div id="xtysxq">
			<span id="sttcxx">X</span>
			<center><h1>审核</h1></center>
		</div>
		<!-- 药解框 -->
		<div id="yjk">
			<div>
				<span id="yjtc">X</span>
			</div>
		</div>
		<!-- 系统审核框 -->
		<div id="xtshk">
			<center><h3>审核</h3></center>
		</div>
			<div class="zykf_yp">
				<div class="yp1">
					<b class="b1">1</b>
					<span class="jianyao">X</span>
				</div>
				<div class="yp2">
					<select class="jfselect">
						<option value="1">煎法</option>
					</select>
				</div>
				<div class="yp3">
					茯苓
				</div>
				<div class="yp4">
					<input type="checkbox" name="xuanzeyp" class="xzypche">
					<span class="ypylspan"><input type="text" name="ypyongliang" value="0.00" class="ypylke">克</span>
				</div>
			</div>
			<div class="zykf_yp">
				<div class="yp1">
					<b class="b1">2</b>
					<span class="jianyao">X</span>
				</div>
				<div class="yp2">
					<select class="jfselect">
						<option value="1">煎法</option>
					</select>
				</div>
				<div class="yp3">
					茯苓
				</div>
				<div class="yp4">
					<input type="checkbox" name="xuanzeyp" class="xzypche">
					<span class="ypylspan"><input type="text" name="ypyongliang" value="0.00" class="ypylke">克</span>
				</div>
			</div>
			<div class="zykf_yp">
				<div class="yp1">
					<b class="b1">3</b>
					<span class="jianyao">X</span>
				</div>
				<div class="yp2">
					<select class="jfselect">
						<option value="1">煎法</option>
					</select>
				</div>
				<div class="yp3">
					茯苓
				</div>
				<div class="yp4">
					<input type="checkbox" name="xuanzeyp" class="xzypche">
					<span class="ypylspan"><input type="text" name="ypyongliang" value="0.00" class="ypylke">克</span>
				</div>
			</div>
			<div class="zykf_yp">
				<div class="yp1">
					<b class="b1">4</b>
					<span class="jianyao">X</span>
				</div>
				<div class="yp2">
					<select class="jfselect">
						<option value="1">煎法</option>
					</select>
				</div>
				<div class="yp3">
					茯苓
				</div>
				<div class="yp4">
					<input type="checkbox" name="xuanzeyp" class="xzypche">
					<span class="ypylspan"><input type="text" name="ypyongliang" value="0.00" class="ypylke">克</span>
				</div>
			</div>
			<div class="zykf_yp">
				<div class="yp1">
					<b class="b1">5</b>
					<span class="jianyao">X</span>
				</div>
				<div class="yp2">
					<select class="jfselect">
						<option value="1">煎法</option>
					</select>
				</div>
				<div class="yp3">
					茯苓
				</div>
				<div class="yp4">
					<input type="checkbox" name="xuanzeyp" class="xzypche">
					<span class="ypylspan"><input type="text" name="ypyongliang" value="0.00" class="ypylke">克</span>
				</div>
			</div>
		</div>
		
		<!-- 温热平寒占比 -->
		<div id="wrphzb">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>温</b>:25%&nbsp;&nbsp;&nbsp;<b>热</b>:25%&nbsp;&nbsp;&nbsp;<b>平</b>:25%&nbsp;&nbsp;&nbsp;<b>寒</b>:25%
		</div>
		<div id="jjffyyl">
		<select name="" id="" class="a1"><option>用法</option></select>
		<select name="" id="" class="a1"><option>用量</option></select>
		<select name="" id="" class="a1"><option>1次/日</option></select>
		<button class="btn btn-danger" id="tcana">退出</button>
		<button class="btn btn-warning" id="xdcfana">选定此方</button>
		</div>
	</div>
	<!-- 右边大div -->
	<div id="right_big">
		<!-- 性味归经div -->
		<div id="xwgj">
			性味归经
		</div>
		<!-- 煎法，用法，用量-->
		<div id="yzxq">
			<div id="docter_talk">
				医嘱
			</div>
			<div id="yzxqs">
				<label class="zykf_yzmr"><input type="checkbox" name="zykf_yzdx" class="zykf_dxanyz" value="按时吃药">&nbsp;按时吃药</label>
				<label class="zykf_yzmr"><input type="checkbox" name="zykf_yzdx" class="zykf_dxanyz" value="早睡早起">&nbsp;早睡早起</label>
				<label class="zykf_yzmr"><input type="checkbox" name="zykf_yzdx" class="zykf_dxanyz" value="禁止辛辣">&nbsp;禁止辛辣</label>
				<label class="zykf_yzmr"><input type="checkbox" name="zykf_yzdx" class="zykf_dxanyz" value="严禁饮酒">&nbsp;严禁饮酒</label>
				<label class="zykf_yzmr"><input type="checkbox" name="zykf_yzdx" class="zykf_dxanyz" value="多喝热水">多喝热水</label>
			</div>
			<div id="yzxqx">
				<textarea id="yztext"></textarea>
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
<script type="text/javascript" src="/tp3.2.3pykj/Public/muban/assets/js/jquery.js"></script>
<script type="text/javascript" src="/tp3.2.3pykj/Public/muban/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="/tp3.2.3pykj/Public/muban/assets/js/app.js"></script>
<script type="text/javascript" src="/tp3.2.3pykj/Public/muban/assets/js/load.js"></script>
<script type="text/javascript" src="/tp3.2.3pykj/Public/muban/assets/js/main.js"></script>
<script type="text/javascript" src="/tp3.2.3pykj/Public/muban/assets/js/jquery.easyui.min.js"></script>
<center>
<p>
</p>
<p>
	<a href="http://www.pengyukeji.com/" target="_blank">河北鹏宇电子科技有限公司</a>
</p>
</center>
<script src="/tp3.2.3pykj/Public/js/shijian.js"></script>

</body>
</html>