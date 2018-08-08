<?php
/**
 * Template Name: Custom Post List
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentysixteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>


</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
?>