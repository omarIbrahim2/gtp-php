<?php

namespace Gtp\Src;


class Request{
    
    public function __construct(public readonly array $getParams , public readonly array $postParams , public readonly array $server ){}

    public static function createFromGlobals(){
         return new static($_GET , $_POST , $_SERVER);
    }


    private function isPostMethod(){
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
}
