<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>注册页面</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/1226/thinkphp_3.2.3_full/Public/css/bootstrap-3.3.0/css/bootstrap.min.css"></head>
</head>
<body>
<div class="container">
	<form action="<?php echo U('login/save_info');?>">
	<div class="form-group">
		用户名： <input required type="text" name="user_name">
	</div>
	<div class="form-group">
		密码： <input required type="password" name="password">
	</div>
		<div class="form-group">
		确认密码： <input required type="password" name="password_two">
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-success" value="注册">
	</div>

</form>
</div>

</body>
</html>