<?php include '../conexionBBDD/conexion.php'; ?>



<?php
function insertar_movimiento($tipo, $fecha, $concepto, $cantidad, $id ) {
    global $conexion;
    $sql = "INSERT INTO movimientos (fecha,tipo,concepto,cantidad,id_comunidad) VALUES('$fecha', '$tipo', '$concepto', '$cantidad', $id)";
    $resultado = mysqli_query($conexion, $sql);
    if(!$resultado) return false;
    return true;        
}


function buscar_movimientos($id){
    global $conexion;
    $sql = "select * from movimientos where id_comunidad = $id";
    $resultado = mysqli_query($conexion, $sql);
    if(!$resultado) return null;
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}