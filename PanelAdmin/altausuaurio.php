<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="paneladmin.css">
  <link rel="stylesheet" href="../CSS PAG/estilos.css">
  <a href="https://icons8.com/icon/13912/color"></a>
  <a href="https://icons8.com/icon/13963/twitter"></a>
  <title>Panel de Administrador</title>
</head>

<body>

<?php
  session_start();
    if(isset($_SESSION['usuario'])){
      if($_SESSION['rol'] == '1'){
        header("location: ../index.php");
      }
    }
    else{
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
          <li class="nav-item ">
            <a id="text" class="nav-link" href="../index.html">Inicio<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a id="text" class="nav-link" href="altaproductos.php">Productos</a>
          </li>
          <li class="nav-item">
            <a id="text" class="nav-link" href="altacategoria.html">Categorias</a>
          </li>
          <li class="nav-item">
            <a id="text" class="nav-link" href="altausuaurio.php">Usuarios</a>
          </li>
          <li class="nav-item">
            <a id="text" class="nav-link" href="#">Pedidos</a>
          </li>
        </ul>
      </div>
    </nav>

    <?php

if (isset($_SESSION['usuario'])) {
  ?>
          <div>
            <a href="cerrarSession.php">Cerrar</a>
          </div>
          <?php
          }       
          ?>
    <div class="containerform">
      <h4>Alta de Usuarios</h4>
      <hr>

    </div>
  </header>
</body>

</html>