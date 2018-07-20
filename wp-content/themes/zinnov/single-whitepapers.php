<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('whitepaperdetails'); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php 
$whitepapers_date = get_the_date( 'd M Y', get_the_ID() );
$categories = get_categories();
?>
<?php 
$user=get_field('select_author');
$auth = get_post($user); // gets author from post
$author_name = $auth->user_name;
$author_image = get_the_post_thumbnail( $user, 'user-thumbnail',array('alt' => 'Author image','class' => 'img-circle'));
$author_desig = $auth->user_info;
?> 
<?php 
$trimtitle = get_the_title();
$shorttitle = wp_trim_words( $trimtitle, $num_words = 10, $more = '… ' );
$MAX_CHAR=20;
$trimtitle= strlen($trimtitle)<=$MAX_CHAR?$trimtitle:substr($trimtitle,0,$MAX_CHAR)."...";
?>
	<main>
      <!--START:  Banner-->
      <section class="section section--BlogDetailsBanner">
        <div class="container">
          <div class="row">
            <div class="contact-banner-container clearfix">
              <div class="col-sm-12">
                <ul class="breadcrumb breadcrumb-menu breadcrumb-menu--white">
                  <li class="breadcrumb__list"><a href="<?php echo site_url(); ?>" class="breadcrumb__link">home</a></li>
                  <li class="breadcrumb__list"><a href="<?php echo get_option( 'siteurl' );?>/whitepapers" class="breadcrumb__link">white papers</a></li>
                  <li class="breadcrumb__list active"><?php echo  $trimtitle;?></li>
                </ul>
                <div class="row whitepapers-single-cont">
                  <div class="col-sm-9 blog-details-wrapper">
                    <h3 class="heading heading--black"><?php the_title();?></h3>
                    <div class="blog-posted"><span class="whitepapers-date"><?php echo $whitepapers_date;?></span>
                      <span class="whitepapers-cat">
                      Category: 
                        <?php foreach($categories as $category){?>
                          <span><?php echo $category->name; ?></span>
                        <?php } ?>
                      </span>
                    </div>

                    <div class="blog-details-img"><?php echo get_the_post_thumbnail( get_the_ID(), 'whitepapers-thumbnail',array('alt' => 'whitepapers image','class' => 'img-responsive')); ?></div>
                    <div class="col-sm-4 col-md-3">
                      <div class="row row--margin">
                        <?php if(!get_field('$author_image;')){?>
                        <figure class="author-wrapper">
                          <div class="img-wrapper"><?php echo $author_image; ?></div>
                          <figcaption>
                            <h5 class="author__name"><?php echo $author_name;?></h5>
                            <p class="author__info"><?php  echo $author_desig;?></p>
                          </figcaption>
                        </figure>
                      <?php } ?>
                        <div class="social-menu-wrapper">
                          <h4 class="heading-small">share</h4>
                          <ul class="social-menu">
                             <li class="social-menu__list"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" onclick="javascript:window.open(this.href,
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
                          <p class="info info--hasMargin"><?php the_content(); ?></p>
                        </div>
                       <?php $tag = get_the_tags(); ?>
                        <div class="rate-article-wrapper">
                          <h3 class="section-title">tags</h3>
                          <ul class="tags-menu">
                        <?php foreach ( $tag as $tag ) { ?>
                          <li class="tags-menu__list"><a href="<?php echo get_option( 'siteurl' );?>/whitepapers?tag=<?php echo $tag->name; ?>" class="tags-menu__link"><?php echo $tag->name; ?></a></li>
                        <?php } ?>
                           </ul>
                        </div>

                        <div class="download-section"> <a onclick="update()" href="<?php echo get_field('upload_pdf');?>" download class="btn btn--blue btn--sm"><i class="icon-pdf"> </i>download</a>
                             <span class="download-stats"><strong> <span id='downloadCount'><?php echo $count = (int) get_field(get_the_ID());?></span> Downloads</strong></span>
                           
                        </div>
                      </div>
                    </div>
                  </div> 
                   
                  <div class="col-sm-3">
                    <div class="more-read-menu-wrapper">
                      <h3 class="heading-md text-capitalize">Request a demo</h3>
                      <div class="bar">
                        <div class="bar__line"></div>
                        <div class="bar__line"></div>
                        <div class="bar__line"></div>
                      </div>
                      <ul class="more-read-menu">
                        <li class="more-read-menu__list more-read-menu__link">Learn how draup can help you experiment across every team and every customer touchpoint</li>
                        <li class="more-read-menu__list more-read-menu__link">Learn how draup can help you experiment across every team and every customer touchpoint</li>
                        <li class="more-read-menu__list more-read-menu__link">Learn how draup can help you experiment across every team and every customer touchpoint</li>
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
  <!--   <script type="text/javascript" >
  function update(){
    var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";

    var data = {
            'action': 'downloadCount',
            'post_id': <?php echo get_the_ID()?>,
        'count':<?php echo $count?>
            
          };
  
            jQuery.post(ajaxurl, data, function(response) {
            
           document.getElementById("downloadCount").innerHTML=response;
            
          });

  }
  </script> -->
<?php endwhile; ?>
<?php get_footer(); ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/blog-header-animation.js"></script>


