<?php include "cabecera.php" ?>

<?php
   
    session_start();
    if (isset($_SESSION["usuario"])) {
        include "lateralReg.php";
        }        
    ?>   
 
   
<div>
  <form method="POST" action="<?php echo BASEURL ?>/controlador/controladorActas.php">
    
    
    <div class="crearActa">
      <label id="fechaReunion">Fecha Celebración Reunión </label>
      <input name="fechaReunion" type="fetch">
    </div>
    
    <div class="lugarActa">
      <label id="lugarCelebracion">Lugar donde se celebrará la Reunión </label>
      <input name="lugarCelebracion" type="text">
    </div>
    
    <div class="ordenanteActa">
      <label id="nombreConvocatoria">Nombre de la persona que realiza la convocatoria </label>
      <input name="nombreConvocatoria" type="text">
    </div>    

    <div class="tipoActa">
      <label id="tipoConvocatoria">Tipo de Convocatoria: (Ordinaria, Extraordinaria)</label>
      <input name="tipoConvocatoria" type="text">
    </div>

    <div class="contenidoActa">
      <label id="contenidoConvocatoria">Asuntos a tratar en la reunión</label>
      <input name="contenidoConvocatoria" type="text">
    </div>    
    
   <div>
            <button type="submit" name="ver" class="botonImprimir">Imprimir</button>
    </div>

    <div>
            <button type="reset" name="borrar" class="botonBorrar">Borrar Datos</button>
    </div>
  </form>

</div>

<?php include "pie.php"; ?>