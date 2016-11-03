<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>西电小觅音协会</title>

<link rel="stylesheet" href="/Public/style/reset.css">
<link rel="stylesheet" href="/Public//style/jquery.scrollintro.css">
<link rel="stylesheet" href="/Public//style/animate.css">

<link rel="stylesheet" type="text/css" href="/Public//style/style_4.css">

<script type="text/javascript" src="/Public//js/jquery.min.js"></script>
<script type="text/javascript" src="/Public//js/modernizr.custom.49511.js"></script>
<script type="text/javascript" src="/Public//js/jquery.scrollintro.min.js"></script>
<script type="text/javascript">
$(document).ready(function($) {
	var _scroller = $('.wrapper').scrollIntro();
	$('#click2next').on('click', function(event) {
		_scroller.scrollTo($('.scroll-content').eq(1));
	});
});
</script>

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
	
<div class="wrapper">
	<div class="navigation">
		<ul>
			<li><a href="#content1"><span class="navSelect"></span></a></li>
			<li><a href="#content2"><span></span></a></li>
			<li><a href="#content3"><span></span></a></li>
			<li><a href="#content4"><span></span></a></li>
		</ul>
	</div>
	<div class="scroll-content" id="content1">
		<h3 class="animate-block">It's better to burn out than to fade away</h3>
		<div class="content100-block animate-block">
			<img src="/Public/img/triworks_abstract31.jpg" class="animate-block full-image" id="click2next" />
			<p class="animate-block full-text">小觅音作为西电的一个音乐交流类社团，旨在结交更多志同道合的学生乐迷朋友、分享摇滚文化的魅力，同时在高校中宣传推广摇滚文化、音乐现场文化以及器乐演奏。不论你喜欢哪种风格——从金属乐到英伦，从乡村布鲁斯到流行，不论你是否擅长声乐器乐，你都可以在这里找到和你志同道合的朋友！加入我们，组建你的乐队噪动西电！</p>
			<p class="animate-block full-text">KEEP CALM AND ROCK ON!</p>
		</div>
	</div>
	<div class="scroll-content" id="content2" data-easein="bounceInUp">
		<h3 class="animate-block">我们提供</h3>
		<div class="animate-block content240-block">
			<img src="/Public/img/icons/clock.png" class="image240-block" />
			<p class="animate-block caption">
			随时可用的排练室，豪华的排练室在西电可不多哟
			</p>
		</div>
		<div class="animate-block content240-block">
			<img src="/Public/img/icons/gadgets.png" class="image240-block" />
			<p class="animate-block caption">牛x的音响设备，我们可是有定制的电子管音箱啊</p>
		</div>
		<div class="animate-block content240-block">
			<img src="/Public/img/icons/control.png" class="image240-block" />
			<p class="animate-block caption">大小演出机会，让你技术不断精进</p>
		</div>
		<div class="animate-block content240-block">
			<img src="/Public/img/icons/music.png" class="image240-block" />
			<p class="animate-block caption">每周专题介(an)绍(li)，开阔你的音乐世界</p>
		</div>
	</div>
	<div class="scroll-content" id="content3" data-easein="rollIn">
		<h3 class="animate-block">你可以</h3>
		<div class="animate-block content240-block">
			<img src="/Public/img/icons/homegroup.png" class="image240-block" />
			<p class="animate-block caption">
			 认识同样热爱音乐的朋友</p>
		</div>
		<div class="animate-block content240-block">
			<img src="/Public/img/icons/finder.png" class="image240-block" />
			<p class="animate-block caption">以优惠的价格买到演出门票</p>
		</div>
		<div class="animate-block content240-block">
			<img src="/Public/img/icons/connect.png" class="image240-block" />
			<p class="animate-block caption">组团pogo各大音乐现场</p>
		</div>
		<div class="animate-block content240-block">
			<img src="/Public/img/icons/control.png" class="image240-block" />
			<p class="animate-block caption">学习演奏各种乐器，组建你自己的乐队</p>
		</div>
	</div>
	<div class="scroll-content" id="content4">
		<h3 class="animate-block">联系我们</h3>
		<div class="content240-block animate-block">
			<img src="/Public/img/icons/qq.jpg" class="circle-image" />
			<h4 class="subtitle">QQ群</h4>
			<p class="animate-block caption">570295890</p>
		</div>
		<div class="content240-block animate-block">
			<img src="/Public/img/icons/wechat.jpg" class="circle-image" />
			<h4 class="subtitle">WECHAT</h4>
			<p class="animate-block caption">xxxxxxxxxxxxxxx</p>
		</div>
		<div class="content240-block animate-block">
			<img src="/Public/img/icons/phone.png" class="circle-image" />
			<h4 class="subtitle">Phone</h4>
			<p class="animate-block caption">123456789456123</p>
		</div>
		<div class="content240-block animate-block">
			<img src="/Public/img/icons/clock.png" class="circle-image" />
			<h4 class="subtitle">MONEY</h4>
			<p class="animate-block caption">做个小站不容易~如果你喜欢就扫描二维码打赏一下吧@~@</p>
		</div>
	</div>
</div>


</div>
</body>
</html>