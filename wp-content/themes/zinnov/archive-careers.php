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

get_header('careers'); ?>

	<!--START: Main-->
    <main>
      <!--start: Banner-->
      <section class="section-bannerPatch orange-banner">
        <div class="sector-img "></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <div class="banner-wrapper mt-5">
                <div class="carrers-wrapper clearfix">
                  <div class="row">
                    <div class="content-title-wrappera col-sm-5">
                        <h3 class="content-title content-title--orange content-title--lg"><?php echo ot_get_option('blog_title');?> </h3>
                    </div>
                    <div class="clearfix career-blog">
                      <div class="col-sm-5">
                        <div class="info-wrapper">
                          <p class="info"><?php echo ot_get_option('blog_text1');?> </p>
                        </div>
                      </div>
                      <div class="col-sm-7 career-blog-right">
                        <div class="info-wrapper">
                          <p class="info"><?php echo ot_get_option('blog_text2');?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our Culture -->
      <section class="section section--why-draup career-whydraup">
        <div class="container">
          <div class="row">
            <div class="text-center">
              <h4 class="section-title section-title--md"><?php echo ot_get_option('careerjoin_title');?></h4>
            </div>
            <div class="col-sm-10 col-sm-offset-1 flex-slider">
              <div class="col-sm-5 hidden-xs whyjoin-left">
                <div class="row row--height">
                  <div class="draup-indicator-slider">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./images/img-whyjoinus.png"/>
                  </div>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="row">
                  <div class="circle circle--lg circle--ring circle--ringOrange"></div>
                  <div class="bar">
                    <div class="bar__line"></div>
                    <div class="bar__line"></div>
                    <div class="bar__line"></div>
                  </div>
                  <div class="circle circle--md circle--filled circle--circleBlue"></div>
                    <div class="whyjoin-para">
                      <div class="info">
                       <?php echo ot_get_option('careerjoin_desc');?>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
       <!--start: Life At Draup-->
      <section class="section">
        <div class="container-fluid">
          <div class="row">
            <div class="text-center">
              <h3 class="section-title section-title--md"><?php echo ot_get_option('section_career');?></h3>
              <!--start Slider-->
              <div class="life-draup-slider-wrapper">
                <ul class="life-draup-slider">

                <?php
      if (function_exists('get_option_tree')){
        $careers_pics = ot_get_option( 'careers_pics', array() );
        if ( ! empty( $careers_pics ) ) {
          $i=1;
          foreach( $careers_pics as $section ) {
      ?>
                  <li class="life-draup-slider__list"><img src="<?php echo $section['careers_image']; ?>" alt="" class="img-responsive"></li>
                  <?php } $i++; } }  ?>
                  <!-- <li class="life-draup-slider__list"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./img/life/img-3.jpg" alt="" class="img-responsive"></li>
                  <li class="life-draup-slider__list"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./img/life/img-4.jpg" alt="" class="img-responsive"></li>
                  <li class="life-draup-slider__list"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./img/life/img-5.jpg" alt="" class="img-responsive"></li>
                  <li class="life-draup-slider__list"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./img/life/img-7.JPG" alt="" class="img-responsive"></li>
                  <li class="life-draup-slider__list"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./img/life/img-9.jpg" alt="" class="img-responsive"></li>
                  <li class="life-draup-slider__list"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./img/life/img-6.jpg" alt="" class="img-responsive"></li>
                  <li class="life-draup-slider__list"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./img/life/img-11.jpg" alt="" class="img-responsive"></li>
                  <li class="life-draup-slider__list"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/./img/life/img-12.JPG" alt="" class="img-responsive"></li> -->

                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Why Choose draup life -->
      <section class="section draup-life">
        <div class="container">
          <div class="row">
            <div class="col-sm-5">
              <div class="draup-life-left">
                <h3 class="section-title setion-title--md"><?php echo ot_get_option('careerdrup_title');?></h3>
                <div class="info"><?php echo ot_get_option('careerdrup_description');?></div>
                <div class="bar">
                  <div class="bar__line"></div>
                  <div class="bar__line"></div>
                  <div class="bar__line"></div>
                </div>
                <div class="circle circle--md circle--filled circle--circleBlue hidden-xs">

                </div>
              </div>
            </div>
            <?php
            if (function_exists('get_option_tree')){
              $careers_list = ot_get_option( 'careersdrup_list', array() );
              if ( ! empty( $careers_list ) ) { ?>
              <div class="col-sm-6 col-sm-offset-1 draup-life-right">
                <?php foreach( $careers_list as $section ) {?>
                <div class="draup-life-block">
                  <h5><?php echo $section['title']; ?></h5>
                  <p class="info"><?php echo $section['careersdrup_desc']; ?></p>
                </div>
            <?php } }  ?>
            </div>
          <?php }?>
          </div>
        </div>
      </section>



  <?php $terms = get_terms( array('list_careers') ); ?>
      <section class="section current-opening-section">
        <div class="sector-img "></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0">
              <div class="text-center"><h3 class="section-title setion-title--md section-heading--white"><?php echo ot_get_option('section_title');?></h3></div>
              <div class="current-openings-wrapper">
                  <div class="bar">
                    <div class="bar__line"></div>
                    <div class="bar__line"></div>
                    <div class="bar__line"></div>
                  </div>
                  <div class="circle circle--lg circle--ring circle--ringOrange hidden-xs"></div>
                  <div class="circle circle--md circle--filled circle--circleBlue hidden-xs"></div>
                  <ul class="opening-menu clearfix" id="openingAccordian">
                    <li class="col-lg-12 opening-header hidden-xs clearfix">
                      <div class="col-sm-4"><h3>Team</h3></div>
                      <div class="col-sm-5"><h3>Role</h3></div>
                      <div class="col-sm-3"><h3>No.Openings</h3></div>
                    </li>
                    <?php
                    foreach($terms as $key1=>$term){
                      //print_r($terms);die();
                     	$args = array(  'post_type' => 'careers',
                                      'posts_per_page' => 20,
                                      'post_status' => 'publish',
                                      'tax_query' => array(
                                      array(
                                        'taxonomy' => 'list_careers',
                                        'field' => 'term_id',
                                        'terms' => $term->term_id,
                                        'name' => $term->term_name,
                                      )
                                    ) );
                              $industries = get_posts( $args );
                              ?>
                              <?php if($key2 == 0) $class = "in";
                                    else $class = "";
                  					$count = 0;

                              ?><?php foreach($industries as $key=>$industry){
                              		$no_opening = get_field('no_of_postion',$industry);
                              		$count = $count + $no_opening;
                              		//echo $count;
                              	} ?>
                                <li class="opening-content col-lg-12 clearfix">
                                    <div class="opening-acc-head col-lg-12 row ">
                                      <a class="collapsed"  data-toggle="collapse" href="#<?php echo "collapseExample".$key1; ?>">
                                        <h3 class="text-capitalize  col-md-9 col-sm-9"><div class="acc-img-wrap"><img src="<?php echo get_field('career_cat_image',$term); ?>"></div><?php echo $term->name; ?></h3>
                                        <p class="total-opning col-md-3 col-sm-3 hidden-xs"><?php echo $count; ?> Openings </p>
                                      </a>
                                    </div>
                                  <div class="collapse opening-collapse" id="<?php echo "collapseExample".$key1; ?>" data-parent="openingAccordian">
                                    <div class="col-lg-12">
                                      <ul class="opening-role-list clearfix" >
                                        <?php foreach($industries as $key=>$industry){ ?>
                                            <li class="opening-role col-lg-8 col-lg-offset-4 row">
                                                <a href="<?php echo get_permalink();?>" class="col-sm-8 col-xs-6"><h4 class="text-capitalize"><?php echo  get_the_title($industry); ?></h4></a>
                                                <div class="opening-number col-sm-3 col-xs-6">
                                                  <p><?php echo get_field('no_of_postion',$industry);?> Openings</p>
                                                </div>
                                            </li>
                                        <?php } ?>
                                      </ul>
                                    </div>
                                  </div>
                                </li>
                      <?php } ?>
                    </ul>

              </div>
            </div>
          </div>
        </div>
      </section>
<?php get_footer(); ?>
