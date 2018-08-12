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
		<link rel="stylesheet" type="text/css" href="dist/css/min/borrow.min.css"/>
		<!-- 引入字体图标 -->
		<link rel="stylesheet" href="lib/fontawesome/css/fontawesome-all.min.css">
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
            <div class="container">
                <div class="row">
                    <div class="panel  col-lg-4 col-md-4 col-sm-6">
                        <div class="panel-heading bg1">信用贷</div>
                        <div class="panel-body">
                            <p>可借金额 <i>¥ 2,000.00</i> </p>
                            <p><a href="#">申请条件</a></p>
                            <p>仅限成都地区</p>
                            <ul>
                                <li>填写基本资料</li>
                                <li>身份认证</li>
                                <li>视频认证</li>
                            </ul>
                            <a href="borrow_apply.php" class="btn btn-info">立刻申请</a>
                        </div>
                    </div>
                    <div class="panel  col-lg-4 col-md-4 col-sm-6">
                        <div class="panel-heading bg2">车易贷</div>
                        <div class="panel-body">
                            <p>可借金额 <i>¥ 2,000.00</i> </p>
                            <p><a href="#">申请条件</a></p>
                            <p>仅限成都地区</p>
                            <ul>
                                <li>填写基本资料</li>
                                <li>身份认证</li>
                                <li>视频认证</li>
                            </ul>
                            <a href="borrow_apply.php" class="btn btn-info">立刻申请</a>
                        </div>
                    </div>
                    <div class="panel  col-lg-4 col-md-4 col-sm-6">
                        <div class="panel-heading bg3">房易贷</div>
                        <div class="panel-body">
                            <p>可借金额 <i>¥ 2,000.00</i> </p>
                            <p><a href="#">申请条件</a></p>
                            <p>仅限成都地区</p>
                            <ul>
                                <li>填写基本资料</li>
                                <li>身份认证</li>
                                <li>视频认证</li>
                            </ul>
                            <a href="borrow_apply.php" class="btn btn-info">立刻申请</a>
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
</html>