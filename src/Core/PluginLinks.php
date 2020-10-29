<?php

namespace Growise\WPFutter\Core;

use \Growise\WPFutter\Core\Controller;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PluginLinks extends Controller {

    public function register()
    {
        add_filter( "plugin_action_links_$this->name", array($this, 'plugin_links'));
    }

    public function plugin_links( $links )
    {
        $plugin_settings_link = '<a href="admin.php?page=wp-futter">Settings</a>';
        array_push($links, $plugin_settings_link);
        return $links;
    }

}