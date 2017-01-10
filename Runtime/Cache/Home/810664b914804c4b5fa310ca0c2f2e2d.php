<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>中医辅助开方</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->


<link rel="stylesheet" href="/TP3.2.3pykj/Public/muban/assets/css/style.css">
<link rel="stylesheet" href="/TP3.2.3pykj/Public/muban/assets/css/loader-style.css">
<link rel="stylesheet" href="/TP3.2.3pykj/Public/muban/assets/css/bootstrap.css">

	<!-- <link href="/TP3.2.3pykj/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <link href="/TP3.2.3pykj/Public/bootstrap/fonts" rel="stylesheet"> -->
    <!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
    <script src="/TP3.2.3pykj/Public/jq/jquery-3.1.1.min.js"></script>
    <!-- bootstrap的js -->
    <!-- <script src="/TP3.2.3pykj/Public/bootstrap/js/bootstrap.min.js"></script> -->
   	<link rel="stylesheet" type="text/css" href="/TP3.2.3pykj/Public/yeMiancss/kaifang5.css">


<style type="text/css">
	/*定义滚动条高宽及背景 高宽分别对应横竖滚动条的尺寸*/  
		/*::-webkit-scrollbar  
		{  
		    width: 16px;  
		    height: 16px;  
		    background-color:white; 
		}*/  
		/*定义滚动条轨道 内阴影+圆角*/  
		/*::-webkit-scrollbar-track  
		{  
   		 -webkit-box-shadow: inset 0 0 6px #8CA8E0;  
   		 border-radius: 10px;  
    	 background-color: #F5F5F5;  
		}  */
		/*定义滑块 内阴影+圆角*/  
		/*::-webkit-scrollbar-thumb  
		{  
		    border-radius: 10px;  
		 	-webkit-box-shadow: inset 0 0 6px #8CA8E0;  

		    background-color: #2A3F6A;

		} */ 
</style>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Fav and touch icons -->
<link rel="shortcut icon" href="/TP3.2.3pykj/Public/muban/assets/ico/minus.png">
</head>
<body>
<!-- 开始头 -->
<nav role="navigation" class="navbar navbar-static-top">
	<div class="container-fluid">
		<!-- 头部列表 -->
		<div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<!-- 第一个图标 -->
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i style="font-size:20px;" class="icon-conversation"></i>
					<div class="noft-red">
						3
					</div>
					</a>
					<ul style="margin: 11px 0 0 9px;" role="menu" class="dropdown-menu dropdown-wrap">
						<li>
							<a href="#">
							<img alt="" class="img-msg img-circle" src="http://api.randomuser.me/portraits/thumb/men/3.jpg"><i>寒冰</i>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">
							<img alt="" class="img-msg img-circle" src="http://api.randomuser.me/portraits/thumb/men/4.jpg"><i>盖伦</i>
							</a>
						</li>
					</ul>
				</li>
				<!-- 第二个图标 -->
				<!-- <li>
					<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i style="font-size:19px;" class="icon-warning tooltitle"></i>
					<div class="noft-green">
						5
					</div>
					</a>
				</li> -->
			</ul>
			<!-- 中间栏 -->
			<div id="nt-title-container" class="navbar-left running-text visible-lg">
				<ul class="date-top">
					<!-- 动态显示当前时间开始 -->
					<div id="time"></div>
						<script>
							setInterval("document.getElementById('time').innerHTML=new Date().toLocaleString();",1000);  
						</script>
					<!-- 动态显示当前时间结束 -->
				</ul>
				<!-- <ul id="digital-clock" class="digital">
					日期
				</ul> -->
				<!-- 天气 -->
				<ul id="nt-title">
					<div style=" margin-top: -3px; ">
						<iframe width="300" scrolling="no" height="25" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=10&color=%23FFFFFF&icon=1"></iframe>
					</div>
				</ul>
			</div>
			<!-- 头部最右方的栏 -->
			<ul style="margin-right:0;" class="nav navbar-nav navbar-right">
				<!-- 个人信息 -->
				<li>
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
					<img alt="" class="admin-pic img-circle" src="/TP3.2.3pykj/Public/muban/assets/img/canga.jpg">
					Hi, 帅气的xxoo <b class="caret"></b>
					</a>
					<ul style="margin-top:14px;" role="menu" class="dropdown-setting dropdown-menu">
						<li>
						<a href="#">
						<span class="entypo-user"></span>&#160;&#160;个人信息</a>
						</li>
						<li>
						<a href="#">
						<span class="entypo-vcard"></span>&#160;&#160;详细信息</a>
						</li>
					</ul>
				</li>
				<!-- 设置 -->
				<li>
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
					<span class="icon-gear"></span>&#160;&#160;Setting</a>
					<!-- 颜色 -->
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
				<!-- 右侧掩藏栏 -->
				<li class="hidden-xs">
					<a class="toggle-left" href="#">
					<span style="font-size:20px;" class="entypo-list-add">&nbsp;<span style=" font-size: 13px;">知识库</span></span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- 结束头 -->
