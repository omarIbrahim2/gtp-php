<?php

namespace Gtp\Src;


class Request{
    
    public function __construct(public readonly array $getParams , public readonly array $postParams , public readonly array $server ){}

    public static function createFromGlobals(){
         return new static($_GET , $_POST , $_SERVER);
    }


    public function method():string{
         return $this->server['REQUEST_METHOD'];
    }

    public function path():string{
       return strtok($this->server['REQUEST_URI'] , '?');
        
    }
}
