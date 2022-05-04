<?php 
include $_SERVER['DOCUMENT_ROOT']."/ProyectoFinal/const.php";
include "./lateralReg.php";
       
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

  <div>
    <form method="POST">
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
        <button type="submit" name="add">Añadir</button>
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
          <?php
           foreach($movimientos as $movimiento){ ?>
          <tr>
          <td><?php echo $movimiento['fecha'];?></td>
            <td><?php echo $movimiento['tipo'];?></td>
            <td><?php echo $movimiento['concepto'];?></td>
            <td><?php echo $movimiento['cantidad'];?></td>
          </tr>
          <?php } ?>
          
        </table>
</div>







  <?php include "pie.php"; ?>