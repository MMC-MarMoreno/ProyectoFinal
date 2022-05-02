<?php
   
    session_start();
    include "cabecera.php";
    if (isset($_SESSION["usuario"])) {
        include "lateralReg.php";
        } else{
          header('location :'.BASEURL.'/index.php');
        }
       
       include "../controlador/controladorPresupuestos.php";
       $presupuestos = buscar_todos();
      
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