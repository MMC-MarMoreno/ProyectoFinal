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