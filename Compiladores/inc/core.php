<?php
    @session_start();
    error_reporting(0);
    require_once 'MySQL.php';
    require_once 'functions.php';
    $function=new functions();
    define("PATH", "http://localhost/Compiladores"); // Url de la página
    define("NAME", "MyFirstCompiler"); // Nombre de la página
?>