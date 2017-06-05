<?php

/**
 * Hooks up actions and filters for the module.
 *
 * @package WordPoints_UserPro
 * @since   1.0.0
 */

if ( wordpoints_component_is_active( 'points' ) ) {
	add_action( 'userpro_after_name_user_list', 'wordpoints_userpro_display_points' );
	add_action( 'userpro_after_profile_img', 'wordpoints_userpro_display_points' );
}

// EOF
