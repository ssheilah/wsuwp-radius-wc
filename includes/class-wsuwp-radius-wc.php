<?php

class WSUWP_Radius_WC {
	/**
	 * @var WSUWP_Radius_WC
	 */
	private static $instance;

	/**
	 * Maintain and return the one instance. Initiate hooks when
	 * called the first time.
	 *
	 * @since 0.0.1
	 *
	 * @return \WSUWP_Radius_WC
	 */
	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new WSUWP_Radius_WC();
			self::$instance->setup_hooks();
		}
		return self::$instance;
	}

	/**
	 * Setup hooks to include.
	 *
	 * @since 0.0.1
	 */
	public function setup_hooks() {
		add_shortcode( 'radius-wc', 'radius_wc_shortcode' );
		add_action( 'wp_enqueue_scripts', array( $this, 'wsuf_radius_wc_enqueue_scripts' ), 99 );
		// [radius-wc]
		function radius_wc_shortcode( $atts ) {
			$a = shortcode_atts( array(
				'url' => 'https://wsu.edu',
			), $atts );
			return "<link rel='import' href='{$a['url']}' onload='onImportReady()'>";
		}
	}

	/* Enqueues JavaScript and CSS files */

	function wsuf_radius_wc_enqueue_scripts() {
		wp_enqueue_script( 'detect', plugins_url( '../js/detect.js', __FILE__ ), true );
		wp_enqueue_script( 'wsuf_launcher', plugins_url( '../js/launcher.js', __FILE__ ), true );
	}
}
