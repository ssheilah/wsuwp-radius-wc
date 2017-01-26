<?php
/*
Plugin Name: WSUWP Radius WC
Version: 0.0.1
Description: A WordPress plugin to embed a radius form using web components
Author: washingtonstateuniversity, ssheilah
Author URI: https://web.wsu.edu/
Plugin URI: https://github.com/ssheilah/wsuwp-radius-wc
Text Domain: [Plugin Text Domain]
Domain Path: /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// The core plugin class.
require dirname( __FILE__ ) . '/includes/class-wsuwp-radius-wc.php';

add_action( 'after_setup_theme', 'WSUWP_Radius_WC' );
/**
 * Start things up.
 *
 * @return \WSUWP_Radius_WC
 */
function WSUWP_Radius_WC() {
	return WSUWP_Radius_WC::get_instance();
}
