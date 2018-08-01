<?php /*Template Name: Advisors*/?>
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

get_header('advisors'); ?>
  <!--START: Main-->
    <main>
      <!--start: Banner-->
      <section class="se-adv blue-bg-pattern">
        <div class="container">
          <div class="col-sm-10 col-sm-offset-1 banner-wrapper mt-md-0">
            <div class="row">
              <div class="text-center">
                <h3 class="section-title"><?php echo get_field('main_title'); ?></h3>
              </div>
              <!--start: List 1-->
              <div class="clearfix adv-menu-container col-sm-12">
                <div class="row">
                  <div class="adv-menu-container-flex">
                   <?php $i=1;
                    while ( have_rows('advisors_list') )
                       {
                           the_row();
                            ?>
                    <div class="col-sm-6 adv-menu__list">
                      <div class="advisor-list">
                        <?php if(!empty(get_sub_field('advisors_image'))){ ?><div class="advisors-image"><img src="<?php echo get_sub_field('advisors_image'); ?>" alt="" class="img-responsive">  </div><?php } ?>
                        <div class="advisors-info">
                          <h2 class="advisors-title text-capitalize"><?php echo get_sub_field('advisors_name'); ?></h2>
                          <h4 class="advisors-position advisors-position--line"><?php echo get_sub_field('advisors_designation'); ?></h4>
                          <p class="info"><?php echo get_sub_field('advisors_description'); ?></p>
                        </div>
                      </div>
                    </div>
                    <?php  $i++;} ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer('advisors'); ?>
