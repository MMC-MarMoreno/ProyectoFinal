<?php include "cabecera.php" ?>
<?php
   
    session_start();
    if (isset($_SESSION["usuario"])) {
        include "lateralReg.php";
        } 

       
    ?>
    