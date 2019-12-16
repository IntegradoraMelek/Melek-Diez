<?php
require 'conexion2.php';
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$query = 'SELECT pedido.id_pedido , usuario.nombre, producto.nombre_producto, pedido.cantidad, 
pedido.fecha_salida, pedido.fecha_entrega, pedido.total, pedido.descripcion from pedido inner join producto on pedido.id_producto = producto.id_producto
inner join usuario on usuario.id_usuario = pedido.id_usuario order by pedido.id_pedido asc';
$res = $conn->prepare($query);
//exit($query);
$res->fetchAll(PDO::FETCH_OBJ);
$res->execute();
// print_r($res->errorInfo());


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
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




    <table class="table table-hover table-dark">
      <thead class="bg-primary">
        <tr>
          <th scope="col">Pedido</th>
          <th scope="col">Usuario</th>
          <th scope="col">Producto</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Fecha de salida</th>
          <th scope="col">Fecha de entrega</th>
          <th scope="col">Total a cobrar</th>
          <th scope="col">Descripcion opcional</th>
        </tr>
      </thead>
      <tbody>

        <?php foreach ($res as $pedido) { ?>
          <tr>
            <td><?php echo $pedido['id_pedido'] ?></td>
            <td><?php echo $pedido['nombre'] ?></td>
            <td><?php echo $pedido['nombre_producto'] ?></td>
            <td><?php echo $pedido['cantidad'] ?></td>
            <td><?php echo $pedido['fecha_salida'] ?></td>
            <td><?php echo $pedido['fecha_entrega'] ?></td>
            <td><?php echo $pedido['total'] ?></td>
            <td><?php echo $pedido['descripcion'] ?></td>
          </tr>
        <?php } ?>

      </tbody>
    </table>
  </header>


</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</html>