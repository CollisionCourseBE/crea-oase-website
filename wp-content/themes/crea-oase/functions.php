<?php
/**
 * This file contains all the custom functions and hooks used in the theme.
*/

// Add the support for thumbnails and expert field
add_theme_support( 'post-thumbnails' );
add_post_type_support( 'page', 'excerpt' );

// Require the files from the base directory
get_template_part( 'template-parts/base/vendor', get_post_format() );
get_template_part( 'template-parts/base/snippets', get_post_format() );
get_template_part( 'template-parts/base/themesetup', get_post_format() );

// Require the files from the admin directory, this is for the WP backend
get_template_part('template-parts/admin/header', get_post_format() );
get_template_part('template-parts/admin/notifications', get_post_format() );
get_template_part('template-parts/admin/customposttypes', get_post_format() );
get_template_part('template-parts/admin/footer', get_post_format() );

// Require the files from the parts directory
get_template_part( 'template-parts/parts/archive-title', get_post_format() );
get_template_part( 'template-parts/parts/calculate-readtime', get_post_format() );
get_template_part( 'template-parts/parts/navigations', get_post_format() );
get_template_part( 'template-parts/parts/post-thumbnail', get_post_format() );
get_template_part( 'template-parts/parts/post-truncated-content', get_post_format() );

// Add this function to enqueue the service worker script
function enqueue_service_worker_script() {
    // Enqueue a custom script to register the service worker
    wp_enqueue_script('service-worker-register', get_template_directory_uri() . '/scripts/serviceworker/service-worker-register.js', [], null, true);

    // Pass the site URL to the script
    wp_localize_script('service-worker-register', 'siteData', [
        'site_url' => get_site_url(),
    ]);
}
add_action('wp_enqueue_scripts', 'enqueue_service_worker_script');
