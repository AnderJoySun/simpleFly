<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<style type="text/css">
	.page-content{
		text-align: center;
	}
	.page-content>img{
	}
</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( '沒有找到你要的内容', 'twentyfifteen' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/404.png">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
