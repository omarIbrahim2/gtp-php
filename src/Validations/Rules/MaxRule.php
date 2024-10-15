<?php

namespace Gtp\Src\Validations\Rules;


class MaxRule extends AbstractRule{
      
    public function handle($value , $params=null){
        $value = $this->preValidations($value);
        if ($this->nullable && empty($value)) {
            return true;
        }
        return strlen($value) <= $params;
    }


    public function errorMessage($name = ''){
        return $name . " exceeds size ";
    }
}