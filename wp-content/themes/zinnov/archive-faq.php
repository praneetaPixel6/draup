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



get_header('faq');

$blog_main_heading=get_field('blog_main_heading');
$footer_image=get_field('footer_image');
?>



  <main>
      <!--START: FAQ Main Content-->
      <section class="section-FAQBanner blue-bg-pattern">
        <div class="container">
          <div class="row">
            <div class="contact-banner-container clearfix">
              <div class="col-sm-12">
                <ul class="breadcrumb breadcrumb-menu breadcrumb-menu--gray">
                  <li class="breadcrumb__list"><a href="<?php echo site_url(); ?>" class="breadcrumb__link">home</a>
                    <li class="breadcrumb__list active">FREQUENTLY ASKED QUESTIONS</li>
                  </li>
                </ul>
                <h3 class="heading heading--white text-capitalize heading--lg">questions answered</h3>
                <div class="row">
                  <div class="col-sm-9">
                    <div class="faq-qa-wrapper">
                      <ul class="faq-qa-menu">
                        <!--START: General-->
                        <li class="faq-qa-menu__list">
                          <div class="col-sm-3">
                            <div class="row">
                            <?php
						        $terms = get_terms("list_faq",array( 'parent' => 0 ));
						        $i=1;
						        foreach ( $terms as $term ) {
						        $termname = strtolower($term->name);
						        $termname = str_replace(' ', '-', $termname);
					        ?>
                        <li class="faq-qa-menu__list">
                       <?php if($i==2) echo '<div class="circle-wrapper">
                            <div class="circle circle--sm circle--circleBlue"></div>
                            <div class="circle circle--md circle--circleOrange"></div>
                          </div>';?>
                          <div class="col-sm-3">
                            <div class="row">
                              <h3 class="faq-title" data-category="<?php echo $termname; ?>"><?php echo $term->name; ?></h3>
                            </div>
                          </div>
                          <div class="col-sm-9">
                            <div class="row">
                              <ol class="faq-qa-list">
                                <?php
								  $the_query=new WP_Query(array('post_type'=>'faq','orderby' => 'meta_value','order' => 'ASC','tax_query' => array(array ('taxonomy' => 'list_faq','field' => 'slug','terms' => $term->slug ))));
							      while($the_query->have_posts() ) : $the_query->the_post();
							      { ?>

                                <li class="faq-qa-list__item"><a href="#<?php echo $i;?>" id="<?php echo $termname; ?>" class="faq-qa-list__link"><?php the_title();?></a></li>
                           <?php  }  endwhile;?>
                              </ol>
                            </div>
                          </div>
                        </li>
                       <?php $i++; } ?>
                      </ul>
                      <!--START Content-->
                      <ul class="faq-qa-menu faq-qa-menu--margin">
                        <!--START: General-->
                        <?php
          					        $terms = get_terms("list_faq",array( 'parent' => 0 ));
          					        $i=1;
          					        foreach ( $terms as $term ) {
          					        $termname = strtolower($term->name);
          					        $termname = str_replace(' ', '-', $termname);
          				        ?>

                        <li id="<?php echo $i; ?>" class="faq-qa-menu__list">
                          <div class="col-sm-3">
                            <div class="row">
                              <h3 class="faq-title"><?php echo $term->name; ?></h3>
                            </div>
                          </div>
                          <div class="col-sm-9">
                            <div class="row">
                              <ol class="faq-qa-list">
                               <?php
								  $the_query=new WP_Query(array('post_type'=>'faq','orderby' => 'meta_value','order' => 'ASC','tax_query' => array(array ('taxonomy' => 'list_faq','field' => 'slug','terms' => $term->slug ))));
							      while($the_query->have_posts() ) : $the_query->the_post();
							      {
						      ?>
                                <li class="faq-qa-list__item">
                                  <h4 class="qa-menu__heading"><?php the_title();?></h4>
                                  <p class="info"><?php the_content();?></p>
                                </li>
                             <?php }  endwhile;?>
                              </ol>
                            </div>
                          </div>
                        </li>
                   <?php  $i++;} ?>
                      </ul>
                    </div>
                  </div>

                  <div class="col-sm-3">

                    <div class="card-wrapper">
                      <h3 class="section-title">Question not here?</h3>
                      <p class="info">Happy to answer your questions. Please post your questions on our contact form and will get back.</p><a href="<?php echo get_option( 'siteurl' );?>/contact" class="btn btn--blue btn--lg">contact us</a>
                    </div>

                     <div class="more-read-menu-wrapper">
                        <h3 class="heading-md text-capitalize">most read</h3>
                        <ul class="more-read-menu">
                           <?php
                          $the_query=new WP_Query(array('post_type'=>'blog','posts_per_page'   => '3','meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'ASC'));
                          while($the_query->have_posts() ) : $the_query->the_post();
                          {  ?>
                            <li class="more-read-menu__list"><a href="<?php echo get_permalink();?>" class="more-read-menu__link"><?php the_title();?></a></li>
                          <?php }  endwhile;?>

                        </ul>
                      </div>
                     <!-- <div class="card-wrapper">
                       <h3 class="section-title">Our Blog</h3>
                      <ul class="articles-menu">
                      <?php
						  $the_query=new WP_Query(array('post_type'=>'blog','posts_per_page'   => '3'));
					      while($the_query->have_posts() ) : $the_query->the_post();
					      {
				      ?>
                        <li class="articles-menu__list"><a href="<?php echo get_permalink();?>" class="articles-menu__link"><?php the_title();?></a></li>

                          <?php
                }  endwhile;?>
                      </ul>
                    </div> -->
                  </div>
                </div>
                <div class="text-center logo-footer"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer-logo.svg" alt="Draup" class="logo-footer__img"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="sector-img"></div>
      </section>
    </main>
        <?php get_footer(); ?>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/blog-header-animation.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/scrollTop.js"></script>
