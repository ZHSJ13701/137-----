<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>世界你好！</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.0/css/bootstrap.min.css"></head>
	<style type="text/css">
		.menu_box{    height: 100%; line-height: 45px; }
		.first_head_box{height: 85px;
line-height: 85px;
font-size: 18px;
background-color: #0aac87;
color: #fff;
padding-left: 20px;}
.second_head_box{height: 45px;background-color:#ececec;}
		/*.setting_box{background-color:#ccc;}*/
		.nav_box li{float: left; display: inline;width: 90px;
text-align: center;}
		.nav_box li a{ color: #333;font-size: 18px; padding: 10px;}
		.nav_box li:hover{background-color: #fff;}
		.nav_box li a:hover{color: #0aac87 !important}
.active{background-color: #fff;height: 45px}
.active a{color: #0aac87 !important}
.setting_box li{float: left;}
.setting_box li a{padding: 0 5px}
li{list-style: none;}
.menu_two_box{    height: 100%;
    line-height: 45px;}
		/*如果给盒子，ie下面的外边距会多15像素*/
	.banner_box{position: relative; }
		.banner_box img{width: 100%;display: none;}
		.show_div{display: block !important;}
		.change_box{position: relative;bottom: 28px;left: 40%}
		.change_box li{background-color: #fff;
		float: left; width: 10px;height: 10px;margin-right: 5px;}
	</style>
<body>

	<!-- HTML5 新加的特性：
		标签语义化
 -->
	<div class="container">
		<header>

			<div class="row first_head_box">
				<div>澳视教育</div>
			</div>
			<div class="row second_head_box">
				<!-- 栅格化
				12个格子

			 -->
				<div class="col-md-9 menu_box" >
					<ul class="nav_box">
						<li  class="active">
							<a href="">首页</a>
						</li>
						<li>
							<a href="">课程</a>
						</li>
						<li>
							<a href="">文章</a>
						</li>
						<li>
							<a href="">社区</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3 menu_two_box">
					<ul class="setting_box">
						<li>
							<a href="">登录</a>
						</li>
						<li>
							<a href="">注册</a>
						</li>

					</ul>
				</div>
			</div>
		</header>
		<div class="row">
			<div class="banner_box">

				<div>
				<!-- 第一张图片 -->
					<img class="show_div" src="images/aa.png"></div>
			
				<div>
					<img src="images/dd.png"></div>
			</div>
			<ul class="change_box">
				<li></li>
				<li></li>
			</ul>
		</div>
		<footer></footer>
		<!-- 它会浪费的时间 ，没必要-->

		<!-- logo -->
		<div class="container"></div>
		<!-- 菜单 -->

	</div>
	<script type="text/javascript" src="js/jquery.1.11.1.min.js"></script>
<script type="text/javascript">
	// 第三步
	$(function  () {
		// 里面的逻辑，在页面加载完之后进行处理
		
		// function  () {
			//回调函数			
		// }

		$(".change_box li").click(function  () else if($(this).index()==1){
				$(".banner_box div").eq(1).find('img').addClass("show_div");
			}


			// 点击第二个白色方框，显示第二张图片---------1

		})
	})
</script>

</body>
</html>