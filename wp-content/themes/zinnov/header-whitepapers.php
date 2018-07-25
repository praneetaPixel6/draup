<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
      <title>Draup - White Papers</title>
      <meta name="description" content="">
      <meta name="author" content="Admin">
      <link rel="shortcut icon" type="image/x-icon" href="https://s3.us-east-2.amazonaws.com/draupassets/icons/draup-favicon.ico" />
      <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/main.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class("blue-bg-pattern"); ?>>
  <!--START: Header-->
    <header class="header">
      <nav role="navigation" class="navbar navbar--menu navbar--gray">
        <!--START: Container-->
        <div class="container">
          <!-- START: Navigation Header-->
          <div class="navbar-header">
            <!--START: Mobile Toggle Menu-->
            <button type="button" data-toggle="collapse" data-target="#zinnov-menu" class="navbar-toggle navbar-toggle--nav"><span class="sr-only">Toggle navigation</span>
              <div class="icon-bar-container"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></div>
            </button>
            <!--START: Brand Logo-->
            <div class="navbar-brand navbar-brand--logo"><a href="<?php echo site_url(); ?>">
                <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)-->
                <svg id="Layer_1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 115 44" style="enable-background:new 0 0 115 44;" xml:space="preserve" class="header-logo">
                  <style type="text/css">
                  .st0{clip-path:url(#SVGID_2_); fill:#fff;}
                  .st2{clip-path:url(#SVGID_6_); fill:#fff;}
                  .st4{clip-path:url(#SVGID_10_); fill:#fff;}
                  .st6{clip-path:url(#SVGID_14_); fill:#fff;}
                  .st8{clip-path:url(#SVGID_18_); fill:#fff;}
                  .st10{clip-path:url(#SVGID_22_); fill:#fff;}
                  .st12{clip-path:url(#SVGID_26_); fill:#fff;}
                  </style>
                  <g>
                    <g>
                      <defs>
                        <path id="SVGID_1_" d="M41.6,10.2c0.4,0,0.5,0.1,0.5,0.5v25c0,0.5-0.2,0.7-0.6,0.7c-2.9,0.5-4.9,0.6-7.3,0.6        c-6.9,0-8.4-2-8.4-9.8c0-7.8,1.5-9.9,7.8-9.9c1.8,0,3.3,0.1,4.4,0.2v-6.9c0-0.4,0.2-0.5,0.5-0.5H41.6z M34.2,21.1        c-3.8,0-4.3,1.2-4.3,6.2c0,4.8,0.4,6.2,4.2,6.2c1.1,0,2.6-0.1,3.8-0.3V21.1H34.2z"></path>
                      </defs>
                      <clippath id="SVGID_2_">
                        <use xlink:href="#SVGID_1_" style="overflow:visible;"></use>
                      </clippath>
                      <g class="st0">
                        <defs>
                          <rect id="SVGID_3_" x="0" y="-0.5" width="116.1" height="45.9"></rect>
                        </defs>
                        <clippath id="SVGID_4_">
                          <use xlink:href="#SVGID_3_" style="overflow:visible;"></use>
                        </clippath>
                        <rect x="20.7" y="5.1" width="26.4" height="37.1" class="st1"></rect>
                      </g>
                    </g>
                    <g>
                      <defs>
                        <path id="SVGID_5_" d="M56.4,17.8c0.3,0.1,0.5,0.2,0.5,0.6v2.1c0,0.4-0.2,0.6-0.6,0.5h-3.1c-2.1,0-2.7,0.4-2.7,1.9v13.4        c0,0.4-0.2,0.5-0.5,0.5H47c-0.3,0-0.5-0.2-0.5-0.5V21.9c0-4.2,3.3-4.5,5.8-4.5C53.1,17.5,55.5,17.6,56.4,17.8"></path>
                      </defs>
                      <clippath id="SVGID_6_">
                        <use xlink:href="#SVGID_5_" style="overflow:visible;"></use>
                      </clippath>
                      <g class="st2">
                        <defs>
                          <rect id="SVGID_7_" x="0" y="-0.5" width="116.1" height="45.9"></rect>
                        </defs>
                        <clippath id="SVGID_8_">
                          <use xlink:href="#SVGID_7_" style="overflow:visible;"></use>
                        </clippath>
                        <rect x="41.5" y="12.4" width="20.5" height="29.7" class="st3"></rect>
                      </g>
                    </g>
                    <g>
                      <defs>
                        <path id="SVGID_9_" d="M73.8,23.2v12.2c0,0.5-0.1,0.8-0.7,1c-1.8,0.5-4.8,0.8-7.7,0.8c-4.8,0-7.2-0.8-7.2-5.8        c0-4.4,2.3-5.6,6.5-5.6h5v-1.8c0-2-1.1-2.8-3.9-2.8h-5.6c-0.4,0-0.5-0.1-0.5-0.5v-2.1c0-0.4,0.1-0.5,0.5-0.6        c2.1-0.4,3.9-0.5,5.6-0.5C71.8,17.5,73.8,19.4,73.8,23.2z M64.9,28.8c-1.8,0-2.6,0.6-2.6,2.3c0,2,0.9,2.5,3.5,2.5        c0.9,0,2.7-0.1,3.9-0.4v-4.4H64.9z"></path>
                      </defs>
                      <clippath id="SVGID_10_">
                        <use xlink:href="#SVGID_9_" style="overflow:visible;"></use>
                      </clippath>
                      <g class="st4">
                        <defs>
                          <rect id="SVGID_11_" x="0" y="-0.5" width="116.1" height="45.9"></rect>
                        </defs>
                        <clippath id="SVGID_12_">
                          <use xlink:href="#SVGID_11_" style="overflow:visible;"></use>
                        </clippath>
                        <rect x="53.2" y="12.4" width="25.6" height="29.9" class="st5"></rect>
                      </g>
                    </g>
                    <g>
                      <defs>
                        <path id="SVGID_13_" d="M93.7,17.6c0.3,0,0.5,0.2,0.5,0.5V36c0,0.5-0.2,0.5-0.5,0.6c-2.5,0.5-5.6,0.6-7.6,0.6        c-6.3,0-8.1-1-8.1-8.3V18.2c0-0.4,0.2-0.5,0.6-0.5h3.1c0.3,0,0.5,0.2,0.5,0.5v9.9c0,5.2,0.8,5.4,4,5.4H90V18.2        c0-0.4,0.2-0.5,0.5-0.5H93.7z"></path>
                      </defs>
                      <clippath id="SVGID_14_">
                        <use xlink:href="#SVGID_13_" style="overflow:visible;"></use>
                      </clippath>
                      <g class="st6">
                        <defs>
                          <rect id="SVGID_15_" x="0" y="-0.5" width="116.1" height="45.9"></rect>
                        </defs>
                        <clippath id="SVGID_16_">
                          <use xlink:href="#SVGID_15_" style="overflow:visible;"></use>
                        </clippath>
                        <rect x="73" y="12.5" width="26.3" height="29.7" class="st7"></rect>
                      </g>
                    </g>
                    <g>
                      <defs>
                        <path id="SVGID_17_" d="M115,27.2c0,7.9-1.5,10-7.9,10c-1.6,0-2.9,0-4.3-0.2v6.5c0,0.4-0.2,0.6-0.5,0.6h-3.1        c-0.3,0-0.5-0.2-0.5-0.6V18.8c0-0.4,0.2-0.6,0.7-0.7c2.9-0.5,4.8-0.6,7.3-0.6C113.5,17.5,115,19.5,115,27.2z M102.8,21.1v12.1        c1.2,0.1,2.6,0.2,3.7,0.2c3.9,0,4.4-1.2,4.4-6.2c0-4.8-0.4-6.2-4.2-6.2H102.8z"></path>
                      </defs>
                      <clippath id="SVGID_18_">
                        <use xlink:href="#SVGID_17_" style="overflow:visible;"></use>
                      </clippath>
                      <g class="st8">
                        <defs>
                          <rect id="SVGID_19_" x="0" y="-0.5" width="116.1" height="45.9"></rect>
                        </defs>
                        <clippath id="SVGID_20_">
                          <use xlink:href="#SVGID_19_" style="overflow:visible;"></use>
                        </clippath>
                        <rect x="93.6" y="12.4" width="26.4" height="36.7" class="st9"></rect>
                      </g>
                    </g>
                    <g>
                      <defs>
                        <path id="SVGID_21_" d="M12.7,16.6c-0.8,0.9-2.2,0.9-3.1,0.1c-0.9-0.9-0.9-2.3-0.1-3.1c0.8-0.9,2.2-0.9,3.1-0.1        C13.5,14.3,13.5,15.7,12.7,16.6"></path>
                      </defs>
                      <clippath id="SVGID_22_">
                        <use xlink:href="#SVGID_21_" style="overflow:visible;"></use>
                      </clippath>
                      <g class="st10">
                        <defs>
                          <rect id="SVGID_23_" x="0" y="-0.5" width="116.1" height="45.9"></rect>
                        </defs>
                        <clippath id="SVGID_24_">
                          <use xlink:href="#SVGID_23_" style="overflow:visible;"></use>
                        </clippath>
                        <rect x="4" y="7.8" width="14.3" height="14.6" class="st11"></rect>
                      </g>
                    </g>
                    <g>
                      <defs>
                        <path id="SVGID_25_" d="M4.4,15l-0.5,9.9l9-3c1.1-0.3,2.1-0.9,2.9-1.6c1.2-1.2,2-2.8,2.1-4.6c0,0,0,0,0,0l0.7-10.1L9.3,8.6        C9,8.7,8.8,8.8,8.5,8.9l0,0c-2.3,1-4,3.2-4.1,6C4.4,14.9,4.4,14.9,4.4,15L4.4,15z M0.8,14.7c0-0.1,0-0.1,0-0.2        c0.2-4.2,2.8-7.7,6.4-9.2l0,0C7.6,5.1,8,5,8.4,4.9L22.5,0l-1,15.6c0,0,0,0,0,0c-0.2,2.8-1.4,5.3-3.2,7.1        c-1.2,1.2-2.7,2.1-4.4,2.5L0,30L0.8,14.7L0.8,14.7z"></path>
                      </defs>
                      <clippath id="SVGID_26_">
                        <use xlink:href="#SVGID_25_" style="overflow:visible;"></use>
                      </clippath>
                      <g class="st12">
                        <defs>
                          <rect id="SVGID_27_" x="0" y="-0.5" width="116.1" height="45.9"></rect>
                        </defs>
                        <clippath id="SVGID_28_">
                          <use xlink:href="#SVGID_27_" style="overflow:visible;"></use>
                        </clippath>
                        <rect x="-5" y="-5.1" width="32.5" height="40.2" class="st13"></rect>
                      </g>
                    </g>
                  </g>
                </svg></a></div>
          </div>
          <!-- START: Navigation Links-->
          <!-- <div id="zinnov-menu" class="collapse navbar-collapse"> -->
            <!--START: Right Navigation Menu-->
            <!-- <ul class="navbar-nav navbar-right nav">
              <li class="nav__list"><a href="http://draup.com" class="nav__link draupcom"><?php echo ot_get_option('login')?></a></li>
              <li class="nav__list"><a href="<?php echo get_option( 'siteurl' );?>/about" class="nav__link"><?php echo ot_get_option('about_text')?></a></li>
              <li class="nav__list"><a href="<?php echo get_option( 'siteurl' );?>/solutions" class="nav__link"><?php echo ot_get_option('solution_text')?></a></li>
              <li class="nav__list"><a href="<?php echo get_option( 'siteurl' );?>/resources" class="nav__link"><?php echo ot_get_option('resources_text')?></a></li>
              <li class="nav__list"><a href="<?php echo get_option( 'siteurl' );?>/events" class="nav__link"><?php echo ot_get_option('event_text')?></a></li>
              <li class="nav__list"><a href="<?php echo get_option( 'siteurl' );?>/careers" class="nav__link"><?php echo ot_get_option('career_text')?></a></li>
              <li class="nav__list"><a href="<?php echo get_option( 'siteurl' );?>/requestdemo" class="nav__link"><?php echo ot_get_option('requestdemo_text')?></a></li>
               <li class="nav__list nav-list-last"><a href="<?php echo get_option( 'siteurl' );?>/login" class="nav__link"><?php echo ot_get_option('login_text')?></a></li>
            </ul>
          </div> -->

          <!-- START: Navigation Links-->
            <div id="zinnov-menu" class="collapse navbar-collapse">
              <!--START: Right Navigation Menu-->
              <ul class="navbar-nav nav navbar-right">
                                <!--ASTART: About Page-->
                                <li class="nav__list position-static"><a href="javascript:void(0)" class="nav__link">
                                     
                                    <?php echo ot_get_option('about');?>
                                    <div class="dropdown-rect"></div></a>
                                  <div class="dropdown-Menu">
                                    <div class="container">
                                      <div class="col-sm-10 col-sm-offset-1">
                                        <div class="row">
                                          <ul class="clearfix drop-menu">
                                            <li class="col-sm-4 drop-menu__list"><a href="<?php echo get_option('siteurl');?>/about" class="link link--blue title-blue"><?php echo ot_get_option('menu1');?></a>
                                                                            <p class="info info--light"><?php echo ot_get_option('menu1_content');?> </p><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('menu1_link');?>" class="link">read more</a>
                                            </li>
                                            <li class="col-sm-4 drop-menu__list"><a href="<?php echo get_option('siteurl');?>/team" class="link link--blue title-blue"><?php echo ot_get_option('menu2');?></a>
                                                                            <p class="info info--light"><?php echo ot_get_option('menu2_content');?></p><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('menu2_link');?>" class="link">view all</a>
                                            </li>
                                            <li class="col-sm-4 drop-menu__list"><a href="<?php echo get_option('siteurl');?>/advisors" class="link link--blue title-blue"><?php echo ot_get_option('menu3');?></a>
                                                                            <p class="info info--light"><?php echo ot_get_option('menu3_content');?></p><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('menu3_link');?>" class="link">view all</a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <!--START: Products-->
                                <li class="nav__list position-static"><a href="javascript:void(0)" class="nav__link"><?php echo ot_get_option('solutions');?>
                                    <div class="dropdown-rect"></div></a>
                                  <div class="dropdown-Menu">
                                    <div class="container">
                                      <div class="col-sm-10 col-sm-offset-1">
                                        <div class="row">
                                          <ul class="clearfix drop-menu">
                                            <li class="col-sm-4 drop-menu__list"><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('menu4_link1');?>" class="link link--blue title-blue"><?php echo ot_get_option('menu4');?></a>
                                                                            <p class="info info--light"><?php echo ot_get_option('menu4_content');?></p><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('menu4_link1');?>" class="link">learn more</a><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('menu4_link2');?>" class="link ml-2">login</a>
                                            </li>
                                            <li class="col-sm-4 drop-menu__list"><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('menu5_link');?>" class="link link--blue title-blue"><?php echo ot_get_option('menu5');?></a>
                                                                            <p class="info info--light"><?php echo ot_get_option('menu5_content');?></p><a href="javascript:void(0)" class="link link--disabled"></a>
                                            </li>
                                            <li class="col-sm-4 drop-menu__list no-links"><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('menu6_link');?>" class="link link--blue title-blue"><?php echo ot_get_option('menu6');?></a>
                                                                            <p class="info info--light"><?php echo ot_get_option('menu6_content');?></p><a href="javascript:void(0)" class="link link--disabled"></a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="nav__list position-static"><a href="javascript:void(0)" class="nav__link"><?php echo ot_get_option('resources');?>
                                    <div class="dropdown-rect"></div></a>
                                  <div class="dropdown-Menu">
                                    <div class="container">
                                      <div class="col-sm-10 col-sm-offset-1">
                                        <div class="row">
                                          <ul class="clearfix drop-menu">
                                            <li class="col-sm-3 drop-menu__list"><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('menu7_link');?>" class="link link--blue title-blue"><?php echo ot_get_option('menu7');?></a>
                                                                            <p class="info info--light"><?php echo ot_get_option('menu7_content');?></p><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('menu7_link');?>" class="link">read more</a>
                                            </li>
                                            <li class="col-sm-3 drop-menu__list"><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('menu8_link');?>" class="link link--blue title-blue"><?php echo ot_get_option('menu8');?></a>
                                                                            <p class="info info--light"><?php echo ot_get_option('menu8_content');?></p><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('menu8_link');?>" class="link">read more</a>
                                            </li>
                                            <li class="col-sm-3 drop-menu__list"><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('menu9_link');?>" class="link link--blue title-blue"><?php echo ot_get_option('menu9');?></a>
                                                                            <p class="info info--light"><?php echo ot_get_option('menu9_content');?></p><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('menu9_link');?>" class="link">read more</a>
                                            </li>
                                             <li class="col-sm-3 drop-menu__list"><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('menu10_link');?>" class="link link--blue title-blue"><?php echo ot_get_option('menu10');?></a>
                                                                            <p class="info info--light"><?php echo ot_get_option('menu10_content');?></p><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('menu10_link');?>" class="link">read more</a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <!--START: Events-->
                                <li class="nav__list"><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('event_link');?>" class="nav__link"><?php echo ot_get_option('event');?></a></li>
                                <!--START: Careers-->
                                <li class="nav__list"><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('careers_link');?>" class="nav__link"><?php echo ot_get_option('careers');?></a></li>
                                <!--START: Careers-->
                                <li class="nav__list"><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('request_link');?>" class="nav__link"><?php echo ot_get_option('request');?></a></li>
                <li class="nav__list nav__list--last"><a href="<?php echo get_option('siteurl');?>/<?php echo ot_get_option('contact_link');?>" class="nav__link nav__link--last"><?php echo ot_get_option('contact');?></a></li>
              </ul>
            </div>
        </div>
      </nav>
    </header>
