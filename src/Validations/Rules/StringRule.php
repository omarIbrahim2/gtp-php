<?php

namespace Gtp\Src\Validations\Rules;


class StringRule extends AbstractRule{

    public function handle($value , $params=null){
        $value = $this->preValidations($value);
        if ($this->nullable && empty($value)) {
            return true;
        }
        return is_string($value);
    }



    public function errorMessage($name = ''){
        return $name . " field must be a string";
    }
}