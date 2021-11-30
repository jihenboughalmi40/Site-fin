<?php

/**
 *
 * @link              https://codecanyon.net/user/web_trendy
 * @since             1.0.0
 * @package           Wp_custom_cursors
 *
 * @wordpress-plugin
 * Plugin Name:       WP Custom Cursors
 * Plugin URI:        https://codecanyon.net/item/wp-custom-cursors/24442004
 * Description:       Replace the default cursor with creative ones.
 * Version:           2.2.3
 * Author:            Web_Trendy
 * Author URI:        https://codecanyon.net/user/web_trendy/portfolio
 * Text Domain:       wp_custom_cursors
 * Domain Path:       /languages
 */


if ( ! defined( 'WPINC' ) ) {
	wp_die();
}


define( 'WP_CUSTOM_CURSORS_VERSION', '2.2.3' );


function wp_custom_cursors_activate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-custom-cursors-activator.php';
	Wp_custom_cursors_Activator::activate();
}

function wp_custom_cursors_deactivate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-custom-cursors-deactivator.php';
	Wp_custom_cursors_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'wp_custom_cursors_activate' );
register_deactivation_hook( __FILE__, 'wp_custom_cursors_deactivate' );

require plugin_dir_path( __FILE__ ) . 'includes/class-wp-custom-cursors.php';

/**
 *
 * @since    1.0.0
 */
function wp_custom_cursors_run() {
	$plugin = new Wp_custom_cursors();
	$plugin->run();
}

wp_custom_cursors_run();
