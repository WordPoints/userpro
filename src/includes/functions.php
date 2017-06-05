<?php

/**
 * The module's main functions.
 *
 * @package WordPoints_UserPro
 * @since   1.0.0
 */

/**
 * Displays a user's points of each type.
 *
 * @since 1.0.0
 *
 * @WordPress\action userpro_after_name_user_list
 * @WordPress\action userpro_after_profile_img
 *
 * @param int $user_id The user ID.
 */
function wordpoints_userpro_display_points( $user_id ) {

	echo '<div class="wordpoints-userpro-user-points" style="margin-top: 10px;">';

	foreach ( wordpoints_get_points_types() as $points_type => $data ) {

		echo esc_html( $data['name'] . ': ' );

		wordpoints_display_points( $user_id, $points_type, 'userpro_profile' );

		echo ' ';
	}

	echo '</div>';
}

// EOF
