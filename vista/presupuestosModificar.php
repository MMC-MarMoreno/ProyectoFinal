<?php
session_start();
include("cabecera_compartida.php");?>
<title>Gestiona tu comunidad</title>
<link rel ="stylesheet" href ="<?php echo CSS ?>style.css"/>
</head>
<body>
<?php include INCLUDE_VISTA."nav.php";
    if (isset($_SESSION["usuario"])) {
        include "lateralReg.php";
        }
        else{
          header("location: ".BASEURL . "/index.php");
        }    
$id = $_SESSION['usuario']['id_comunidad'];
include MODELO."movimientosModelo.php"; 
        if (isset($_POST['add'])){      
          $fecha= $_POST['fecha'];
          $tipo=$_POST['tipo'];
          $concepto=$_POST['concepto'];
          $cantidad=$_POST['cantidad'];
          insertar_movimiento($tipo,$fecha,$concepto,$cantidad,$id);          
        }
        $movimientos = buscar_movimientos($id);
?>