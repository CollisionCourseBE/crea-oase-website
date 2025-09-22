<?php
/**
 * Modify the archive title displayed on various archive pages.
 */
add_filter( 'get_the_archive_title', function ($title) {

	if ( is_404() ) {
		$title = __('Nothing Found!', 'txtd-crea-oase');
	}
	elseif ( is_home() ) {
		$title = get_the_title( get_option('page_for_posts', true) );
	}
	elseif ( is_search() ) {
		global $wp_query;
		$search_results = $wp_query->found_posts;

		if ($search_results != 0) {
			$title = sprintf( _n( '%d results found', '%d results were found', $search_results, 'txtd-crea-oase' ), $search_results );
		}
		else {
			$title = __( 'No results found', 'txtd-crea-oase' );
		}
	}
	elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	}
	elseif ( is_archive() ) {
		if ( is_category() ) {
			$title = single_cat_title( '', false );
		}
		elseif ( is_tax() || is_tag() ) {
			$title = single_term_title( '', false );
			if ( is_tag() ) {
				$title = __( 'Tag', 'txtd-crea-oase' ) . ': ' . $title;
			}
		}
		elseif ( is_author() ) {
			$title = '<span class="vcard">' . get_the_author() . '</span>';
		}
		else {
			$title = __( 'Archive', 'txtd-crea-oase' ) . ' - ' . single_term_title( '', false );
		}
	}
	else {
		$title = get_the_title();
	}

	return $title;

});
