<?php  /*Template Name: Home page*/ ?>
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


$article_link_text=get_field('article_link_text');
$white_paperslink_text=get_field('white_paperslink_text');
$heading_request=get_field('heading_request');
$request_info=get_field('request_info');
$section_heading=get_field('section_heading');
$section_image1=get_field('section_image1');
$slider_heading1=get_field('slider_heading1');
$section_image2=get_field('section_image2');
$slider_heading2=get_field('slider_heading2');
$section_image3=get_field('section_image3');
$slider_heading3=get_field('slider_heading3');
$section_image4=get_field('section_image4');
$slider_heading4=get_field('slider_heading4');
$slider_content_heading1=get_field('slider_content_heading1');
$slider_content1=get_field('slider_content1');
$slider1_link=get_field('slider1_link');
$slider1_link_text=get_field('slider1_link_text');
$slider_content_heading2=get_field('slider_content_heading2');
$slider_content2=get_field('slider_content2');
$slider2_link=get_field('slider2_link');
$slider2_link_text=get_field('slider2_link_text');
$slider_content_heading3=get_field('slider_content_heading3');
$slider_content3=get_field('slider_content3');
$slider3_link=get_field('slider3_link');
$slider3_link_text=get_field('slider3_link_text');
$slider_content_heading4=get_field('slider_content_heading4');
$slider_content4=get_field('slider_content4');
$slider4_link=get_field('slider4_link');
$slider4_link_text=get_field('slider4_link_text');
$faq_heading=get_field('faq_heading');
$get_text=get_field('get_text');
$get_sub_text=get_field('get_sub_text');
$get_button_text=get_field('get_button_text');
$get_button_link=get_field('get_button_link');

$card_title1=get_field('card_title1');
$footer_image=get_field('footer_image');
?>

