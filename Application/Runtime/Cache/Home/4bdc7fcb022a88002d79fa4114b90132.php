<?php if (!defined('THINK_PATH')) exit();?><!--最新活动-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/Public/style/style_1.css">
	<link rel="stylesheet" type="text/css" href="/Public/style/style_1_pic.css">
	<title>西电小觅音协会</title>
</head>
<body>
<a name="top"></a>
<div class="container">
	<header>
		<div class="banner-left">
			<h1>小觅音</h1>
		</div>
		<nav>
			<ul>
				<li><a href="/index.php" target="_self"> 首页</a></li>
				<li><a href="/index.php?c=activities" target="_self"> 最新活动</a></li>
				<li><a href="/index.php?c=bands" target="_self"> 乐队介绍</a></li>
				<li><a href="/index.php?c=talk" target="_self"> 交流版块</a></li>
				<li><a href="/index.php?c=aboutus" target="_self"> 关于我们</a></li>
				<li><a href="/index.php?c=appointment" target="_self"> 排练预约</a></li>
				<li class="move"></li>
			</ul>
		</nav>
		<div class="banner-right">
			<span><a onclick="window.open('/index.php?c=login','','height=550,width=600,top=100,left=300,toolbar=no,menubar=no,scrollbars=no,resizable=no,location=no,status=no')">登录</a></span>
			<div class="move"></div>
		</div>
	</header>
<br>
<!--轮播图 开始 -->
<div class="main_banner">

	<div class="main_banner_wrap">
		<canvas id="myCanvas" width="0" height="0"></canvas>
		<div class="main_banner_box" id="m_box">
			<a href="javascript:void(0)" class="banner_btn js_pre">
				<span class="banner_btn_arrow"><i></i></span>
			</a>
			<a href="javascript:void(0)" class="banner_btn btn_next js_next">
				<span class="banner_btn_arrow"><i></i></span>
			</a>
			<ul>
				<li id="imgCard0">
					<a href=""><span style="opacity:0;"></span></a>      
					<img src="/Public/img/pic1.png" alt="">
					<p style="bottom:0">黑嗓圣剑</p>
				</li> 
				<li id="imgCard1">
					<a href=""><span style="opacity:0.4;"></span></a>      
					<img src="/Public/img/pic2.jpg" alt="">
					<p>甜萌菠萝</p>
				</li> 
				<li id="imgCard2">
					<a href=""><span style="opacity:0.4;" ></span></a>        
					<img src="/Public/img/pic1.png" alt="">
					<p>return0;主唱</p>
				</li> 
				<li id="imgCard3">
					<a href=""><span style="opacity:0.4;"></span></a>      
					<img src="/Public/img/pic2.jpg" alt="">
					<p>坚果壳主唱</p>
				</li> 
				<li id="imgCard4">
					<a href=""><span style="opacity:0.4;"></span></a>      
					<img src="/Public/img/pic1.png" alt="">
					<p>metal！</p>
				</li> 
			</ul>
			<!--火狐倒影图层-->
			<p id="rflt"></p>
			<!--火狐倒影图层-->
		</div>
		<!--序列号按钮-->
		<div class="btn_list">
			<span class="curr"></span><span></span><span></span><span></span><span></span>        
		</div>
	</div>
	
</div>
<!--轮播图 结束 -->



	<div id="passage-body">
		<div class="passage">
			<h2>百团大战</h2>
		<h3>地点：礼仪广场&nbsp;时间：2016.9.25-26</h3>
		<h6 class="passage-info">社团招新盛会</h6><br>
		<p>百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战<br></p>
		</div>
		<div class="passage">
			<h2>百团大战</h2>
		<h3>地点：礼仪广场&nbsp;时间：2016.9.25-26</h3>
		<h6 class="passage-info">社团招新盛会</h6><br>
		<p>百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战百团大战<br></p>
		</div>
	</div>
	<footer>
 		<div class="mes">
 			<span>&copy; by 小觅音XD</span>
 		</div>
 		<div class="back">
 			<a href="#top">Back to top</a>
 		</div>
 	</footer>

</div>
<script type="text/javascript" src="/Public/js/jquery.js"></script>
<script type="text/javascript" src="/Public/js/script.js"></script>
</body>
</html>