<?php
/**
 * This file contains the WP custom admin notifications/messages.
*/

// admin messages (notice/notifications)
function define_admin_notifications(){
    global $pagenow;
	$screen = get_current_screen();
	$current_screen = $screen->id;
	
	// Echo the current screen for the switch case def.
	// echo $current_screen;
	
	/**
	 * In addition to display a notice, one of the following classes can be added:

	 * notice-error - will display the message with a white background and a red left border.
	 * notice-warning- will display the message with a white background and a yellow/orange left border.
	 * notice-success - will display the message with a white background and a green left border.
	 * notice-info - will display the message with a white background a blue left border.
	
	 * is-dismissible - to add a closing icon to your message. Its behavior, however, applies only on the current screen.
	 *                  It will not prevent a message from re-appearing once the page re-loads, or another page is loaded.
	
	 * switch ($current_screen) {
	 *   case 'example':
	 *      $class = 'notice notice-domain';
	 *      $message = __( 'Preparing for displaying a message', 'admin-notices' );
	 *
	 *      printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
	 *      break;
	 *	
	 *   default:
	 *      none - empty
	 * }
	 */
}
add_action('admin_notices', 'define_admin_notifications');
