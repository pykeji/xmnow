<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>中医辅助开方</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->

	<!-- 自己写的css -->
	<link rel="stylesheet" type="text/css" href="/work/Public/yeMiancss/kaiFang3.css">

<link rel="stylesheet" href="/work/Public/muban/assets/css/style.css">
<link rel="stylesheet" href="/work/Public/muban/assets/css/loader-style.css">
<link rel="stylesheet" href="/work/Public/muban/assets/css/bootstrap.css">

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
<link rel="shortcut icon" href="/work/Public/muban/assets/ico/minus.png">
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
					<img alt="" class="admin-pic img-circle" src="/work/Public/muban/assets/img/canga.jpg">
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
		<img src="/work/Public/muban/assets/img/pengyu1.png"  alt="logo" style="  width: 150px; margin-left:30px; ">
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
							<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="自己登记">
								&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i><span>患者登记</span></a>
							</li>
							<li>
							<a class="tooltip-tip2 ajax-load" href="blog-detail.html" title="历史登记">
								&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-newspaper"></i><span>患者预约</span></a>
							</li>
							<li>
							<a class="tooltip-tip2 ajax-load" href="blog-detail.html" title="历史登记">
								&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-newspaper"></i><span>查询</span></a>
							</li>
						</ul>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="#" title="健康档案">
						<i class="icon-feed"></i>
						<span>健康档案</span>
						</a>
						<ul>
							<li>
							<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="自己登记">
								&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i><span>体质辨识</span></a>
							</li>
							<li>
							<a class="tooltip-tip2 ajax-load" href="blog-detail.html" title="历史登记">
								&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-newspaper"></i><span>中医调养</span></a>
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
							 		<th style="width:50px; text-align: center; background-color:#D7D715; ">选择</th>
							 		<th style="width:200px; text-align: center; background-color:#D7D715;">辩证</th>
							 		<th style="width:200px; text-align: center; background-color:#D7D715;">说明</th>
							 		<th style="width:200px; text-align: center; background-color:#D7D715;">分证论治</th>
							 		<th style="width:300px; text-align: center; background-color:#D7D715;">处方名称</th>
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
						<img src="/work/Public/img/iconpng.png" style="width:30px;" alt="图片加载中。。。。">
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
			    		<button  class="btn btn-warning" style="width: 100px;"><b style="color: #000000; width: 100px;">退出</b></button>
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
    <script type="text/javascript" src="/work/Public/muban/assets/js/jquery.js"></script>
    <!-- <script src="assets/js/progress-bar/src/jquery.velocity.min.js"></script> -->
    <!-- <script src="assets/js/progress-bar/number-pb.js"></script> -->
    <!-- <script src="assets/js/progress-bar/progress-app.js"></script> -->



    <!-- MAIN EFFECT -->
    <!-- <script type="text/javascript" src="assets/js/preloader.js"></script> -->
    <script type="text/javascript" src="/work/Public/muban/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="/work/Public/muban/assets/js/app.js"></script>
    <script type="text/javascript" src="/work/Public/muban/assets/js/load.js"></script>
    <script type="text/javascript" src="/work/Public/muban/assets/js/main.js"></script>

<div style="text-align:center;">
<p>Health home <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">健康之家</a>
 - Peng yu companies <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">鹏宇公司</a></p>
</div>
</body>

</html>