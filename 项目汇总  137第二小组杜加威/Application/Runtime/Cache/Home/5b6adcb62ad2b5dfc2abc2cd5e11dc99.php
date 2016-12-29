<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>欢迎登录</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/1226/thinkphp_3.2.3_full/Public/css/bootstrap-3.3.0/css/bootstrap.min.css"></head>
</head>
<body>
<div class="container">
	<form action="<?php echo U('login/do_login');?>">
	<div class="form-group">
		用户名： <input required type="text" name="user_name">
	</div>
	<div class="form-group">
		密码： <input required type="password" name="password">
	</div>
		<div class="form-group">
		验证码：<input type="text" name="verify_code">  <img src="<?php echo U('Login/get_verify');?>" class="verify_box" onclick="change_verify();" alt="">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-success" value="登录">
	</div>

</form>
</div>

<script type="text/javascript" src="/1226/thinkphp_3.2.3_full/Public/js/jquery.1.11.1.min.js"></script>

<script type="text/javascript">
	function change_verify () {
		$('.verify_box').attr('src',"<?php echo U('Login/get_verify');?>?"+Math.random());
	}
</script>
</body>
</html>