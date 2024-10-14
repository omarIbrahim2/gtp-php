<?php

namespace GTP\Src\Validations\Rules;


class StringRule implements Rule{

    public function handle($value , $params=null){
        $value = htmlspecialchars($value);
        trim($value);
        return is_string($value);
    }



    public function errorMessage($name = ''){
        return $name . " field must be a string";
    }
}