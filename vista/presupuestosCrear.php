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
  <div>
    <form method="POST">
      <div class="crearPre">
        <label>Presupuesto Año</label>
        <input name="anio" id="anio" type="int">
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
        <label id="cantidad">Cantidad €</label>
        <input name="cantidad" type="decimal">
      </div>
      <div class="crearPre">
        <label id="total">Saldo Final €</label>
        <input name="total" type="decimal">
      </div>      
      <div class="crearPre">
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