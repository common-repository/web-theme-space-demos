<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.wpbusinessthemes.com/
 * @since      1.0.0
 *
 * @package    WEB Theme Space
 * @subpackage TSP_DEMOS_Setup
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    WEB Theme Space
 * @subpackage TSP_DEMOS_Setup
 * @author     WEB Theme Space <info@wpbusinessthemes.com>
 */
class TSP_DEMOS_Setup_i18n {

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'tsp-demos',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}
}