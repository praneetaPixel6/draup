<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('productdetail'); ?>
<?php while ( have_posts() ) : the_post();  ?>
<?php $product_date = get_the_date('d F Y',get_the_ID());?>

     <main>
        <!--Start: Banner-->
        <section class="section-article1 section-resourceUpdates">
                    <div class="sector-img "></div>
            <div class="container">
                <div class="banner-wrapper banner-wrapper--sm banner-wrapper--resourceUpdates mt-5 product-article clearfix">
                    <div class="col-sm-12 col-md-9">
                        <div class="card-wrapper card-wrapper--padding mb-sm-30">
                            <div class="circle-wrapper circle-wrapper--article  hidden-xs">
                                <div class="circle--sm circle circle--circleBlue"></div>
                                <div class="circle--md circle circle--circleOrange"></div>
                            </div>
                            <div class="circle circle--sm circle--ringBlue circle--ring hidden-xs"></div>
                            <h4 class="text-capitalize banner-title banner-title--black mb-sm-2"><?php the_title();?></h4>
                            <!-- <h4 class="title title-small mb-sm-2">heading Draup empowers the technology companies with real-time and actionable data</h4> -->

                            <div class="product-metadata blog-details-content">
                                <span class="product-metadata__title"><?php echo get_field('meta_title');?></span>
                                <span class="product-metadata__date"><?php echo $product_date;?></span>
                            </div>
                                                        <div class="product-content-wrap">
                                                            <div class="product_content clearfix">
                                                                    <?php the_content();?>
                                                                    <?php if(!empty(get_field('select_author')) ){ ?>
                                                                    <p class="info auther-info"><?php
                                                                        $user=get_field('select_author');
                                                      $auth = get_post($user); // gets author from post
                                                      $author_name = $auth->user_name;
                                                                        echo   "-".$author_name;?>
                                                                    </p>
                                                                <?php } ?>
                                                            </div>
                                                            <?php if(!empty(get_field('cardcontent')) ){ ?>
                                                            <div class="product_content product-metadata__title clearfix info"><?php echo get_field('cardcontent');?></div>
                                                        <?php } ?>
                                                         <?php if(!empty(get_field('card_content_2')) ){ ?>
                                                            <div class="product_content product-metadata__title clearfix info"><?php echo get_field('card_content_2');?></div>
                                                        <?php } ?>
                                                        </div>

                           <!--  <div class="text-center btn-viewAll">
                                <a href="#" class="btn btn--oval btn--outline btn--sm text-capitalize">Read the Report in Metacoach</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="card-wrapper">
                            <h3 class="section-title similar-articles-heading">similar articles</h3>
                            <ul class="articles-menu">
                            <?php

                $the_query=new WP_Query(array('post_type'=>'newsletter','posts_per_page'   => '6'));

                while($the_query->have_posts() ) : $the_query->the_post();
                    {


                $trimtitle = get_the_content();

                $shorttitle = wp_trim_words( $trimtitle, $num_words = 35, $more = '...' );



              ?>
                                <li class="articles-menu__list">
                                    <a href="<?php echo get_permalink();?>" class="articles-menu__link"><?php the_title();?></a>
                                </li>
                                <?php } endwhile; wp_reset_query(); ?>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="banner-wrapper--resourceUpdates product-article clearfix">
                    <div class="col-sm-12 col-md-9 p-0">
                        <div class="card-wrapper card-wrapper--padding mb-sm-30 md-lg-60">
                            <div class="circle-wrapper circle-wrapper--article1 hidden-xs">
                                <div class="circle--sm circle circle--circleBlue"></div>
                                <div class="circle--md circle circle--circleOrange"></div>
                            </div>
                            <div class="product-metadata">
                                <span class="product-metadata__title"><?php echo get_field('meta_title_for_2nd_card');?></span>
                            </div>
                            <div class="product-info-1">
                                <br>
                                <div class="row my-5">
                                    <div class="col-xs-12 col-md-6 p-0">
                                        <h4 class="section-title section-title--sub py-sm-2" ><?php echo get_field('second_card_title');?></h3>
                                            <p class="info lh-28"><?php echo get_field('title_description');?></p>
                                        <?php if(!get_field('disable_request_button') ){ ?>
                                            <div class="m-1 text-center hidden-sm hidden-md hidden-lg ">
                                                <a href="<?php echo get_field('request_button_text_link');?>" class="btn btn--oval btn--outline btn--xs text-capitalize"><?php echo get_field('request_button_text');?></a>
                                            </div>
                                        <?php } ?>
                                        <?php if(!get_field('disable_request_button') ){ ?>
                                            <div class="m-1 text-left hidden-xs ">
                                                <a href="<?php echo get_field('request_button_text_link');?>" class="btn btn--oval btn--outline btn--sm text-capitalize"><?php echo get_field('request_button_text');?></a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="col-xs-12 col-md-5 p-0 text-center col-md-offset-1">
                                        <?php $image = get_field('about_image');
                                         if($image) { ?>
                                        <img src="<?php echo get_field('about_image');?>" alt="About Banner" class="img-responsive m-0-auto mb-4 ">
                                    <?php } ?>
                                        <p class="info"><?php echo get_field('about_image_text');?></p>
                                        <?php if(!get_field('disable_request_profile_button') ){ ?>
                                            <div class="m-1  hidden-xs">
                                                <a href="#" class="btn btn--oval btn--outline btn--xs text-capitalize ">request executive profile</a>
                                            </div>
                                        <?php } ?>
                                        <?php if(!get_field('disable_request_profile_button') ){ ?>
                                            <div class="m-1 hidden-sm hidden-md hidden-lg">
                                                <a href="#" class="btn btn--oval btn--outline btn--xs text-capitalize ">request executive profile </a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <hr>
                            <div class="product-info-1 mt-5">
                                <br>
                                <div class="row my-5">
                                    <div class="col-xs-12 col-md-7">
                                        <h4 class="section-title section-title--sub py-sm-2"><?php echo get_field('braindesk_title');?></h3>
                                            <?php echo get_field('braindesk_description');?>
                                            <?php if(!get_field('disable_access_button') ){ ?>
                                                <div class="m-1">
                                                    <a href="<?php echo get_field('access_bank_button_text_link');?>" class="btn btn--oval btn--outline btn--sm text-capitalize"> <?php echo get_field('access_bank_button_text');?></a>
                                                </div>
                                            <?php } ?>
                                    </div>
                                    <div class="col-xs-12 col-md-5 text-center m-0-auto">
                                        <?php $image = get_field('about_image1');
                                         if($image) { ?>
                                        <img src="<?php echo get_field('about_image1');?>" alt="About Banner" class="img-responsive m-0-auto mb-4 imgFit">
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>
                            <div class="product-info-1">
                                    <br>
                                    <br>
                                <div class="row my-5">
                                    <div class="col-xs-12 col-md-12">
                                        <h4 class="section-title section-title--sub py-sm-2"><?php echo get_field('help_us_title');?></h3>
                                            <p class="info lh-28"><?php echo get_field('help_us_field');?>
                                            </p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info-1">
                                <br>
                                <div class="row my-5">
                                    <div class="col-xs-12 col-md-12">
                                        <h4 class="section-title section-title--sub py-sm-2"><?php echo get_field('gdpr_compliance_text');?> </h3>
                                            <i><p class="info first lh-28"><?php echo get_field('gdpr_compliance_subtext');?>
                                                <a href="<?php echo get_field('here_text_link');?>" class="link--playbook"><?php echo get_field('here_text');?></a></p></i>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info-1 m-0-auto  text-center">
                                <br>
                                <a href="home-new.html">
                                    <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)-->
                                    <svg id="Layer_2" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 115 44" style="enable-background:new 0 0 115 44;" xml:space="preserve" class="header-logo">
                                        <style type="text/css">
                                            #Layer_2 .st0 {
                                                clip-path: url(#SVGID_2_);
                                            }

                                              #Layer_2 .st1 {
                                                clip-path: url(#SVGID_4_);
                                                fill: #B5B9BF;
                                            }

                                              #Layer_2 .st2 {
                                                clip-path: url(#SVGID_6_);
                                            }

                                              #Layer_2 .st3 {
                                                clip-path: url(#SVGID_8_);
                                                fill: #B5B9BF;
                                            }

                                              #Layer_2 .st4 {
                                                clip-path: url(#SVGID_10_);
                                            }

                                              #Layer_2 .st5 {
                                                clip-path: url(#SVGID_12_);
                                                fill: #B5B9BF;
                                            }

                                              #Layer_2 .st6 {
                                                clip-path: url(#SVGID_14_);
                                            }

                                              #Layer_2 .st7 {
                                                clip-path: url(#SVGID_16_);
                                                fill: #B5B9BF;
                                            }

                                              #Layer_2 .st8 {
                                                clip-path: url(#SVGID_18_);
                                            }

                                              #Layer_2 .st9 {
                                                clip-path: url(#SVGID_20_);
                                                fill: #B5B9BF;
                                            }

                                            .st10 {
                                                clip-path: url(#SVGID_22_);
                                            }

                                          .st11 {
                                                clip-path: url(#SVGID_24_);
                                                fill: #6DCEF9;
                                            }

                                            .st12 {
                                                clip-path: url(#SVGID_26_);
                                            }

                                            .st13 {
                                                clip-path: url(#SVGID_28_);
                                                fill: #6DCEF9;
                                            }
                                        </style>
                                        <g>
                                            <g>
                                                <defs>
                                                    <path id="SVGID_1_" d="M41.6,10.2c0.4,0,0.5,0.1,0.5,0.5v25c0,0.5-0.2,0.7-0.6,0.7c-2.9,0.5-4.9,0.6-7.3,0.6        c-6.9,0-8.4-2-8.4-9.8c0-7.8,1.5-9.9,7.8-9.9c1.8,0,3.3,0.1,4.4,0.2v-6.9c0-0.4,0.2-0.5,0.5-0.5H41.6z M34.2,21.1        c-3.8,0-4.3,1.2-4.3,6.2c0,4.8,0.4,6.2,4.2,6.2c1.1,0,2.6-0.1,3.8-0.3V21.1H34.2z"></path>
                                                </defs>
                                                <clipPath id="SVGID_2_">
                                                    <use xlink:href="#SVGID_1_" style="overflow:visible;"></use>
                                                </clipPath>
                                                <g class="st0">
                                                    <defs>
                                                        <rect id="SVGID_3_" x="0" y="-0.5" width="116.1" height="45.9"></rect>
                                                    </defs>
                                                    <clipPath id="SVGID_4_">
                                                        <use xlink:href="#SVGID_3_" style="overflow:visible;"></use>
                                                    </clipPath>
                                                    <rect x="20.7" y="5.1" width="26.4" height="37.1" class="st1"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <defs>
                                                    <path id="SVGID_5_" d="M56.4,17.8c0.3,0.1,0.5,0.2,0.5,0.6v2.1c0,0.4-0.2,0.6-0.6,0.5h-3.1c-2.1,0-2.7,0.4-2.7,1.9v13.4        c0,0.4-0.2,0.5-0.5,0.5H47c-0.3,0-0.5-0.2-0.5-0.5V21.9c0-4.2,3.3-4.5,5.8-4.5C53.1,17.5,55.5,17.6,56.4,17.8"></path>
                                                </defs>
                                                <clipPath id="SVGID_6_">
                                                    <use xlink:href="#SVGID_5_" style="overflow:visible;"></use>
                                                </clipPath>
                                                <g class="st2">
                                                    <defs>
                                                        <rect id="SVGID_7_" x="0" y="-0.5" width="116.1" height="45.9"></rect>
                                                    </defs>
                                                    <clipPath id="SVGID_8_">
                                                        <use xlink:href="#SVGID_7_" style="overflow:visible;"></use>
                                                    </clipPath>
                                                    <rect x="41.5" y="12.4" width="20.5" height="29.7" class="st3"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <defs>
                                                    <path id="SVGID_9_" d="M73.8,23.2v12.2c0,0.5-0.1,0.8-0.7,1c-1.8,0.5-4.8,0.8-7.7,0.8c-4.8,0-7.2-0.8-7.2-5.8        c0-4.4,2.3-5.6,6.5-5.6h5v-1.8c0-2-1.1-2.8-3.9-2.8h-5.6c-0.4,0-0.5-0.1-0.5-0.5v-2.1c0-0.4,0.1-0.5,0.5-0.6        c2.1-0.4,3.9-0.5,5.6-0.5C71.8,17.5,73.8,19.4,73.8,23.2z M64.9,28.8c-1.8,0-2.6,0.6-2.6,2.3c0,2,0.9,2.5,3.5,2.5        c0.9,0,2.7-0.1,3.9-0.4v-4.4H64.9z"></path>
                                                </defs>
                                                <clipPath id="SVGID_10_">
                                                    <use xlink:href="#SVGID_9_" style="overflow:visible;"></use>
                                                </clipPath>
                                                <g class="st4">
                                                    <defs>
                                                        <rect id="SVGID_11_" x="0" y="-0.5" width="116.1" height="45.9"></rect>
                                                    </defs>
                                                    <clipPath id="SVGID_12_">
                                                        <use xlink:href="#SVGID_11_" style="overflow:visible;"></use>
                                                    </clipPath>
                                                    <rect x="53.2" y="12.4" width="25.6" height="29.9" class="st5"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <defs>
                                                    <path id="SVGID_13_" d="M93.7,17.6c0.3,0,0.5,0.2,0.5,0.5V36c0,0.5-0.2,0.5-0.5,0.6c-2.5,0.5-5.6,0.6-7.6,0.6        c-6.3,0-8.1-1-8.1-8.3V18.2c0-0.4,0.2-0.5,0.6-0.5h3.1c0.3,0,0.5,0.2,0.5,0.5v9.9c0,5.2,0.8,5.4,4,5.4H90V18.2        c0-0.4,0.2-0.5,0.5-0.5H93.7z"></path>
                                                </defs>
                                                <clipPath id="SVGID_14_">
                                                    <use xlink:href="#SVGID_13_" style="overflow:visible;"></use>
                                                </clipPath>
                                                <g class="st6">
                                                    <defs>
                                                        <rect id="SVGID_15_" x="0" y="-0.5" width="116.1" height="45.9"></rect>
                                                    </defs>
                                                    <clipPath id="SVGID_16_">
                                                        <use xlink:href="#SVGID_15_" style="overflow:visible;"></use>
                                                    </clipPath>
                                                    <rect x="73" y="12.5" width="26.3" height="29.7" class="st7"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <defs>
                                                    <path id="SVGID_17_" d="M115,27.2c0,7.9-1.5,10-7.9,10c-1.6,0-2.9,0-4.3-0.2v6.5c0,0.4-0.2,0.6-0.5,0.6h-3.1        c-0.3,0-0.5-0.2-0.5-0.6V18.8c0-0.4,0.2-0.6,0.7-0.7c2.9-0.5,4.8-0.6,7.3-0.6C113.5,17.5,115,19.5,115,27.2z M102.8,21.1v12.1        c1.2,0.1,2.6,0.2,3.7,0.2c3.9,0,4.4-1.2,4.4-6.2c0-4.8-0.4-6.2-4.2-6.2H102.8z"></path>
                                                </defs>
                                                <clipPath id="SVGID_18_">
                                                    <use xlink:href="#SVGID_17_" style="overflow:visible;"></use>
                                                </clipPath>
                                                <g class="st8">
                                                    <defs>
                                                        <rect id="SVGID_19_" x="0" y="-0.5" width="116.1" height="45.9"></rect>
                                                    </defs>
                                                    <clipPath id="SVGID_20_">
                                                        <use xlink:href="#SVGID_19_" style="overflow:visible;"></use>
                                                    </clipPath>
                                                    <rect x="93.6" y="12.4" width="26.4" height="36.7" class="st9"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <defs>
                                                    <path id="SVGID_21_" d="M12.7,16.6c-0.8,0.9-2.2,0.9-3.1,0.1c-0.9-0.9-0.9-2.3-0.1-3.1c0.8-0.9,2.2-0.9,3.1-0.1        C13.5,14.3,13.5,15.7,12.7,16.6"></path>
                                                </defs>
                                                <clipPath id="SVGID_22_">
                                                    <use xlink:href="#SVGID_21_" style="overflow:visible;"></use>
                                                </clipPath>
                                                <g class="st10">
                                                    <defs>
                                                        <rect id="SVGID_23_" x="0" y="-0.5" width="116.1" height="45.9"></rect>
                                                    </defs>
                                                    <clipPath id="SVGID_24_">
                                                        <use xlink:href="#SVGID_23_" style="overflow:visible;"></use>
                                                    </clipPath>
                                                    <rect x="4" y="7.8" width="14.3" height="14.6" class="st11"></rect>
                                                </g>
                                            </g>
                                            <g>
                                                <defs>
                                                    <path id="SVGID_25_" d="M4.4,15l-0.5,9.9l9-3c1.1-0.3,2.1-0.9,2.9-1.6c1.2-1.2,2-2.8,2.1-4.6c0,0,0,0,0,0l0.7-10.1L9.3,8.6        C9,8.7,8.8,8.8,8.5,8.9l0,0c-2.3,1-4,3.2-4.1,6C4.4,14.9,4.4,14.9,4.4,15L4.4,15z M0.8,14.7c0-0.1,0-0.1,0-0.2        c0.2-4.2,2.8-7.7,6.4-9.2l0,0C7.6,5.1,8,5,8.4,4.9L22.5,0l-1,15.6c0,0,0,0,0,0c-0.2,2.8-1.4,5.3-3.2,7.1        c-1.2,1.2-2.7,2.1-4.4,2.5L0,30L0.8,14.7L0.8,14.7z"></path>
                                                </defs>
                                                <clipPath id="SVGID_26_">
                                                    <use xlink:href="#SVGID_25_" style="overflow:visible;"></use>
                                                </clipPath>
                                                <g class="st12">
                                                    <defs>
                                                        <rect id="SVGID_27_" x="0" y="-0.5" width="116.1" height="45.9"></rect>
                                                    </defs>
                                                    <clipPath id="SVGID_28_">
                                                        <use xlink:href="#SVGID_27_" style="overflow:visible;"></use>
                                                    </clipPath>
                                                    <rect x="-5" y="-5.1" width="32.5" height="40.2" class="st13"></rect>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <br>
                                <br>
                                <p class="info">Like the newsletter? Share it with your colleagues</p>
                                <div class="social-menu-wrapper social-menu-wrapper--ar ">
                                    <!-- <h4 class="heading-small"></h4> -->
                                    <ul class="social-menu">
                                        <li class="social-menu__list">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" onclick="javascript:window.open(this.href,
                                '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                                <span class="social-menu__link social-menu__link--fb">
                                                    <i class="icon-fb icon"></i>
                                                </span>facebook</a>
                                        </li>
                                        <li class="social-menu__list">
                                            <a href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink();?>" onclick="javascript:window.open(this.href,
                                '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                                <span class="social-menu__link social-menu__link--tw">
                                                    <i class="icon-tw icon"></i>
                                                </span>twitter</a>
                                        </li>
                                        <li class="social-menu__list">
                                            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
                                '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                                <span class="social-menu__link social-menu__link--ln">
                                                    <i class="icon-ln icon"></i>
                                                </span>linkedin</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 p-0">
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php endwhile;?>
<?php get_footer('productdetail'); ?>
