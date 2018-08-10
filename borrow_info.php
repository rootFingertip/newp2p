<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>借款信息</title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<!--引入bootstrap核心样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css"/>
		<!--自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/borrow_info.min.css"/>
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

		<!-- 内容开始 -->
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-xs-12" id="borrowObj">
					<div class="panel panel-default" >
						<div class="panel-heading">
							借款人
						</div>
						<div class="panel-body">
							<p class="text-center">
								<img src="static/images/head_icon.jpg"/>
							</p>
							<p class="text-center">
								<a href="#" class="text-primary">
									zs
								</a>
							</p>
							<p>
								籍贯： 四川 - 成都
							</p>
							<p>
								专职客服：
								<a href="#">
									码妹妹
								</a>
							</p>
							<p>
								认证信息：<label class="label label-success"> <span class="fa fa-user-md"></span>
							</p>
							</label>

						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<h3 class="text-primary"> zs借款 <small><label class="label label-primary">信</label></small></h3>
					<table width="100%" height="250px">
						<tr>
							<td class="muted" width="100px">借款金额</td>
							<td class="text-primary">2,000.00</td>
						</tr>
						<tr>
							<td>年化利率</td>
							<td class="text-primary">10.00%</td>
						</tr>
						<tr>
							<td>借款期限</td>
							<td class="text-primary">3月</td>
						</tr>
						<tr>
							<td>投标奖励</td>
							<td class="text-primary">0.00</td>
						</tr>
						<tr>
							<td>还款方式</td>
							<td class="text-primary">按月分期还款</td>
						</tr>
						<tr>
							<td>最小投标</td>
							<td class="text-primary">20.00</td>
						</tr>
						<tr>
							<td>剩余时间</td>
							<td></td>
						</tr>

					</table>
				</div>
				<div class="col-lg-3 col-md-3 col-xs-12" >
					<table id="bidTable">
						<tr>
							<td  width="100px">投标总数</td>
							<td class="text-primary">2</td>
						</tr>
						<tr>
							<td>还需金额</td>
							<td class="text-primary">0.00元</td>
						</tr>
						<tr>
							<td>投标进度</td>
							<td class="text-primary"></td>
						</tr>
						<tr>
							<td colspan="2">
								<div class="progress">
									<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"  aria-valuemax="100%" style="width: 90%">

									</div>
								</div></td>
						</tr>
					</table>
					<h4 class="text-primary">还款中</h4>
				</div>
			</div>

			<!--借款人信息-->
			<div class="panel panel-default">
				<div class="panel-heading">
					借款人信息
				</div>
				<div class="panel-body">
					<table>
						<tbody>
							<tr>
								<td class="muted text-right">注册时间</td>
								<td width="20%" style="padding-left: 10px;" class="text-primary"> 2015-03-30 </td>
								<td class="muted text-right">借款额度</td>
								<td width="20%" style="padding-left: 10px;" class="text-primary"> 2000 </td>
								<td class="muted text-right">性别</td>
								<td width="20%" style="padding-left: 10px;" class="text-primary"> 男 </td>
								<td class="muted text-right">年龄</td>
								<td width="20%" style="padding-left: 10px;" class="text-primary"> 25 </td>
							</tr>
							<tr>
								<td class="muted text-right">文化程度</td>
								<td width="20%" style="padding-left: 10px;" class="text-primary"> 硕士研究生 </td>
								<td class="muted text-right">每月收入</td>
								<td width="20%" style="padding-left: 10px;" class="text-primary"> 3000-4999 </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<!--审核认证信息-->
			<div class="panel panel-default">
				<div class="panel-heading">
					审核认证信息
				</div>
				<div class="panel-body">
					<table>
						<tbody>
							<tr>
								<td class="muted text-right">认证时态度</td>
								<td width="20%" style="padding-left: 10px;" class="text-primary"> 优</td>
								<td class="muted text-right"> 信贷知识掌握情况 </td>
								<td width="20%" style="padding-left: 10px;" class="text-primary"> 优 </td>
								<td class="muted text-right">借款感言</td>
								<td width="20%" style="padding-left: 10px;" class="text-primary">给我2000度过难关</td>
							</tr>
							<tr>
								<td class="muted text-right">审核员认证意见 </td>
								<td width="20%" style="padding-left: 10px;" class="text-primary"> OK </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--材料信息-->
			<div class="panel panel-default">
				<div class="panel-heading">
					材料信息
				</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>材料类型</th>
								<th>材料数量</th>
							</tr>
						</thead>
						<tbody>
							<tr>								
								<th class="hidden620">本人身份证</th>
								<th>2</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			
			<!--还款情况-->
			<div class="container" >
				<div class="panel panel-default">
					<div class="panel-heading">
						还款情况
					</div>
					<table class="table el-table table-striped">
						<thead>
							<tr>
								<th>还款状态</th>
								<th class="hidden620">最近一周</th>
								<th>最近1月</th>
								<th>最近6月</th>
								<th class="hidden620">6个月前</th>
								<th>总计[?]</th>
							</tr>
						</thead>
						<tbody>
							<tr>								
								<td class="hidden620">提前还款</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr>								
								<td class="hidden620">逾期已还</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr>								
								<td class="hidden620">逾期未还</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
							<tr>								
								<td class="hidden620">提前还款</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--投标记录-->
			<div class="container" >
				<div class="panel panel-default">
					<div class="panel-heading">
						投标记录
					</div>
					<table class="table el-table table-striped">
						<thead>
							<tr>
								<th>投标人</th>
								<th class="hidden620">年利率</th>
								<th>有效金额(¥)</th>
								<th>投标时间</th>
								<th class="hidden620">类型</th>
							</tr>
						</thead>
						<tbody>
							<tr>								
								<td class="hidden620">xia*****</td>
								<td>10%</td>
								<td class="text-primary">1,000.00</td>
								<td>2016-05-11 06:42:11</td>
								<td>手动投标</td>
							</tr>
							<tr>								
								<td class="hidden620">xia*****</td>
								<td>10%</td>
								<td class="text-primary">1,000.00</td>
								<td>2016-05-11 06:42:11</td>
								<td>手动投标</td>
							</tr>
						</tbody>
					</table>
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