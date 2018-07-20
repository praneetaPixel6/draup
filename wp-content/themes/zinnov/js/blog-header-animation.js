$(function() {
    //caches a jQuery object containing the header element
    var header = $(".navbar--menu");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 1) {
            header.addClass("is-waterfall is-waterfall--gray");

        } else {
            header.removeClass("is-waterfall is-waterfall--gray");
        }
    });
    $(document).ready(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 1) {
            header.addClass("is-waterfall is-waterfall--gray");

        } else {
            header.removeClass("is-waterfall is-waterfall--gray");
        }
    });
});