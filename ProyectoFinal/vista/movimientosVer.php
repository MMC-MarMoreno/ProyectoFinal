<?php include "cabecera.php" ?>
<?php   
    session_start();
    if (isset($_SESSION["usuario"])) {
        include "lateralReg.php";
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