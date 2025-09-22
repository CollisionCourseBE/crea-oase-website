<?php
/**
 * This file contains the functions for the WP admin
 */

// Adjust the footer text
function remove_footer_admin () { 
	echo '<span id="footer-thankyou">Thank you for using <a href="https://wordpress.org/" target="_blank">WordPress</a>'.' | '.'Made possible by <a href="https://www.collisioncourse.be/" target="_blank">CollisionCourse</a></span>';
}

add_filter('admin_footer_text', 'remove_footer_admin');