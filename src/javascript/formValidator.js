<!--表单验证的参数配置-->
$(document).ready(function() {
    $('#regForm')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    message: '用户名验证失败',
                    validators: {
                        notEmpty: {
                            message: '用户账号必填'
                        },
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '用户名长度必须在6~18位之间'
                        }
                       
                    }
                },
               
                password1: {
                    validators: {
                        notEmpty: {
                            message: '密码必填'
                        },
                        stringLength: {
                            min: 6,
                            message: '密码至少6位'
                        }
                    }
                },
                //确认密码
                password2: {
                    validators: {
                        notEmpty: {
                            message: '确认密码必填'
                        },
                        //一致性的验证
                        identical: {
	                        field: 'password1', //与那个字段做比较
	                        message: '两次密码输入不一致'
	                    }
                    }
                },
                //真实姓名
                realname: {
                    validators: {
                        notEmpty: {
                            message: '真实姓名必填'
                        }
                    }
                },
                //手机号码
                
                mobile: {
                    validators: {
                        notEmpty: {
                            message: '手机号码必填'
                        },
                        regexp: {
					          regexp: /^[1][3,4,5,7,8,9][0-9]{9}$/,
					          message: '手机号码格式不正确。'
					    }
                    }
                },
                //同意注册协议
                 isAgree: {
                    validators: {
                        notEmpty: {
                            message: '请阅读注册协议并同意'
                        }
                    }
                }              
                
            }
        })
        .on('success.form.bv', function(e) {
            // Prevent form submission
            e.preventDefault();
            // Get the form instance
            var $form = $(e.target);
             // 获取表单验证实例          
            var bv = $form.data('bootstrapValidator');
            // 使用ajax发送提交表单的数据请求
            
            var postURL="API/userAdd.php";
            var postData=$form.serialize();
            console.log("发送的数据：",postData);
            
            //通过post发送数据到后端，返回结果处理前端业务逻辑
            $.post(postURL, postData, function(result) {
                console.log("服务器返回的结果：",result);
                
          		//用html显示标题
          		$("#regLoginModal .modal-title").html("用户注册提示");
                      
            if (result.isSuccess) {
            	
				//点击立即注册，倒计时5秒跳转，显示蒙层
				$("#regLoginModal .modal-body").html("<span class='glyphicon glyphicon-ok text-danger'></span>"+result.msg+"等待 <span id='timeCount'>5</span>秒后自动跳转");
				
				//倒计时效果的实现
				$num=5;
				$timeId=setInterval(function(){
					$num--;
					$("#timeCount").text($num);
					if($num==0){
						clearInterval($timeId);
						location.href="login.php";
					}
					
				},1000);
				//显示蒙层
            	$("#regLoginModal").modal("show");
            } else{
            	//注册失败
            	$("#regLoginModal .modal-body").html("<span class='glyphicon glyphicon-remove'></span>"+result.msg);
            	$("#regLoginModal").modal("show");
            	console.log(result.msg);
            	
            	}
                       
              }, 'json');
        });
});