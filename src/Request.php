<?php

namespace Gtp\Src;
use Gtp\Src\Exceptions\ValidationException;
use Gtp\Src\Validations\Validator;


class Request{
     
     private $app;
    public function __construct(public readonly array $getParams , public readonly array $postParams , public readonly array $server){
      
      
    }

    public static function createFromGlobals(){
        
         return new static($_GET , $_POST , $_SERVER);
    }


    public function isPostMethod(){
      return $this->method() === 'POST';
    }


    public function method():string{
         return strtoupper($this->server['REQUEST_METHOD']);
    }

    public function path():string{
       return strtok($this->server['REQUEST_URI'] , '?');
        
    }


    public function __set($name, $value){
        if ($this->isPostMethod()) {
             if (isset($this->postParams[$name])) {
                 $this->$name = $value;
             }
        }
    }

    public function __get($name){
          if ($this->isPostMethod() && isset($this->postParams[$name])) {
               return $this->postParams[$name];
          }
    }


    public function data(){
       if ($this->isPostMethod()) {
            return $this->postParams;
       }
    }

    public function has($key){
       return isset($this->postParams[$key]) || isset($this->getParams[$key]);

    }


    public function validate(array $rules){

     Validator::setRequest($this);

     $validator = Validator::make($this->data() , $rules);

       if ($validator::fails()) {
             
          foreach ($validator::$errors as $key => $value) {
               session()->flash($key , $value);

          }
       
          header("location:" . $this->referer());
          exit;
       }
       

       return $this->data();
    }

     public function referer(){
        return $this->server['HTTP_REFERER'];  
     }
   

     public function getApplication (){
          return $this->app = Application::createInstance();
     } 
}
