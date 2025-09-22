<?php
/**
 * Calculate reading time for a post (translatable)
 *
 * @param int|null $post_id  The post ID (defaults to current post in The Loop)
 * @return string            Reading time text
 */
function get_reading_time( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }

    // Get content and strip tags/shortcodes
    $content    = get_post_field( 'post_content', $post_id );
    $word_count = str_word_count( wp_strip_all_tags( strip_shortcodes( $content ) ) );

    // Average reading speed: 200 words per minute
    $words_per_minute = 150;
    $minutes = ceil( $word_count / $words_per_minute );

    if ( $minutes <= 1 ) {
        // Translators: %d is the number of minutes (always 1 here)
        return sprintf( __( 'Reading time: %d minute', 'txtd-crea-oase' ), 1 );
    } else {
        // Translators: %d is the number of minutes
        return sprintf( __( 'Reading time: %d minutes', 'txtd-crea-oase' ), $minutes );
    }
}
