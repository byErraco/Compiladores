<?php
	$MySQLusername = "root";
	$MySQLpassword = "";
	$MySQLhostname = "localhost";
	$MySQLdb = "compiler";
	$conexion = mysqli_connect( $MySQLhostname, $MySQLusername, $MySQLpassword ) or die ("No se ha podido conectar al servidor de Base de datos");
	$utf = $conexion->query("SET NAMES 'utf8'");
	$db = mysqli_select_db( $conexion, $MySQLdb ) or die ( "Error! no se ha encontrado la base de datos" );
?>
