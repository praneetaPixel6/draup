$(document).ready(function(){
    if($('.testimonial-content-slider').length){
        $('.testimonial-content-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            infinite: true,
            arrows: false,
            autoplay: true,
            //asNavFor: '.testimonial-img-slider',
            speed: 600
        });
    }

});
