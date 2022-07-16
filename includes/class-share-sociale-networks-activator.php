<?php

/**
 * Fired during plugin activation
 *
 * @link       https://www.almisbah.ma/
 * @since      1.0.0
 *
 * @package    Share_Sociale_Networks
 * @subpackage Share_Sociale_Networks/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Share_Sociale_Networks
 * @subpackage Share_Sociale_Networks/includes
 * @author     Amine Misbah <xamine.misbahx@gmail.com>
 */
class Share_Sociale_Networks_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		global $wpdb;
		$charset_collate = $wpdb->get_charset_collate();
		$table_name = $wpdb->prefix . SHARE_SOCIALE_NETWORKS_TABLE_NAME;

		$sql = "CREATE TABLE $table_name (
			id BIGINT( 20 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
			name TEXT NULL,
			status bool NULL
		) $charset_collate;";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
		

		

		$sqlInsertData = "INSERT INTO `" . $table_name . "` (`name`, `status`)VALUES ";
		$socials = array(
			"('facebook', TRUE),",
			"('linkedin', TRUE),",
			"('pinterest', TRUE),",
			"('reddit', TRUE),",
			"('telegram', TRUE),",
			"('tumblr', TRUE),",
			"('twitter', TRUE),",
			// "('viber', TRUE),",
			"('vk', TRUE);",
			// "('whatsapp', TRUE);",
		);

		foreach ($socials as $key => $value) {
			$sqlInsertData.=$value;
		}

		$wpdb->query(
				$sqlInsertData
		);

	}
}
