<?php include "cabecera.php" ?>

<h1>Error de acceso. Vuelve a intentarlo</h1>
<form method="post" action="usuarios/controladores/iniciarSesion.php">
    <input type="text" name="usuario"></input>
    <input type="password" name="contraseña"></input>
    <input type="submit" value="Ingresar">
</form>

<?php include "pie.php" ?>