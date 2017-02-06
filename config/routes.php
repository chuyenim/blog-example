<?php


use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


Router::defaultRouteClass('Route');
Router::scope (
    '/articles',
    ['controller'=>'Articles'],
    function($routes){
        $routes->connect('/tags/*',['action'=>'tags']);
    }
    );
Router::scope('/',function($routes){
    $routes->fallbacks('InflectedRoute');
});
// Router::scope('/', function (RouteBuilder $routes) {
    
//     // $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

//     // $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'index']);

//     $routes->fallbacks(DashedRoute::class);
// });

Plugin::routes();
