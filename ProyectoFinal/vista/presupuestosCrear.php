  <?php include "cabecera.php"; ?>
  <?php
   
   session_start();
   if (isset($_SESSION["usuario"])) {
       include "lateralReg.php";
       } 

      
   ?>
   
<div>
  <form method="POST" action="<?php echo BASEURL ?>/controlador/controladorPresupuestos.php">
    
    
    <div class="crearMov">
      <label id="concepto">Concepto </label>
      <input name="concepto" type="text">
    </div>
    
    <div class="crearMov">
      <label id="cantidad">Cantidad €</label>
      <input name="cantidad" type="decimal">
    </div>
    
    <div class="crearMov">
      <button>Añadir</button>
    </div>      
  
  </form>

</div>

<?php include "pie.php"; ?>