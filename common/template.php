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

        <div class="container main" id="mainContent">
            <div class="row"> 
                <!-- 左边部分 -->
                <div class="col-md-3  col-sm-3 col-xs-6" id="leftMenu">
					<?php
						include_once ("./leftMenuTree.html");
					?>
                </div>
                <!-- 右边部分 -->
                <div class="rMessage col-md-9 col-sm-9 col-xs-12" id="rightCon">
					 <!-- 内容写在这里 -->
					 	<!-- 注册内容开始 -->
		<div class="container">
        	<div class="panel panel-default">
			  <div class="panel-heading">用户注册向导</div>
			  <div class="panel-body">
			     <form id="regForm" method="post">
					  <div class="form-group">
					    <label for="username">用户账号</label>
					    <input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名">
					  </div>
					  
					  <div class="form-group">
					    <label for="realname">真实姓名</label>
					    <input type="text" class="form-control" name="realname" id="realname" placeholder="请输入姓名">
					  </div>
					  <div class="form-group">
					    <label for="mobile">手机号码</label>
					    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="请输入手机号码">
					  </div>
					  <div class="form-group">
					    <label>用户性别</label>
					    <label class="radio-inline">
						  <input type="radio" name="sex" value="男" checked="checked">男
						</label>
						<label class="radio-inline">
						  <input type="radio" name="sex" value="女">女
						</label>
					  </div>
					  <div class="form-group">
							    <label for="">身份证号</label>
							     <input type="text" class="form-control" name="mobile" id="mobile" placeholder="请输入手机号码">
							  </div>
					  <div class="form-group">
					    <label for="">联系电话</label>
					      <input type="text" class="form-control" name="mobile" id="mobile" placeholder="请输入手机号码">
					  </div>
					  <div class="form-group">
					    <label for="">电子邮件</label>
					      <input type="text" class="form-control" name="mobile" id="email">
					  </div>
					  <div class="form-group">
					    <label for="education">个人学历</label>
					    <select name="education" id="education" class="form-control">
						  <option>博士</option>
						  <option>硕士</option>
						  <option>本科</option>
						  <option>大专</option>
						  <option>高中/中专</option>
						  <option>初中</option>
						  <option>小学</option>
						</select>
					  </div>
					  <div class="form-group">
					    <label for="">个人收入</label>
					    <select class="form-control" name="salaryLevel" style="width: 250px">
							<option value="1">1000元以下</option>
							<option value="2">1000元-1999元</option>
							<option value="3">2000元-2999元</option>
							<option value="4">3000-4999</option>
							<option value="5">5000-8999</option>
							<option value="6">10000以上</option>
						</select>
					  </div>
					  <div class="form-group">
					    <label for="">联系地址</label>
					      <input type="text" class="form-control" id="address" >
					  </div>
					  <button type="submit" class="btn btn-danger">修改</button>
				
					  
				</form>
			  </div>
			</div>
        </div>
					 
				  
				    <!-- 这里不能删 -->
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
     
	<!-- 引入personal.js -->
	<script src="dist/js/checkLogin.min.js"></script>
	<!-- 引入自定义效果 -->
	<script src="dist/js/p2pEffects.min.js"></script>

</html>