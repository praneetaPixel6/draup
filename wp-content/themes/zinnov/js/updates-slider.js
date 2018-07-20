$(function(){
   
    $('.updates-main-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        // asNavFor: '.draup-indicator-slider',
        dots: false,
        infinite: true,
        nextArrow: '<div class="slick__arrows slick__next"><i class="icon-right-arrow"></i></div>',
        prevArrow: '<div class="slick__arrows slick__prev"><i class="icon-left-arrow"></i></div>',
        arrows: true,
        autoplay: false,
        asNavFor: '.updates-content-slider',
    });

    $('.updates-content-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        // asNavFor: '.draup-indicator-slider',
        dots: false,
        infinite: true,
        arrows: false,
        autoplay: false,
        asNavFor: '.updates-main-slider',
    });

    // $('.updates-main-slider__list').on('click',function(){
    //     $('.updates-content-slider').slick('slickGoTo', $(this).index())
    // })


    // $('.draup-content-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
    //     var totalList = $('.draup-indicator-slider__list').length;

    //     $('.draup-indicator-slider__list').eq(currentSlide).addClass('active').siblings().removeClass('active');


    // });


    // $('.draup-indicator-slider__list').on('click', function(){
        
    //     $('.draup-content-slider').slick('slickGoTo', $(this).index())
    // })

});
