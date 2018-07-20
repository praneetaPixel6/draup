$(document).ready(function(){
    $('.life-draup-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        // asNavFor: '.draup-indicator-slider',
        dots: false,
        infinite: true,
        arrows: true,

        autoplay: true,
        nextArrow: '<div class="slick__arrows slick__next"><i class="icon-right-arrow"></i></div>',
        prevArrow: '<div class="slick__arrows slick__prev"><i class="icon-left-arrow"></i></div>',
        responsive: [ 
            
           
            {

                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                }

            },
            {

                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                }

            },

        ]
        // asNavFor: '.news-content-slider',
        // centerMode: true
        
    });

})