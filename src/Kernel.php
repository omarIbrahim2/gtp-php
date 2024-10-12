<?php


namespace Gtp\Src;
use FastRoute\Dispatcher;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

class Kernel{


    public function handle(Application $app):Response{

        
         
        $dispatcher = simpleDispatcher(function(RouteCollector $routeCollector){

            $routes = include BASE_PATH . '/routes/web.php';

            foreach ($routes as $route ) {
                $routeCollector->addRoute(...$route);
            }
           
        });
        
            
        $routeInfo = $dispatcher->dispatch($app->request->method() , $app->request->path());
                    
        [$status , [$controller , $method ] , $vars] = $routeInfo;

        return call_user_func_array([new $controller($app->request) , $method] , $vars);
         
        

        
    }
}