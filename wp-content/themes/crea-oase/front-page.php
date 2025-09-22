<?php 
/**
 * Index/Front Page
 * 
 * This file is the index/front page template for a WordPress theme.
 * It is responsible for displaying the content that users see when they visit the homepage of the website.
*/

// Get the header
get_header();

    // Start the page WordPress loop and check for content
    if ( have_posts() ) : while ( have_posts() ) : the_post();

        the_content();

    endwhile; else :

// Show the no content file
get_template_part( 'template-parts/errors/404', get_post_format() );

endif;

get_footer();