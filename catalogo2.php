<?php


  require 'PanelAdmin/conexion2.php';
  
  
$query = 'SELECT * from producto';
$res = $conn->prepare($query);
 //exit($query);
$res->fetchAll(PDO::FETCH_OBJ);
$res->execute();
//print_r($res->errorInfo());

// Query para Categorias
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
$query2 = 'SELECT * from categoria';
$res2 = $conn->prepare($query2);
 //exit($query);
$res2->fetchAll(PDO::FETCH_OBJ);
$res2->execute();
//print_r($res2->errorInfo());



  ?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <a href="https://icons8.com/icon/13912/color"></a>
  <a href="https://icons8.com/icon/13963/twitter"></a>
  <link rel="stylesheet" href="CSS PAG/estilos.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="CSS PAG/hover.css">
  <script src="https://unpkg.com/scrollreveal"></script>

  <title>MELEK DIEZ</title>

  <style>
    .card>img {
      top: 0;
      left: 0;
      min-width: 100%;
      height: 20rem;
    }
  </style>

</head>
 

<?php
  session_start();

  // if (!isset($_SESSION['usuario'])) {
  //   header("location:login.php");
  // }

  ?>    


<body>
  

  <div>
   
    <header class="header shadow topnav" style="background-image: url('658972.jpg');">
      <nav id="barra" class="navbar navbar-expand-lg navbar-dark" style="font-size: 20px;">
      <img src="img/logo-melek.png" width="120px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <li class="nav-item">
              <a id="text" class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item active">
              <a id="text" class="nav-link" href="catalogo2.php" role="button" aria-haspopup="true" aria-expanded="false">
                Catálogo<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a id="text" class="nav-link" href="pedidos.php" role="button" aria-haspopup="true" aria-expanded="false">
                Pedidos
              </a>
            </li>
            <li class="nav-item">
              <a id="text" class="nav-link" href="contac.php">Ubicacion</a>
            </li>
          </ul>
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
          } else {
            ?>

            <ul class="navbar-nav ml-auto nav-flex-icons">
              <li class="nav-item dropdown ">
                <ul class="navbar-nav ml-auto nav-flex-icons">
                  <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle icon-torso" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                      <a class="dropdown-item" href="login.php">Iniciar sesion</a>
                      <a class="dropdown-item" href="registro.php">Registrase</a>
                    </div>
                  </li>
                </ul>
                <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                  <a class="dropdown-item" href="login.php">Iniciar sesion</a>
                  <a class="dropdown-item" href="registro.php">Registrase</a>
                </div>
              </li>
            </ul>
          <?php
          }
          ?>

        </div>
      </nav>
      <h1 class="text-center" id="bienvenido" style="margin-top: 200px; font-size: 8vw; color: white;">Catálogo</h1>
    </header>

    <div class="container">
<form action="catalogofiltro.php" method="POST">
    <div class="form-group">
         <h5><label for="categoria">Busque categoría</label></h5>
          <select name="selectcategoria" class="form-control" id="categoria">
          <option value="" selected disabled hidden>Elija</option>

        <?php

            while($rows2 = $res2->fetch(PDO::FETCH_ASSOC))

              {

          ?>

              <option value="<?php echo $rows2['id_categoria'];?>"><?php echo $rows2['nombre_categoria'];?></option>

          <?php 
              }
        ?> 
          
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Buscar</button>

    </form>

  

      <div class="row">
        <?php
        foreach ($res as $imagen) {
          ?>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 my-3 ">
            <div class="card scrollflow -slide-top -opacity">
              <img class="card-img-top pointer" src="PanelAdmin/imagenes/<?php echo $imagen['imagen'] ?>">
                <input type="hidden" id="custId" name="id" value="<?php echo $imagen['id_producto'] ?>">
                <form action="pedidos.php">
                <button type="submit" class="btn btn-block btn-primary"><?php echo $imagen['nombre_producto'] ?></button>
                </form>
                <form action="pedidos.php">
                <button type="submit" class="btn btn-block btn-success"><?php echo $imagen['precio_unitario'] ?></button>
                </form>
              </form>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>

</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script>
    window.sr = ScrollReveal();
    sr.reveal('#bienvenido', {
      duration: 2000,
      distance: '300px',
      origin: 'right'
    });
    window.sr = ScrollReveal();
    sr.reveal('#barra', {
      duration: 2000,
      origin: 'top',
      distance: '300px'
    });
    window.sr = ScrollReveal();
    sr.reveal('#melek', {
      duration: 2000,
      origin: 'right',
      distance: '300px'
    });
  </script>

</html>