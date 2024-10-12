<?php

namespace Gtp\Src\Validations\Rules;


class MaxRule implements Rule{

    public function handle($value , $params=null){
        return strlen($value) <= $params;
    }


    public function errorMessage($name = ''){
        return $name . " exceeds size ";
    }
}