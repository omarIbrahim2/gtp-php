<?php
namespace Gtp\Src\Validations\Rules;
use Gtp\Src\Validations\Rules\Rule;


class PhoneRule implements Rule{


    public function handle($value , $params=null){
        $value = htmlspecialchars($value);
         trim($value);
         $pattern = '/^\+?[0-9]+$/';
        if (preg_match($pattern , $value) && strlen($value) >= 11) {
            return true;
        } 

        return false;
    }


    public function errorMessage($name = ''){
        return "invalid phone";
    }
}