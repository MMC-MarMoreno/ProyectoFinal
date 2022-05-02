<?php include '../conexionBBDD/conexion.php';


function usuario_comprobar_datos($nombre, $password) {
    global $conexion;
    $sql = "SELECT * FROM usuarios WHERE nombre='$nombre' AND password='$password'";
    $resultado = mysqli_query($conexion, $sql);
    
    if(mysqli_num_rows($resultado)==1)
        return true;
    else
        return false;
}



// https://www.w3schools.com/php/func_mysqli_fetch_assoc.asp
function usuario_obtener($nombre) {
  global $conexion;
    $sql = "SELECT * FROM usuarios WHERE nombre='$nombre'";
    $resultado = mysqli_query($conexion, $sql);
    if(!$resultado) return null;
    return mysqli_fetch_assoc($resultado);
}


//function usuario_borrar($nombre) {
  //  global $db;
    //$sql = "DELETE FROM usuarios WHERE nombre='$nombre'";
   // $resultado = mysqli_query($db, $sql);
   // return $resultado;
//} 


function usuario_registro($nombre, $password, $calle, $numero, $poblacion, $ciudad, $codigo_postal) {
    global $conexion;
    $sql = "INSERT INTO usuarios VALUES('$nombre', '$password')";
    $resultado = mysqli_query($conexion, $sql);
    if(!$resultado) return false;

    $sql = "INSERT INTO comunidades VALUES('$calle', '$numero', '$poblacion', '$ciudad', '$codigo_postal')";
    $resultado = mysqli_query($conexion, $sql);
    if(!$resultado) return false;

    return true;        
}

//function usuario_modificar($datos) {

//}

//function usuarios_listar() {

//}