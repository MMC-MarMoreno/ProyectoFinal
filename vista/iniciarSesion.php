<?php
include("cabecera_compartida.php");?>
<title>Iniciar sesion</title>
<link rel ="stylesheet" href ="<?php echo CSS ?>style.css"/>
</head>
<body>
<?php include INCLUDE_VISTA."nav.php";?>
<h1>Iniciar sesión</h1>
<form method="post" action="<?php echo CONTROLADORES; ?>controladorUsuario.php">
    <input type="text" name="usuario"></input>
    <input type="password" name="password"></input>
    <input type="submit" name="login" value="Ingresar">
</form>
<?php include "pie.php" ?>