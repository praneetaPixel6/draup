$(function(){var header=$(".navbar--menu");$(window).scroll(function(){var scroll=$(window).scrollTop();if(scroll>=1){header.addClass("is-waterfall");}else{header.removeClass("is-waterfall");}});$('#forgot-password').click(function(){$('#forgot-password-form.banner-form').addClass('is-active');});$('#back-to-login').click(function(){$('#forgot-password-form.banner-form').removeClass('is-active');});$('#continue-login').click(function(){$('#success-msg.banner-form').removeClass('is-active');$('#forgot-password-form.banner-form').removeClass('is-active');});});