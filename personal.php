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
        	<!-- 引入页头 -->
		<link rel="stylesheet" href="dist/css/min/header.min.css">
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
		   include_once("common/header.html");
		?>
       
        <!-- 内容开始 -->

        <div class="container main" id="mainContent">
            <div class="row"> 
                <!-- 左边部分 -->
                <div class="col-md-3  col-sm-3 col-xs-6" id="leftMenu">
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
						</div>
					</div>
					
                </div>
                <!-- 右边部分 -->
                <div class="rMessage col-md-9 col-sm-9 col-xs-12" id="rightCon">
					<!-- 顶部 -->
					<div class="rMessage_top">
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<img src="static/images/head_icon.jpg" alt="" class="img-thumbnail">
						</div>
						<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
							<p>昵 称：<span>源代码教育</span></p>
							<p>用户名：<span>小强</span></p>
							<p>最后登录时间：<span>2016-10-25 15:30:10</span></p>
						</div>
					</div>
					<!-- 底部 -->
					<div class="rMessage_btm">
						<div class="money">
							<p class="col-lg-4 col-md-4 col-sm-4 col-xs-6">总金额：<span>10000元</span></p>
							<p class="col-lg-4 col-md-4 col-sm-4 col-xs-6">可用金额：
								<span>8000元</span><br>
								<button type="button" class="btn btn-primary btn-lg form-inline">账户充值</button>
								<button type="button" class="btn btn-danger btn-lg form-inline">账户提现</button>		
							</p>
							<p class="col-lg-4 col-md-4 col-sm-4 col-xs-6">冻结金额：<span>2000元</span></p>
						</div>
						<div class="verify">
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="shot">
									<div><img src="static/images/shiming.png" alt=""></div>
									<div>
										<p class="mb">实名认证</p>
										<p>未认证<a href="#">马上认证</a></p>
									</div>
								</div>
								<p>实名认证之后才能在平台投资</p>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="shot">
									<div><img src="static/images/shouji.jpg" alt=""></div>
									<div>
										<p class="mb">手机认证</p>
										<p>未认证<a href="#">马上认证</a></p>
									</div>
								</div>
								<p>实名认证之后才能在平台投资</p>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="shot">
									<div><img src="static/images/youxiang.jpg" alt=""></div>
									<div>
										<p class="mb">邮箱认证</p>
										<p>未认证<a href="#">马上认证</a></p>
									</div>
								</div>
								<p>实名认证之后才能在平台投资</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 bt">
						<div class="shot">
							<div><img src="static/images/baozhan.jpg" alt=""></div>
							<div>
								<p class="mb">VIP会员</p>
								<p>未认证<a href="#">马上认证</a></p>
							</div>
						</div>
						<p>实名认证之后才能在平台投资</p>
					</div>
					<button type="button" id="toggleMenu" class="btn btn-primary btn-xs">菜单切换</button>
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
     
	<!-- 引入personal.js -->
	<script src="dist/js/checkLogin.min.js"></script>
	<!-- 引入自定义效果 -->
	<script src="dist/js/p2pEffects.min.js"></script>

</html>