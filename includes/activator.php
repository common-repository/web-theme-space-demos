<?php

/**
 * Fired during plugin activation
 *
 * @link       https://www.wpbusinessthemes.com/
 * @since      1.0.0
 * @package    WEB Theme Space
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    WEB Theme Space
 * @subpackage TSP_DEMOS_Setup
 * @author     WEB Theme Space <info@wpbusinessthemes.com>
 */
class TSP_DEMOS_Setup_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
        update_option( '__tsp_demos_setup_do_redirect', true );
	}
}