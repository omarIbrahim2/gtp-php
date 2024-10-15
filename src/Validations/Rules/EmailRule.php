<?php

namespace Gtp\Src\Validations\Rules;


class EmailRule extends AbstractRule{

    public function handle($value , $params=null){
        $value = $this->preValidations($value);
        if ($this->nullable && empty($value)) {
            return true;
        }
         
        if ( filter_var($value , FILTER_VALIDATE_EMAIL) === false) {
            return false;
        }

        return true;
       

    }


    public function errorMessage(){
          return "Not Valid Email";
    }
}