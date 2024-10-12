<?php

namespace Gtp\Main\Controllers;

use Gtp\Src\Request;


abstract class Controller{

    const VIEW_PATH = BASE_PATH . '/views';
    const PUBLIC_PATH = BASE_PATH   . '/public';

    protected Request $request;
    public function __construct(Request $request){
        $this->request = $request;
        
    }
    public function view(string $path){
        ob_start();
         include self::VIEW_PATH . "/layouts/main.php";

         $content = ob_get_contents();
          ob_end_clean(); 

          return $content;
    }


    public static function asset($path){
        
         return $_ENV['APP_URL']  . "/{$path}";
    }
}