//Home Page Banner Slick js init

$(function(){
    $('.content-slider-menu').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.img-slider-slider',
        dots: true,
        infinite: false,
        arrows: false,
        autoplay: true
    });


    $('.img-slider-menu').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.content-slider-slider',
        dots: false,
        infinite: false,
        arrows: false,
        autoplay: true

    });
})