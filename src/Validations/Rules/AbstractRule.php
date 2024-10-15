<?php

namespace  Gtp\Src\Validations\Rules;


abstract class AbstractRule implements Rule{
       
    protected $nullable = false;
    protected function preValidations($value){
        $value = htmlspecialchars($value);
        $value = trim($value);
        return $value;
    }
    abstract  public function handle($value, $params = null); 

    public function setNullalble(){
        $this->nullable = true;
    }
}