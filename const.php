<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);


#INCLUDES
define ("ROOT",$_SERVER['DOCUMENT_ROOT']."/ProyectoFinal/");
define("CONEXION",ROOT."conexionBBDD/conexion.php");
define("CONTROLADOR",ROOT."controlador/");
define("MODELO",ROOT."modelo/");
define("INCLUDE_VISTA", ROOT."vista/");


#PETICIONES
define("BASEURL", "/ProyectoFinal");
define("VISTAS", BASEURL."/vista/");
define("CSS", BASEURL."/css/");
define("CONTROLADORES", BASEURL."/controlador/");

?>