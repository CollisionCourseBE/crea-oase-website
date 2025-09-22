<?php
/**
 * Get a truncated version of the post content.
 *
 * @param int $post_id The post ID. Defaults to the current post if not provided.
 * @param int $length The number of characters to display. Defaults to 20.
 * @return string The truncated content.
 */
function get_truncated_post_content( $post_id = null, $length = 100 ) {
    // Use the current post ID if none is provided
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }

    // Get the post content
    $post_content = get_post_field( 'post_content', $post_id );

    // Apply the_content filter to the content
    $post_content = apply_filters( 'the_content', $post_content );

    // Remove any HTML tags from the content
    $post_content = strip_tags( $post_content );

    // Ensure we only get the first $length characters
    if ( strlen( $post_content ) > $length ) {
        $post_content = substr( $post_content, 0, $length ) . '...'; // Add ellipsis if truncated
    }

    return $post_content;
}
