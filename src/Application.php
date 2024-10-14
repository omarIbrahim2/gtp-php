<?php

namespace Gtp\Src;
use Dotenv\Dotenv;
use Gtp\Src\Traits\CsrfToken;


class Application{

   use  CsrfToken;
    public Session $session;

    private static $instance;
    public function __construct(public Request $request){
        $this->session = new Session();
        $this->loadEnv(); 
       $this->settings();       
    }


    public static function  createInstance(){
         
        if (! self::$instance) {
             self::$instance = new self(Request::createFromGlobals());
        }

        return self::$instance;
    }



    private function loadEnv(){
       $env = Dotenv::createImmutable(BASE_PATH);

       $env->load();
    }


    private function settings(){
        $_ENV['APP_DEBUG'] === 'true' ? ini_set('display_errors' , 1) : ini_set('display_errors' , 0) ;
    }


    public function getSession(){

        return $this->session;
    }

    public function paths(){
        return [
            'views' => BASE_PATH . '/views',
        ];
    }


    


    
}