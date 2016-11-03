<?php if (!defined('THINK_PATH')) exit();?><!--首页-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/Public/style/style.css">
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
	<section id="section-1">
		<div class="mes">
			<p>TIME TO ROCK</p>
			<p>年轻人，组起你的乐队</p>
			<p>一起噪动西电</p>
			<span><a onclick="window.open('login.html','','height=550,width=600,top=100,left=300,toolbar=no,menubar=no,scrollbars=no,resizable=no,location=no,status=no')">加入我们</a></span>
		</div>
	</section>

	<section id="section-2">
		<div class="cell">
			<div class="img">
				<img src="/Public/img/logo2_01.png">
			</div>
			<div class="mes">
				<p>这里的bass手会带你玩转slap<br>“蹦蹦蹦蹦...”</p>
			</div>
		</div>
		<div class="cell">
			<div class="img">
				<img src="/Public/img/logo2_02.png">
			</div>
			<div class="mes">
				<p>这里的鼓手，jazz，metal一应俱全<br>“动次打次...”</p>
			</div>
		</div>
		<div class="cell">
			<div class="img">
				<img src="/Public/img/logo2_03.png">
			</div>
			<div class="mes">
				<p>这里的吉他手会带你练出麒麟臂<br>“针针扎针...”</p>
			</div>
		</div>
		<div class="cell">
			<div class="img">
				<img src="/Public/img/logo2_04.png">
			</div>
			<div class="mes">
				<p>这里的男女主唱会为你发声<br>“time to rock...”</p>
			</div>
		</div>
	</section>
 	<footer>
 		<div class="mes">
 			<span>&copy; by 小觅音XD</span>
 		</div>
 		<div class="back">
 			<a href="#top">Back to top</a>
 		</div>
 	</footer>
</div>
</body>
</html>