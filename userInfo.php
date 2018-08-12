<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>会员中心的完善用户信息</title>
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

		<!-- 注册内容开始 -->
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					个人资料
				</div>
				<div class="panel-body">
					<form class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2 control-label">用户姓名</label>
							<div class="col-sm-10">
								<p class="form-control-static">
									xiaoq
								</p>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">真实姓名</label>
							<div class="col-sm-10">
								<p class="form-control-static">
									小强
								</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">证件号码</label>
							<div class="col-sm-10">
								<p class="form-control-static">
									512************4646
								</p>
							</div>
						</div>
						<div class="form-group">
							<label for="mobile" class="col-sm-2 control-label">手机号码</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" id="mobile" placeholder="请输入手机号码">
							</div>
						</div>

						<div class="form-group">
							<label for="telphone" class="col-sm-2 control-label">联系电话</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" id="telphone" placeholder="请输入联系电话">
							</div>
						</div>
						<div class="form-group">
							<label for="telphone" class="col-sm-2 control-label">个人学历</label>
							<div class="col-sm-10">
								<select class="form-control" style="width: 250px">
									<option value="1">初中</option>
									<option value="2">中专/高中</option>
									<option value="3">专科</option>
									<option value="4">本科</option>
									<option value="5">硕士研究生</option>
									<option value="6">博士研究生</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="telphone" class="col-sm-2 control-label ">个人收入</label>
							<div class="col-sm-10">
								<select class="form-control" name="salaryLevel" style="width: 250px">
									<option value="1">1000元以下</option>
									<option value="2">1000元-1999元</option>
									<option value="3">2000元-2999元</option>
									<option value="4">3000-4999</option>
									<option value="5">5000-8999</option>
									<option value="6">10000以上</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">联系地址</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputPassword3" >
							</div>
						</div>

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
	<script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="dist/js/topMenu.min.js" type="text/javascript" charset="utf-8"></script>
</html>