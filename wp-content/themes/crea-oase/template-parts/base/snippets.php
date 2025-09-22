<?php
/**
 * This file includes codes snippets or/and functions to re-use in the project.
*/

// Add leading characters, example use can be for a counter with leading zeros
function add_leading_characters($number, $length = 2, $character = '0') {
    return str_pad($number, $length, $character, STR_PAD_LEFT);
}

// Add a shortcode for the current year
function current_year_shortcode() {
    return date('Y'); 
}
add_shortcode('current_year', 'current_year_shortcode');