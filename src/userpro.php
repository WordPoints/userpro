<?php

/**
 * Main file of the extension.
 *
 * ---------------------------------------------------------------------------------|
 * Copyright 2017  J.D. Grimes  (email : jdg@codesymphony.co)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or later, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * ---------------------------------------------------------------------------------|
 *
 * @package WordPoints_UserPro
 * @version 1.1.3
 * @author  J.D. Grimes <jdg@codesymphony.co>
 * @license GPLv2+
 */

wordpoints_register_extension(
	'
		Extension Name: UserPro
		Author:         J.D. Grimes
		Author URI:     https://wordpoints.org/
		Extension URI:  https://wordpoints.org/extensions/userpro/
		Version:        1.1.3
		License:        GPLv2+
		Description:    Integrates with the UserPro plugin.
		Text Domain:    wordpoints-userpro
		Domain Path:    /languages
		Server:         wordpoints.org
		ID:             1153
		Namespace:      UserPro
	'
	, __FILE__
);

/**
 * The extension's main functions.
 *
 * @since 1.0.0
 */
require_once dirname( __FILE__ ) . '/includes/functions.php';

/**
 * Hooks up the extension's actions and filters.
 *
 * @since 1.0.0
 */
require_once dirname( __FILE__ ) . '/includes/actions.php';

// EOF
