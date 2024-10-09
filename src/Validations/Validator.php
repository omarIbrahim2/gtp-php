<?php

namespace Gtp\Src\Validations;


class Validator{

    public static array $errors = [];
     public static function make(array $data , array $rules){
          
              foreach ($rules as $key => $value) {
                   if (array_key_exists($key , $data)) {
                       
                         if (is_array($value)) {
                           self::handle($value , $key , $data[$key]);  
                         }
                      
                   }
              }
     }

   
     public static function getClassName($rule){

         return __NAMESPACE__ . '\\' . 'Rules' . '\\' . strtoupper($rule[0]). substr($rule , 1 , strlen($rule) -1)  ."Rule";
     }


     private static function handle($rules , $key , $value){

        foreach($rules as $rule){
            $class =  self::getClassName($rule);
             if (class_exists($class)) {
                   
                 $ruleObj = new $class();
                 if (!  $ruleObj->handle($value)) {
                      
                     self::$errors[$key] = trim($ruleObj->errorMessage($key));
                     break;       
                 }
                
                   
             }
        }     
     }
    
}