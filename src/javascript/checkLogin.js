$(function(){
    //发起ajax请求到checkState.php页面进行身份验证
    $.get("API/checkState.php",function (result) {
		//console.log("身份验证的结果",result);
		if(result.isSuccess){
            // $("#username").text(result.username);
            //    alert("验证成功");
		}else{
			alert(result.msg);
			location.href="login.php";
		}
	},"json");

	$('.proClick li').on('click',function(){
		$('.proClick li').removeClass('active');
		$(this).addClass('active');
	  }); 

});