<?php
use Gtp\Src\Validations\Rules\Rule;


class PhoneRule implements Rule{


    public function handle($value){
        $value = htmlspecialchars($value);
        trim($value);
        return preg_match("/^(\+|00)[1-9]([0-9\s\-\+\(\)]*)$/" , $value);
    }


    public function errorMessage($name = ''){
        return "invalid phone";
    }
}