<?php

namespace Growise\WPFutter\Core;

class Controller {

    protected $path;
    protected $url;
    protected $name;

    public function __construct() 
    {
        $this->path = plugin_dir_path( dirname( __FILE__, 2 ) );
        $this->url = plugin_dir_url( dirname( __FILE__, 2 ) );
        $this->name = plugin_basename( dirname( __FILE__, 3 ) ) . '/wp-futter.php';
    }

}