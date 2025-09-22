<?php
/**
 * WP index
 */

get_header(); 

if ( ! have_posts() ) :

	// If no content, include the "No posts found" template
	get_template_part( 'template-parts/errors/404', get_post_format() );

endif;

get_footer();