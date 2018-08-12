<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>投资列表</title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<!--引入bootstrap核心样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css"/>
		<!--引入分页插件的css-->
		<link rel="stylesheet" type="text/css" href="lib/JqueryPagination/jquery.pagination.css"/>
		<!--自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/invest.min.css"/>
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
		include_once ("common/header.html");
		?>
		<!-- 内容开始 -->
		<div class="container">
			<h4 class="page-title">投资列表</h4>
			<form action="#" id="searchForm">
				<span>标的状态</span>
				<div id="bidState" class="btn-group" data-toggle="buttons" >
					<label class="btn btn-default active">
						<input type="radio" class="btn btn-default active" type="button" value=""/>
					全部 </label>
					<label class="btn btn-default ">
						<input type="radio" class="btn btn-default" type="button" value="">
					招标中 </label>
					<label class="btn btn-default ">
						<input type="radio" class="btn btn-default" type="button" value="">
					还款中</label>
				</div>
			</form>

			<table class="table table-hover">
				<thead>
					<tr>
						<th>借款人</th>
						<th>借款标题</th>
						<th>年利率</th>
						<th>金额</th>
						<th>还款方式</th>
						<th>进度</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody id="gridBody">
				</tbody>				
			</table>
			
			<!--分页部分-->
			<div style="text-align: center;">      
		     	<div id="page" class="m-pagination"></div>		      
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
	<!--引入分页插件的js-->
	<script src="lib/JqueryPagination/jquery.pagination-1.2.7.js" type="text/javascript" charset="utf-8"></script>
	<!-- 引入自定义效果 -->
	<script src="dist/js/p2pEffects.min.js"></script>

	 <!--引入jquery模版引擎-->
	 <script src="lib/jqueryTemplate/jquery.tmpl.js" type="text/javascript" charset="utf-8"></script>
	 <!--定义前端模版-->
	 <script type="text/html" id="investTmpl">	
	 	<tr>
			<td>${userid}</td>
			<td>${borrowTitle}</td>
			<td>${currentRate}%</td>
			<td>${borrowAmount}</td>
			<td>${repayment}</td>
			<td>${(alreadyAmount/borrowAmount*100).toFixed(2)}%</td>
			<td><a class="btn btn-danger btn-sm" href="borrow_info.php?id=${borrowid}">查看</a></td>
		</tr>
	</script>	
	<script type="text/javascript">
		$.get("API/investList.php",function(userData){
			console.log("服务器返回的结果：",userData);
			var htmlStr=$("#investTmpl").tmpl(userData);
				
			$("#gridBody").html(htmlStr);
		},"json");
		
	</script>	
	
	<script type="text/javascript">
		//分页插件的参数配置
	    $("#page").page({
	        debug: false,
	        showInfo: true,
	        showJump: true,
	        pageSize:2,
	        showPageSizes: true,
	        //远程请求的地址配置
	        remote: {
	            url: 'API/getInvestPager.php',
	            success: function (data) {
	             var htmlStr=$("#investTmpl").tmpl(data.list);				
				$("#gridBody").html(htmlStr);
					console.log(data);
	            }
	        }
	    });
	
	    $("#page").on("pageClicked", function (event, pageIndex) {
	        $("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
	    }).on('jumpClicked', function (event, pageIndex) {
	        $("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
	    }).on('pageSizeChanged', function (event, pageSize) {
	        $("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
	    });
	</script>
	 
</html>