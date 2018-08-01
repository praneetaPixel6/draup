$(function(){

	jQuery('.draup-life-right').niceScroll({
		autohidemode: false
	});
	jQuery('.opening-acc-head a').on('click', function(){

      var target = jQuery(this).data('target');
      var parent = jQuery(target).data('parent');
      jQuery('[data-parent ="'+parent+'" ]').not(jQuery(target)).removeClass('in');
      jQuery('[data-toggle ="collapse" ]').addClass('collapsed');

      jQuery('.opening-acc-head a').children('.total-opning').show();
      jQuery('.opening-acc-head a').children('h3').children('.acc-img-wrap').show();
      var href = jQuery(this).attr('href');
      
    if(!jQuery(href).hasClass('in')){
      jQuery(this).children('.total-opning').hide();
      jQuery(this).children('h3').children('.acc-img-wrap').hide();
    }else{
      jQuery(this).children('.total-opning').show();
      jQuery(this).children('h3').children('.acc-img-wrap').show();
    }

	});

});
