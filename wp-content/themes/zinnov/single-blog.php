<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('blogdetails'); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php
$blog_date = get_the_date( 'd M Y', get_the_ID() );
?>
<?php
$user=get_field('select_author');
$auth = get_post($user); // gets author from post
$author_name = $auth->user_name;
$author_image = get_the_post_thumbnail( $user, 'user-thumbnail',array('alt' => 'Author image','class' => 'img-circle'));
$author_desig = $auth->user_info;
?>
<?php
update_post_meta(get_the_id(), 'wpb_post_views_count', $newCount);
?>
<?php
$trimtitle = get_the_content();
$the_title = wp_trim_words( $trimtitle, $num_words = 10, $more = '… ' );
?>
<?php
$trimtitle = get_the_title();
$shorttitle = wp_trim_words( $trimtitle, $num_words = 10, $more = '… ' );
$MAX_CHAR=20;
$trimtitle= strlen($trimtitle)<=$MAX_CHAR?$trimtitle:substr($trimtitle,0,$MAX_CHAR)."...";

$new_title=get_the_title();
?>
<!--START: Main-->
    <main>
      <!--START:  Banner-->
      <section class="section section--BlogDetailsBanner">
        <div class="container">
          <div class="row">
            <div class="contact-banner-container clearfix">
              <div class="col-sm-12">
                <ul class="breadcrumb breadcrumb-menu breadcrumb-menu breadcrumb-menu--margin">
                  <li class="breadcrumb__list"><a href="<?php echo site_url(); ?>" class="breadcrumb__link">home</a></li>
                  <li class="breadcrumb__list"><a href="<?php echo get_option( 'siteurl' );?>/blog" class="breadcrumb__link">blogs</a></li>
                  <li class="breadcrumb__list active"><?php echo  $trimtitle;?></li>
                </ul>
                <div class="row">
                  <div class="col-sm-8 blog-details-wrapper col-md-9">
                    <div class="circle-wrapper">
                      <div class="circle circle--ring circle--ringBlue circle--md"></div>
                    </div>
                    <h3 class="heading heading--black"><?php the_title();?></h3>
                    <div class="blog-posted"><?php echo $blog_date;?></div>
                    <div class="blog-details-img"><?php echo get_the_post_thumbnail( get_the_ID(), 'blog-thumbnail',array('alt' => 'Blog image','class' => 'img-responsive')); ?></div>
                    <div class="col-sm-4 col-md-3">
                      <div class="row row--margin">
                        <figure class="author-wrapper">
                          <div class="img-wrapper"><?php echo $author_image; ?></div>
                          <figcaption class="author-details">
                            <h5 class="author__name"><?php echo $author_name;?></h5>
                            <p class="author__info"><?php  echo $author_desig;?></p>
                          </figcaption>
                        </figure>
                        <div class="social-menu-wrapper">
                          <h4 class="heading-small">share</h4>
                          <ul class="social-menu">
                            <li class="social-menu__list"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>&amp;title=<?php the_title(); ?>" onclick="javascript:window.open(this.href,
                                '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><span class="social-menu__link social-menu__link--fb"><i class="icon-fb icon"></i></span>facebook</a></li>
                            <li class="social-menu__list"><a href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink();?>" onclick="javascript:window.open(this.href,
                             '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><span class="social-menu__link social-menu__link--tw"><i class="icon-tw icon"></i></span>twitter</a></li>
                            <li class="social-menu__list"><a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
                             '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><span class="social-menu__link social-menu__link--ln"><i class="icon-ln icon"></i></span>linkedin</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  <div class="col-sm-8 col-md-9">
                   <div class="row">
                        <div class="blog-details-content info">
                            <?php the_content(); ?>
                        </div>
                   </div>
                   <div class="rate-this">
                      <h3 class="rate-heading">Rate this artical</h3>
                      <p class="rate-info">Please rate this article to publish more quality articles.</p>
                      <div class="rate-us-list">
                        <button type="button" name="button" class="btn d-inline button--blue"><span class="rate-face great-face"></span>Great</button>
                        <button type="button" name="button" class="btn d-inline button--blue"><span class="rate-face avg-face"></span>Average</button>
                        <button type="button" name="button" class="btn d-inline button--blue"><span class="rate-face notuseful-face"></span>Not Useful</button>
                      </div>
                      <p class="info--rate text-center mt-3"></p>
                   </div>
                 </div>
               </div>


                <div class="col-sm-4 col-md-3">
                    <div class="card-wrapper card-wrapper--bars">
                     <div class="bar">
                        <div class="bar__line"></div>
                        <div class="bar__line"></div>
                        <div class="bar__line"></div>
                      </div>
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
					      <label for="email" class="input-label">Email address</label>
                          <input id="email" name="email" type="email" required placeholder="sam@companyname.com" class="form-control input-field">
                          <button type="submit" class="btn btn--blue btn--lg">subscribe</button>
                          <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </div>
                     </form>
                   </div>
                 </div>
                    <?php $tag = get_the_tags(); ?>
                    <div class="card-wrapper">
                      <h3 class="heading-md text-capitalize">tags</h3>
                      <ul class="tags-menu">
                      <?php foreach ( $tag as $tag ) { ?>
                      <li class="tags-menu__list"><a href="<?php echo get_option( 'siteurl' );?>/blog?tag=<?php echo $tag->name; ?>" class="tags-menu__link"> <?php echo $tag->name; ?> </a></li>
                      <?php } ?>
                      </ul>
                    </div>
                    <div class="card-wrapper">
                      <h3 class="heading-md text-capitalize">similar articles</h3>
                      <ul class="articles-menu">
                       <?php
                      $post_ID=$menu_id;
                      $menu_id=get_the_id();

                      $tag = wp_get_post_tags($menu_id);



                      if ($tag) {

                          $tag_ids = array();
                      foreach($tag as $tag) $tag_ids[] = $tag->term_id;


                      $the_query = new wp_query( array('post_type'=>'blog','posts_per_page'=>'4','caller_get_posts'=>'1','tag__in' => $tag_ids,$post-ID=>'menu_id','post__not_in' => $do_not_duplicate));

                      while( $the_query->have_posts() ){

                      $the_query->the_post();


              ?>

                 <?php

               $title=get_the_title();
                 if($new_title!=$title){?>       <li class="articles-menu__list"><a href="<?php echo get_permalink();?>" class="articles-menu__link" ><?php  the_title();?></a></li>
                    <?php  } } }
                     wp_reset_query();?>
                      </ul>
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
<?php endwhile;?>
<?php get_footer(); ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/blog-header-animation.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/rate-us.js"></script>
