<?php

/**
 * Pager.class [ HELPER MVC ]
 * Responsável por executar gerenciar e povoar a view
 * Arquitetura MVC
 * 
 * @copyright (c) 2018, Hudson R. Soares ELITE INFORMÁTICA
 */
class View {

    private static $Data;
    private static $Keys;
    private static $Values;
    private static $Template;

    public static function Load($Template) {
        self::$Template = (string) $Template . '.tpl.html';
        self::$Template = file_get_contents(self::$Template);
    }

    public static function Show(array $Data) {
        self::$Data = $Data;
        self::setKeys($Data);
        self::setValues();
        self::ShowView();
    }

    public static function Request($File, $Data) {
        extract($Data);
        require("{$File}.inc.php");
    }

    //PRIVATE

    private static function setKeys($Data) {
        self::$Keys = explode('&', '#' . implode('#&#', array_keys($Data)) . '#');
    }

    private static function setValues() {
        self::$Values = array_values(self::$Data);
    }

    private static function ShowView() {
        echo str_replace(self::$Keys, self::$Values, self::$Template);
    }

}