<!-- 开始 左侧菜单-->
<div id="skin-select">
	<!-- logo -->
	<div style=" margin-top:-20px; " >
		<img src="/TP3.2.3pykj/Public/muban/assets/img/pengyu1.png"  alt="logo" style="  width: 150px; margin-left:30px; ">
	</div>
	<!-- 显示隐藏的图标 -->
	<a id="toggle">
	<span class="entypo-menu"></span>
	</a>
	<!-- 左侧 下方 菜单 -->
	<div class="skin-part">
		<div id="tree-wrap">
			<div class="side-bar">
				<!-- 第一类 -->
				<ul class="topnav menu-left-nest">
					<li>
						<a href="#" style="border-left:0px solid!important;" class="title-menu-left">
						<!-- <span class="widget-menu"></span> -->
						<span>不知道叫什么</span>
						<i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
						</a>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="#" title="登记">
						<i class="icon-document-edit"></i>
						<span>接诊区</span>
						</a>
						<ul>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/home','');?>" title="接诊区">
									&nbsp;&nbsp;<i class="entypo-doc-text"></i><span>接诊区</span></a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/dengji','');?>" title="自己登记">
								&nbsp;&nbsp;<i class="entypo-doc-text"></i><span>患者登记</span></a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/yuyue','');?>" title="患者预约">
								&nbsp;&nbsp;<i class="entypo-newspaper"></i><span>患者预约</span></a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/chaxun','');?>" title="查询">
								&nbsp;&nbsp;<i class="entypo-newspaper"></i><span>查询</span></a>
							</li>
						</ul>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="#" title="健康档案">
						<i class="icon-document-edit"></i>
						<span>健康档案</span>
						</a>
						<ul>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/jiankang','');?>" title="健康档案">
								&nbsp;&nbsp;<i class="entypo-doc-text"></i><span>健康档案</span></a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/tizhi','');?>" title="体质辨识">
								&nbsp;&nbsp;<i class="entypo-doc-text"></i><span>体质辨识</span></a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Index/tiaoyang','');?>" title="中医调养">
								&nbsp;&nbsp;<i class="entypo-newspaper"></i><span>中医调养</span></a>
							</li>
						</ul>
					</li>
					<!-- <li>
						<a class="tooltip-tip ajax-load" href="media.html" title="不知道是啥">
						<i class="icon-camera"></i>
						<span>不知道是啥</span>
						</a>
					</li> -->
				</ul>
				<!-- 第二类 -->
				<ul class="topnav menu-left-nest">
					<li>
						<a href="#" style="border-left:0px solid!important;" class="title-menu-left">
						<span>开方</span>
						<i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
						</a>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="#" title="中药开发">
						<i class="icon-window"></i>
						<span>中药开方</span>
						</a>
						<ul>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Kaifang/bingMing');?>" title="病名开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>病名开方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Kaifang/zhengxing');?>" title="证型开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>证型开方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Kaifang/zhiLiaoZhinan');?>" title="治疗指南开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>诊疗指南开方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Kaifang/jingDian');?>" title="取经典方开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>取经典方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Kaifang/jingYan');?>" title="取经验方开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>取经验方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Kaifang/bianZheng');?>" title="取经验方开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>辩证开方</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="<?php echo U('Kaifang/west');?>" title="西药开方">
						<i class="icon-mail"></i>
						<span>西（中成）药开方</span>
						<div class="noft-blue">
							9
						</div>
						</a>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="mail.html" title="西药开方">
						<i class="icon-mail"></i>
						<span>审核</span>
						<div class="noft-blue">
							9
						</div>
						</a>
					</li>
					<!-- <li>
						<a class="tooltip-tip ajax-load" href="icon.html" title="自定义开方">
						<i class="icon-preview"></i>
						<span>自定义开方</span>
						<div class="noft-blue" style="display: inline-block; float: none;">
							New
						</div>
						</a>
					</li> -->
				</ul>
				<!-- 第三类 -->
				<ul class="topnav menu-left-nest">
					<li>
						<a href="#" style="border-left:0px solid!important;" class="title-menu-left">
						<span>第三类大标题</span>
						<i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
						</a>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="#" title="划价收费">
						<i class="icon-window"></i>
						<span>划价收费</span>
						</a>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="#" title="划价收费">
						<i class="icon-window"></i>
						<span>统计查询</span>
						</a>
						<ul>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="病名开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>收费综合查询</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="证型开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>费用汇总</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="治疗指南开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>药品使用统计</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('TongJi/binglicx');?>" title="取经典方开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>病例查询</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="取经验方开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>中医诊治查询统计</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="取经验方开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>西医诊治查询统计</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="mail.html" title="结束开放">
						<i class="icon-mail"></i>
						<span>完成就诊</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- 结束 左侧菜单 -->
