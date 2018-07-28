$(document).ready(function() {
  var match = document.cookie.match(new RegExp('authtoken' + '=([^;]+)'));
  if(match instanceof Array && match.length>1){
      var appUrl = $("#app-url");
      if(appUrl){
        window.location.href=appUrl.val();
      }
  }
  function handleSendResetLink(){
      $("#error-invalid-email-fp").addClass("hide");
      $('#error-user-invalid').addClass('hide');
      $('#error-generic-fp').addClass('hide');

      var email=$("#email-fp").val();
      var platformUrl = $("#platform-url").val();
      var appUrl = $("#app-url").val();
      var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
      if(!testEmail.test(email)){
        $("#error-invalid-email-fp").removeClass("hide");
        return false;
      }
      $('#send-link').prop('disabled', true);
      $.ajax({
              url: platformUrl + '/service/django-users/users/password/reset',
              type: "post",
              contentType: "application/json; charset=utf-8",
              data:JSON.stringify({"email":email}),
              success: function(d) {
                $('#success-msg.banner-form').addClass('is-active');
              },
              error: function(d){
                if(d.status===404){
                  $('#error-user-invalid').removeClass('hide');
                }else if(d.status === 400) {
                  $('#error-user-deactivated').removeClass('hide');
                }else{
                  $('#error-generic-fp').removeClass('hide');
                }
                $('#send-link').prop('disabled', false);
              }
        });
    }

      $(document).on("click","#send-link",handleSendResetLink);
      $('#fm-send-reset-pwd').bind('keypress', function(e){
          if ( e.keyCode == 13 ) {
            handleSendResetLink();
            e.preventDefault();
          }
      });

      function handleLogin(){

        $("#error-invalid-cred").addClass('hide');
        $("#error-invalid-email").addClass("hide");
        $("#error-invalid-pwd").addClass("hide");
        $("#error-subscription-outdated").addClass('hide');
        $("#error-deactivated").addClass('hide');

        var email=$("#email").val();
        var pwd=$("#pwd").val();
        var platformUrl = $("#platform-url").val();
        var appUrl = $("#app-url").val();
        var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var isValid = true;
        if(!pwd){
          $("#error-invalid-pwd").removeClass("hide");
          isValid=false;
        }
        if(!testEmail.test(email)){
          $("#error-invalid-email").removeClass("hide");
          isValid=false;
        }
        if(!isValid){
          return;
        }
        $('#login-btn').html('LOGGING IN...');
        $('#login-btn').prop('disabled', true);
        $.ajax({
                url: platformUrl + '/service/django-users/users/login',
                type: "post",
                contentType: "application/json; charset=utf-8",
                data:JSON.stringify({"user":{"email":email,"password":pwd}}),
                success: function(d) {
                  if(window){
                    var now = new Date();
                    now.setDate(now.getDate() + 30);
                    document.cookie="authtoken="+d.user.token+";expires="+now.toGMTString()+";domain=draup.com;";
                    window.location.href= appUrl+"/draup/home?t="+Math.random();
                  }
               },
                error: function(e){
                  if(e.status==400){
                    if(e.responseJSON && e.responseJSON.user && (e.responseJSON.user.error_code==602
                      || e.responseJSON.user.error_code==601)){
                      $("#error-subscription-outdated").removeClass('hide');
                    }else{
                      $("#error-invalid-cred").removeClass('hide');
                    }
                  }else if(e.status==412){
                    $("#error-deactivated").removeClass('hide');
                  }else{
                    $("#error-invalid-cred").removeClass('hide');
                  }
                  $('#login-btn').html('LOGIN');
                  $('#login-btn').prop('disabled', false);
                }
      });
    }

      $(document).on("click","#login-btn", handleLogin);
      $('#fm-login').bind('keypress', function(e){
          e.stopPropagation();
          if ( e.keyCode == 13 ) {
            handleLogin();
            e.preventDefault();
          }
      });

      var winHeight = jQuery(window).height();
      var footerHeight = jQuery('.footer').outerHeight();
      jQuery('.login-page').css({'height': winHeight - footerHeight});


      //NavDropdown
      // jQuery('.nav__list a').click(function(){
      //   jQuery(this).siblings('.dropdown-Menu').toggle();
      // })
});
