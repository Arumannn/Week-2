<?php

namespace App\Controllers;

class Debug extends BaseController
{
    public function index()
    {
        $routes = service('routes');
        echo "<h3>Available Routes:</h3>";
        echo "<pre>";
        print_r($routes->getRoutes());
        echo "</pre>";
        
        echo "<h3>Current Request:</h3>";
        echo "URI: " . service('request')->getUri() . "<br>";
        echo "Segments: ";
        print_r(service('uri')->getSegments());
    }
}