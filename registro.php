<?php
include $_SERVER['DOCUMENT_ROOT']."ProyectoFinal/const.php";
session_start();
if (isset($_SESSION['usuario'])){
    header("location: ".VISTAS."principalRegistro.php");
}

include 'vista/cabecera.php';

?>

    <h1>Login</h1>
    <div class="accede" >
        <form method="POST" action="controlador/controladorUsuario.php">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario">
        <label for="password">Contraseña</label>
        <input type="password"name="password">
        <div>
            <button type="submit" name="login" class="botonAlta">Accede</button>
        </div>

    </form>
    </div>




    <div> 
    <h1>Registre su comunidad de vecinos</h1>
</div>    

<form class="registro" action="controlador/controladorUsuario.php" method="POST">
    <div class="form-group">
        <label for="calle">Calle/Avda/Plaza...</label>
        <input type="text" class="form-control" id="inputcalle" placeholder="Plaza Manuel R.">
    </div>

    <div class="form-group">
        <label for="numero">Número</label>
        <input type="number" class="form-control" id="inputnumero" placeholder="Indique el número">
    </div>

    <div class="form-group">
        <label for="poblacion">Población</label>
        <input type="number" class="form-control" id="inputpoblacion" placeholder="Indique Población">
    </div>

    <div class="form-group">
        <label for="ciudad">Ciudad</label>
        <input type="text" class="form-control" id="inputciudad" placeholder="Indique Ciudad">
    </div>

    <div class="form-group">
        <label for="codigoPostal">Código Postal</label>
        <input type="number" class="form-control" id="inputcodigoPostal" placeholder="Indique Código Postal">
    </div>

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="inputnombre" placeholder="Nombre Gestor Comunidad">
    </div>
    
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="inputemail" placeholder="Email">
    </div> 
    
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="password">Contraseña</label>
          <input type="password" class="form-control" id="inputpassword" placeholder="Indique Contraseña">
      </div>

    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Acepto condiciones de acceso
        </label>
      </div>
    </div>
    <br/>
    <button type="submit" class="btn btn-primary" name="registro">Alta Usuario</button>

    <h2>Condicciones de Acceso</h2>
    <br/>
    <p>
        Los datos introducidos solo apareceran a la hora de imprimir los informes solicitados en la página.        
    </p>
    <p>
        No se va a utilizar ningún dato guardado para otros usos que no se allan indicado en la línea anterior.
    </p>

   
  
</form>
