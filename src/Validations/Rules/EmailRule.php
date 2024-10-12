<?php

namespace Gtp\Src\Validations\Rules;


class EmailRule implements Rule{

    public function handle($value , $params=null){
        $value = htmlspecialchars($value);
        trim($value);
        if ( filter_var($value , FILTER_VALIDATE_EMAIL) === false) {
            return false;
        }

        return true;
       

    }


    public function errorMessage(){
          return "Not Valid Email";
    }
}