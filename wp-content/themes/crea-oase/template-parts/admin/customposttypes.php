<?php
/**
 * This file manages the custom post types (CPT) used by the theme,
 * and manageable in the WP backed.
 * 
 * https://developer.wordpress.org/resource/dashicons/#menu
 **/

 // Create the custom post types
function create_custom_post_type() {
}
add_action( 'init', 'create_custom_post_type' );

function create_custom_taxonomies() {
}
add_action( 'init', 'create_custom_taxonomies' );
