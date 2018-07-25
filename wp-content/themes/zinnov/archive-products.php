<?php /*Template Name: product*/
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

get_header('product'); ?>
 <!--START: Main-->
    <main>
      <!--Start: Banner-->
      <section class="section-resourceUpdates section-newsletter">
        <div class="container">
          <div class="banner-wrapper banner-wrapper--resourceUpdates mt-5 clearfix">
            <div class="col-sm-10 col-sm-offset-1">
              <div class="row">
               <?php 
    
            $the_query=new WP_Query(array('post_type'=>'products','posts_per_page'   => '10000000000000000000000000000000000000'));
      
            while($the_query->have_posts() ) : $the_query->the_post(); 
                {  
             
                $product_date = get_the_date( 'd M Y', get_the_ID() );
              $trimtitle = get_the_content();
    
                $shorttitle = wp_trim_words( $trimtitle, $num_words = 35, $more = '....' );
                 
              
              ?>
                <div class="card-wrapper card-wrapper--padding mb-sm-30 md-lg-60">
                  <h4 class="title title--small mb-sm-2"><?php the_title();?></h4>
                  <div class="product-metadata"><span class="product-metadata__title"><?php echo get_field('meta_title');?></span><span class="product-metadata__date"><?php echo $product_date;?></span></div>
                  <div class="product-info">
                    <p class="info"><?php echo $shorttitle;?></p><a href="<?php echo get_permalink();?>" class="link">read more</a>
                  </div>
                </div>
                <?php }endwhile; wp_reset_query();?>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  

<?php get_footer('product'); ?>
