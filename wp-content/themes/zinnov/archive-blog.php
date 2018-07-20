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
get_header('blog'); ?>

	 <!--START: Main-->
    <main>
      <!--START:  Banner-->
      <section class="section section--BlogBanner">
        <div class="container">
          <div class="row">
            <div class="contact-banner-container clearfix">
              <div class="col-sm-12">
                <ul class="breadcrumb breadcrumb-menu breadcrumb-menu--white">
                  <li class="breadcrumb__list"><a href="<?php echo site_url();?>" class="breadcrumb__link">home</a></li>
                  <li class="breadcrumb__list active">blogs</li>
                </ul>
                <h3 class="heading heading--white text-capitalize heading--lg">blogs &amp; updates</h3>
                <div class="blog-updates clearfix">
                  <div class="col-sm-8">
                    <div class="row">
                      <div class="blog-left-content">
                        <!--START: Thumbnail Card : Main Card-->


                        <?php
                        $paged = ( isset( $my_query_array['paged'] ) && !empty( $my_query_array['paged'] ) ) ? $my_query_array['paged'] : 1;
                		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                
               			if($paged==1){
                         $prev_title="";
                         if(!isset($_GET["cat"])){

					     if(!isset($_GET["tag"])){
	  				     if($_GET["cat"]!=""){
	  	                 $cat=$_GET["cat"];

            
	  	   $the_query=new WP_Query(array('post_type'=>'blog','cat' => $cat,'posts_per_page'   => '1'));
	       }else{
           $the_query=new WP_Query(array('post_type'=>'blog','posts_per_page'   => '1'));
	        }
           while($the_query->have_posts() ) : $the_query->the_post();
            {
           $blog_date = get_the_date( 'd M Y', get_the_ID() );

           $trimtitle = get_the_content();
           $shorttitle = wp_trim_words( $trimtitle, $num_words = 23, $more = '… ' );

          ?>
          <?php
					$user=get_field('select_author');
					$auth = get_post($user); // gets author from post
					$author_name = $auth->user_name;

					$author_image = $auth->user_image;

					$blog_permalink = $auth->user_info;

					$prev_title=get_the_ID();
           ?>
      <div class="thumbnail card-thumbnail card-thumbnail-updates">
         <div class="card-thumbnail__link">
            <a href="<?php echo get_permalink(); ?>"> <div class="card-thumbnail-img card-thumbnail-img--overlay"><?php echo get_the_post_thumbnail( get_the_ID(), 'blog-thumbnail',array('alt' => 'Blog image','class' => 'card-thumbnail img-responsive')); ?>
                <h3 class="card-thumbnail-heading"><?php the_title();?> </h3>
                    <div class="label label--rect label--blue">by <span class="user-name"><?php echo $author_name;?> </span><?php echo $blog_date;?></div>
                        </div>
                           <div class="caption card-caption">
                                <p class="info"><?php echo $shorttitle;?> </p>
                                <a href="<?php echo get_permalink();?>" class="link">READ MORE</a>
                          </div>
                     </div></a>
               </div>
                          <?php
                }  endwhile;}}}?>
                

                <br/>
        <!--START: Thumbnail Card : Updates-->
     <div class="thumbnail card-thumbnail card-thumbnail--noMargin card-thumbnail-updates clearfix">
        <div class="card-circle">
           <div class="circle circle--sm circle--filled circle--circleBlue"></div>
               <div class="circle circle--md circle--filled circle--circleOrange"></div>
                   </div>
                          <ul class="blog-post">

                          <?php

				$paged = ( isset( $my_query_array['paged'] ) && !empty( $my_query_array['paged'] ) ) ? $my_query_array['paged'] : 1;
                
				
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                
                $terms = get_terms("list_blog",array( 'parent' => 0 ));
                $i=1;
                $category="";

                         foreach ( $terms as $term ) {
                         if($term->name==$_GET["cat"]){

		                  $category=$term->slug;
	                          }
                           }

                if(isset($_GET["cat"])){
      	        $the_query=new WP_Query(array('post_type'=>'blog','posts_per_page'=>'5','paged' => $paged,'tax_query' => array(array ('taxonomy' => 'list_blog','field' => 'slug','terms' => "$category"))));
                   }
	 
                else if(isset($_GET["tag"])){
        	    $the_query=new WP_Query(array('post_type'=>'blog','posts_per_page'=>'6','paged' => $paged,'tag' => $_GET["tag"]));
                   }
                else{
        	    $the_query=new WP_Query(array('post_type'=>'blog','posts_per_page'=>'6','paged' => $paged));
                 }
                $j=0;
                while($the_query->have_posts() ) : $the_query->the_post(); $do_not_duplicate =$menu_ID;

                {
            	$blog_date = get_the_date( 'd M Y', get_the_ID() );
            	$trimtitle = get_the_content();

            	$shorttitle = wp_trim_words( $trimtitle, $num_words = 14, $more = '… ' );
                $exist="";
            	$menu_id = get_the_id();


				 if(isset($_GET["tag"])){


				 $tag = wp_get_post_tags($menu_id ,"tag");

			     foreach ( $tag as $tag ) {

				 if($tag->name==$_GET["tag"]){

				 $exist="exist";

					}

					   }
				   }


		       else{
				$exist="exist";
				}

			    
               ?>
              
               <?php
					$user=get_field('select_author');
					$auth = get_post($user); // gets author from post
					$author_name = $auth->user_name;

					$author_image = get_the_post_thumbnail( $user, 'user-thumbnail');

					$author_desig = $auth->user_info;
					if($prev_title!=get_the_ID())
					{
                ?>

                 <!--Start: Post 1-->
              <li class="blog-post__list">
                <a href="<?php echo get_permalink();?>" class="media blog-media">
                   <div class="blog-media__img blog-media__img--md"><?php echo get_the_post_thumbnail( get_the_ID(), 'blog-thumbnail',array('alt' => 'Blog image','class' => 'media-object img-responsive')); ?></div>
                    <div class="blog-media__body">
                       <h4 class="media-heading"><?php the_title();?><?php echo $termname;?></h4>
                         <p class="info"><?php echo $shorttitle;?></p>
                          <div class="blog-posted">
                           <div class="blog-posted__user"><?php echo $author_image; ?></div>
                            <div class="blog-posted__date">
                                 <div><?php echo $blog_date;?></div>by <span><?php echo $author_name;?></span><span class="user-designation"><?php echo $author_desig;?></span>
                             </div>
                          </div>
                     </div>
                  </a>
               </li>

        <?php }if($j==0 && $paged==1){
		$j++; continue; }  $j++;?>
        <?php  } endwhile; ?>
           </ul>

               <!--start: Pagination-->
       <?php if ( have_posts() ) : ?>
			   <ul class="pagination pagination-menu">
		  <?php  the_posts_pagination( array( 'mid_size' => 3 ) );?>
               </ul>
		  <?php wp_reset_postdata(); ?>
       <?php endif; ?>
			       
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="row">
                      <div class="blog-right-content">
                        <div class="category-menu-wrapper id="blog-post__list" s>
                          <h3 class="heading-md text-capitalize">categories</h3>
                          <ul class="category-menu">
                          <?php
					        $terms = get_terms("list_blog",array( 'parent' => 0 ));
					        $k=1;
					        foreach ( $terms as $term ) {
					        $termname = strtolower($term->name);
					        $termname = str_replace(' ', '-', $termname);



					        $blog_status="";
					        if($term->name==$_GET['cat'])
					        {
					        	$blog_status="active";
					        }
                           ?>
                     <li class="category-menu__list <?php echo $blog_status?>" ><a href="<?php echo get_option( 'siteurl' );?>/blog?cat=<?php echo $term->name; ?>" class="category-menu__link" id="<?php echo $termname; ?>"><?php echo $term->name; ?></a></li>
               <?php $k++; } ?>
                          </ul>
                        </div>
                      <div class="more-read-menu-wrapper">
                        <h3 class="heading-md text-capitalize">most read</h3>
                        <div class="bar">
                            <div class="bar__line"></div>
                            <div class="bar__line"></div>
                            <div class="bar__line"></div>
                            </div>
                              <ul class="more-read-menu">
                               <?php
                					      $the_query=new WP_Query(array('post_type'=>'blog','posts_per_page'   => '3','meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'ASC'));
                					      while($the_query->have_posts() ) : $the_query->the_post();
                					      {  ?>
                                  <li class="more-read-menu__list"><a href="<?php echo get_permalink();?>" class="more-read-menu__link"><?php the_title();?></a></li>
                                <?php }  endwhile;?>
                              </ul>
                      </div>
                     <div class="subscription-wrapper">
                        <h3 class="heading-md text-capitalize">subscribe</h3>
                        <p class="info">Subscribe to our newsletter and receive  the latest research and insights from Draup.</p>
                        <?php //echo do_shortcode('[contact-form-7 id="280" title="subscribe"]')?>
                        <div role="form" class="wpcf7" id="wpcf7-f280-o1" lang="en-US" dir="ltr">
					      <div class="screen-reader-response"></div>
                           <form data-parsley-validate="" class="updates-form wpcf7-form" action="/training/zinnov/blog/#wpcf7-f280-o1" method="post"  novalidate="novalidate">
			                   <div style="display: none;">
							   <input type="hidden" name="_wpcf7" value="280">
							   <input type="hidden" name="_wpcf7_version" value="4.9">
							   <input type="hidden" name="_wpcf7_locale" value="en_US">
							   <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f280-o1">
							   <input type="hidden" name="_wpcf7_container_post" value="0">
							   </div>
                        <div class="form-group">
                          <label for="email" class="input-label">email address</label>
                          <input id="email" name="email" type="email" required placeholder="Steve@company.com" class="input-field form-control">
                                <button type="submit" class="btn btn--blue btn--lg">SUBSCRIBE</button>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               <div class="text-center logo-footer"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer-logo.svg" alt="Draup" class="logo-footer__img"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>

 <style>
.pagination 
{

}
</style>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/blog-header-animation.js"></script>
