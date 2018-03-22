<?php

/**
 * Upload.class [ HELPER MVC ]
 * Reponsável por executar gerenciar e povoar a view
 * Arquitetura MVC
 * 
 * @copyright (c) 2018, Hudson R. Soares ELITE INFORMÁTICA
 */
class View{
    
    private static $Data;
    private static $Keys;
    private static $Values;
    private static $Template;
    
    public static function Load($Data){
        self::$Data = String($Data);
        self::$Data = file_get_contents(self::$Data);
        
        var_dump(self::$Data);
    }
    
//    public static function Show(array $Data){
//        
//    }
//    
//    public static function Request($File, $Data){
//        
//    }
//    
//    //PRIVATE
//    
//    public static function setKeys($Data){
//        
//    }
//    
//    public static function setValues(){
//        
//    }
    

}
