

<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
return static function (RouteBuilder $routes) {

    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder) {

        // Updated route for home page
       

        // Route for the new page
        $builder->connect('/pages', ['controller' => 'Pages', 'action' => 'newPage']);

       
        $builder->connect('/register', ['controller' => 'Users', 'action' => 'register']);

        // Login route
        $builder->connect('/login', ['controller' => 'Users', 'action' => 'login']);
    
        // Logout route
        $builder->connect('/logout', ['controller' => 'Users', 'action' => 'logout']);

        // Fallback route for other pages
        $builder->fallbacks();
    });
};
