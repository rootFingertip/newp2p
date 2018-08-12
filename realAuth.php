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

        <!--自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/userRegLogin.min.css"/>
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
                <!-- <div class="rMessage col-md-9 col-sm-9 col-xs-12" id="rightCon"> -->
					
                    <!-- <iframe name="mainPlace" src="#" width="100%" height="600px" frameborder="0" scrolling="auto"></iframe> -->
                    <!-- 实名认证内容开始 -->
                    <div class="panel panel-default padd_0 col-md-9 col-sm-9 col-xs-12" id="rightCon">
                        <div class="panel-heading">
                            实名认证
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" id="authentication">
                                <div class="form-group">	
                                    <p class="text-center text-danger" id="text-center">为保护您账户安全，实名认证成功之后不能修改信息，请认真填写！</p>
                                    <label class="col-sm-4 control-label">用户名</label>
                                    <div class="col-sm-8">
                                    <div class="form-control-static">
                                        <input type="text" class="form-control" name="username">
                                    </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">真实姓名</label>
                                    <div class="col-sm-8">
                                        <div class="form-control-static">
                                            <input type="text" class="form-control" name="realname">
                                        </div>
                                    </div>
                                </div>
                                
                                
                            <div class="form-group">
                                <label class="col-sm-4 control-label">用户性别</label>
                                <div class="col-sm-8">
                                    <select class="form-control" >
                                        <option value="1" selected="selected">男</option>
                                        <option value="2">女</option>
                                        
                                    </select>
                                </div>
                            </div>
                                                        
                            <div class="form-group">
                            <label class="col-sm-4 control-label">证件类型</label>
                            <div class="col-sm-8">
                                <select class="form-control" >
                                    <option value="1" selected="selected">身份证</option>
                                    <option value="2">驾驶证</option>
                                    <option value="2">军官证</option>
                                </select>
                            </div>
                        </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-4 control-label">证件号码</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="mobile">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="birthday" class="col-sm-4 control-label">出生日期</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="birthday">
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="idAddress" class="col-sm-4 control-label">证件地址</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="idAddress" >
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="idAddress2" class="col-sm-4 control-label">身份证照片</label>
                                    
                                    <div class="col-sm-8">
                                        <p class="text-help text-primary">请点击“选择图片”,选择证件的正反两面照片。</p>
                                        <div id="idCardText">
                                            <div class="idCardItem">
                                                <div>
                                                    <a href="#" id="uploa""dBtn1" >上传正面</a>
                                                </div>
                                                <img alt="" src="" class="uploadImg" id="uploadImg1" />
                                                <input type="hidden" value="" name="papersimg01" />
                                            </div>
                                            <div class="idCardItem">
                                                <div>
                                                    <a href="#" id="uploadBtn2" >上传反面</a>
                                                </div>
                                                <img alt="" src="" class="uploadImg" id="uploadImg2"/>
                                                <input type="hidden" value="" name="papersimg02" />
                                            </div>
                                        </div>				        		
                                    </div>
                                </div>
                            <div class="form-group">
                                <input type="button" class="btn btn-primary col-sm-offset-4" value="提交认证" id="submitAuth">
                            </div>
                            </form>
                        </div>
                    </div>
                <!-- 内容认证结束 -->
                    
				<!-- </div> -->
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
</html>