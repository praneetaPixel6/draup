<?php /* Template Name: Disclaimer */?>
<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header('disclaimer'); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <main>
      <!--Start: Banner-->
      <section class="section-FAQBanner">
        <div class="container">
          <div class="row">
            <div class="contact-banner-container clearfix">
              <ul class="breadcrumb breadcrumb-menu breadcrumb-menu--gray">
                <li class="breadcrumb__list"><a href="<?php echo site_url();?>" class="breadcrumb__link">home</a></li>
                <li class="breadcrumb__list active">LEGAL DISCLAIMER</li>
              </ul>
              <h3 class="heading heading--black text-capitalize heading--lg"><?php the_title();?></h3>
              <div class="col-sm-8 col-md-9">
                <div class="legal-wrapper">
                  <div class="circle circle--sm circle--circleBlue"></div>
                  <div class="circle circle--md circle--circleOrange"></div>
                  <?php the_content();?>
                   <div class="circle circle--md circle--ringBlue circle--ring"></div>
                </div>
              </div>
              <div class="col-sm-4 col-md-3">
                <div class="card-wrapper">
                  <h3 class="section-title"><?php echo get_field('query_heading');?></h3>
                  <p class="info"><?php echo get_field('query_short_desc');?></p><a href="<?php echo get_option( 'siteurl' );?>/contact" class="btn btn--blue btn--sm">contact us</a>
                </div>
              </div>
            </div>
            <div class="text-center logo-footer"><img src="<?php echo get_field('footer_image');?>" alt="Draup" class="logo-footer__img"></div>
          </div>
        </div>
      </section>
    </main>
    <?php endwhile; ?>
    <?php get_footer(); ?>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/blog-header-animation.js"></script>
    
    
    
    
    