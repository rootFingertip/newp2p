$(function () {
    $('.proClick li').on('click',function(){
        $('.proClick li').removeClass('active');
        $(this).addClass('active');
    });
});