<!-- 开始右侧主题 -->

<div class="wrap-fluid" style="height: 85%;">
	<!-- 主题左上角 折起来 -->
    <div class="container-fluid paper-wrap bevel tlbr" style="height: 100%;">
		<!-- 这写主题 -->
		<!-- <div> -->
			
	<!-- 上 -->
	<div class="ka1dadekuang1">
		<fieldset class="ka1" >
			<legend class="ka11">
				点击按钮查询方剂名称
			</legend>
			<div class="kawenzi ">
				&nbsp;
				<img src="/TP3.2.3pykj/Public/img/tu1.jpg" style="margin-top: 20px;  width: 40px; "  alt="图片加载中。。。。">
				&nbsp;
				<div class="kuangneianniu">
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >A</button>
					<button style="background-color:#FFFFFF;  color:red; margin-right: 5px;" >B</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >C</button>
					<button style="background-color:#FFFFFF;  color:red; margin-right: 5px;" >D</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >E</button>
					<button style=" background-color:#FFFFFF; color:red; margin-right: 5px;" >F</button>
					<button style="background-color:#FFFFFF;  color:red; margin-right: 5px;" >G</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >H</button>
					<button style=" background-color:#FFFFFF; color:red; margin-right: 5px;" >I</button>
					<button style=" background-color:#FFFFFF; color:red; margin-right: 5px;" >J</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >K</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >L</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >M</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >N</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >O</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >P</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >Q</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >R</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >S</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >T</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >U</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >V</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >W</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >X</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >Y</button>
					<button style="background-color:#FFFFFF; color:red; margin-right: 5px;" >Z</button>
				</div>
			</div>
		</fieldset>
	</div>
	<!-- 下 -->
	<div style="width: 100%; height:100%;">
		<!-- 下左 -->
		<div class="xiaZuo">
			<div  class="xiaZuosousuo">
				<div class="input-group ">  
			       <input type="text" class="form-control"placeholder="请输入病名" / >  
		            <span class="input-group-btn">  
		                <button class="btn btn-info btn-search">
		               		<b style="color: #000000;">查找</b>
		               	</button>  
				</div>
			</div>
			<div class="xiaZuoshang">
				
				<div class="xiaZuoshang3 ">
					<button  class="btn  btn-info " data-toggle="modal" data-target="#tianjiachufang"  >
						<b style="color: #000000; font-size: 12px; ">添加处方</b>	
					</button>
					<button  class="btn btn-info "  >
						<b id="shanchuchufang" style="color: #000000;  ">删除处方</b>	
					</button>
					<button  class="btn btn-info "  >
						<b style="color: #000000;  ">保存处方</b>	
					</button>
				</div>
				<!-- 添加处方模态框开始 -->
				<div class="modal fade" id="tianjiachufang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <h4 class="modal-title" id="myModalLabel">此处填写处方名称</h4>
			            </div>
			            <div class="modal-body">此处填写处方的药品
									<br>
									<br>
									<br>
									<br>
									<br>
			            </div>
			            <div class="modal-footer">
			                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
			                <button type="button" class="btn btn-primary">确认添加</button>
			            </div>
			        </div><!-- /.modal-content -->
			    </div><!-- /.modal -->
			</div>
				<!-- 添加处方模态框结束 -->

			</div>
				<!-- 方剂列表 -->
				<div data-spy="scroll" data-target="#navbar-example" data-offset="0"  class="xiaZuochufang">
					<table class="table table-condensed">
				 	<tr height="20">
				 		<th class="trdebingming">处方名称</th>
				 		<th class="trdebingming1">主治</th>
				 	</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
					<tr onclick="dianjiyou(this)">
						<td>麻杏石甘汤</td>
						<td>麻杏石甘汤</td>
					</tr>
				 </table>
				</div>
		</div>
		<!-- 下右 -->
		<div class="youchufang">
					<div class="xiaYou1">
						<!-- 左 -->
						<div class="xiaYou2 ">
							<b>处方名称</b>
						</div>
						<!-- 右 -->
						<div style="  margin-top: -45px; margin-left:340px;">
							<!-- 详情按钮 -->
							<button  class="btn btn-danger" data-toggle="modal" data-target="#myXiangQModal"  >
								<b style="color: #000000; ">药解</b>
							</button>
							<button id="shang" class="btn  btn-warning "  style="color: #000000; " >
								<!-- <span class=" glyphicon glyphicon-arrow-up"></span> -->
								<b style="color: #000000; ">上移</b>
							</button>
							<button  id="xia" class="btn  btn-warning "  style="color: #000000; " >
								<!-- <span class=" glyphicon glyphicon-arrow-down"></span> -->
								<b style="color: #000000; ">下移</b>
							</button>
							<button id="chuFangJiayao" class="btn  btn-warning  "  style="color: #000000; " >
								<!-- <span class="glyphicon glyphicon-plus-sign"></span> -->
								<b style="color: #000000; ">加药</b>
							</button>
							<button  id="chuFangjianyao"  class="btn  btn-warning  "  style="color: #000000; ">
								<!-- <span class="glyphicon glyphicon-minus-sign"></span> -->
								<b style="color: #000000; ">减药</b>
							</button>
							<!-- 模态框内容开始 -->
							 <div class="modal fade" id="myXiangQModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					            <div class="modal-dialog" >
					                    <!-- 滚动监听 -->
					                    <div data-spy="scroll" data-target="#navbar-example" data-offset="0" style="height:530px; width:600px; overflow:auto; border:1px #EFD411 solid; background-color:#FFFBF0 ">
					                    	<P><b>名称：治感冒的</b></P>
					                    	
					                    	<br>
					                    	<br>
					                    	<br>
					                    	<P><b>来源：中医科学院</b></P>
					                    	<br>
					                    	<br>
					                    	<br>
					                    	<br>
					                    	<P><b>内容：就是治感冒</b></P>
					                    	<P><b>内容：专治治感冒</b></P>
					                    	<P><b>内容：就是治感冒</b></P>
					                    	<P><b>功能：纯治治感冒</b></P>
					                    	<P><b>功能：内容随意改</b></P>
					                    </div>
					                <div data-dismiss="modal" style=" width:40px; position:absolute; top:0px;right:20px;"><button type="button" class="close btn btn-primary btn-lg" aria-hidden="true">&times;</button></div>
					            </div><!-- /.modal-dialog -->
					        </div>
							<!-- 模态框内容结束 -->
						</div>
					</div>
					<!-- 中 -->
					<div class="xiaYouchuFang ">
						<div data-spy="scroll" data-target="#navbar-example" data-offset="0"  class="xiaYouchuFang1 ">
							<table>
								<!-- 拖拽开始 -->
								<!-- 这不知道干什么用但不能删，删除后拖拽效果就没了（开始） -->
								<div class="container" style="width:100%;" >
							        <div data-force="30" class="layer block">
							            <ul id="foo" class="block__list block__list_words">
							                

							            </ul>
							        </div>

							        <div data-force="18" class="layer block" >
							            <ul id="bar" class="block__list block__list_tags">
							                

							            </ul>
							        </div>
							    </div>
								<!-- 这不知道干什么用但不能删，删除后拖拽效果就没了（结束） -->
								<!-- 真正的拖拽 -->
								<div id="multi">
						            <div class="layer tile" data-force="30">
						                <div class="tile__list">
						                    <!-- 文本框 -->
											<div class="yongLaiKaZhude" style="width: 700px;">
												<div class="sty"  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
													<div class="yaopinshidijige" style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
													<div class="tihuandeneirong">
														<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px; ">
															<input type="text" value="前前" class="chufangyaopinjianfa" >
														</div>
														<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">
															<input type="text" value="甘遂" class="chufangyaopinmingcheng">
														</div>
														<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">
															<input type="text" value="78.00克" class="chufangyaopinshuliang">
														</div>
													</div>
												</div>
											</div>
											<div class="yongLaiKaZhude" style="width: 700px;">
												<div class="sty"  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
													<div class="yaopinshidijige" style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">2</div>
													<div class="tihuandeneirong">
														<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">
															<input type="text" value="生煎" class="chufangyaopinjianfa" >
														</div>
														<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">
															<input type="text" value="银花" class="chufangyaopinmingcheng">
														</div>
														<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">
															<input type="text" value="56.00克" class="chufangyaopinshuliang">
														</div>
													</div>
												</div>
											</div>
											<div class="yongLaiKaZhude" style="width: 700px;">
												<div class="sty"  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
													<div class="yaopinshidijige" style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">3</div>
													<div class="tihuandeneirong">
														<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">
															<input type="text" value="后煎" class="chufangyaopinjianfa" >
														</div>
														<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">
															<input type="text" value="茶" class="chufangyaopinmingcheng">
														</div>
														<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">
															<input type="text" value="53.00克" class="chufangyaopinshuliang">
														</div>
													</div>
												</div>
											</div>
											<div class="yongLaiKaZhude" style="width: 700px;">
												<div class="sty"  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
													<div class="yaopinshidijige" style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">4</div>
													<div class="tihuandeneirong">
														<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">
															<input type="text" value="前前" class="chufangyaopinjianfa" >
														</div>
														<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">
															<input type="text" value="麻黄" class="chufangyaopinmingcheng">
														</div>
														<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">
															<input type="text" value="78.00克" class="chufangyaopinshuliang">
														</div>
													</div>
												</div>
											</div>

						                </div>
						            </div>
						        </div>
							</table>
						</div>
					</div>
					<!-- 下 -->
					<div style=" margin-top: 20px;  width: 100%; color:red; ">
						&nbsp; &nbsp;共 &nbsp; &nbsp; n &nbsp; &nbsp;味 药
							<!-- 按钮 -->
				   		<!-- <div class="xuandinagcfang" >
				    		<button  class="btn  btn-success" style="width: 100px; " ><b style="color: #000000; ">选定此方</b></button>
				    		<button  class="btn btn-warning" style="width: 100px; margin-left: 20px; " ><b style="color: #000000; ">退出</b></button>
				    	</div> -->
					</div>
		</div>
		<div class="zhongyouanniu">
					<!-- 按钮 -->
					<div>
						<button  class="btn btn-success" style="width: 100px;"><b style="color: #000000;">选定此方</b></button>
					</div>
					<br>
		    		<div class="chuFangHeBingtuichu">
		    			<button  class="btn btn-warning" style="width: 100px;"><b style="color: #000000; width: 100px;">退出</b></button>
		    		</div>
				</div>
				<div class="qingchuzhongyouanniu"></div>
	</div>
	<!-- // 点击换色的js -->
	
	<script type="text/javascript">
		// 删除处方的js
		$("#shanchuchufang").click(function(){
			 //利用对话框返回的值 （true 或者 false）
 
    if(confirm("你确信要删除该处方吗"))
    {
 		alert("已删除")
     }
		});
		// <!-- 点击换色的js -->
		function changeTrColor(obj){  
		// alert(56); 
		    var _table=obj.parentNode;
		    for (var i=0;i<_table.rows.length;i++){
		        _table.rows[i].style.backgroundColor="";
		    }   
		    obj.style.backgroundColor="#3399FF";
		}
	</script>
	<!--上移下移css-->
	<style type="text/css">
		/*.sty{background-color:#ffffff;}*/
		.sty1{background-color:cyan;}
	</style>
	<!-- 加药减药 -->
	<script type="text/javascript">
		// 加药
		// $("#chuFangJiayao").click(function(){
		$("#chuFangJiayao").on('click',function(){

			var num = $(".yaopinshidijige:last").html();
			$(".yongLaiKaZhude:last").after('<div class="yongLaiKaZhude" style="width:700px"><div class="sty" style="float:left;margin:5px;border-radius:5px;width:150px;height:100px;border:1px #000 solid"><div class="yaopinshidijige" style="border:1px #FFFBF0 solid;width:10px;position:relative;left:5px;top:5px;color:red">'+(num*1+1)+'</div><div class="tihuandeneirong"><div style="border:1px #000 solid;width:40px;border-width:0 0 1px 0;position:relative;left:100px;top:-10px"><input type="text" value="" class="chufangyaopinjianfa"></div><div style="border:1px #000 solid;width:80px;border-width:0 0 1px 0;position:relative;left:10px;top:-5px;font-size:20px"><input type="text" value="" class="chufangyaopinmingcheng"></div><div style="border:1px #000 solid;width:70px;border-width:0 0 1px 0;position:relative;left:50px;top:0;text-align:right"><input type="text" value="00.00克" class="chufangyaopinshuliang"></div></div></div></div>');
		});
		// 减药
		$("#chuFangjianyao").on('click',function(){
			// alert(123);
			if ($(".sty1").html()) {
				var a = $(".sty1").parent(".yongLaiKaZhude").empty();
			}else{
				alert('哎呦，你忘了选中药品');
			}
		});
	</script>
		<!--上移下移js-->
		<script type="text/javascript">
			//    点击变为选定状态
			// $(".sty").click(function(){
			$(".xiaYouchuFang").on('click','.sty',function(){
//        有sty1就删除没有就创建
				$(this).toggleClass("sty1");
//        除了选定的意外所有的sty1变为sty
				$(".sty1").not(this).attr("class","sty");
			});
			$("#shang").click(function(){
//			选中的
				var axuanzhong=$(".sty1>div:last-child").html();
//        判断父元素前一个是否存在
				if($(".sty1").parent().prev().html()){
//            alert('有');
					//			前一个的
					var xuanqian =$(".sty1").parent(".yongLaiKaZhude").prev().children().children(".tihuandeneirong").html();
//           交换内容
					$(".sty1").parent(".yongLaiKaZhude").prev().children().children(".tihuandeneirong").html(axuanzhong);
					$(".sty1>div:last-child").html(xuanqian);
					//        前一个也被选取
					var c = $(".sty1").parent(".yongLaiKaZhude").prev().children().attr("class","sty1");
//        使选中的里面最后一个不被选取
					$(".sty1:last").attr("class","sty");
				}else{
//            判断是否有药品被选中
					if($(".sty1").html()){
						alert('放弃吧，当前的药品已经是第一个了');
						$(".sty1").attr("class","sty");
					}else{
						alert("没有点击药品");
					}

				}
			});
			$("#xia").click(function(){
//			选中的
				var axuanzhong=$(".sty1>div:last-child").html();
//        判断父元素后一个是否存在
				if($(".sty1").parent().next().html()){
//            alert('有');
					//			后一个的
					var xuanqian =$(".sty1").parent(".yongLaiKaZhude").next().children().children(".tihuandeneirong").html();
//           交换内容
					$(".sty1").parent(".yongLaiKaZhude").next().children().children(".tihuandeneirong").html(axuanzhong);
					$(".sty1>div:last-child").html(xuanqian);
					//        后一个也被选取
					var c = $(".sty1").parent(".yongLaiKaZhude").next().children().attr("class","sty1");
//        使选中的里面第一个不被选取
					$(".sty1:first").attr("class","sty");
				}else{
					//            判断是否有药品被选中
					if($(".sty1").html()){
						alert("放弃吧，已经是最后一个了");
						$(".sty1").attr("class","sty");
					}else{
						alert("没有点击药品");
					}

				}
			});
		</script>
		<!-- 拖拽的js -->
		
		<script src="/TP3.2.3pykj/Public/tuozhuai/Sortable.js"></script>
		<script src="/TP3.2.3pykj/Public/tuozhuai/st/app.js"></script>


		<!-- </div> -->
    </div>
