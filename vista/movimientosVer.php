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
    ?>  
<section class="mainContent">
      <div class="productRow"><!-- Each product row contains info of 3 elements -->
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="../images/200x200.png"></div>
          <p class="price">0€</p>
          <p class="productContent">Movimientos Año </p>
          <input type="button" name="button" value="Ver" class="buyButton">
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="../images/200x200.png"></div>
          <p class="price">0€</p>
          <p class="productContent">Movimientos Año</p>
          <input type="button" name="button" value="Ver" class="buyButton">
        </article>
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="../images/200x200.png"></div>
          <p class="price">0€</p>
          <p class="productContent">Movimientos Año</p>
          <input type="button" name="button" value="Ver" class="buyButton">
        </article>
      </div>
      <div class="productRow"> 
        <!-- Each product row contains info of 3 elements -->
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="../images/200x200.png"></div>
          <p class="price">0€</p>
          <p class="productContent">Movimientos Año</p>
          <input type="button" name="button" value="Ver" class="buyButton">
        </article>
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="../images/200x200.png"></div>
          <p class="price">0€</p>
          <p class="productContent">Movimientos Año</p>
          <input type="button" name="button" value="Ver" class="buyButton">
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="../images/200x200.png"></div>
          <p class="price">0€</p>
          <p class="productContent">Movimientos Año</p>
          <input type="button" name="button" value="Ver" class="buyButton">
        </article>      
    </section>