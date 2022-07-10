<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://www.almisbah.ma/
 * @since      1.0.0
 *
 * @package    Share_Sociale_Networks
 * @subpackage Share_Sociale_Networks/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Share_Sociale_Networks
 * @subpackage Share_Sociale_Networks/includes
 * @author     Amine Misbah <xamine.misbahx@gmail.com>
 */
class Share_Sociale_Networks_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		global $wpdb;
		$table_name = $wpdb->prefix . AMI_TABLE_NAME;
		$sql = "DROP TABLE IF EXISTS $table_name";
		$wpdb->query($sql);
	}

}
