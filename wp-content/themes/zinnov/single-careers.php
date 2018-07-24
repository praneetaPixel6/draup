<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('careerdetails'); ?>
<?php while ( have_posts() ) : the_post();  ?>

 <!--START: Main-->
    <main>
      <!--start: Banner-->
      <section class="section-careers-details blue-bg-pattern">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="banner-wrapper mt-5 mt-md-0">
                <div class="jd-wrapper">
                  <div class="jd-title-wrapper">
                    <h3 class="jd-title">
                       
                     <?php the_title();?>
                    <span class="jd-category"><?php echo get_field('sub_title');?></span></h3>
                  </div>
                  <div class="jd-content">
                    <!--start: Job Description   -->
                   <?php the_content();?>
                    <!--Start: Apply Button-->
                    <div class="text-center"><a data-toggle="modal" data-target="#applicationModal" class="btn btn--lg btn--blue">apply now</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php endwhile;?>
<?php get_footer(); ?>
<div id="applicationModal" tabindex="-1" role="dialog" aria-labelledby="applicationModal" aria-hidden="true" class="modal modal--custom fade">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Apply for Job<span>
               
              required<i class="required">*</i></span></h5>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close">&times;</button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
            <?php //echo do_shortcode('[contact-form-7 id="210" title="Contact form 1"]') ?>
            <div role="form" class="wpcf7" id="wpcf7-f210-o1" lang="en-US" dir="ltr">
      <div class="screen-reader-response"></div>
              <form data-parsley-validate action="/draup/draup/careers/data-scientist/#wpcf7-f210-o1" method="post" class="wpcf7-form application-form" enctype="multipart/form-data" >
                <div style="display: none;">
        <input type="hidden" name="_wpcf7" value="210">
        <input type="hidden" name="_wpcf7_version" value="4.9">
        <input type="hidden" name="_wpcf7_locale" value="en_US">
        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f210-o1">
        <input type="hidden" name="_wpcf7_container_post" value="0">
        </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="first-name" class="input-label">
                         
                        first name<i class="required">*</i>
                      </label>
                      <input id="first-name" name="yourname" type="text" required placeholder="Enter first name" class="form-control input-field">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="last-name" class="input-label">
                         
                        last name<i class="required">*</i>
                      </label>
                      <input id="last-name"  name="lastname" type="text" required placeholder="Enter last name" class="form-control input-field">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email" class="input-label">
                         
                        email address<i class="required">*</i>
                      </label>
                      <input id="email" name="youremail" type="email" required placeholder="Enter email address" class="form-control input-field">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="phone-number" class="input-label">
                         
                        phone number<i class="required">*</i>
                      </label>
                      <input id="name" name="phoneno"  type="text" maxlength="10" required placeholder="Enter phone number" class="form-control input-field input-number">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="apply-btns-container">
                      <div class="custom-file-upload">
                        <input type="file" required data-parsley-errors-container="#choose-file" data-parsley-error-message="Choose file" name="file-496" data-multiple-caption="{count} files selected" multiple="" id="file-7" class="input-field inputfile">
                        <label for="file-7" class="input-label-file"><strong class="input-label-file__btn btn--lg btn btn--oval">Choose file</strong><span class="input-label-file__text">
                             
                            No File Chosen</span></label><span id="choose-file"></span>
                      </div>
                      <button type="submit" value="Send"  class="btn btn--blue btn--lg btn-submit wpcf7-form-control wpcf7-submit">send</button>
                     
                    </div>
             <div class="wpcf7-response-output wpcf7-display-none"></div>
                  </div>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>