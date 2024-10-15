<?php

namespace Gtp\Src\Validations\Rules;

class RequiredRule extends AbstractRule{


    public function handle($value , $params=null){

        $value = $this->preValidations($value);
        return !empty($value);
    }


    public function errorMessage($name = ''){
        return $name . " field is required";
    }
}