<?php 
 
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$db = "proyectgestioncomunidad"; 
$tabla1 = "usuarios"; 
$tabla2 = "comunidades";
$tabla3 = "presupuestos";
$tabla4 = "movimientos";
$tabla5 = "lineaspresu";

 
$conexion = mysqli_connect($host ,$user, $password,$db) 
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE");

?>