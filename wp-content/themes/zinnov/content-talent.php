<?php /* Template Name: Talent */?>
<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header(); ?>
 <?php $delivery_lists = get_field('delivery_list'); ?>
 <?php $title = get_field('delivery_block_title');?>
 <?php $description = get_field('delivery_block_description');?>

 <main>
      <!--Start: Banner-->
 <section class="section-banner-about-us blue-bg-pattern talent-section">
      <div class="sector-img"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <div class="about-banner-wrapper__heading">
                <h1 class="heading"><?php echo get_field('banner_heading');?></h1>
                <p class="info info--white text-capitalize"><?php echo get_field('banner_subtext');?></p>
              </div>
              <div class="about-draup-wrapper ">                
                <?php echo get_field('banner_description');?>              
              </div>
            </div>
          </div>
        </div>
      </section>
    <!--Start: Features-->
      <section class="section-about-features section">
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <div class="about-features-wrapper">
                <div class="text-center">
                  <h3 class="section-title"><?php echo the_field('feature_block_title');?></h3>
                </div>
              <?php $feature_lists = get_field('features_list');
                // print_r($feature_lists);
              ?>
                <div class="accordian-wrapper">
                    <div class="feacture-acc-header col-sm-12">
                        <?php foreach($feature_lists as $feature_list){?>  
                          <div class="col-sm-4">
                              <div class="feacture-img-wrap d-inline"><img src="<?php echo $feature_list['feature_image']; ?>" alt="<?php echo $feature_list['feature_title']; ?>"></div> 
                              <h4 class="d-inline"><?php echo $feature_list['feature_title']; ?></h4>
                          </div>
                        <?php } ?>
                    </div>
                <div class="feacture-acc-content col-sm-12">
                    <!-- Loop -->
                  
                      <?php foreach($feature_lists as $key1=>$feature_list){?>
                      <div class="col-sm-4">
                        <div id="<?php echo "accordion".$key1 ?>">
                      <?php $feature_points = []; 
                      $feature_points = $feature_list['feature_points']; 
                      
                      ?>
                      <?php foreach($feature_points as $key2=>$feature_point){ ?>
                        <div class="card">
                            <div class="card-header" id="<?php echo "heading".$key1.$key2 ?>">
                                <h5 class="mb-0">
                                <button class="collapsed" data-toggle="collapse" data-target="#<?php echo "collapse".$key1.$key2 ?>" aria-expanded="true" aria-controls="<?php echo "collapse".$key1.$key2 ?>">
                                    <?php echo $feature_point['point_title']; ?>
                                </button>
                                </h5>
                            </div>
                            <div id="<?php echo "collapse".$key1.$key2 ?>" class="collapse" aria-labelledby="<?php echo "heading".$key1.$key2 ?>" data-parent="#<?php echo "accordion".$key1 ?>">
                                <div class="card-body">
                                    <?php echo $feature_point['point_description']; ?>
                                </div>
                            </div>
                        </div>
                        <?php }  ?>
                      </div> </div>
                    <?php } ?> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      

      <section class="section section__product__blog section__product orange-banner">
        <div class="container">
          <div class="row">
            <div class="section-head">
              <h3 class="section-title section-heading--white text-center"><?php the_field('product_title'); ?></h3>
              <p class="info info--white text-center"><?php the_field('product_description'); ?></p>
            </div>
            
            <?php  $posts = get_field('product_list');?>
            <div class="col-lg-10 col-lg-offset-1">
              <ul class="product-card-list clearfix">
                <?php  foreach($posts as $post){
                  $image = get_the_post_thumbnail_url($post, array(338,228));
                  $user=get_field('select_author');
                  $auth = get_post($user); // gets author from post
                  $author_name = $auth->user_name;

                  $trimtitle = $post->post_content;

                  if($image){
                    $img = $image;
                    $none_img = "";
                    $shorttitle = wp_trim_words( $trimtitle, $num_words = 17, $more = '… ' );

                  }
                  else {
                    $img = " ";
                    $none_img = "d-none";
                    $shorttitle = wp_trim_words( $trimtitle, $num_words = 55, $more = '… ' );
                  }
                  ?>
                  <li class="card col-md-5 col-sm-5">
                    <div class="card-img-wrap <?php echo $none_img; ?>"><img class="card-img-top" src="<?php echo $img; ?>" alt="<?php echo $img; ?>"></div>
                      <div class="card-body">
                        <a href="<?php echo get_permalink($post); ?>" class="author">By <strong><?php echo $author_name; ?></strong> <?php echo get_the_date('d M Y');?></a>
                        <h5 class="card-title"><?php echo get_the_title($post); ?></h5>
                        <p class="card-text"><?php echo $shorttitle; ?></p>
                        <a href="<?php echo get_permalink($post); ?>" class="link">Read More</a>
                    </div>
                  </li>
                  <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </section>


      <!--Start: How it works-->
      <section class="section-how-it-works section clearfix">
        <div class="container">
          <div class="row">
            <div class="text-center relative section-head">
              <h2 class="section-title"><?php echo $title;?></h2>
              <p class="info info-section"><?php echo $description; ?></p>
            </div>
           <div class="col-sm-10 col-sm-offset-1">
              <div class="row">
                <div class="how-it-works-wrapper">
                  <ul class="how-it-works">
                    <li class="how-it-works__list how-it-works__list--1 clearfix">
                      <div class="col-sm-5">
                        <h3 class="section-heading"><?php echo $delivery_lists[0]['delivery_title']; ?></h3>
                      </div>
                      <div class="col-sm-1">
                        <ul class="progress-menu hidden-xs">
                          <li class="progress-menu__list">
                            <div class="circle circle--sm circle--circleGreen"></div>1
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-6">
                        <p class="info clearfix"> <?php echo $delivery_lists[0]['delivery_description']; ?> </p>
                      </div>
                    </li>
                    <li class="how-it-works__list how-it-works__list--2 clearfix">
                      <div class="col-sm-5">
                        <h3 class="section-heading"><?php echo $delivery_lists[1]['delivery_title']; ?></h3>
                      </div>
                      <div class="col-sm-1">
                        <ul class="progress-menu hidden-xs">
                          <li class="progress-menu__list">
                            <div class="circle circle--sm circle--circleOrange"></div>2
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-6">
                        <p class="info"><?php echo $delivery_lists[1]['delivery_description']; ?></p>
                      </div>
                    </li>
                    <li class="how-it-works__list how-it-works__list--3 clearfix">
                      <div class="col-sm-5">
                        <h3 class="section-heading"><?php echo $delivery_lists[2]['delivery_title']; ?></h3>
                      </div>
                      <div class="col-sm-1">
                        <ul class="progress-menu hidden-xs">
                          <li class="progress-menu__list">
                            <div class="circle circle--sm circle--circleBlue"></div>3
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-6">
                        <p class="info"><?php echo $delivery_lists[2]['delivery_description']; ?></p>
                      </div>
                    </li>
                    <li class="how-it-works__list how-it-works__list--4 last clearfix">
                      <div class="col-sm-5">
                        <h3 class="section-heading"><?php echo $delivery_lists[3]['delivery_title']; ?></h3>
                      </div>
                      <div class="col-sm-1">
                        <ul class="progress-menu hidden-xs progress-menu--last">
                          <li class="progress-menu__list">
                            <div class="circle circle--sm circle--circleYellow"></div>4
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-6">
                        <p class="info"><?php echo $delivery_lists[3]['delivery_description']; ?></p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php get_footer(); ?>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/request-demo-header-animation.js"></script>
