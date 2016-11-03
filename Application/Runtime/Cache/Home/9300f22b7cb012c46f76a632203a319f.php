<?php if (!defined('THINK_PATH')) exit();?><!--交流板块-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <link rel="stylesheet" type="text/css" href="/Public/style/main.css">
	<link rel="stylesheet" type="text/css" href="/Public/style/style_5.css">
	<title>西电小觅音协会</title>
<body>
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
    <div id="container">
    	
    </div>
    <div id="sidebar">
		<h2>选择排练时间段</h2>
		<input type="button" value="下午">
		<input type="button" value="晚一">
		<input type="button" value="晚二">
    	
    </div>
    <script type="text/javascript" src="../script/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="../script/datePicker.js"></script>

</body>

</html>