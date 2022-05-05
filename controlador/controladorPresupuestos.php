<?php
include $_SERVER['DOCUMENT_ROOT']."/ProyectoFinal/const.php";
include "../modelo/movimientosModelo.php"; ?>

<?php var_dump($_POST); ?>


<?php 
$sql_leer = 'select * from movimientos';
$resultado = mysqli_query($conexion, $sql_leer);
if ($resultado) {
  $movimientos=mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}
   ?>