<?php
    @session_start();
    error_reporting(0);
    require_once 'MySQL.php';
    define("PATH", "http://localhost/compiler"); // Url de la página
    define("NAME", "Online Compiler"); // Nombre de la página
    define("DESC", "your best option"); // Descripción de la página
	
    function IsEven($intNumber){
        if($intNumber % 2 == 0){
            return true;
        } else {
            return false;
        } 
    }
	
    function translate($str) {
        $chars = array("letter", "number", "operator", "separator", "error");
        $charsReplace = array("letra", "número", "operador", "separador", "error");
        return(str_replace($chars, $charsReplace, $str));
    }
    ?>