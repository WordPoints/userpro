<?php

/**
 * Hooks up actions and filters for the module.
 *
 * @package WordPoints_UserPro
 * @since   1.0.0
 */

if ( wordpoints_component_is_active( 'points' ) ) {
	add_action( 'init', 'wordpoints_userpro_register_scripts' );
	add_action( 'userpro_after_name_user_list', 'wordpoints_userpro_display_points' );
	add_action( 'userpro_after_profile_img', 'wordpoints_userpro_display_points' );
	add_filter( 'wordpoints_points_top_users_username', 'wordpoints_userpro_profile_link_filter', 10, 2 );
	add_filter( 'wordpoints_points_logs_table_username', 'wordpoints_userpro_profile_link_filter', 10, 2 );
}

// EOF
