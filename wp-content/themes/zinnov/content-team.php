<?php /*Template Name: Team*/?>
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
      <!--start: Banner-->
      <section class="section section-teamPage1 blue-bg-pattern">
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
              <div class="banner-wrapper mt-5 banner-wrapper--padding">
                <div class="team-page-wrapper">
                  <h3 class="content-title content-title--blue"><?php echo get_field('banner_title'); ?></h3>
                  <div class="team-page-info">
                  <?php $i=1;
                    while ( have_rows('banner_list') )
                       {
                           the_row();
                            ?>
                    <p class="info"><?php echo get_sub_field('banner_points'); ?></p>
                    <?php  $i++;} ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--start: Team Member-->
      <section class="section team-detail-section">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="team-members-wrapper team-members-wrapper--noMargin">
                <ul class="team-mem clearfix">
                  <!--START: Team Row 1-->
                  <?php $i=1;
                    while ( have_rows('team_list') )
                       {
                           the_row();
                            if($i==1) {?>
                  <li class="team-mem__list col-sm-4 col-md-4 col-lg-3 col-sm-offset-3">
                    <div class="row">
                      <div class="tumbnail thumbnail-menu">
                        <div class="tumbnail__link">
                          <div class="member-img-wrappe"><img src="<?php echo get_sub_field('member_image'); ?>" alt="Vijay Swanimathan" class="img-responsive"></div>
                          <div class="caption caption--member">
                            <h3 class="member-name member-name--white member-name--sm"><?php echo get_sub_field('member_name'); ?></h3>
                            <h5 class="member-position member-position--sm"><?php echo get_sub_field('member_designation'); ?></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                   <?php }  if($i==2) {?>
                  <li class="team-mem__list col-sm-4 col-md-4 col-lg-3">
                    <div class="row">
                      <div class="tumbnail thumbnail-menu">
                        <div class="tumbnail__link">
                          <div class="member-img-wrappe"><img src="<?php echo get_sub_field('member_image'); ?>" alt="Vamsee Tirukkala" class="img-responsive"></div>
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
                            if($i>2 && $i<=6) {?>
                  <li class="team-mem__list col-sm-4 col-md-4 col-lg-3">
                    <div class="row">
                      <div class="tumbnail thumbnail-menu">
                        <div class="tumbnail__link">
                          <div class="member-img-wrappe"><img src="<?php echo get_sub_field('member_image'); ?>" alt="Hardik Tiwari" class="img-responsive"></div>
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
                            if($i>6){?>
                  <li class="team-mem__list col-sm-4 col-md- col-lg-2">
                    <div class="row">
                      <div class="tumbnail thumbnail-menu">
                        <div class="tumbnail__link">
                          <div class="member-img-wrappe member-img-wrappe--sm"><img src="<?php echo get_sub_field('member_image'); ?>" alt="Ansari-Mohammad" class="img-responsive"></div>
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
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer('about'); ?>
