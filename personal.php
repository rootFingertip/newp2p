<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<!--引入bootstrap核心样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css"/>
		<!--自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/index.min.css"/>
		<!-- 引入字体图标 -->
        <link rel="stylesheet" href="lib/fontawesome/css/fontawesome-all.min.css">
        <!-- 引入parsonal -->
        <link rel="stylesheet" href="dist/css/min/personal.min.css">

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

        <div class="container main">
            <div class="row"> 
                <!-- 左边部分 -->
                <div class="col-lg-3">
                    <ul>
                        <li><a>投资项目</a></li>
                        <li>
                            <a>借款项目</a>
                            <ul class="proClick">
                                <li><a>借款项目</a></li>
                                <li><a>还款明细</a></li>
                            </ul>
                        </li>
                        <li>
							<a>我的账户</a>
							<ul class="proClick">
                                <li class="active"><a>账户信息</a></li>
								<li><a>实名认证</a></li>
								<li><a>银行卡管理</a></li>
								<li><a>登录记录</a></li>
                            </ul>
						</li>
                        <li>
							<a>资产详情</a>
							<ul class="proClick">
                                <li><a>账户流水</a></li>
								<li><a>充值明细</a></li>
								<li><a>提现记录</a></li>
								<li><a>收款明细</a></li>
                            </ul>
						</li>
                        <li><a>个人资料</a></li>
                    </ul>
                </div>
                <!-- 右边部分 -->
                <div class="col-lg-9"></div>
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
	<script src="dist/js/personal.min.js"></script>

</html>