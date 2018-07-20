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

get_header('whitepapers'); ?>

<script>
function loadPost(val){
window.location="<?php echo get_option( 'siteurl' );?>/whitepapers?sort="+val;
}
</script>

   <main>
	 <section class="section section--whitePaperBanner">
		<div class="container">
		  <div class="row">
		    <div class="contact-banner-container clearfix">
		      <div class="col-sm-12">
		        <div class="flex select-dropdown-menu">
		          <ul class="breadcrumb breadcrumb-menu breadcrumb-menu--white">
		            <li class="breadcrumb__list"><a href="<?php echo site_url(); ?>" class="breadcrumb__link">home</a></li>
		            <li class="breadcrumb__list active">white papers</li>
		          </ul>
		        </div>
		         <div class="flex flex--noMobile flex--justifySpaceBetween select-dropdown-menu">
		          <h3 class="heading heading--white text-capitalize heading--lg">White papers</h3>
		          <div class="paper-filter">
		          <select class="select-category" onchange="loadPost(this.value)">
		        	<?php if(isset($_GET["sort"])){

		         	?>

                    <option value="<?php echo $_GET["sort"]?>"><?php echo $_GET["sort"]?></option>
                     <option value="All">All</option>
		         	<?php } else {?>

		            <option>Filter By</option>
		            <option value="All">All</option>
		            <?php }?>
                    <?php



				        $terms = get_terms("list_whitepapers",array( 'parent' => 0 ));
				        $i=1;
				        foreach ( $terms as $term ) {


				        $termname = strtolower($term->name);
				        $termname = str_replace(' ', '-', $termname);

				                     ?>


				        <?php //echo do_shortcode('[searchandfilter taxonomies="category,post_tag"]');
				        if($_GET["sort"]!=$term->name){
				        ?>

		            <option id="<?php echo $termname; ?>"><?php echo $term->name; ?></option>

		             <?php $i++; }} ?>
		          </select>

		         <div class="request-whitepaper">
		         	<span>REQUEST FOR SPECIFIC WHITEPAPER</span> <a href="javascript:void();" class="btn-request" data-toggle="modal" data-target="#requestModal">REQUEST</a>
		         </div>
		        </div>
		    </div>
		      <ul class="whitepapers">
		        <?php

					$paged = ( isset( $my_query_array['paged'] ) && !empty( $my_query_array['paged'] ) ) ? $my_query_array['paged'] : 1;
			        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$terms = get_terms("list_whitepapers",array( 'parent' => 0 ));
			        $i=1;
			        $category="";


			        foreach ( $terms as $term ) {

				        if($term->name==$_GET["sort"]){

				        	$category=$term->slug;


				   if($_GET["sort"]=="Sort"){$exist="exist";}
				        }
			        }

			        if(isset($_GET["sort"])){
			        	 if($_GET['sort']=="All")
			        	 {
			        	 	 $the_query=new WP_Query(array('post_type'=>'whitepapers','posts_per_page'=>'3','paged' => $paged,$post-ID=>'menu_id'));

			        	 }
			        	else
			        	{
			        			$the_query=new WP_Query(array('post_type'=>'whitepapers','posts_per_page'=> '3','paged' => $paged,'tax_query' => array(array ('taxonomy' => 'list_whitepapers','field' => 'slug','terms' => "$category"))));
			        	$qry=2;
			        	}
			        }else if(isset($_GET["tag"])){

			        	$the_query=new WP_Query(array('post_type'=>'whitepapers','posts_per_page'=>'3','paged' => $paged,'tag' => $_GET["tag"]));
					$qry=3;
					        }else {

					            $the_query=new WP_Query(array('post_type'=>'whitepapers','posts_per_page'=>'3','paged' => $paged,$post-ID=>'menu_id'));
					$qry=4;
					       	}


       			$ids=array();
                  while($the_query->have_posts() ) : $the_query->the_post();
                  {

                  	$whitepapers_date = get_the_date( 'd M Y', get_the_ID() );
                    $trimtitle = get_the_content();
                  	$shorttitle = wp_trim_words( $trimtitle, $num_words = 17, $more = '… ' );

                  	$exist="";

                    $menu_id = get_the_id();


                    if(isset($_GET["sort"])){
                    $terms = wp_get_post_terms( $menu_id ,"list_whitepapers");
                    foreach ( $terms as $term ) {

                if($term -> name==$_GET["sort"]){
                        $exist="exist";
                      }
                    }

                    }else  if(isset($_GET["tag"])){

				 	$tag = wp_get_post_tags($menu_id ,"tag");

					foreach ( $tag as $tag ) {

						if($tag->name==$_GET["tag"]){

							$exist="exist";

						}

					}
				}else{

				$exist="exist";

			}

        if($_GET["sort"]=="All"){$exist="exist";}

        if($exist=="exist")
         {
		?>
		<?php
	$user=get_field('select_author');
	$auth = get_post($user); // gets author from post
	$author_name = $auth->user_name;

	$terms = wp_get_post_terms( $menu_id ,"list_whitepapers");
	foreach ($terms as $term){
		if(in_array($menu_id, $ids))
          continue;
        array_push($ids, $menu_id);
	    ?>

	<li class="whitepapers__list clearfix ">

		<div class='display-flex'>
			<div class="col-sm-7">
				<div class="row flex-height">
				<a  href="<?php echo get_permalink(); ?>">
					<div class="paper-img">
						<?php echo get_the_post_thumbnail( get_the_ID(), 'whitepapers-thumbnail',array('alt' => 'whitepapers image','class' => 'img-responsive')); ?>
					</div>
					</a>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="row">
					<div class="paper-content">
					<a  href="<?php echo get_permalink(); ?>">
						<h3 class="heading"><?php the_title();?></h3>
							<div class="blog-posted">
								 <span><?php echo $author_name;?></span><?php echo $whitepapers_date;?>
							</div>

							<h5 class="category text-capitalize">Category:
								<span class='category-list'>

								 	<span class='category-list__item'><?php $z=1;foreach ( $terms as $term ) {
								 		if($z==1){
								 			echo  $term->name;
								 		}else{
								 			echo  ", ".$term->name;
								 		}$z++;
									}  ?> </span>
								</span>

							</h5>

							<p class="info">
								<?php echo $shorttitle;?>
							</p>
							</a>
							 <?php if(get_field('upload_pdf')!=''){ ?>
					 <a href="<?php echo get_field('upload_pdf');?>" download class="link">
                <i class="icon-down-arrow"></i>download
              </a>
					<?php }?>
						<?php if($i==1){?>
						<div class="bar">
							<div class="bar__line"></div>
							<div class="bar__line"></div>
							<div class="bar__line"></div>
						</div>
						<?php }else if($i==2){?>
						<div class="circle circle--lg circle--ringOrange circle--ring"></div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</li>
<?php } $i++;  }}  endwhile;?>
</ul>



		        <!--start: Pagination-->
		         <?php if ( have_posts() ) : ?>
		         <div class="pagination-wrapper text-right">
                           <ul class="pagination pagination-menu">

                          <?php

                          the_posts_pagination( array( 'mid_size' => 3 ) );?>

							</ul>
							</div>
							  <?php wp_reset_postdata(); ?>

		          <?php endif; ?>
		         <div class="text-center logo-footer"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer-logo.svg" alt="Draup" class="logo-footer__img"></div>
		      </div>
		    </div>
		  </div>
		</div>
    <!-- The Modal -->
 <div class="modal model-request" id="requestModal">
   <div class="modal-dialog">
     <div class="modal-content">

       <!-- Modal Header -->
       <div class="modal-header">
         <h4 class="modal-title">Request for specific whitepaper</h4>
         <p class="model-info info">Getting a personalised whitepaper on your
			favourite topics is just a click away!</p>
        <div class="bar">
          <div class="bar__line"></div>
          <div class="bar__line"></div>
          <div class="bar__line"></div>
        </div>
       </div>

       <!-- Modal body -->
        <form data-parsley-validate="" class="request-form wpcf7-form" action="/training/zinnov/whitepapers/combining-big-data-right-judgement-relevant-content/#wpcf7-f284-p163-o1" method="post" novalidate="novalidate">
	       <div class="modal-body">
	         <div role="form" class="wpcf7" id="wpcf7-f284-p163-o1" lang="en-US" dir="ltr">
	          <div class="screen-reader-response"></div>

	            <div style="display: none;">
				<input type="hidden" name="_wpcf7" value="284">
				<input type="hidden" name="_wpcf7_version" value="4.9">
				<input type="hidden" name="_wpcf7_locale" value="en_US">
				<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f284-p163-o1">
				<input type="hidden" name="_wpcf7_container_post" value="163">
				</div>
	            <div class="form-group">
	              <label for="topic" class="input-label">enter topic</label>
	              <input id="topic" name="topic" type="text" required placeholder="Type" class="form-control input-text-field input-field">
	            </div>
	            <div class="form-group">
	              <label for="email" class="input-label">Email address</label>
	              <input id="email" name="email" type="email" required placeholder="sam@companyname.com" class="form-control input-field">
	             <div class="wpcf7-response-output wpcf7-display-none"></div>
	            </div>
	          </div>
	       	</div>
	       	<div class="modal-footer">
	          <button type="submit" class="btn btn--blue btn--lg">request</button>
	       </div>
        </form>
       <!-- Modal footer -->

     </div>
   </div>
 </div>
	</section>
</main>

<?php get_footer(); ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/blog-header-animation.js"></script>
