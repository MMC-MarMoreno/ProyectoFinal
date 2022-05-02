<?php include '../conexionBBDD/conexion.php'; ?>
<?php include '../vista/movimientosCrear.php'; ?>

<?php
function insertar_movimiento($tipo, $fecha, $concepto, $cantidad ) {
    global $conexion;
    $sql = "INSERT INTO movimientos VALUES('$fecha', '$tipo', '$concepto', '$cantidad')";
    $resultado = mysqli_query($conexion, $sql);
    if(!$resultado) return false;
    return true;        
}
