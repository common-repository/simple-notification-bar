<?php
/**
 * Plugin Name: Simple Notification Bar
 * Plugin URI: https://github.com/sozgat/simpleNotificationBar/releases/tag/v1.0.0
 * Description: Create Notification Bar for Header and Footer
 * Author: Parlak Soft
 * Author URI: https://parlaksoft.com
 * Version: 1.0.4
 * Text Domain: Parlak Soft Wordpress
 * WC requires at least: 4.7
 * WC tested up to: 5.6.0
 */

require_once('public/simple-notification-bar.php' );
add_action( 'plugins_loaded', array( 'Simple_Notification_Bar_PS', 'get_instance' ) );

if (is_admin()) {

    require_once( 'admin/simple-notification-bar-admin.php' );
    add_action( 'plugins_loaded', array( 'Simple_Notification_Bar_Admin_PS', 'get_instance' ) );

}
