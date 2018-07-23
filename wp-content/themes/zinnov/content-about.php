<?php /*Template Name: About*/?>
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
get_header('about'); ?>
<!--START: Main-->
    <main>
      <!--Start: Banner-->
      <section class="section-bannerPatch about-banner">
        <div class="container">
          <div class="col-sm-10 col-sm-offset-1 mt-5">
            <div class="row">
              <div class="about-content-wrapper clearfix">
                <div class="bar">
                    <div class="bar__line"></div>
                    <div class="bar__line"></div>
                    <div class="bar__line"></div>
                  </div>
                  <div class="circle circle--md circle--filled circle--circleBlue "></div>
                <div class="about-content">
                <?php $i=1;
                    while ( have_rows('banner_list') )
                       {
                           the_row();
                            if($i%2!=0) {?>
                  <div class="about-content__list clearfix">
                    <div class="left col-sm-6">
                      <h4 class="title-blue title-blue--line title-blue--right"><?php echo get_sub_field('banner_title'); ?></h4>
                      <h1 class="title-big title-big--pl">
                        <?php echo get_sub_field('banner_subtitle'); ?>
                      </h1>
                    </div>
                    <div class="right col-sm-6">
                      <div class="info"><?php echo get_sub_field('banner_desc'); ?></div>
                    </div>
                  </div>
                  <?php } if($i%2==0){ ?>
                  <div class="about-content__list clearfix">
                    <div class="col-sm-6 col-sm-push-6">
                      <h4 class="title-blue title-blue--line"><?php echo get_sub_field('banner_title'); ?></h4>
                      <h1 class="title-big title-big--pr"><?php echo get_sub_field('banner_subtitle'); ?> </h1>
                    </div>
                    <div class="left col-sm-6 col-sm-pull-6">
                      <div class="info"><?php echo get_sub_field('banner_desc'); ?></div>
                    </div>
                  </div>
                  <?php } $i++;} ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--start: Draup Road Map-->
        <section class="section section--whitea">
          <div class="container">
            <div class="col-sm-12">
              <div class="row">
                <div class="text-center">
                  <h3 class="section-title section-title--md"><?php echo get_field('roadmap_maintitle');?></h3>
                </div>
                <!--START: Roadmap Timeline Slider-->
                <div class="timeline-slider-container">
                  <ul class="timeline-slider">
                    <?php $k=1;
                    while ( have_rows('roadmap_list') )
                       {
                           the_row();
                             ?>
                    <li class="timeline-slider__list">
                      <h2 class="timeline-slider__heading text-uppercase">
                        <div class="mb-1"><?php echo get_sub_field('roadmap_month'); ?></div><?php echo get_sub_field('roadmap_year'); ?>
                      </h2>
                    </li>
               <?php  $k++;} ?>
                  </ul>
                </div>
                <!--Start: Roadmap List-->
                <div class="roadmap-container">
                  <ul class="roadmap-list clearfix">
                   <?php $k=1;
                    while ( have_rows('roadmap_list') )
                       {
                           the_row();
                             ?>
                    <li class="col-sm-4">
                      <div class="roadmap-list__item">
                        <h3 class="title-gray title-gray--md"><?php echo get_sub_field('roadmap_month'); ?> <?php echo get_sub_field('roadmap_year'); ?></h3>
                        <div class="roadmap-content">
                          <p class="info"><?php echo get_sub_field('roadmap_title'); ?> </p>
                          <div class="roadmap-info">
                            <p class="info info--sm"><strong class="info__strong"><?php echo get_sub_field('roadmap_desc'); ?></strong>
                            </p>
                          </div>
                        </div>
                        <div class="roadmap-sector"></div>
                      </div>
                    </li>
                    <?php  $k++;} ?>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
      <!--Start: Team-->
      <section class="section section-teamMembers">
        <div class="container">
          <div class="text-center">
            <h3 class="section-title section-title--md"><?php echo get_field('team_title'); ?></h3>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="team-members-wrapper">
                <ul class="team-mem clearfix">
                  <!--START: Team Row 1-->
                  <?php $i=1;
                    while ( have_rows('team_list') )
                       {
                           the_row();
                            if($i==1) {?>
                  <li class="team-mem__list col-sm-4 col-md-3 col-sm-offset-2 mt-5">
                    <div class="row">
                      <div class="tumbnail thumbnail-menu">
                        <div class="tumbnail__link">
                          <div class="member-img-wrappe">
                            <div class="card-circle">
                              <div class="circle circle--md circle--filled circle--circleOrange">   </div>
                              <div class="circle circle--sm circle--filled circle--circleBlue">   </div>
                            </div>
                            <img src="<?php echo get_sub_field('member_image'); ?>" alt="Vijay Swanimathan" class="img-responsive"></div>
                          <div class="caption caption--member">
                            <h3 class="member-name member-name--white member-name--sm"><?php echo get_sub_field('member_name'); ?></h3>
                            <h5 class="member-position member-position--sm"><?php echo get_sub_field('member_designation'); ?></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                   <?php }  if($i==2) {?>
                  <li class="team-mem__list col-sm-4 col-md-3 col-sm-offset-2">
                    <div class="row">
                      <div class="tumbnail thumbnail-menu">
                        <div class="tumbnail__link">
                          <div class="member-img-wrappe">
                            <div class="bar">
                                <div class="bar__line"></div>
                                <div class="bar__line"></div>
                                <div class="bar__line"></div>
                              </div>
                              <div class="circle circle--lg circle--ring circle--ringOrange"></div>
                              <div class="circle circle--md circle--filled circle--circleBlue "></div>
                            <img src="<?php echo get_sub_field('member_image'); ?>" alt="Vamsee Tirukkala" class="img-responsive"></div>
                          <div class="caption caption--member">
                            <h3 class="member-name member-name--white member-name--sm"><?php echo get_sub_field('member_name'); ?></h3>
                            <h5 class="member-position member-position--sm"><?php echo get_sub_field('member_designation'); ?></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <?php } $i++;} ?>
                </ul>
                <ul class="team-mem clearfix">
                <?php $i=1;
                   while ( have_rows('team_list') )
                       {
                           the_row();
                            if($i>2) {?>
                  <li class="team-mem__list col-sm-4 col-md-3">
                    <div class="row">
                      <div class="tumbnail thumbnail-menu">
                        <div class="tumbnail__link">
                          <div class="member-img-wrappe">
                    <img src="<?php echo get_sub_field('member_image'); ?>" alt="Hardik Tiwari" class="img-responsive"></div>
                          <div class="caption caption--member">
                            <h3 class="member-name member-name--white member-name--sm"><?php echo get_sub_field('member_name'); ?></h3>
                            <h5 class="member-position member-position--sm"><?php echo get_sub_field('member_designation'); ?></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li><?php } $i++;} ?>
                </ul>

                <div class="text-center btn-viewAll"><a href="<?php echo get_option('siteurl');?>/<?php echo get_field('team_button_link'); ?>" class="btn btn--oval btn--outline btn--sm"><?php echo get_field('team_button_text'); ?></a>


                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sector-img hidden-xs hidden-sm"></div>
      </section>
      <!--Start: Advisores-->
      <section class="section section-adv cross-orange-banner">
        <div class="container">
          <div class="col-md-12">
            <div class="row">
              <div class="text-center">
                <h3 class="section-title section-heading--white"><?php echo get_field('advisors_maintitle'); ?></h3>
              </div>
              <!--start: List 1-->
              <div class="clearfix">
                <div class="col-md-12">
                  <div class="adv-menu">
                    <div class="col-sm-6 adv-menu__list">
                      <div class="advisor-list">
                        <div class="advisors-image"><img src="<?php echo get_field('advisors_image1'); ?>" alt="Stephen Snyder" class="img-responsive"></div>
                        <div class="advisors-info">
                          <h2 class="advisors-title"><?php echo get_field('advisors_name1'); ?></h2>
                          <h4 class="advisors-position advisors-position--line"><?php echo get_field('advisors_designation1'); ?></h4>
                          <p class="info"><?php echo wp_trim_words( get_field('advisors_description2'), $num_words = 35, $more = '…' );?></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 adv-menu__list">
                      <div class="advisor-list">
                        <div class="advisors-image"><img src="<?php echo get_field('advisors_image2'); ?>" alt="Theo Forbath" class="img-responsive"></div>
                        <div class="advisors-info">
                          <h2 class="advisors-title"><?php echo get_field('advisors_name2'); ?></h2>
                          <h4 class="advisors-position advisors-position--line"><?php echo get_field('advisors_designation2'); ?></h4>
                          <p class="info"><?php echo wp_trim_words( get_field('advisors_description2'), $num_words = 50, $more = '…' );?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center btn-viewAll"><a href="<?php echo get_option('siteurl');?>/<?php echo get_field('advisors_button_link'); ?>" class="btn btn--oval btn--outline btn--sm"><?php echo get_field('advisors_button_text'); ?></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Start: Testimonials-->
      <section class="section section-testimonial">
        <div class="container">
          <h3 class="section-title text-center">Testimonials</h3>
            <div class="col-sm-8 col-sm-offset-2 bg-white testimonials-content">
              <div class="col-sm-3">
                <div class="testimonial-img-wrap hidden-xs">
                  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/testimonial-img.png" alt="testimonial">
                </div>
              </div>
              <?php  $testimonials = get_field('testimonial');?>


              <div class="col-sm-8">
                <ul class="testimonial-list testimonial-content-slider">
                <?php  foreach($testimonials as $testimonial){

                  $trimword = $testimonial->post_content;
                  $image = get_the_post_thumbnail_url($testimonial, 'thumbnail');
                  $designation = get_field('testi_designation',$testimonial->ID);
                  ?>
                  <li class="testimonial-item">
                    <p><?php echo wp_trim_words( $trimword, $num_words = 30, $more = '… ' ); ?></p>
                    <div class="user-info clearfix">
                      <div class="user-img-wrap d-inline-block">
                        <img src="<?php echo $image;?>" alt="">
                      </div>
                      <div class="user-info-text d-inline-block">
                        <h5><?php echo get_the_title($testimonial); ?></h5>
                        <p><?php echo $designation; ?></p>
                      </div>
                    </div>
                  </li>
                <?php } ?>
                </ul>

              </div>

              </div>
            </div>
        </div>
      </section>
    </main>

<?php get_footer('about'); ?>

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/home.js"></script>
