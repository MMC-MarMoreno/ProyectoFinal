<?php include "cabecera.php"; ?>
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
          <p class="anio">2018</p>
          <p class="productContent">Acta Año </p>
          <input type="button" name="button" value="Ver" class="buyButton">
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="../images/200x200.png"></div>
          <p class="anio">2019</p>
          <p class="productContent">Acta Año</p>
          <input type="button" name="button" value="Ver" class="buyButton">
        </article>
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="../images/200x200.png"></div>
          <p class="anio">2020</p>
          <p class="productContent">Acta Año</p>
          <input type="button" name="button" value="Ver" class="buyButton">
        </article>
      </div>
      <div class="productRow"> 
        <!-- Each product row contains info of 3 elements -->
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="../images/200x200.png"></div>
          <p class="anio">2021</p>
          <p class="productContent">Acta Año</p>
          <input type="button" name="button" value="Ver" class="buyButton">
        </article>
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="../images/200x200.png"></div>
          <p class="anio">2022</p>
          <p class="productContent">Acta Año</p>
          <input type="button" name="button" value="Ver" class="buyButton">
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="../images/200x200.png"></div>
          <p class="anio">2023</p>
          <p class="productContent">Acta Año</p>
          <input type="button" name="button" value="Ver" class="buyButton">
        </article>      
    </section>