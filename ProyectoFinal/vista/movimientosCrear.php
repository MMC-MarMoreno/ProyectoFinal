

<?php   
    session_start();
    if (isset($_SESSION["usuario"])) {
        include "lateralReg.php";
        }        
?>
   
  <div>
    <form method="POST" action="<?php echo BASEURL ?>/controlador/controladorMovimientos.php">
      <div>
        <label>Fecha Movimiento</label>
        <input name="fecha" id="fecha" type="fetch">
      </div>
      
      <div class="crearMov">
        Tipo de Movimiento:
        <input name="tipo" id="tipo" type="radio" value="ingreso">
        <label>Ingreso</label>
        <input name="tipo" id="tipo" type="radio" value="gasto">
        <label>Gasto</label>
      </div>
      
      <div class="crearMov">
        <label id="concepto">Concepto </label>
        <input name="concepto" type="text">
      </div>
      
      <div class="crearMov">
        <label id="cantidad">Cantidad €</label>
        <input name="cantidad" type="decimal">
      </div>
      
      <div class="crearMov">
        <button type="submit">Añadir</button>
      </div>      
    
    </form>
  </div>

<div class="tabla">
        <table>
          <tr>
            <th>
              Fecha Movimiento
            </th>
            <th>
              Tipo Movimiento
            </th>
            <th>
              Concepto
            </th>
            <th>
              Cantidad €
            </th>
          </tr>
          <tr>
            <td>$fecha</td>
            <td>$tipo</td>
            <td>$concepto</td>
            <td>$cantidad</td>
          </tr>
          
        </table>
</div>







  <?php include "pie.php"; ?>