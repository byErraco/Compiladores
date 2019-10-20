<?php
	$MySQLusername = "root";
	$MySQLpassword = "";
	$MySQLhostname = "localhost";
	$MySQLdb = "mfc";
	$conexion = mysqli_connect( $MySQLhostname, $MySQLusername, $MySQLpassword ) or die ("No se ha podido conectar al servidor de Base de datos");
	$conexion->set_charset("utf-8"); 
	$utf = $conexion->query("SET NAMES 'utf8'");
	$db = mysqli_select_db( $conexion, $MySQLdb ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
?>
