$(document).ready(function(){
    $('.news-img-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        // asNavFor: '.draup-indicator-slider',
        dots: false,
        infinite: true,
        arrows: false,
        autoplay: true,
        asNavFor: '.news-content-slider',
        // speed: 600
        // centerMode: true

    });
    $('.news-content-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        // asNavFor: '.draup-indicator-slider',
        dots: false,
        infinite: true,
        nextArrow: '<div class="slick__arrows slick__next"><i class="icon-right-arrow"></i></div>',
        prevArrow: '<div class="slick__arrows slick__prev"><i class="icon-left-arrow"></i></div>',
        arrows: true,
        autoplay: true,
        // speed: 600

    });


    //Home Page Banner Slick js init


    $('.content-slider-menu').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.img-slider-menu',
        dots: true,
        infinite: true,
        arrows: false,
        autoplay: true,
        speed: 500,
        // fade: true

    });
    $('.img-slider-menu').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.content-slider-menu',
        dots: false,
        infinite: true,
        arrows: false,
        autoplay: true,
        speed: 500,
        fade: false
    });

//    $('.timeline-slider').slick({
//        slidesToShow: 6,
//        slidesToScroll: 1,
//        asNavFor: '.roadmap-list',
//        dots: false,
//        infinite: false,
//        arrows: false,
//        autoplay: true,
//        // centerMode: true,
//        focusOnSelect: true,
//
//    });
//    $('.roadmap-list').slick({
//        slidesToShow: 3,
//        slidesToScroll: 1,
//        asNavFor: '.timeline-slider',
//        dots: false,
//        infinite: true,
//        arrows: false,
//        autoplay: true,
//        centerMode: true,
//        centerPadding: false,
//        swipe: true,
//        focusOnSelect: true,
//        // speed: 600,
//        // adaptiveHeight: true
//
//    });

    $('.timeline-slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        asNavFor: '.roadmap-list',
        dots: false,
        infinite: false,
        arrows: false,
        autoplay: true,
        // centerMode: true,
        focusOnSelect: true,

    });
    $('.roadmap-list').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.timeline-slider',
        dots: false,
        infinite: true,
        arrows: false,
        autoplay: true,
        centerMode: true,
        centerPadding: false,
        swipe: true,
        focusOnSelect: true,
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
                    slidesToShow: 1,
                }

            },

        ]
        // speed: 600,
        // adaptiveHeight: true

    });

    $('.timeline-slider__list').on('click', function(){

        $('.roadmap-list').slick('slickGoTo', $(this).index());
    })
    // $('.roadmap-list__item').on('click touchstart', function(){
    //
    //     console.log($(this).parent().attr('data-slick-index'));
    //
    //     // var tlIndex  = $('.timeline-slider__list'+'[data-slick-index=' + $(this).attr('data-slick-index') + ']' );
    //
    //     // console.log(tlIndex);
    //
    // })

    $('.roadmap-list').on('afterChange', function(event, slick, currentSlide, nextSlide){

        var rmIndex = parseInt($('.roadmap-list .slick-current.slick-active').attr('data-slick-index'));
        var tlIndex  = $('.timeline-slider__list'+'[data-slick-index=' + rmIndex + ']' );

        // console.log(tlIndex);
        // console.log('Roadmap slide index');
        // console.log($('.roadmap-list .slick-current.slick-active').attr('data-slick-index'));


        // console.log('timelineIndex : ' + tlIndex);

        $('.timeline-slider__list').removeClass('slick-current');

        tlIndex.addClass('slick-current');

        // console.log(slick);
        // console.log(event);
        // $('.timeline-slider__list.slick-current').next().addClass('slick-current').siblings().removeClass('slick-current');
        // $('.timeline-slider').slick('slickGoTo', $(this).index());
      });




});
