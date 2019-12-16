<?php
require 'conexion2.php';
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$query = 'SELECT * from categoria';
$res = $conn->prepare($query);
//exit($query);
$res->fetchAll(PDO::FETCH_OBJ);
$res->execute();
//print_r($res->errorInfo());


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="paneladmin.css">
  <link rel="stylesheet" href="../CSS PAG/estilos.css">
  <title>Tabla Mostrar</title>
</head>

<body>

  <?php
  session_start();

  if (!isset($_SESSION['usuario'])) {
    header("location:login.php");
  }

  ?>

  <header class="header shadow topnav">

    <nav id="barra" class="navbar navbar-expand-lg navbar-light" style="font-size: 20px;">
      <img src="../img/logo-melek.png" width="100px">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
          <li class="nav-item ">
            <a id="text" class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
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
            <a id="text" class="nav-link" href="tablausuarios.php">Usuarios</a>
          </li>
          <li class="nav-item">
            <a id="text" class="nav-link" href="tablapedidos.php">Pedidos</a>
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
                  <a class="dropdown-item" href="php/cerrarSession.php">Cerrar</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      <?php
      }
      ?>
    </nav>



    <table class="table table table-hover table-dark">
      <thead class="bg-primary">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
        </tr>
      </thead>
      <tbody>

        <?php foreach ($res as $categoria) { ?>
          <tr>
            <td><?php echo $categoria['id_categoria'] ?></td>
            <td><?php echo $categoria['nombre_categoria'] ?></td>
          </tr>
        <?php } ?>

      </tbody>
    </table>
  </header>


</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</html>