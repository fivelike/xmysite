<?php session_start(); ?>
<!--交流板块-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../style/style_3.css">
	<title>西电小觅音协会</title>
</head>
<body>
<div class="container">
	<header>
		<div class="banner-left">
			<h1>小觅音</h1>
		</div>
		<nav>
			<ul>
				<li><a href="index.php" target="_self"> 首页</a></li>
				<li><a href="events.php" target="_self"> 最新活动</a></li>
				<li><a href="introduce.php" target="_self"> 乐队介绍</a></li>
				<li><a href="community.php" target="_self"> 交流版块</a></li>
				<li><a href="about.php" target="_self"> 关于我们</a></li>
				<li><a href="reserve.php" target="_self"> 排练预约</a></li>
				<li class="move"></li>
			</ul>
		</nav>
		<div class="banner-right">
			<?php if(!isset($_SESSION['valid_user'])){?>
			<span><a onclick="window.open('login.html','','height=550,width=600,top=100,left=300,toolbar=no,menubar=no,scrollbars=no,resizable=no,location=no,status=no')">登录</a></span>
			<?php }else{
			?>
			<span><a onclick="window.open('userinfo.php','','height=550,width=600,top=100,left=300,toolbar=no,menubar=no,scrollbars=no,resizable=no,location=no,status=no')"><?php echo $_SESSION['valid_user'];?></a></span>
			<?php
			}
			?>
			<div class="move"></div>
		</div>
	</header>



</div>
</body>
</html>