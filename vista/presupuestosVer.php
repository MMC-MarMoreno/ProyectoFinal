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
<section class="mainContent">
      <div class="productRow"><!-- Each product row contains info of 3 elements -->
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="../images/200x200.png"></div>
          <p class="price">0€</p>
          <p class="productContent">Total  Presupuesto Anual </p>
          <input type="button" name="button" value="Ver" class="buyButton">
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="../images/200x200.png"></div>
          <p class="price">0€</p>
          <p class="productContent">Total  Presupuesto Anual</p>
          <input type="button" name="button" value="Ver" class="buyButton">
        </article>
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="../images/200x200.png"></div>
          <p class="price">0€</p>
          <p class="productContent">Total  Presupuesto Anual</p>
          <input type="button" name="button" value="Ver" class="buyButton">
        </article>
      </div>
      <div class="productRow"> 
        <!-- Each product row contains info of 3 elements -->
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="../images/200x200.png"></div>
          <p class="price">0€</p>
          <p class="productContent">Total  Presupuesto Anual</p>
          <input type="button" name="button" value="Ver" class="buyButton">
        </article>
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="../images/200x200.png"></div>
          <p class="price">0€</p>
          <p class="productContent">Total  Presupuesto Anual</p>
          <input type="button" name="button" value="Ver" class="buyButton">
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="../images/200x200.png"></div>
          <p class="price">0€</p>
          <p class="productContent">Total  Presupuesto Anual</p>
          <input type="button" name="button" value="Ver" class="buyButton">
        </article>      
    </section>