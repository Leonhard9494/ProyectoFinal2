<?php
$server="mysql.hostinger.mx";
$usuario="u586952491_servi";
$password="leonhard9494";
$baseDatos="u586952491_cserv";

/*$server="localhost";
$usuario="root";
$password="";
$baseDatos="movilesbd";*/

$conexion=mysqli_connect($server, $usuario, $password, $baseDatos) or die("Error al conectarse al servidor de base de datos".mysqli_error());
//mysqli_select_db($baseDatos,$conexion);
//mysql_select_db($baseDatos,$conexion);
?>