<?php
get_header();?>

	 <!--START: Main-->
    <main>
      <!--Start: Banner-->
        <section class=" section section-homeBanner1  section-bannerpatch1 section--homeBanner">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-10 col-lg-offset-2">
                <div class="banner-wrapper clearfix">
                  <!--start: Slider Content-->
                  <div class="col-sm-4 col-xs-12">
                    <div class="content-slider-wrapper">
                      <ul class="content-slider-menu clearfix">
                        <li class="content-slider-menu__list">
                          <h4 class="text-capitalize banner-title"><?php echo get_field('banner_title1');?></h4>
                          <p class="banner-info"><?php echo get_field('banner_desc1');?></p>
                        </li>
                        <li class="content-slider-menu__list">
                          <h4 class="text-capitalize banner-title"><?php echo get_field('banner_title2');?></h4>
                          <p class="banner-info"><?php echo get_field('banner_desc2');?></p>
                        </li>
                        <li class="content-slider-menu__list">
                          <h4 class="text-capitalize banner-title"><?php echo get_field('banner_title3');?></h4>
                          <p class="banner-info"><?php echo get_field('banner_desc3');?></p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!--start: Image Slider Content-->
                  <div class="col-sm-7 text-right hidden-xs">
                    <div class="img-slider-wrapper">
                      <ul class="img-slider-menu clearfix">
                        <li class="img-slider-menu__list">
                          <div id="img-1" class="img-slide"></div>
                        </li>
                        <!-- <li class="img-slider-menu__list">
                          <div id="img-2" class="img-slide"></div>
                        </li>
                        <li class="img-slider-menu__list">
                          <div id="img-3" class="img-slide"></div>
                        </li> -->
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      <!--Start: solution  -->
      <section class="section section-solution">
        <div class="container">
          <div class="row">
            <h3 class="section-title text-center"><?php echo get_field('main_title');?></h3>
              <div class="solution-content section-content clearfix">
                <div class="col-md-10 col-md-offset-1">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card-wrap ">
                        <div class="blue-bg hidden-sm hidden-xs">
                        </div>
                        <div class="card">
                          <div class="bar left-bar">
                            <div class="bar__line"></div>
                            <div class="bar__line"></div>
                            <div class="bar__line"></div>
                          </div>
                          <img class="card-img-top" src="<?php echo get_field('solutions_image1');?>" alt="<?php echo get_field('solutions_title1');?>">
                          <div class="card-body">
                            <h4 class="card-title"><?php echo get_field('solutions_title1');?></h4>
                            <p class="card-text info"><?php echo get_field('solutions_description1');?></p>
                            <a href="<?php echo get_field('button_link1');?>" class="link"><?php echo get_field('button_text1');?></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card-wrap ">
                        <div class="card mt-250">
                          <img class="card-img-top" src="<?php echo get_field('solutions_image2');?>" alt="<?php echo get_field('solutions_title2');?>">
                          <div class="card-body">
                            <div class="bar right-bar">
                              <div class="bar__line"></div>
                              <div class="bar__line"></div>
                              <div class="bar__line"></div>
                            </div>
                           <h4 class="card-title"><?php echo get_field('solutions_title2');?></h4>
                           <p class="card-text info"><?php echo get_field('solutions_description2');?></p>
                           <a href="<?php echo get_field('button_link2');?>" class="link"><?php echo get_field('button_text2');?></a>
                          </div>
                        </div>
                      </div>
                      <div class="orange-bg hidden-sm hidden-xs">
                      </div>
                    </div>
                  </div>

                </div>
              </div>
          </div>
        </div>
        <div class="sector-img"></div>
      </section>

      <!--Start: Why Draup-->
      <section class="section section--why-draup">
        <div class="container">
          <div class="row">
            <div class="text-center">
              <h4 class="section-title"><?php echo $section_heading;?></h4>
            </div>
            <div class="col-sm-10 col-sm-offset-1 flex-slider">
              <div class="col-sm-6 hidden-xs">
                <div class="row row--height">
                  <ul class="draup-indicator-slider">
                    <li class="draup-indicator-slider__list active">
                      <div class="indicator-wrapper"><img src="<?php echo $section_image1;?>" alt="Real Time Data" class="indicator-wrapper__img">
                        <h4 class="slider-heading"><?php echo $slider_heading1;?></h4>
                      </div>
                    </li>
                    <li class="draup-indicator-slider__list">
                      <div class="indicator-wrapper"><img src="<?php echo $section_image2;?>" alt="machine" class="indicator-wrapper__img">
                        <h4 class="slider-heading"><?php echo $slider_heading2;?></h4>
                      </div>
                    </li>
                    <li class="draup-indicator-slider__list">
                      <div class="indicator-wrapper"><img src="<?php echo $section_image3;?>" alt="Subject" class="indicator-wrapper__img">
                        <h4 class="slider-heading"><?php echo $slider_heading3;?></h4>
                      </div>
                    </li>
                    <li class="draup-indicator-slider__list">
                      <div class="indicator-wrapper"><img src="<?php echo $section_image4;?>" alt="In Depth Analysis" class="indicator-wrapper__img">
                        <h4 class="slider-heading"><?php echo $slider_heading4;?></h4>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="pallet blue-pallet">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="circle circle--lg circle--ring circle--ringOrange"></div>
                  <div class="bar">
                    <div class="bar__line"></div>
                    <div class="bar__line"></div>
                    <div class="bar__line"></div>
                  </div>
                  <div class="circle circle--md circle--filled circle--circleBlue "></div>
                  <ul class="draup-content-slider">
                    <li class="draup-content-slider__list">
                      <div class="content-wrapper">
                        <h3 class="slider-content-heading"><?php echo $slider_content_heading1;?></h3>
                        <p class="info"><?php echo $slider_content1;?></p>
                      </div>
                    </li>
                    <li class="draup-content-slider__list">
                      <div class="content-wrapper">
                        <h3 class="slider-content-heading"><?php echo $slider_content_heading2;?></h3>
                        <p class="info"><?php echo $slider_content2;?></p>
                      </div>
                    </li>
                    <li class="draup-content-slider__list">
                      <div class="content-wrapper">
                        <h3 class="slider-content-heading"><?php echo $slider_content_heading3;?></h3>
                        <p class="info"><?php echo $slider_content3;?></p>
                      </div>
                    </li>
                    <li class="draup-content-slider__list">
                      <div class="content-wrapper">
                        <h3 class="slider-content-heading"><?php echo $slider_content_heading4;?></h3>
                        <p class="info"><?php echo $slider_content4;?></p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Start: Product & blogs -->
      <section class="section section__product__blog cross-orange-banner">
        <div class="container">
          <div class="row">
            <h3 class="section-title section-heading--white text-center"><?php the_field('post_title'); ?></h3>
            <p class="info info--white text-center"><?php the_field('post_description'); ?></p>
            <?php  $posts = get_field('post_list');?>
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
                        <p class="card-text info"><?php echo $shorttitle; ?></p>
                        <a href="<?php echo get_permalink($post); ?>" class="link">Read More</a>
                    </div>
                  </li>
                  <?php } ?>
              </ul>
              <div class="text-center view-all-btn">
                <a href="<?php echo get_permalink( get_page_by_path( 'blog' ) ); ?>" class="btn btn--oval btn--outline btn--sm ">View All</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Start: subscribe-->
      <section class="section section--subscribe">
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1 text-center">
              <div class="subscribe-wrapper">
                <div class="bar">
                  <div class="bar__line bar__line--white"></div>
                  <div class="bar__line bar__line--white"></div>
                  <div class="bar__line bar__line--white"></div>
                </div>
                <div class="circle circle--sm circle--circlePink circle--circlePink--top"></div>
                <div class="circle circle--sm circle--circlePink circle--circlePink--bottom "></div>
                <div class="circle circle--lg circle--ring circle--ring-2"></div>
                <h3 class="section-heading--white"><?php echo $get_text;?></h3>
                <p class="info info--white"><?php echo $get_sub_text;?></p>
                <div class="btn-wrapper"><a href="<?php echo $get_button_link;?>" class="btn btn--white btn--lg"><?php echo $get_button_text;?></a></div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>

    <input type="hidden" id="platform-url" value="<?php echo PLATFORM_URL;?>" />
    <input type="hidden" id="app-url" value="<?php echo APP_URL;?>" />


<script type="text/javascript">
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
<script language="Javascript" type="text/javascript">

        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }

    </script>

    <script type="text/javascript">

function validateEmail(emailField){
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (reg.test(emailField.value) == false)
    {
        alert('Invalid email address. Please provide a valid email address');
        return false;
    }

    return true;

}



</script>
<?php get_footer(); ?>
