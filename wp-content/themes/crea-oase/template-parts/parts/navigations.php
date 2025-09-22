<?php
/**
 * This code snippet registers custom navigation menus.
*/

// Register the navigations
function register_my_navs() {
    register_nav_menus(
        array(
            'nav-main' => __( 'Main navigation' ),
            'nav-footer-left' => __( 'Footer navigation left' ),
            'nav-footer-right' => __( 'Footer navigation right' ),
            'nav-legal' => __( 'Legal navigation' )
        )
    );
}
add_action( 'init', 'register_my_navs' );

// Insert the walkers
get_template_part( 'template-parts/parts/navigations-walker', get_post_format() );