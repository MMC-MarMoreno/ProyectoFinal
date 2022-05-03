<?php 
include "conexionBBDD/conexion.php";


$sql_leer = 'select * from usuarios';

$resultado = mysqli_query($conexion, $sql_leer);
if ($resultado) {
  $usuarios=mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}
//var_dump($usuarios);

?>



<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <div class="contain mt-5">
      <!--<div class="row">
      <div class="col-md-6"> -->
    <?php foreach($usuarios as $usuario): ?>
            <div class="alert alert-dark" role="alert">
    
    <table border="1">
    <tr>      
      <th width="634" scope="col">Nombre</th>
      <th width="101" scope="col">Email</th>         
    </tr>
    <tr>
      <td><?php echo $usuario['nombre']?></td>
      <td><?php echo $usuario['email']?></td>    
         
    </tr>
    
        
    </div>
    <?php endforeach?>
    </div>
    </div>
    </div>    

    <div class="contain mt-5">
      <!--<div class="row">
      <div class="col-md-6"> -->
    <?php foreach($lineas as $lineaspresu): ?>
            <div class="alert alert-dark" role="alert">
    
    <table border="1">
    <tr>      
      <th width="634" scope="col">ID</th>
      <th width="101" scope="col">Concepto</th>         
    </tr>
    <tr>
      <td><?php echo $usuario['id_presupuesto']?></td>
      <td><?php echo $usuario['concepto']?></td>    
         
    </tr>
    
        
    </div>
    <?php endforeach?>
    </div>
    </div>
    </div>    



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>