<?php
/**
 * In this file we define functies needed to make this theme work without any missing dependencies
*/

// Load textdomain
function my_theme_textdomain() {
    load_theme_textdomain( 'txtd-crea-oase', get_template_directory() . '/languages' );
}
add_action('after_setup_theme', 'my_theme_textdomain');

// Ensure this code is executed only if the WordPress Plugin API is available
if ( ! function_exists( 'is_plugin_active' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}

// Check if a specific plugin is active
function check_if_plugin_is_active($plugin_slug) {
    return is_plugin_active($plugin_slug);
}

// Check an active ACF
if ( ! function_exists('get_field') || ! check_if_plugin_is_active('contact-form-7/wp-contact-form-7.php') ) {
    // Show alert box (front and backend)
    $alert_box = '<div class="theme-error-acf">';
    $alert_box .= '<p>ACF and/or CF7 is not installed and/or loaded.<br>Theme will fail!</p>';
    $alert_box .= '</div>';

    echo $alert_box;
}