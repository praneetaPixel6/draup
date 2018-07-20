<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('events'); ?>

<!--START: Main-->
    <main>
      <!--Start: Banner-->
      <section class="section-events blue-bg-pattern">
        <div class="container">
          <div class="col-sm-12">
            <div class="row">
              <div class="banner-wrapper flex-item mt-5">
                <div class="col-sm-4 flex-item-list p-sm-2 p-lg-3">
                  <div class="thumbnail card-thumbnail card-thumbnail--margin">
                    <div id="caleandar"></div>
                    <ul class="events-list">

                    <?php $terms = get_terms("list_events",array( 'parent' => 0 ));
                   $cat = get_categories();
                   // print_r($cat);
               foreach ( $terms as $term ) {
					        $k=1;




                           ?>
                      <li class="events-list__item"><a href="<?php echo get_option( 'siteurl' );?>/events?cat=<?php echo $term->name;?>" id="<?php echo $termname;?>" class="link">view all <?php echo $term->name;?></a></li>
                      <!-- <li class="events-list__item"><a href="javascript:void" class="link">view all meet ups</a></li>
                      <li class="events-list__item"><a href="javascript:void" class="link">view all trainings</a></li> -->
                   <?php $k++;}?> </ul>
                  </div>
                </div>
                <!--START: EVENT 1-->
                 <?php

                      $terms = get_terms("list_events",array( 'parent' => 0 ));
                      $i=1;
                      $category="";

                     foreach ( $terms as $term ) {
                         if($term->name==$_GET["cat"]){

		                   $category=$term->slug;
	                          }
                           }

                if(isset($_GET["cat"])){
      	        $the_query=new WP_Query(array('post_type'=>'events','posts_per_page'=>'6','tax_query' => array(array ('taxonomy' => 'list_events','field' => 'slug','terms' => "$category"))));
                   }



                else{
                $the_query=new WP_Query(array('post_type'=>'events','posts_per_page'=>'6'));
                }

      			while($the_query->have_posts() ) : $the_query->the_post();
            		{

                $product_date = get_the_date( 'd M Y', get_the_ID() );
            	$trimtitle = get_the_content();

                $shorttitle = wp_trim_words( $trimtitle, $num_words = 35, $more = '… ' );


              ?>
                <div class="col-sm-4 flex-item-list p-sm-2 p-lg-3">
                  <div class="thumbnail card-thumbnail card-thumbnail--margin">
                    <div class="card-thumbnail__link">
                      <div class="events-image events-image--sm"><?php echo get_the_post_thumbnail( get_the_ID(), 'blog-thumbnail',array('alt' => 'Event image','class' => 'card-thumbnail img-responsive')); ?>       </div>
                      <div class="caption card-caption">
                        <h3 class="heading-md"><?php the_title();?></h3>
                        <ul class="events-menu mt-3">
                          <li class="events-menu__list"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/events/Meet-up.svg" alt="Meet up" class="mr-3">
                            <h4 class="text-capitalize events-title"><?php echo get_field('meetup');?></h4>
                          </li>
                          <li class="events-menu__list"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/events/Calendar.svg" alt="Calendar" class="mr-3">
                            <h4 class="text-capitalize events-title"><?php echo get_field('event_date');?></h4>
                          </li>
                          <li class="events-menu__list"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/events/Location.svg" alt="Location" class="mr-3">
                            <h4 class="text-capitalize events-title"><?php echo get_field('event_location');?></h4>
                          </li>
                        </ul>
                      </div>
                      <div class="text-center mb-3 mt-3 btn-mar"><a href="<?php echo get_field('event_link');?>" class="btn btn--oval btn--lg btn-no-ds">rsvp to event</a></div>
                    </div>
                  </div>
                </div>


                <?php } endwhile;?>
              </div>
            </div>
          </div>

        </div>
      </section>
      <section class="section section-latestEvents">
        <div class="container-fluid">
          <div class="row">
            <div class="text-center">
              <h3 class="section-title section-title--md"><?php echo ot_get_option('section_event');?></h3>
              <!--start Slider-->
              <div class="life-draup-slider-wrapper py-b">
                <ul class="life-draup-slider">
                <?php
      if (function_exists('get_option_tree')){
        $gallery_pics = ot_get_option( 'gallery_pics', array() );
        if ( ! empty( $gallery_pics ) ) {
          /* print_r($home_banner); */
          $i=1;
          foreach( $gallery_pics as $section ) {
      ?>
                  <li class="life-draup-slider__list"><img src="<?php echo $section['gallery_image']; ?>" alt="" class="img-responsive"></li>
                  <?php } $i++; } }  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer('events'); ?>
