<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="paneladmin.css">
  <link rel="stylesheet" href="../CSS PAG/estilos.css">
  <title>Panel de Administrador</title>
</head>

<body>


<?php
  session_start();

  if (!isset($_SESSION['usuario'])) {
    header("location:login.php");
  }

  ?>


  <header class="header shadow topnav"
    style="background-image: url('312997-P8IMY8-496.jpg'); background-size: 100% 100%;">
    <nav id="barra" class="navbar navbar-expand-lg navbar-light" style="font-size: 20px;">
      <img src="../img/logo-melek.png" width="100px">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Inicio
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="paneladminmain.php">Inicio Admin</a>
            <!-- <a class="dropdown-item" href="../index.php">Inicio sitio web</a> -->
        </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Productos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="registroproducto.php">Agregar productos</a>
              <a class="dropdown-item" href="tablaadmin.php">Lista de productos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Categorías
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="registrocategoria.php">Agregar categorías</a>
              <a class="dropdown-item" href="tablacategorias.php">Lista de categorías</a>
          </li>
          <li class="nav-item">
            <a id="text" class="nav-link" href="tablapedidos.php">Pedidos</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Pedidos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="tablapedidos.php">Lista de pedidos</a>
            <a class="dropdown-item" href="tabladetallepedidos.php">Ver detalles de pedidos</a>
        </li>
        </ul>
      </div>
      <?php

if (isset($_SESSION['usuario'])) {
  ?>
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item dropdown ">
            <ul class="navbar-nav ml-auto nav-flex-icons">
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle icon-torso" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                  <a class="dropdown-item" href="../php/cerrarSession.php">Cerrar</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
<?php
}
?>
    </nav>

    <div class="containerform">
      <h4>Alta de categoria</h4>
      <hr>
      <form method="POST" action="altacategoria.php">
        <div class="form-group">
          <label for="nombre_categoria">Nombre</label>
          <input type="text" class="form-control" name="nombre_categoria" id="nombre_categoria" required placeholder="Nombre">
        </div>

        <button type="submit" class="btn btn-primary mb-2">Agregar</button>
      </form>
    </div>
  </header>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</html>