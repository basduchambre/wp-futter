<?php
/**
 * Plugin Name: WP Futter (Instagram feed)
 * Description: Instagram feed for WP created in VueJS
 * Version: 1.15
 * License: GPL2+
 * Author: Growise <bas@growise.pro>
 * Author URI: https://growise.pro
 */

defined ( 'ABSPATH' ) or die;

require __DIR__ . '/vendor/autoload.php';

if ( class_exists( 'Growise\\WPFutter\Plugin' ) ) {
    Growise\WPFutter\Plugin::init();
    register_activation_hook( __FILE__ , array( 'Growise\WPFutter\Core\Activate', 'activate' ) );
    register_deactivation_hook( __FILE__ , array( 'Growise\WPFutter\Core\Deactivate', 'deactivate' ) );
}