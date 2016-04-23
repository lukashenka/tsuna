var slideWidth=1340;
var sliderTimer;
$(function(){
$('.sliderElements').width($('.sliderElements').children().size()*slideWidth);
    sliderTimer=setInterval(nextSlide,5000);
    $('.slider,.dot').hover(function(){
        clearInterval(sliderTimer);
    },function(){
        sliderTimer=setInterval(nextSlide,5000);
    });
        $('.dot').click(function(){
        $('.dot.active').removeClass('active');
        $(this).addClass('active');
        var n=$('.dot').index(this);
        certainSlide(n);
    });
});

function nextSlide(){
    var currentSlide=parseInt($('.sliderElements').data('current'));
    currentSlide++;
    if(currentSlide>=$('.sliderElements').children().size())
    {
        currentSlide=0;   
    }
    $('.dot.active').removeClass('active');
    $('.dot').eq(currentSlide).addClass('active');
    $('.sliderElements').animate({left: -currentSlide*slideWidth},300).data('current',currentSlide);
}

function prevSlide(){
    var currentSlide=parseInt($('.sliderElements').data('current'));
    currentSlide--;
    if(currentSlide<0)
    {
        currentSlide=$('.sliderElements').children().size()-1;   
    }
    $('.dot.active').removeClass('active');
    $('.dot').eq(currentSlide).addClass('active');
    $('.sliderElements').animate({left: -currentSlide*slideWidth},300).data('current',currentSlide);
}

function certainSlide(n){
    var currentSlide=n;
    $('.sliderElements').animate({left: -currentSlide*slideWidth},300).data('current',currentSlide);
}