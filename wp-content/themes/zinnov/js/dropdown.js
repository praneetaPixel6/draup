
$(function(){
    $('.nav__list').click(function(){
        $(this).children('.dropdown-Menu').slideDown(400);
    });
    
    
    $('.icon-bar-container').click(function(){
        $('.navbar--menu').toggleClass('is-active');
    });

    


})