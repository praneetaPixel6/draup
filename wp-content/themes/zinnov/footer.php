<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

  <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <?php wp_nav_menu( array( 'theme_location' => 'footer','menu_class' => 'footer-menu','li_class'=>'footer-menu__list') ); ?>
            <div class="copy-right text-center">
              <p class="copy-right__content">&#9400;2017 Zinnov. All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

  <!--START: Scripts- Plugins-->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/plugins/jquery.js"></script>
   
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/plugins/bootstrap.js"></script>
     <?php if(is_post_type_archive('careers')) { ?>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/plugins/jquery.nicescroll.min.js"></script>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/careers.js"></script>
    <?php } ?>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/plugins/slick.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/plugins/parsley.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/plugins/date-picker.js"></script>

   

    <!--START: Scripts- Custom-->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/banner-slick-init.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/add-message.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/why-draup-slider-init.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/home-header-animation.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/login.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/plugins/modernizr.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/select-init.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/plugins/select.js"></script>

   <!-- Pixel6 JS-->
    <?php if(is_front_page()){ ?>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/home.js"></script>
    <?php } ?>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/about-us-slick-init.js"></script>
    <?php if(is_post_type_archive('events')) { ?>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/plugins/calendar.js"></script>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/calendar-init.js"></script>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/date-picker-init.js"></script>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/life-slider.js"></script>
    <?php } ?>
    <?php if(is_post_type_archive('careers')) { ?>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/life-slider.js"></script>
    <?php } ?>
    <script type="text/javascript">
     jQuery('.footer .container .footer-menu li').addClass('footer-menu__list');
     jQuery('.footer .container .footer-menu li.footer-menu__list a').addClass('footer-menu__link');
     jQuery('.footer .container div').removeClass('menu-footer-menu-container');
    </script>

<?php wp_footer(); ?>
   </body>
</html>
