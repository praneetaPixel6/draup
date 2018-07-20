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
                <div class="circle circle--md circle--filled circle--circleBlue">

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


      <?php
          $terms = get_terms("list_careers",array( 'parent' => 0 ));
      ?>



                          <?php

        $paged = ( isset( $my_query_array['paged'] ) && !empty( $my_query_array['paged'] ) ) ? $my_query_array['paged'] : 1;


                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $terms = get_terms("list_careers",array( 'parent' => 0 ));
                $i=1;
                $category="";

                         foreach ( $terms as $term ) {
                         if($term->name==$_GET["cat"]){

                      $category=$term->slug;
                            }
                           }

                if(isset($_GET["cat"])){
                $the_query=new WP_Query(array('post_type'=>'careers','posts_per_page'=>'5','paged' => $paged,'tax_query' => array(array ('taxonomy' => 'list_careers','field' => 'slug','terms' => "$category"))));
                   }

                else if(isset($_GET["tag"])){
              $the_query=new WP_Query(array('post_type'=>'careers','posts_per_page'=>'6','paged' => $paged,'tag' => $_GET["tag"]));
                   }
                else{
              $the_query=new WP_Query(array('post_type'=>'careers','posts_per_page'=>'6','paged' => $paged));
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

          if($prev_title!=get_the_ID())
          {
                ?>

                 <!--Start: Post 1-->



        <?php }if($j==0 && $paged==1){
    $j++; continue; }  $j++;?>
        <?php  } endwhile; ?>

      <!--start: Current openings-->
      <section class="section current-opening-section">
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-12 col-md-offset-0">
              <div class="text-center">
                <h3 class="section-title setion-title--md section-heading--white"><?php echo ot_get_option('section_title');?></h3>
              </div>

                <div class="current-openings-wrapper">
                  <ul class="cop-menu">
                    <li class="col-lg-12 opening-header">
                      <div class="col-sm-5">
                        <h3>Team</h3>
                      </div>
                      <div class="col-sm-5">
                        <h3>Role</h3>
                      </div>
                      <div class="col-sm-2">
                        <h3>No.Openings</h3>
                      </div>
                    </li>
                    <?php
                    $terms = get_terms("list_careers",array( 'parent' => 0 ));
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
                     <li class="col-lg-12">
                      <div class="col-sm-5">
                        <h3 class="text-capitalize title title--sm"><a href="<?php echo get_option( 'siteurl' );?>/careers?cat=<?php echo $term->name; ?>" class="category-menu__link" id="<?php echo $termname; ?>"><?php echo $term->name; ?></a></h3>
                      </div>
                      <ul  class="opening-role-list col-sm-5">
                        <li class="opening-role">
                            <a href="<?php echo get_permalink();?>"><h4 class="title title--sm text-capitalize"><?php the_title();?></h4></a>

                        </li>
                      </ul>
                      <div class="col-sm-2">
                        <p class="info"><?php echo get_field('no_of_postion');?>Openings</p>
                      </div>
                  </li>
                <?php $k++; } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php get_footer('careers'); ?>
