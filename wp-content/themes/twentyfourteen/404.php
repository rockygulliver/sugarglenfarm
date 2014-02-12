<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<div id="content" class="site-content wrapper" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'twentyfourteen' ); ?></h1>
			</header>

			<div class="page-content">
				<p><?php _e( 'Nothing was found here. Maybe try a search?', 'twentyfourteen' ); ?></p>

			</div><!-- .page-content -->
		 	<div class="clear"> </div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
