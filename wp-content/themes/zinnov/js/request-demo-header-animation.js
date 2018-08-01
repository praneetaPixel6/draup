$(function() {
    //caches a jQuery object containing the header element
    var header = $(".navbar--menu");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 1) {
            header.addClass("is-waterfall is-waterfall--orange");
        } else {
            header.removeClass("is-waterfall is-waterfall--orange");
        }
    });
    jQuery('.collapsed').click(function(){
      var target = jQuery(this).data('target');
      var parent = jQuery(target).data('parent');
      jQuery('[data-parent ="'+parent+'" ]').not(jQuery(target)).removeClass('in');
      jQuery('[data-toggle ="collapse" ]').addClass('collapsed');
    });
});
