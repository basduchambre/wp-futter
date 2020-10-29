<?php

/**
 * Plugin Name: WP Futter
 * Description: Instagram feed for WP created in VueJS
 * Version: 0.0.3
 * License: GPL2+
 * Author: Bas du Chambre & Maurits Meester
 * Author URI: https://growise.pro
 */

defined ( 'ABSPATH' ) or die;

require __DIR__ . '/vendor/autoload.php';

define('PLUGIN_PATH', plugin_dir_path( __FILE__ ));
define('PLUGIN_URL', plugin_dir_url( __FILE__ ));
define('PLUGIN', plugin_basename( __FILE__ ));

if ( class_exists( 'Growise\\WPFutter\Plugin' ) ) {
    Growise\WPFutter\Plugin::services();
    register_activation_hook( __FILE__ , array( 'Growise\WPFutter\Core\Activate', 'activate' ) );
    register_deactivation_hook( __FILE__ , array( 'Growise\WPFutter\Core\Deactivate', 'deactivate' ) );
}