<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>用户登录</title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<!--引入bootstrap核心样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css"/>
		<!--自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/userRegLogin.min.css"/>
		<!-- 引入字体图标 -->
		<link rel="stylesheet" href="lib/fontawesome/css/fontawesome-all.min.css">
		<!-- 引入页脚 -->
		<link rel="stylesheet" href="dist/css/min/footer.min.css">
		<!--兼容低版本的浏览器-->
		<!--[if lt IE 9]>
		<script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<!-- 引入头部 -->
		<?php
		include_once ("common/header.html");
		?>

		<!-- 登录内容开始 -->
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					用户登录
				</div>
				<div class="panel-body">
					<form>
						
						<div class="form-group">
							<label for="username">用户账号</label>
							<input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名">
						</div>
						<div class="form-group">
							<label for="password1">登录密码</label>
							<input type="password" class="form-control" name="password1" id="password1" placeholder="">
						</div>
						<button type="submit" class="btn btn-danger">
						立即登录
						</button>
					</form>
				</div>
			</div>

		</div>
		<!-- 内容结束 -->

		<!--页脚-->

		<?php
include_once('common/footer.html')
		?>
	</body>
	<!--引入jquery库-->
	<script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
	<!--引入bootstrap核心js库-->
	<script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	<!-- 引入header.js -->
	<script src="dist/js/header.min.js"></script>
</html>