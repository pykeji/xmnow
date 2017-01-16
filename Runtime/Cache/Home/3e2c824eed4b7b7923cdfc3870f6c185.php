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

	<!-- 自己写的css -->
	<link rel="stylesheet" type="text/css" href="/tp3.2.3pykj/Public/yeMiancss/kaiFang3.css">

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
		
	<div style=" width: 100%;height: 100%; ">
		<!-- 使边框中有文字 -->
		<div class="ka1dadekuang1">
			<div class="input-group ">  
			       <input type="text" class="form-control"placeholder="请输入病名" / >  
		            <span class="input-group-btn">  
		                <button class="btn btn-info btn-search">
		               		<b style="color: #000000;">查找</b>
		               	</button>  
		            </span>
				</div>
		</div>
		<!-- 治疗指南的模态框 -->
		<div class="zlznmtk">
			<button  class="btn  btn-info btn-sm " data-toggle="modal" data-target="#myZhilModal" >
				<b style="color: #000000; " >治疗指南</b>
			</button>
			
		</div>
			<!-- 模态框内容开始 -->
			<div class="modal fade" id="myZhilModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	            <div class="modal-dialog" >
	                    <!-- 滚动监听 -->
	                    <div data-spy="scroll" data-target="#navbar-example" data-offset="0" style="height:530px; width:600px; overflow:auto; border-radius:10px;  background-color:#FFFBF0 ">
	                    	<div style="text-align: center;">
	                    		<h3>名称</h3>
	                    	</div>
	                    	<p>标题：阿萨德发生大</p>
	                    	<p>内容：问问哦</p>
	                    </div>
	                <div data-dismiss="modal" style=" width:40px; position:absolute; top:0px;right:12px;"><button  class="btn ">&times;</button></div>
	            </div><!-- /.modal-dialog -->
	        </div>
			<!-- 模态框内容结束 -->
		<div class="ka1dadekuang2" >

			<div class="input-group ">  
			       <input type="text" class="form-control"placeholder="请输入病名" / >  
		            <span class="input-group-btn">  
		                <button class="btn btn-info btn-search">
		               		<b style="color: #000000;">查找</b>
		               	</button>  
				</div>
		</div>
    	<!-- <div class="ka1shangyou" >
    		<input type="checkbox" id="chuFangHeBing">
    		<label for="chuFangHeBing">处方合并</label>
    		<button  class="btn  btn-success" style="margin-left: 20px; color: #000000; margin-right: 20px;" ><b>选定此方</b></button>
    		<button  class="btn btn-warning" style="color: #000000; " ><b>退出</b></button>
    	</div> -->
		<div class="qingchushangfudong"></div>
    	<!-- 滚动监听 -->
    	<!--  主题内容-->
			<!-- 左大块 -->
			<div class="ka3ZuoDaKuai">
				<!-- 折叠 -->
				<div><h3>中华中医药学会</h3></div>
				<div class="panel-group" id="accordion">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" 
								   href="#collapseTwo">
									内科
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse">
							<div class="panel-body">
								<p>咳血</p>
								<p>咳血</p>
								<p>咳血</p>
								<p>哮病</p>
								<p>哮病</p>
								<p>哮病</p>
								<p>消渴</p>
								<p>消渴</p>
								<p>消渴</p>
								<p>消渴</p>
								<p>消渴</p>
								<p>消渴</p>
								<p>消渴</p>
								<p>消渴</p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" 
								   href="#collapseThree">
									外科
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse">
							<div class="panel-body">
								<p>grr</p>
								<p>grr</p>
								<p>grr</p>
								<p>grr</p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" 
								   href="#collapseFour">
									脑科
								</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse">
							<div class="panel-body">
								<p>grr</p>
								<p>grr</p>
								<p>grr</p>
								<p>grr</p>
							</div>
						</div>
					</div>
				</div>
					
			</div>
			<!-- 右大块浮动 -->
			<div class="ka3YouDaKuai" >
				<!-- 右上大块 -->
					<div   class="ka3YouShangDakuaiChuFang">
					    <form action="ads">
							 <table  style="width:100%; border: 1px #F0F0F0 solid;" border='1' cellspacing="0">
							 	<tr >
							 		<th style="width:50px; text-align: center; background-color:#FFEE99; ">选择</th>
							 		<th style="width:200px; text-align: center; background-color:#FFEE99;">辩证</th>
							 		<th style="width:200px; text-align: center; background-color:#FFEE99;">说明</th>
							 		<th style="width:200px; text-align: center; background-color:#FFEE99;">分证论治</th>
							 		<th style="width:300px; text-align: center; background-color:#FFEE99;">处方名称</th>
							 	</tr>

								<tr onclick="dianjiyou(this)">
									<td style=" border: 1px #F0F0F0 solid; height:20px;text-align:center;">
										<input type="checkbox" name="aa" value="jlk">
									</td>
									<td style="border: 1px #F0F0F0 solid; ">
										头疼症
									</td>
									<td style="border: 1px #F0F0F0 solid; ">就是头疼别的没啥</td>
									<td style="border: 1px #F0F0F0 solid; ">疏风清热</td>
									<td style="border: 1px #F0F0F0 solid; ">治头疼的</td>
								</tr>
								<tr onclick="dianjiyou(this)">
									<td style=" border: 1px #F0F0F0 solid; height:20px;text-align:center;">
										<input type="checkbox" name="aa" value="jlk">
									</td>
									<td style="border: 1px #F0F0F0 solid; ">
										头疼症
									</td>
									<td style="border: 1px #F0F0F0 solid; ">就是头疼别的没啥</td>
									<td style="border: 1px #F0F0F0 solid; ">疏风清热</td>
									<td style="border: 1px #F0F0F0 solid; ">治头疼的</td>
								</tr>
								
							 </table>
						</form>
					</div>
				<!-- 中间汉字 -->
				<div class="ka3youShangHanZi">
					<span  class="ka3youShangHanZi1">
						<img src="/tp3.2.3pykj/Public/img/iconpng.png" style="width:30px;" alt="图片加载中。。。。">
					</span>
					<!-- <span class="ka3youShangHanZi2"> -->
						<b class="ka3youShangHanZi2">处方信息</b>
					<!-- </span> -->
					<span class="ka3youShangHanZi3 " >
						<b>注：双击药品名称。显示药解信息！</b>
					</span>
				</div>
				<div style="width: 100%;height: 100%;">
					<!-- 下侧处方 -->
					<div data-spy="scroll" data-target="#navbar-example" data-offset="0" class="ka3xiaCeChuFang">
						<table>
							<div  class="ka3xiaCeChuFangZI">
								<strong>方剂名称:<尽量快圣诞节（爱思）></strong>
							</div>
							<div style="width: 700px;">
								<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
									<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
									<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
									<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
									<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
								</div>
							</div>
							<div style="width: 700px;">
								<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
									<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
									<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
									<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
									<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
								</div>
							</div>
							<div style="width: 700px;">
								<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
									<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
									<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
									<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
									<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
								</div>
							</div>
							<div style="width: 700px;">
								<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
									<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
									<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
									<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
									<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
								</div>
							</div>
							<div style="width: 700px;">
								<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
									<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
									<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
									<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
									<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
								</div>
							</div>
							<div style="width: 700px;">
								<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
									<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
									<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
									<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
									<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
								</div>
							</div>
							<div style="width: 700px;">
								<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
									<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
									<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
									<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
									<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
								</div>
							</div>
							<div style="width: 700px;">
								<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
									<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
									<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
									<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
									<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
								</div>
							</div>
							<div style="width: 700px;">
								<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
									<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
									<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
									<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
									<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
								</div>
							</div>
							<div style="width: 700px;">
								<div  style=" float:left; margin:5px; border-radius:5px;  width:150px; height:100px; border: 1px #000000 solid;">
									<div style="border: 1px #FFFBF0 solid; width:10px; position:relative; left: 5px; top: 5px; color: red;">1</div>
									<div style="border: 1px #000000 solid; width:40px; border-width:0 0 1px 0;position:relative; left: 100px; top: -10px;">后下</div>
									<div style="border: 1px #000000 solid; width:80px; border-width:0 0 1px 0;  position:relative; left: 10px; top: -5px; font-size:20px; ">前胡</div>
									<div style="border: 1px #000000 solid; width:70px; border-width: 0 0 1px 0; position:relative; left: 50px; top: 0px; text-align: right;">9.00克</div>
								</div>
							</div>
						</table>
					</div>
					<div class="ka1zuihouanniu" >
			    		<input type="checkbox" id="chuFangHeBing">
			    		<label for="chuFangHeBing" ><b style="color: #000000; font-size: 15px;">处方合并</b></label>
			    		<div>
			    		<button  class="btn btn-success" style="width: 100px;"><b style="color: #000000;">选定此方</b></button>
			    		</div>
						
			    		<div class="chuFangHeBingtuichu">
			    		<button  class="btn btn-danger" style="width: 100px;"><b style="color: #000000; width: 100px;">退出</b></button>
			    		</div>
			    	</div>
			    	<div class="qingchuanniufudong"></div>
				</div>
					
			</div>
			<!-- 清除浮动 -->
			<div class="qingchushangfudong"></div>
    </div>
     <!-- 点击换色的js -->
	<script type="text/javascript">
		// <!-- 点击换色的js -->
		function changeTrColor(obj){  
		// alert(56); 
		    var _table=obj.parentNode;
		    for (var i=0;i<_table.rows.length;i++){
		        _table.rows[i].style.backgroundColor="";
		    }   
		    obj.style.backgroundColor="#3399FF";
		}
		// 右侧处方名点击变色
		function dianjiyou(obj){   
			// alert(123);
		    var _tableyou=obj.parentNode;
		    for (var i=0;i<_tableyou.rows.length;i++){
		        _tableyou.rows[i].style.backgroundColor="";
		    }   
		    obj.style.backgroundColor="#3399FF";
		}
	</script>
	<!-- 简单树形的js -->
	<script type="text/javascript"> 
		window.onload = function()
		{
			var cate = document.getElementById("categoryTree");
			var bBs = cate.getElementsByTagName("p");
			var len = bBs.length;
			if (len > 0)
			{
				for (var i = 0; i < len; i++) {
					var oTag = bBs[i].parentNode.getElementsByTagName("ul")[0];
					if (oTag) {
						bBs[i].style.background = "#666";
						bBs[i].onclick = function() {
							var oTag = this.parentNode.getElementsByTagName("ul")[0];
							if (!(oTag.open)) {
								oTag.style.display = "none";
								oTag.open = true;
							} else {
								oTag.style.display = "block";
								oTag.open = null;
							}
						}
					}
				}
			} else {
				throw new Error("html struct error!");
			}
		}
	</script>

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