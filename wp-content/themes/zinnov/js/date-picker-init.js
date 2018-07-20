$(document).ready(function(){

    $('.date').datepicker();
    // $('#time').datepicker();


    $('.input-text-field').keypress(function(key) {
        if((key.charCode < 97 || key.charCode > 122) && (key.charCode < 65 || key.charCode > 90) && (key.charCode != 45)) return false;
    });

    $('.input-number-field').keypress(function(key) {
    	if(key.charCode < 48 || key.charCode > 57) return false;
    });

    
});
