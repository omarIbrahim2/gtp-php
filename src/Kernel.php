<?php


namespace Gtp\Src;
use FastRoute\Dispatcher;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

class Kernel{
     private $middlewares;
     
     const NOT_FOUND = 0;

     const METHOD_NOT_ALLOWED=2;
     private function getMiddlewares(){
           $config   =  require BASE_PATH . '/src/config/app.php';


         $middlewares = $config['middlewares'];

         return $middlewares;
     }

    public function handle(Application $app){
         
         
        $dispatcher = simpleDispatcher(function(RouteCollector $routeCollector){

            $routes = include BASE_PATH . '/routes/web.php';

            foreach ($routes as $route ) {
                $routeCollector->addRoute(...$route);
            }
           
        });
        
            
        $routeInfo = $dispatcher->dispatch($app->request->method() , $app->request->path());
                    
        [$status , [$controller , $method ] , $vars] = $routeInfo;
     
        if ($status === self::NOT_FOUND || $status === self::METHOD_NOT_ALLOWED) {
            header('location:'.url('/') );
            exit;
        }


        $request = $app->request;
        $next  = function($request) use($controller , $method , $vars){

           return call_user_func_array([new $controller($request) , $method] , $vars);
        };

        
       foreach ($this->getMiddlewares() as  $middleware) {
            $middlewareObj = new $middleware();
           return $middlewareObj->handle($request , $next);
       }
        
        
    }
}