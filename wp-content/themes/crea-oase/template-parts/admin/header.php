<?php
/**
 * This file contains the head functions for the admin section 
*/

// Custom admin style sheet (and js)
function my_admin_head() {
        echo '<link href="'.get_stylesheet_directory_uri().'/styles/css/admin.css" rel="stylesheet" type="text/css" />';
}

add_action('admin_head', 'my_admin_head');