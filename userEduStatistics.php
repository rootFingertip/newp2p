<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<!--引入bootstrap核心样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css"/>
		<!-- 引入字体图标 -->
        <link rel="stylesheet" href="lib/fontawesome/css/fontawesome-all.min.css">
        <!-- 引入parsonal -->
        <link rel="stylesheet" href="dist/css/min/personal.min.css">
       
		<!--兼容低版本的浏览器-->
		<!--[if lt IE 9]>
	      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>
		<!-- 引入头部 -->
		<?php
		   include_once("common/header.html");
		?>
       
        <!-- 内容开始 -->

        <div class="container main">
            <div class="row"> 
                <!-- 左边部分 -->
                <div class="col-lg-3">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										投资项目
									</a>
								</h4>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									借款项目
								</a>
							</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
									<ul class="proClick">
										<li><a>借款项目</a></li>
										<li><a>还款明细</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									我的账户
								</a>
							</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">
									<ul class="proClick">
										<li class="active"><a>账户信息</a></li>
										<li><a>实名认证</a></li>
										<li><a>银行卡管理</a></li>
										<li><a>登录记录</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									资产详情
								</a>
							</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
								<div class="panel-body">
									<ul class="proClick">
										<li><a>账户流水</a></li>
										<li><a>充值明细</a></li>
										<li><a>提现记录</a></li>
										<li><a>收款明细</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
										个人资料
									</a>
								</h4>
							</div>
							
							<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
								<div class="panel-body">
									<ul class="proClick">
										<li><a href="userModify.php">修改资料</a></li>
										<li><a href="userEduStatistics.php">用户学历统计</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					
                </div>
                <!-- 右边部分 -->
                <div class="rMessage col-lg-9">
                	<div class="panel-body">
	                	<div class="row">

							<!-- 顶部 -->
							<h2 class="text-center text-primary tex">用户学历情况统计</h2>
							<!-- 底部 -->
							<div id="echartsMain" style="width: 100%;height:400px;"></div>
						</div>
					</div>
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
	
	<!-- 引入personal.js -->
	<script src="dist/js/checkLogin.min.js"></script>
	<!-- 引入 ECharts 文件 -->
	<script src="lib/echarts/echarts-all.js" type="text/javascript" charset="utf-8"></script>
	<!-- 引入 eduEcharts.js 文件 -->
	<script src="src/javascript/eduEcharts.js"></script>

</html>