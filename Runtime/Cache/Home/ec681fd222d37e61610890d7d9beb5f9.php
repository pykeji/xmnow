<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>中医辅助开方</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->
<link rel="stylesheet" href="/zyfuzhu/Public/muban/assets/css/style.css">
<link rel="stylesheet" href="/zyfuzhu/Public/muban/assets/css/loader-style.css">
<link rel="stylesheet" href="/zyfuzhu/Public/muban/assets/css/bootstrap.css">

	<link rel="stylesheet" href="/zyfuzhu/Public/muban/assets/css/easyui.css">
	<link rel="stylesheet" href="/zyfuzhu/Public/muban/assets/css/huajia.css">

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
<link rel="shortcut icon" href="/zyfuzhu/Public/muban/assets/ico/minus.png">
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
					<img alt="" class="admin-pic img-circle" src="/zyfuzhu/Public/muban/assets/img/hamody.jpg">
					Hi, hamody <b class="caret"></b>
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
						<li>
						<a href="<?php echo U('Index/index');?>">
						<span class="glyphicon glyphicon-record"></span>&#160;&#160;退出</a>
						</li>
					</ul>
				</li>
				<!-- 设置 -->
				<li>
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
					<span class="glyphicon glyphicon-heart-empty"></span>&#160;&#160;自定义</a>
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
		<img src="/zyfuzhu/Public/muban/assets/img/pengyu1.png"  alt="logo" style="  width: 150px; margin-left:30px; ">
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
						<span>登记功能</span>
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
							<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="接诊区">
								&nbsp; &nbsp; &nbsp; &nbsp; <i class="glyphicon glyphicon-user"></i><span>接诊区</span></a>
							</li>
							<li>
							<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="患者登记">
								&nbsp; &nbsp; &nbsp; &nbsp; <i class="glyphicon glyphicon-user"></i><span>患者登记</span></a>
							</li>
							<li>
							<a class="tooltip-tip2 ajax-load" href="blog-detail.html" title="患者预约">
								&nbsp; &nbsp; &nbsp; &nbsp; <i class="glyphicon glyphicon-user"></i><span>患者预约</span></a>
							</li>
							<li>
							<a class="tooltip-tip2 ajax-load" href="blog-detail.html" title="查询">
								&nbsp; &nbsp; &nbsp; &nbsp; <i class="icon-search"></i><span>查询</span></a>
							</li>
						</ul>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="#" title="健康档案">
						<i class="glyphicon glyphicon-file"></i>
						<span>健康档案</span>
						</a>
						<ul>
							<li>
							<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="体质辨识">
								&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i><span>体质辨识</span></a>
							</li>
							<li>
							<a class="tooltip-tip2 ajax-load" href="blog-detail.html" title="中医调养">
								&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i><span>中医调养</span></a>
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
						<span>开方功能</span>
						<i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
						</a>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="#" title="中药开方">
						<i class="icon-window"></i>
						<span>中药开方</span>
						</a>
						<ul>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="病名开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>病名开方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="证型开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>证型开方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="诊疗指南开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>诊疗指南开方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="取经典方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>取经典方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="取经验方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>取经验方</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="blog-list.html" title="自定义开方">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="entypo-doc-text"></i>
									<span>自定义开方</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="mail.html" title="西药开方">
						<i class="icon-window"></i>
						<span>西（中成）药开方</span>
						<!-- <div class="noft-blue">
							9
						</div> -->
						</a>
					</li>
					<!-- <li>
						<a class="tooltip-tip ajax-load" href="mail.html" title="审核">
						<i class="glyphicon glyphicon-eye-open"></i>
						<span>审核</span>
						<div class="noft-blue">
							9
						</div>
						</a>
					</li> -->
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
						<span>其他功能</span>
						<i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
						</a>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="<?php echo U('Huajia/index');?>" title="划价收费">
						<i class="glyphicon glyphicon-credit-card"></i>
						<span>划价收费</span>
						</a>
					</li>
					<li>
						<a class="tooltip-tip ajax-load" href="#" title="划价收费">
						<i class="glyphicon glyphicon-search"></i>
						<span>统计查询</span>
						</a>
						<ul>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Chaxun/sfzonghe');?>" title="收费综合查询">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="icon-search"></i>
									<span>收费综合查询</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Chaxun/fyhuizong');?>" title="费用汇总">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="icon-search"></i>
									<span>费用汇总</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Chaxun/yptongji');?>" title="药品使用统计">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="icon-search"></i>
									<span>药品使用统计</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Chaxun/blchaxun');?>" title="病例查询">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="icon-search"></i>
									<span>病例查询</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Chaxun/zyzzchaxun');?>" title="中医诊治查询统计">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="icon-search"></i>
									<span>中医诊治查询统计</span>
								</a>
							</li>
							<li>
								<a class="tooltip-tip2 ajax-load" href="<?php echo U('Chaxun/xyzzchaxun');?>" title="西医诊治查询统计">
									&nbsp; &nbsp; &nbsp; &nbsp; <i class="icon-search"></i>
									<span>西医诊治查询统计</span>
								</a>
							</li>
						</ul>
					</li>
					<!-- <li>
						<a class="tooltip-tip ajax-load" href="mail.html" title="完成就诊">
						<i class="glyphicon glyphicon-floppy-disk"></i>
						<span>完成就诊</span>
						</a>
					</li> -->
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
			
	<div class="top">
		<span>病历号:<b>00000022</b></span>
		<span>姓名:<b>李小龙</b></span>
		<span>性别:<b>男</b></span>
		<span>年龄:<b>37</b></span>
		<span>就诊日期:<b>2017-01-09</b></span>
	</div>
	<div class="center">
		<div class="center_t">
			<table class="tab1">
				<tr>
					<td class="tab1_l">
						<img src="/zyfuzhu/Public/muban/assets/img/chufang.png" width="23" height="23">
						<font size="+1">收费项目</font>
					</td>
					<td class="tab1_r">
						<h4>
							<font color="#DDAA00">票据号:</font>
							<font color="#C63300">201701090001</font>
						</h4>
					</td>
				</tr>
			</table>
			<table class="tab2">
				<tr>
					<th width="25%">费用名称</th>
					<th width="15%">规格</th>
					<th width="15%">单位</th>
					<th width="15%">单价</th>
					<th width="15%">数量</th>
					<th width="15%">金额</th>
				</tr>
				<tr>
					<td><!-- 通过选择名称在数据库查询其他信息 -->
						<input class="easyui-combogrid" data-options="
							panelWidth: 710,
							idField: 'name',
							textField: 'name',
							url: '/zyfuzhu/Public/muban/assets/css/datagrid_data.json',
							columns: [[
								{field:'name',title:'名称',width:215,align:'left'},
								{field:'guige',title:'规格',width:130,align:'center'},
								{field:'danwei',title:'单位',width:100,align:'center'},
								{field:'danjia',title:'单价',width:100,align:'right'},
								{field:'pym',title:'拼音码',width:165,align:'center'},
							]],
							fitColumns: true
						">
					</td>
					<td><input type="text" name="guige" value=""></td>
					<td><input type="text" name="danwei" value=""></td>
					<td><input type="text" name="danjia" value=".00"></td>
					<td><input type="text" name="number" value=".00"></td>
					<td><input type="text" name="jine" value=".00"></td>
				</tr>
			</table>
		</div>
		<div class="center_c">
			<table class="tab3">
				<tr>
					<td class="tab3_l">
						<img src="/zyfuzhu/Public/muban/assets/img/iconpng.png" width="23" height="23">
						<font size="+1">收费列表</font>
					</td>
				</tr>
			</table>
			<div class="table4">
				<table class="tab4">
					<tr>
						<th>序号</th>
						<th width="300">项目名称</th>
						<th>单位</th>
						<th>单价</th>
						<th>数量</th>
						<th>金额</th>
					</tr>
					<tr>
						<td>1</td>
						<td class="left">西药</td>
						<td></td>
						<td>4.00</td>
						<td>1.00</td>
						<td>4.00</td>
					</tr>
					<tr>
						<td>2</td>
						<td class="left">中草药</td>
						<td></td>
						<td>12.60</td>
						<td>1.00</td>
						<td>12.60</td>
					</tr>
					<tr>
						<td>3</td>
						<td class="left">西药</td>
						<td></td>
						<td>3.00</td>
						<td>3.00</td>
						<td>9.00</td>
					</tr>
					<tr>
						<td>4</td>
						<td class="left">中草药</td>
						<td></td>
						<td>5.60</td>
						<td>4.00</td>
						<td>22.40</td>
					</tr>
					<tr>
						<td colspan='2'><font color="red"><b>合计金额：</b></font></td>
						<td colspan="4"><font color="red"><b>48.00</b></font></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="bottom">
		<div class="bottom_c">
			<span class="btn btn-success"><p>收费</p></span>
			<span class="btn btn-warning"><p>退费</p></span>
			<span class="btn btn-danger"><p>删除</p></span>
			<span class="btn btn-danger"><p>退出</p></span>
			<p id="demo"></p>
		</div>
	</div>

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
                    <span class="label label-warning label-chat">中医四大名著</span>
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
                    <span class="label label-warning label-chat">其他</span>
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
    <script type="text/javascript" src="/zyfuzhu/Public/muban/assets/js/jquery.js"></script>
    <!-- <script src="assets/js/progress-bar/src/jquery.velocity.min.js"></script> -->
    <!-- <script src="assets/js/progress-bar/number-pb.js"></script> -->
    <!-- <script src="assets/js/progress-bar/progress-app.js"></script> -->



    <!-- MAIN EFFECT -->
    <!-- <script type="text/javascript" src="assets/js/preloader.js"></script> -->
    <script type="text/javascript" src="/zyfuzhu/Public/muban/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="/zyfuzhu/Public/muban/assets/js/app.js"></script>
    <script type="text/javascript" src="/zyfuzhu/Public/muban/assets/js/load.js"></script>
    <script type="text/javascript" src="/zyfuzhu/Public/muban/assets/js/main.js"></script>
    <script type="text/javascript" src="/zyfuzhu/Public/muban/assets/js/jquery.easyui.min.js"></script>
	<center>
		<p></p>
		<p>
			<a href="http://www.pengyukeji.com/" target="_blank">河北鹏宇电子科技有限公司</a>
		</p>
	</center>
</body>

</html>