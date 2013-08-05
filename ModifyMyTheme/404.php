<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<article id="post-0" class="post error404 no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'ERROR 404 PAGE NOT FOUND'); ?></h1>
				</header>

				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/ron-swanson-corn-mustache.GIF" title="Error 404 Page Not Found"/>
					<h2 class="entry-title"><?php _e('Feel free to stay here and eat some corn'); ?></h2>
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>