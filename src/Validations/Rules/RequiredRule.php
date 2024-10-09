<?php

namespace Gtp\Src\Validations\Rules;

class RequiredRule implements Rule{


    public function handle($value){
       $value = htmlspecialchars($value);
        trim($value);
        return !empty($value);
    }


    public function errorMessage($name = ''){
        return $name . " field is required";
    }
}