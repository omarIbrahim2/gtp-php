<?php

namespace Gtp\Src;
use Dotenv\Dotenv;


class Application{

    public function __construct(public Request $request){
       $this->loadEnv();
       $this->settings();
        
    }



    private function loadEnv(){
       $env = Dotenv::createImmutable(BASE_PATH);

       $env->load();
    }


    private function settings(){
        $_ENV['APP_DEBUG'] === 'true' ? ini_set('display_errors' , 1) : ini_set('display_errors' , 0) ;
    }


    


    
}