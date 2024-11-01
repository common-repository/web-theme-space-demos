<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://www.wpbusinessthemes.com/
 * @since      1.0.0
 *
 * @package    WEB Theme Space
 * @subpackage TSP_DEMOS_Setup
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    WEB Theme Space
 * @subpackage TSP_DEMOS_Setup
 * @author     WEB Theme Space <info@wpbusinessthemes.com>
 */
class TSP_DEMOS_Setup_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
        update_option( '__tsp_demos_setup_do_redirect', false );
    }
}