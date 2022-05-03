<?php 
include '../conexionBBDD/conexion.php'; 

function buscar_presupuestos($id_comunidad) {
    global $conexion;
    $sql = "SELECT * FROM presupuestos WHERE id_comunidad='$id_comunidad'";
    $resultado = mysqli_query($conexion, $sql);
    
    if(!$resultado) return null;
    return mysqli_fetch_all($resultado);
}
?>