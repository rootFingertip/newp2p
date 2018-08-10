$(function(){
	//前端的所有页面的登录状态的菜单定制
	$.get("API/checkState.php",function (result) {
	var htmlStr;
	
	//登录成功后显示的菜单是：会员中心、赶快充值 、注销
	if(result.isSuccess){
		
		htmlStr=`
			    <li><a href="../personal.php?index=3"fa fa-user"></span> ${result.username}</a></li>
                <li><a href="../recharge_list.php"><span class="fa fa-female"></span> 赶快充值</a></li>
                <li><a href="../API/loginOut.php"><span class="fa fa-sign-out-alt"></span> 注销</a></li>
		`;
		
		//登录失败后显示的菜单是：立即登录、立即注册
	}else{
		htmlStr=`
				<li><a href="../login.php"><span class=fa fa-user"></span> 立即登录</a></li>
                <li><a href="../register.php"><span class="fa fa-female"></span> 立即注册</a></li>
		`;
	}

	//将登录状态的结果li显示在首页后面
	$("#homePage").after(htmlStr);
	
},"json");
	
	//主导航激活样式的实现
	var reqPath=location.href;
	var index=reqPath.split("=")[1];
	
	$("#main_Menu ul li").eq(index).addClass("active").siblings().remove("active");
	
});

