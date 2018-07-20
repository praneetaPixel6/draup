<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

 <section class="section section--homeBanner">
	<div class="pageNotFound text-center">
		<div class="img-404">
			<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/404.png" alt="">
		</div>
		<div>
			<div class="btn-group">
				<button type="button" class="btn btn--orange btn-404"><a href="/about">Home</a></button>
				<button type="button" class="btn btn--orange btn-404"><a href="javascript:history.back()">Take me back</a></button>
			</div>
	</div>
</section>

<?php get_footer(); ?>
