<?php
session_start();
include("cabecera_compartida.php");?>
<title>Gestiona tu comunidad</title>
<link rel ="stylesheet" href ="<?php echo CSS ?>style.css"/>
</head>
<body>
<?php include INCLUDE_VISTA."nav.php"; ?>
<h1>Error de acceso. Vuelve a intentarlo</h1>
<form method="post" action="usuarios/controladores/iniciarSesion.php">
    <input type="text" name="usuario"></input>
    <input type="password" name="contraseña"></input>
    <input type="submit" value="Ingresar">
</form>
<?php include "pie.php" ?>