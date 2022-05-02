<?php
include "../modelo/presupuestosModelo.php";

function buscar_todos(){
    $id_comunidad = $_SESSION['usuario']['id_comunidad'];
    $presupuestos = buscar_presupuestos($id_comunidad);
    return $presupuestos;
}


?>

