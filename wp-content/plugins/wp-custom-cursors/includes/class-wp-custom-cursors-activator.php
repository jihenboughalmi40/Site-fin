<?php

/**
 *
 * @link       https://codecanyon.net/user/web_trendy
 * @since      1.0.0
 * @package    Wp_custom_cursors
 * @subpackage Wp_custom_cursors/includes
 * @author     Web_Trendy <webtrendyio@gmail.com>
 */

class Wp_custom_cursors_Activator {

	/**
	 * @since    1.0.0
	 */
	public static function activate() {
		if (current_user_can('manage_options')) {
			
			global $wpdb;
			global $charset_collate;

			$tablename = $wpdb->prefix . "custom_cursors";
			if( $wpdb->get_var("SHOW TABLES LIKE '$tablename'") != $tablename ) { 
				
				require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

				$sql_create_table = "CREATE TABLE `$tablename` (
					cursor_id bigint(20) unsigned NOT NULL auto_increment,
					cursor_type bigint(20) unsigned NOT NULL default '0',
					cursor_shape bigint(20) unsigned NOT NULL default '0',
					cursor_image longtext NULL,
					default_cursor varchar(20) NOT NULL default 'none',
					hover_effect varchar(20) NOT NULL default 'plugin',
					body_activation varchar(20) NOT NULL default 'all',
					element_activation varchar(20) NOT NULL default 'none',
					selector_type varchar(20) NOT NULL default 'tag',
					selector_data varchar(50) NOT NULL default 'body',
					color varchar(20) NOT NULL default 'black',
					width bigint(20) unsigned NOT NULL default '30',
					blending_mode varchar(20) NOT NULL default 'normal',
					PRIMARY KEY  (cursor_id),
					KEY cursor_type (cursor_type)
				    ) $charset_collate; ";
				 
				dbDelta( $sql_create_table );
			}

		}
	}

}
