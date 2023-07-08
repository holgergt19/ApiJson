<?php



use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

return static function (RouteBuilder $routes) {

    $routes->setRouteClass(DashedRoute::class);
    

    $routes->scope('/', function (RouteBuilder $builder) {

        $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
       
        $builder->connect('/cliente', ['controller' => 'Cliente', 'action' => 'index']);
        $builder->connect('/api/cliente', ['controller' => 'Cliente', 'action' => 'index']);
        


        $builder->connect('/pages/*', 'Pages::display');

        

        $builder->connect('/cliente/login', ['controller' => 'Cliente', 'action' => 'login']);

        $builder->fallbacks();
    });
    
   
    
};
