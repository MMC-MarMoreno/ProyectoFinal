<div>
        <nav>
            <ul>
                <li><a href="<?php echo BASEURL?>/index.php">Inicio</a></li>
                <li><a href="<?php echo BASEURL?>/Objetivos.php">Objetivos</a></li>
                <li><a href="<?php echo BASEURL?>/contacto.php">Contacto</a></li>
                <?php 
                  if (!isset($_SESSION["usuario"])) { ?>
                <li><a href="<?php echo BASEURL?>/registro.php">Regístrate/Accede</a></li>
                <?php } ?>
            </ul>
        </nav>
</div>    