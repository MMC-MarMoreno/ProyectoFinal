<?php
include $_SERVER['DOCUMENT_ROOT']."/ProyectoFinal/const.php";
include "../modelo/usuariosModelo.php";

class ControladorUsuario{
    public function login($usuario,$password){
        // obtenemos los datos del formulario vía post

       // echo "usuario:".$usuario ."<br>";
       //  echo "password:".$password ."<br>";
    

        if(usuario_comprobar_datos($usuario, $password))
        {
            session_start();
            $_SESSION['usuario'] = usuario_obtener($usuario);
            header("location: ".VISTAS."principalRegistro.php");
        }
        else {
            http_response_code(401);
            // die('Contraseña incorrecta');
            include VISTAS."errorInicio.php";
        }
    }

    public function registro(){

    }
    public function logout(){
        session_start();
        session_destroy();

        header("Location: ".VISTAS."hastaLaproxima.php"); // HTTP
    }
}

$controlador = new ControladorUsuario();

if(isset($_POST['login'])){
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['password'];
    $controlador->login($usuario,$contrasenia);
}
if (isset($_POST['registro'])){

}
if (isset($_POST['logout'])){
    $controlador->logout();
}



?>