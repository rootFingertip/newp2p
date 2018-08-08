$(function () {
    $('.proClick li').on('click',function(){
        $('.proClick li').removeClass('active');
        $(this).addClass('active');
    });


    $('#animation_slide .animation_slide_lis').click(function(event){
        
        //通过给子元素定义相同的事件来解决事件捕获问题
        $("#animation_slide .proClick li").click(function(e){ 
			e.stopPropagation(); //解决事件捕获的方法
		});
       
       
        // alert(1);
        // $("#animation_slide .proClick").slideUp();
        $("#animation_slide .proClick").slideToggle(500);

    });
});