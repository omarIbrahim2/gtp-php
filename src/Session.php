<?php

namespace Gtp\Src;


class Session{

     const SESSION_SAVE_PATH = BASE_PATH ."/storage/Sessions";

     const TTL = 30;

     private $sessionStartTime;
    public function __construct(){
      $this->iniSet();
      session_set_cookie_params(env('SESSION_LIFE_TIME') , '/' , env('APP_URL') , false , true);
    }

    public function start(){
        if (session_status() === PHP_SESSION_NONE) {
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

    public function put(string $key , string $value){
        if (! is_null($value)) {
              
             $_SESSION[$key] = encrypt($value);
        }

        return isset($_SESSION[$key]) ? decrypt($_SESSION[$key]) : "";
    }


    public function has(string $key){

        return isset($_SESSION[$key]);
    }

    public function flash(string $key , string $value){
        if (! is_null($value)) {       
            $_SESSION[$key] = encrypt($value);
       }

       $session =  isset($_SESSION[$key]) ? decrypt($_SESSION[$key]) : "";
        
       $this->forget($key);

       return $session;

         
    }

    public function forget(string $key){
        if (isset($_SESSION[$key])) {
             unset($_SESSION[$key]);
        }
    }


    private function iniSet(){
        ini_set('session.use_cookies' , true);
        ini_set('session.use_only_coookies' , true);
        ini_set('session.use_trans_sid', false);
        ini_set('session.save_handler' , env("SESSION_DRIVER"));
        session_save_path(self::SESSION_SAVE_PATH);
     }
}