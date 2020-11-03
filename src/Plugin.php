<?php

namespace Growise\WPFutter;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

final class Plugin {

    public static function services()
    {
        return [
            Core\Enqueues::class,
            Core\Shortcode::class,
            Core\PluginLinks::class,
            Admin\Menu::class,
            Admin\Page::class,
        ];
    }

    public static function init()
    {
        foreach ( self::services() as $class ) {
            new $class;
        }
    }

}

