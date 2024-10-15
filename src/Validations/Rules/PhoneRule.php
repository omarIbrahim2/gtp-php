<?php
namespace Gtp\Src\Validations\Rules;
use Gtp\Src\Validations\Rules\Rule;


class PhoneRule extends AbstractRule{


    public function handle($value , $params=null){
        $value = $this->preValidations($value);
        if ($this->nullable && empty($value)) {
            return true;
        }
         $pattern = '/^\+?[0-9]+$/';
        if ( preg_match($pattern , $value) && strlen($value) >= 11) {
            return true;
        } 
        
            return false;
      
    }


    public function errorMessage($name = ''){
        return "invalid phone";
    }
}