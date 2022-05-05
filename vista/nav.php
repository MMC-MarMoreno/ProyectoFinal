<nav class="navbar navbar-expand-sm bg-light">

  <div class="container-fluid">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Objetivos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>
      <?php 
        if (!isset($_SESSION["usuario"])) { ?>
      <li class="nav-item">
        <a class="nav-link" href="#">Regístrate/Accede</a>
      </li>
      <?php } ?>
    </ul>
  </div>

</nav>