</div>

<!-- 结束右侧主题 -->
    <!--开始 最右侧隐藏的菜单 -->
    <div class="sb-slidebar sb-right">
    	<!-- 第一类 -->
        <div class="right-wrapper">
            <div class="row">
				 <div class="col-lg-12">
                    <span class="label label-warning label-chat">四大名著</span>
                    <ul class="chat">
                        <li>
                            <a href="#">
                                <span>
                                </span><b>伤寒论</b>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                </span><b>黄帝内经</b>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                </span><b>金匮要略</b>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                </span><b>温病条辨</b>
                            </a>
                        </li>
                    </ul>
                </div>
                <div><br><br></div>
                 <div class="col-lg-12">
                    <span class="label label-warning label-chat">不知道叫啥</span>
                    <ul class="chat">
                        <li>
                            <a href="#">
                                <span>
                                </span><b>我的文档</b>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                </span><b>临床诊断</b>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                </span><b>中医药学会诊断指南</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
		<!-- 第二类 -->
        <!-- <div style="margin-top:0;" class="right-wrapper">
            <div class="row">
                <h3>
                    <span><i class="entypo-chat"></i>&nbsp; &nbsp;第二类</span>
                </h3>
                <a href=""><p>我的文档</p></a>
                <a href=""><p>中医药学会诊断指南</p></a>
                <div class="col-lg-12">
                    <span class="label label-warning label-chat">标题</span>
                    <ul class="chat">
                        <li>
                            <a href="#">
                                <span>
                                </span><b>知识库</b>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                </span><b>和知识库一类</b>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>&nbsp;</p>
                 <div class="col-lg-12">
                    <span class="label label-warning label-chat">又一个标题</span>
                    <ul class="chat">
                        <li>
                            <a href="#">
                                <span>
                                </span><b>收费</b>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                </span><b>不知道写啥</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->
    </div>

    <!-- 结束 最右侧隐藏的菜单-->
    <script type="text/javascript" src="/TP3.2.3pykj/Public/muban/assets/js/jquery.js"></script>
    <!-- <script src="assets/js/progress-bar/src/jquery.velocity.min.js"></script> -->
    <!-- <script src="assets/js/progress-bar/number-pb.js"></script> -->
    <!-- <script src="assets/js/progress-bar/progress-app.js"></script> -->



    <!-- MAIN EFFECT -->
    <!-- <script type="text/javascript" src="assets/js/preloader.js"></script> -->
    <script type="text/javascript" src="/TP3.2.3pykj/Public/muban/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="/TP3.2.3pykj/Public/muban/assets/js/app.js"></script>
    <script type="text/javascript" src="/TP3.2.3pykj/Public/muban/assets/js/load.js"></script>
    <script type="text/javascript" src="/TP3.2.3pykj/Public/muban/assets/js/main.js"></script>
	<script src="/TP3.2.3pykj/Public/js/shijian.js"></script>
	<!--<script src="/TP3.2.3pykj/Public/js/bingshi.js"></script>-->
	
<div style="text-align:center;">
<p>Health home <a href="http://www.cssmoban.com/" target="_blank" title="模板之家" style="color: #9ea7b3;">健康之家</a>
 - Peng yu companies <a href="http://www.cssmoban.com/" title="网页模板" target="_blank" style="color: #9ea7b3;">鹏宇公司</a></p>
</div>
</body>

</html>