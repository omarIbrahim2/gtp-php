<?php
use Gtp\Src\Request;
use Gtp\Src\Session;
use Gtp\Src\Application;

function url(string $uri):string{
     return $_ENV['APP_URL'] . $uri;
}

function env($key , $default = null){
     return $_ENV[$key] ?? $default;
}

function encrypt(string $value):string{
     $output = false;
     $encrypt_method = "AES-256-CBC";
     $secret_key = 'xxxxxxxxxxxxxxxxxxxxxxxx';
     $secret_iv = 'xxxxxxxxxxxxxxxxxxxxxxxxx';
     // hash
     $key = hash('sha256', $secret_key); 

     $iv = substr(hash('sha256', $secret_iv), 0, 16);

     $output = openssl_encrypt($value, $encrypt_method, $key, 0, $iv);

     $output = base64_encode($output);

     return $output;
}


function decrypt(string $cipher){
     $output = false;
     $encrypt_method = "AES-256-CBC";
     $secret_key = 'xxxxxxxxxxxxxxxxxxxxxxxx';
     $secret_iv = 'xxxxxxxxxxxxxxxxxxxxxxxxx';
     // hash
     $key = hash('sha256', $secret_key); 

     $iv = substr(hash('sha256', $secret_iv), 0, 16);

     $output = openssl_decrypt(base64_decode($cipher), $encrypt_method, $key, 0, $iv);

     return $output;

}


function session(){
  return app()->getSession();     
}

function error($key){
      if (session()->has($key)) {
          # code...
         return "<p class='text-danger'>". session()->get($key) . "</p>";
      }
      return'';
}

function csrf_field(){
      return "<input name='token' type='hidden'  value ='" . app()->getCsrf() . "' />";
}

function app(){
     return  Application::createInstance();
}

function abort($code){
     ob_start();
     include app()->paths()['views'] . '/errors' . '/' . $code . '.php';
     $content = ob_get_contents();
      ob_end_clean(); 

      return $content;

}


function message($type , $key){
       
     if (session()->has($key)) {
          return "<div class='bg bg-" . $type . "'> <p class ='text-white'> ". session()->get($key)  . " </p> </div>";
     }
}

function redirect($location){
    header("location:" . $location);
    exit;
}