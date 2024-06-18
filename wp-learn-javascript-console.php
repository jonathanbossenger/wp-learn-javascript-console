<?php
/**
 * Plugin Name: WP Learn JavaScript Console
 * Description: Learn how to use the JavaScript console in WordPress.
 * Version: 1.0
 */
add_action('wp_enqueue_scripts', 'wp_learn_javascript_console' );
function wp_learn_javascript_console() {
	wp_enqueue_script(
		'wp-learn-javascript-console',
		plugin_dir_url( __FILE__ ) . 'wp-learn-javascript-console.js',
		array(),
		'1.0',
		true
	);
}