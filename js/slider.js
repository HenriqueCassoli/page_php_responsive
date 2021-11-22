$(function(){
    var curSlider=0;
    var maxSlider=$(".banner-single").length -1;
    
    initSlider();
    chageSlide();
   
    function initSlider() {
        $(".banner-single").hide();
        $(".banner-single").eq(0).show();
        
    }
    function chageSlide() {
        setInterval(function(){
            $('.banner-single').eq(curSlider).fadeOut();
            curSlider++;
            if(curSlider > maxSlider)
            curSlider=0;
            $('.banner-single').eq(curSlider).fadeIn();
        },3000);
    }
})