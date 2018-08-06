<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>会员中心借款列表</title>
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

		<!-- 会员中心借款列表开始 -->
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<p>充值明细</p>				
					<button type="button" class="btn btn-danger"><a href="#" >账户充值</a></button>	
				</div>
				<table class="table">
					<thead>
						<tr>
							<th>充值时间</th>
							<th>充值金额</th>
							<th>充值状态</th>
							<th>备注</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td scope="row">2015-03-11 10:45:10</td>
							<td>500.00</td>
							<td>充值成功</td>
							<td>线下充值500</td>
						</tr>
						
					</tbody>
				</table>
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