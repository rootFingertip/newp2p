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
                <div class="col-md-3  col-sm-3 col-xs-6" id="leftMenu">
					<?php
						include_once ("./leftMenuTree.html");
					?>	
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