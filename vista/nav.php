<nav class="navbar navbar-expand-sm bg-light">
  <div class="container-fluid">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link"  href="<?php echo BASEURL;?>/index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="<?php echo VISTAS;?>Objetivos.php">Objetivos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo VISTAS;?>contacto.php">Contacto</a>
      </li>
      <?php 
        if (!isset($_SESSION["usuario"])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo VISTAS;?>registro.php">Regístrate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo VISTAS;?>iniciarSesion.php">Accede</a>
          </li>
      <?php } ?>
    </ul>
  </div>
</nav>
