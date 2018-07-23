$(function(){   
    
	jQuery('.draup-life-right').niceScroll({
		autohidemode: false
	});
	jQuery('.opening-acc-head a').on('click', function(){	
		jQuery(this).children('.total-opning').hide();	
		jQuery('.opening-content .opening-collapse').not(jQuery(this).children('.opening-collapse')).removeClass('in');
		jQuery('.opening-acc-head a').not(jQuery(this)).addClass('collapsed');
		jQuery('.opening-acc-head a').children('.total-opning').not(jQuery(this).children('.total-opning')).show();

	});

});