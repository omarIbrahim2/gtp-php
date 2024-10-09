<?php

namespace Gtp\Src\Validations\Rules;


class EmailRule implements Rule{

    public function handle($value){
        $value = htmlspecialchars($value);
        trim($value);
        if ( filter_var($value , FILTER_VALIDATE_EMAIL) === false) {
            return true;
        }

        return false;
       

    }


    public function errorMessage(){
          return "Not Valid Email";
    }
}