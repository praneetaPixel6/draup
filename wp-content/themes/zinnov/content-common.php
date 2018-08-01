<?php /*Template Name: Common*/?>
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
get_header(''); ?>
<?php while ( have_posts() ) : the_post();  ?>
<!--START: Main-->
    <main>
      <!--Start: Banner-->
      <section class="section-careers-details blue-bg-pattern ">
        <div class="container">
          <?php the_content(); ?>
          <!-- <div class="col-sm-10 col-sm-offset-1 mt-5">
            <div class="row">
              <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
              </header>

              <div class="entry-content">
                <?php the_content(); ?>
              </div>
            </div>
          </div> -->
        </div>
      </section>
    </main>
<?php endwhile;?>
<?php get_footer(''); ?>
