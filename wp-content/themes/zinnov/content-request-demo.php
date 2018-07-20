<?php /* Template Name: Request Demo */?>
<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header('requestdemo'); ?>

 <main>
      <!--Start: Banner-->
      <section class="section section--requestDemo">
        <div class="container">
          <div class="row">
            <!-- <div class="contact-banner-container"> -->
              <div class="col-sm-12">
                <h3 class="heading heading--main heading--lg"><?php echo get_field('request_demo_heading');?></h3>
                <div class="request-demo-wrapper flex clearfix">
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="demo-content-wrapper">
                        <h2 class="heading heading--orange"><?php echo get_field('opportunities_heading');?></h2>
                        <p class="info"><?php echo get_field('opportunities_subtext');?></p>
                        <div class="demo-options-menu-wrapper">
                          <h4 class="heading-md"><?php echo get_field('join_heading');?></h4>
                          <ul class="demo-options">
                            <li class="demo-options__list"><i class="icon-check-mark-circle icon-check"></i>
                              <p class="info"><?php echo get_field('join_subtext_1');?></p>
                            </li>
                            <li class="demo-options__list"><i class="icon-check-mark-circle icon-check"></i>
                              <p class="info"><?php echo get_field('join_subtext_2');?></p>
                            </li>
                            <li class="demo-options__list"><i class="icon-check-mark-circle icon-check"></i>
                              <p class="info"><?php echo get_field('join_subtext_3');?></p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="demo-form-wrapper">
                        <h3 class="section-heading section-heading--initial"><?php echo get_field('fill_heading');?></h3>
                        <p class="info"><?php echo get_field('heading_subtext');?></p>
                        <?php //echo do_shortcode('[contact-form-7 id="248" title="Contact form 1"]');?>
                        <div role="form" class="wpcf7" id="wpcf7-f248-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form data-parsley-validate="" class="demo-form clearfix wpcf7-form" action="/training/zinnov/requestdemo/#wpcf7-f248-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                        <div style="display: none;">
              						<input type="hidden" name="_wpcf7" value="248">
              						<input type="hidden" name="_wpcf7_version" value="4.9">
              						<input type="hidden" name="_wpcf7_locale" value="en_US">
              						<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f248-o1">
              						<input type="hidden" name="_wpcf7_container_post" value="0">
            						</div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label for="yourname" class="input-label">name</label>
                              <input id="yourname" name="yourname" type="text" required  placeholder="Enter your full name" class="form-control input-text-field input-field">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="email" class="input-label">email address</label>
                              <input id="email" name="email" type="email" required placeholder="sam@companyname.com" class="form-control input-field">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="phone-number" class="input-label">phone number</label>
                              <input id="phone-number" name="phone-number" type="text" maxlength="10"  required placeholder="Mobile" class="form-control input-number-field input-field">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="company" class="input-label">company</label>
                              <input id="company" type="text" name="company" required placeholder="Company" class="form-control input-text-field input-field">
                            </div>
                          </div>
                          <div class="col-sm-6">           
                            <div class="form-group">
                              <label for="designation" class="input-label">designation</label>
                              <input id="designation" type="text" name="designation" required placeholder="Designation" class="form-control input-text-field input-field">
                            </div>
                          </div>
                         <!--  <div class="col-sm-12">          
                            <div class="form-group">
                              <label for="region" class="input-label">region</label>
                              <select class="select-time select-time--date" id="region" name="region">
                                
                                <option>India</option>
                                <option>India</option>
                                <option>USA</option>
                                <option>UK</option>
                              </select>
                            </div>
                          </div> -->
                          <div class="col-sm-12">
                            <div class="row">
                              <div class="form-group">
                                <label for="date" class="input-label col-sm-12 label-timezone">Time Zone</label>
                                <div class="clearfix timezone-fields">
                                  <div class="col-sm-5">           
                                    <div class="form-group">
                                      <label for="date" class="input-label">date</label>
                                      <input id="date" name="date" type="text"  placeholder="Date" data-format="dd/MM/yyyy" class="date form-control input-field" required>
                                    </div>
                                  </div>
                                  <div class="col-sm-5">           
                                    <div class="form-group">
                                      <label for="time" class="input-label">time</label>
                                      <select class="select-time" id="time" name="time">
                                        <option>Time</option>
                                        <option>06:30PM - 07:00PM PST</option>
                                        <option>07:30PM - 08:00PM PST</option>
                                        <option>08:30PM - 09:00PM PST</option>
                                        <option>09:30PM - 10:00PM PST</option>
                                        <option>10:30PM - 11:00PM PST</option>
                                        <option>11:30PM - 12:00AM PST</option>
                                        <option>12:30AM - 01:00AM PST</option>
                                        <option>01:30AM - 02:00AM PST</option>
                                        <option>02:30AM - 03:00AM PST</option>
                                        <option>03:30AM - 04:00AM PST</option>
                                        <option>04:30AM - 05:00AM PST</option>
                                        <option>05:30AM - 06:00AM PST</option>
                                        <option>06:30AM - 07:00AM PST</option>
                                        <option>07:30AM - 08:00AM PST</option>
                                        <option>08:30AM - 09:00AM PST</option>
                                        <option>09:00AM - 09:30AM PST</option>
                                       
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-sm-2">
                                    <button type="button" id="add-time" class="link link--transparent add-time">+ add</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                         <div class="col-sm-12 time-date">
                             <div class="row">
                              <div class="form-group">
                                <label for="date" class="input-label col-sm-12 label-timezone">Time Zone</label>
                                <div class="clearfix timezone-fields">
                                  <div class="col-sm-5">           
                                    <div class="form-group">
                                      <label for="date" class="input-label">date</label>
                                      <input id="date" name="date" type="text"  placeholder="Date" data-format="dd/MM/yyyy" class="date form-control input-field" required>
                                    </div>
                                  </div>
                                  <div class="col-sm-5">           
                                    <div class="form-group">
                                      <label for="time" class="input-label">time</label>
                                      <select class="select-time" id="time" name="time">
                                        <option>Time</option>
                                        <option>06:30PM - 07:00PM PST</option>
                                        <option>07:30PM - 08:00PM PST</option>
                                        <option>08:30PM - 09:00PM PST</option>
                                        <option>09:30PM - 10:00PM PST</option>
                                        <option>10:30PM - 11:00PM PST</option>
                                        <option>11:30PM - 12:00AM PST</option>
                                        <option>12:30AM - 01:00AM PST</option>
                                        <option>01:30AM - 02:00AM PST</option>
                                        <option>02:30AM - 03:00AM PST</option>
                                        <option>03:30AM - 04:00AM PST</option>
                                        <option>04:30AM - 05:00AM PST</option>
                                        <option>05:30AM - 06:00AM PST</option>
                                        <option>06:30AM - 07:00AM PST</option>
                                        <option>07:30AM - 08:00AM PST</option>
                                        <option>08:30AM - 09:00AM PST</option>
                                        <option>09:00AM - 09:30AM PST</option>
                                       
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-sm-2">
                                    <button type="button" id="add-time" class="link link--transparent add-time">+ add</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="col-sm-12 message">
                            <div class="form-group">
                              <label for="message" class="input-label">message</label>
                              <textarea id="message" name="message" type="text"  placeholder="Message" class="form-control input-field"></textarea>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <button type="button" id="add-message" class="link link--transparent">+ add message</button>
                          </div>
                          <div class="col-sm-12 request-demo-btn">
                            <button type="submit" class="btn btn--blue btn--lg">request demo</button>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                          </div>
                        </form>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="bar">
                    <div class="bar__line"></div>
                    <div class="bar__line"></div>
                    <div class="bar__line"></div>
                  </div>
                </div>
              </div>
            <!-- </div> -->

          </div>
        </div>
      </section>
      <!--Start: Features-->
       <section class="section section--demoFeatures1">
         <div class="container">
          <div class="row">
            <div class="features-block-wrapper">
              <div class="text-center">
                <h3 class="section-heading"><?php echo get_field('feature_heading');?></h3>
              </div>
              <ul class="features-menu clearfix">
                <li class="col-sm-3">
                  <div class="features-menu__list">
                    <!-- <object type="image/svg+xml" data="<?php echo esc_url( get_template_directory_uri() ); ?>/img/real-time-orange.svg" class="orange-svg-icon"></object> -->
                    <div class="orange-svg-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-realtime.png" alt="Real Time Data"/></div>
                    <h3 class="section-heading section-heading--sm"><?php echo get_field('feature_section_heading1');?></h3>
                    <p class="info"><?php echo get_field('feature_heading_subtext_1');?></p>
                  </div>
                </li>
                <li class="col-sm-3">
                  <div class="features-menu__list">
                    <div class="orange-svg-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-intelligence.png" alt="Real Time Data"/></div>
                    <!-- <object type="image/svg+xml" data="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-depthanalysis.svg" class="orange-svg-icon"></object> -->
                    <h3 class="section-heading section-heading--sm"><?php echo get_field('feature_section_heading2');?></h3>
                    <p class="info"><?php echo get_field('feature_heading_subtext_2');?></p>
                  </div>
                </li>
                <li class="col-sm-3">
                  <div class="features-menu__list">
                    <!-- <object type="image/svg+xml" data="<?php echo esc_url( get_template_directory_uri() ); ?>/img/subject-matters-orange.svg" class="orange-svg-icon"></object> -->
                     <div class="orange-svg-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-subjectmatter.png" alt="Real Time Data"/></div>
                    <h3 class="section-heading section-heading--sm"><?php echo get_field('feature_section_heading_3');?></h3>
                    <p class="info"><?php echo get_field('feature_heading_subtext_3');?></p>
                  </div>
                </li>
                <li class="col-sm-3">
                  <div class="features-menu__list">
                    <!-- <object type="image/svg+xml" data="<?php echo esc_url( get_template_directory_uri() ); ?>/img/human-curation-orange.svg" class="orange-svg-icon"></object> -->
                     <div class="orange-svg-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-curation.png" alt="Real Time Data"/></div>
                    <h3 class="section-heading section-heading--sm"><?php echo get_field('feature_section_heading_4');?></h3>
                    <p class="info"><?php echo get_field('feature_heading_subtext_4');?></p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-FAQBanner">
        <div class="container">
         <div class="text-center">
          <h3 class="section-heading">FAQ</h3>
        </div>
        <div class="row faq-wrapper">
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
              <h3 class="heading-md text-capitalize">Question not here?</h3>
              <p class="info">Happy to answer your questions. Please post your questions on our contact form and will get back.</p><a href="<?php echo get_option( 'siteurl' );?>/contact" class="btn btn--blue btn--lg">contact us</a>
            </div>

             <div class="more-read-menu-wrapper">
                <h3 class="heading-md text-capitalize">Our Blog</h3>
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
      </div>
      <div class="text-center logo-footer"></div>
      </section>
    </main>
    <?php get_footer(); ?>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/request-demo-header-animation.js"></script>
    