$(document).ready(function() {
    $('.insights-menu').slick({

        arrows: true,
        dots: false,
        autoplay: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        slidesToScroll: 1,
        prevArrow: '<div class="slick-arrow slick-previous"><i class="icon-left-arrow"></i></div>',
        nextArrow: '<div class="slick-arrow slick-nexts"><i class="icon-right-arrow"></i></div>',
        responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        ]

    });
    $('#link').on('click',function(){
        $('.accordian-content').toggleClass('is-active');
        var status= $('.nav-tabs-knowMore>li').hasClass('active');
        
        if(status) {
            
            $('.nav-tabs-knowMore>li').removeClass('active');

            $('#link').html('read more');
        }
        else {
            
            $('.nav-tabs-knowMore>li:first-child').addClass('active');

            $('#link').html('read less');
        }

        $('.accordian-title').toggleClass('is-active');
    });
    $('.nav-tabs-knowMore>li').on('click',function(){
        $('.accordian-content , .accordian-title').addClass('is-active');
        $('#link').html('read less');
       
        // $(this).toggleClass('is-active');
    });
});


