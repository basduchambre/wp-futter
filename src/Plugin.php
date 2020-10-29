<?php

namespace Growise\WPFutter;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

final class Plugin {

    public static function services_list()
    {
        return [
            Core\Enqueues::class,
            Core\Shortcode::class,
            Core\PluginLinks::class,
            Admin\Menu::class,
            Admin\Page::class,
        ];
    }

    public static function services()
    {
        foreach ( self::services_list() as $class ) {
            $service = self::instantiate( $class );
            if ( method_exists( $service, 'register' ) ) {
                $service->register();
            }
        }
    }

    private static function instantiate( $class )
    {
        return new $class;
    }

}

