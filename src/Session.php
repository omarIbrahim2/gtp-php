<?php

namespace Gtp\Src;

use Dotenv\Dotenv;


class Session{


     const TTL = 30;

     private $sessionStartTime;

     const FLASH_PREFIX = 'flash_';


    public function __construct(){
      session_set_cookie_params(env('SESSION_LIFE_TIME') , '/' , env('APP_URL') , false , true);
      $this->start();
      
    }

    public function start(){
        if (session_status() === PHP_SESSION_NONE) {
            $this->iniSet();
            if (session_start()) {
                $this->setSessionStartTime();
                $this->checkSessionVadility();
            }
        }
     
    }


    private function checkSessionVadility(){
        if ((time() - $this->sessionStartTime ) > (self::TTL * 60)) {        
             $this->renewSession();
        }
    }


    private function setSessionStartTime(){
        if (! isset($this->sessionStartTime)) {
            $this->sessionStartTime = time();
        }

        return true;
    }


    private function renewSession(){
        $this->sessionStartTime = time();
        session_regenerate_id(true);
    }

    public function put(string $key , string|array $value){
        if (is_null($value)) {
            return;
        }

    
        if (is_array($value)) {
              foreach($value as $key => $val){
                  if (isset($_SESSION[$key])) {
                     $_SESSION[$key] = encrypt($_SESSION[$key]);
                  }
              }
        }else{
            
            $_SESSION[$key] = encrypt($value);
        }

    }


    public function has(string $key){
           
       
        return isset($_SESSION[$key]) || isset($_SESSION[self::FLASH_PREFIX . $key])  ;
    }

    public function flash(string $key , $value){
         
         if (is_null($key)) {
              return;
         }
         $key = self::FLASH_PREFIX.$key;
         $_SESSION[$key] = encrypt($value);
    }

    

    public function forget(string $key){
         
        if (isset($_SESSION[$key])) {
             unset($_SESSION[$key]);
        }
    }

    public function get($key){
         
         if (isset($_SESSION[self::FLASH_PREFIX.$key])) {
              $value = decrypt($_SESSION[self::FLASH_PREFIX.$key]);
              $this->forget(self::FLASH_PREFIX.$key);
              return $value;
         }
             
        return isset($_SESSION[$key]) ? decrypt($_SESSION[$key]) : '';
    }


    private function iniSet(){
        ini_set('session.use_cookies' , true);
        ini_set('session.use_only_coookies' , true);
        ini_set('session.use_trans_sid', false);
        ini_set('session.save_handler' , 'files');
     }
}