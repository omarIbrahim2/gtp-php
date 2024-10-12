<?php

namespace Gtp\Src\Validations;

use Gtp\Src\Request;


class Validator{

    public static array $errors = [];

    private static Request $request;
     public static function make(array $data , array $rules){
          
              foreach ($rules as $key => $value) {
                   if (array_key_exists($key , $data)) {
                       
                         if (is_array($value)) {
                           self::handle($value , $key , $data[$key]);  
                         }
                      
                   }
              }
              return self::class;
     }

     public function errors(){

         return self::$errors;
     }

     public static function fails(){
         return count(self::$errors) > 0;
     } 


     public static function setRequest(Request $request){
        self::$request = $request; 
     }


     public function getRequest(){
        return self::$request;
     }

   
     public static function getClassName($rule){

         return __NAMESPACE__ . '\\' . 'Rules' . '\\' . strtoupper($rule[0]). substr($rule , 1 , strlen($rule) -1)  ."Rule";
     }


     private static function handle($rules , $key , $value){
         $params = null;
        foreach($rules as $rule){
            if (self::checkIfParamsExist($rule)) {
                 $parts = explode( ':',$rule);
                 $params = (int)$parts[1];
                 $rule = $parts[0];
            }

             
            $class =  self::getClassName($rule);
            
            
             if (class_exists($class)) {

                 $ruleObj = new $class();
                
                 if (!  $ruleObj->handle($value , $params)) {
                    
                     self::$errors[$key] = trim($ruleObj->errorMessage($key));
                     break;       
                 }

                
                   
             }
        }     
     }


     private static function checkIfParamsExist($value){
         if (str_contains($value , ':')) {
              return true;

         }

         return false;
     }
    
}