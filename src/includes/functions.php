<?php

/**
 * The module's main functions.
 *
 * @package WordPoints_UserPro
 * @since   1.0.0
 */

/**
 * Registers the module's scripts and styles.
 *
 * @since 1.1.0
 */
function wordpoints_userpro_register_scripts() {

	wp_register_style(
		'wordpoints-userpro-profile'
		, wordpoints_modules_url( '/assets/css/profile.css', dirname( __FILE__ ) )
	);
}

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

	wp_enqueue_style( 'wordpoints-userpro-profile' );

	echo '<div class="wordpoints-userpro-user-points">';

	foreach ( wordpoints_get_points_types() as $points_type => $data ) {

		echo '<span>';

		echo esc_html( $data['name'] . ': ' );

		wordpoints_display_points( $user_id, $points_type, 'userpro_profile' );

		echo '</span>';

		echo ' ';
	}

	echo '</div>';
}

// EOF
