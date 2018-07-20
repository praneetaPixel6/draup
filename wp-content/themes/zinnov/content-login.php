<?php  /*Template Name: Login page*/ ?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */


get_header();?>

	 <!--START: Main-->
    <main class="login-page">
      <!--Start: Banner-->
      <section class="section section--login">
        <div class="container">
          <div class="row">
            <div class="banner-slider-container clearfix">
              <div class="col-sm-10 col-sm-offset-1 clearfix banner-content-slider-wrapper">
                <div class="col-sm-6 hidden-xs">
                  <div class="row row-left">
                    <ul class="banner-slider">

                    <?php $i=1;
                                while ( have_rows('banner_slider') )
                                {
                                    the_row();
                                    ?>
                      <li class="banner-slider__list">
                        <h3 class="heading"><?php echo get_sub_field('slider_heading');?></h3><a href="<?php echo get_option( 'siteurl' );?><?php echo get_sub_field('slider_link');?>" class="link"><?php echo get_sub_field('button_text');?></a>
                      </li>
                      <?php  $i++;} ?>

                    </ul>
                  </div>
                  <div class="bar">
                      <div class="bar__line"></div>
                      <div class="bar__line"></div>
                      <div class="bar__line"></div>
                  </div>
                  <div class="card-circle">
                      <div class="circle circle--md circle--filled circle--circleWhite"></div>
                      <div class="circle circle--md circle--filled circle--circleWhite circle--circleWhite1"></div>
                      <div class="circle circle--sm circle--filled circle--circleWhite"></div>
                      <div class="circle circle--md circle--filled circle--circleBlue "></div>
                      <div class="circle circle--ring circle--ringBlue circle--lg"></div>
                      <div class="circle circle--ring circle--ringBlue circle--md"></div>
                      <div class="circle circle--ring circle--ringBlue circle--sm"></div>
                      <div class="triangle--filled triangle-orange"></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="row">
                    <div class="banner-form-wrapper">
                      <div class="banner-form">
                        <h3 class="heading-light"><?php echo get_field('login_heading');?></h3>
                        <form data-parsley-validate="" class="login-form" action="" method="" id="fm-login">
                          <div class="form-group">
                            <label for="email" class="input-label">Email address</label>
                            <input id="email" type="email" required placeholder="sam@companyname.com" class="form-control input-field">
                            <ul class="parsley-errors-list filled hide" id="error-invalid-email"><li class="parsley-required">This value should be a valid email.</li></ul>
                          </div>
                          <div class="form-group last-child">
                            <label for="pwd" class="input-label">Password</label>
                            <input id="pwd" type="password" required placeholder="Enter your password" class="form-control input-field">
                            <ul class="parsley-errors-list filled hide" id="error-invalid-pwd"><li class="parsley-required">Password is required.</li></ul>
                            <ul class="parsley-errors-list filled hide" id="error-invalid-cred"><li class="parsley-required">Invalid Credentials</li></ul>
                            <ul class="parsley-errors-list filled hide" id="error-subscription-outdated"><li class="parsley-required">Your subscription has expired. Please contact Draup Support to get a new subscription.</li></ul>
                            <ul class="parsley-errors-list filled hide" id="error-deactivated"><li class="parsley-required">Your account has been deactivated. Please contact Admin for support.</li></ul>
                          </div>
                          <div class="forgot-link text-right"><a href="javascript:void(0)" id="forgot-password" class="forgot-link__text">Forgot password?</a></div>
                          <button type="button" id="login-btn" class="btn btn--orange">login</button>
                        </form>
                      </div>
                      <!--START: forgot-password-->
                      <div id="forgot-password-form" class="banner-form banner-form--transform">
                        <h3 class="heading-light">Forgot password?</h3>
                        <p class="info">Enter your email below, and we’ll send you the reset link</p>
                        <form data-parsley-validate="" class="login-form" id="fm-send-reset-pwd" action="" method="">
                          <div class="form-group last-child">
                            <label for="email" class="input-label">Email address</label>
                            <input id="email-fp" type="email" required placeholder="sam@companyname.com" class="form-control input-field">
                            <ul class="parsley-errors-list filled hide" id="error-invalid-email-fp"><li class="parsley-required">This value should be a valid email.</li></ul>
                            <ul class="parsley-errors-list filled hide" id="error-user-invalid"><li class="parsley-required">Email not registered.</li></ul>
                            <ul class="parsley-errors-list filled hide" id="error-user-deactivated"><li class="parsley-required">This user is deactivated.</li></ul>
                            <ul class="parsley-errors-list filled hide" id="error-generic-fp"><li class="parsley-required">Unable to send reset link.</li></ul>
                          </div>
                          <div class="forgot-link text-right"><a href="javascript:void(0)" id="back-to-login" class="forgot-link__text">Back to Login</a></div>
                          <button type="button" id="send-link" class="btn btn--orange btn--sm">SEND RESET LINK</button>
                        </form>
                      </div>
                      <!--START: Success message-->
                      <div id="success-msg" class="banner-form login-form banner-form--transform">
                        <h3 class="heading-light">We have successfully sent the password reset link to your email address!</h3>
                        <button type="button" id="continue-login" class="btn btn--orange">CONTINUE TO LOGIN</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

        <input type="hidden" id="platform-url" value="<?php echo PLATFORM_URL;?>" />
    <input type="hidden" id="app-url" value="<?php echo APP_URL;?>" />

<?php get_footer(); ?>
<script type="text/javascript">
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
<script language="Javascript" type="text/javascript">

        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }

    </script>

    <script type="text/javascript">

function validateEmail(emailField){
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (reg.test(emailField.value) == false)
    {
        alert('Invalid email address. Please provide a valid email address');
        return false;
    }

    return true;

}
</script>    <input type="hidden" id="platform-url" value="<?php echo PLATFORM_URL;?>" />
    <input type="hidden" id="app-url" value="<?php echo APP_URL;?>" />

<?php get_footer(); ?>
<script type="text/javascript">
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
<script language="Javascript" type="text/javascript">

        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }

    </script>

    <script type="text/javascript">

function validateEmail(emailField){
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (reg.test(emailField.value) == false)
    {
        alert('Invalid email address. Please provide a valid email address');
        return false;
    }

    return true;

}
</script>