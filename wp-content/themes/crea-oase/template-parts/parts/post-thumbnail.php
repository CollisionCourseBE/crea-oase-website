<?php
/**
 * Get the post thumbnail URL and alt text.
 *
 * @param int $post_id The post ID. Defaults to the current post if not provided.
 * @return array An associative array containing the 'url' and 'alt' keys.
 */

function get_post_thumbnail_data( $post_id = null) {
    // Use the current post ID if none is provided
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }

    if ( has_post_thumbnail( $post_id ) ) {
        $thumbnail_id = get_post_thumbnail_id( $post_id );
        $thumbnail_url = get_the_post_thumbnail_url( $post_id );
        $thumbnail_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
    } else {
        $thumbnail_url = get_template_directory_uri().'/screenshot.png';
        $thumbnail_alt = 'Thumbnail Crea Oase';
    }

    return array(
        'url' => $thumbnail_url,
        'alt' => $thumbnail_alt
    );
}
