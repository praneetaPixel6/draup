
$(function(){
    $('.nav__list').click(function(){
        $(this).children('.dropdown-Menu').slideDown();
    });

    $('.icon-bar-container').click(function(){
        $('.navbar--menu').toggleClass('is-active');
    });




})
