<?php

session_start();

$id=$_GET['id'];



require 'conexion2.php';

$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );


$res = $conn->prepare("SELECT * FROM producto WHERE id_producto =$id");
 //exit($query);

$res->execute();

$producto = $res->fetch(PDO::FETCH_OBJ);


// print_r($res->errorInfo());

$sql = "SELECT * from categoria";

$stmt = $conn->prepare($sql);

$stmt->execute();

// var_dump($res);

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

    <title>Panel de Administrador</title>
</head>
<body>
<?php


  if (!isset($_SESSION['usuario'])) {
    header("location:login.php");
  }

  ?>

<header class="header shadow topnav" style="background-image: url('312997-P8IMY8-496.jpg'); background-size: 100% 100%;">
  <nav id="barra" class="navbar navbar-expand-lg navbar-light" style="font-size: 20px;">
    <img src="../img/logo-melek.png" width="100px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="dropdown-item" href="../index.php">Inicio sitio web</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Productos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="registroproducto.php">Agegar productos</a>
            <a class="dropdown-item" href="tablaadmin.php">Lista de productos</a>
        </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Categorías
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="registrocategoria.php">Agegar categorías</a>
            <a class="dropdown-item" href="tablacategorias.php">Lista de categorías</a>
        </li>
            <li class="nav-item">
              <a id="text"class="nav-link" href="tablausuarios.php">Usuarios</a>
            </li>
            <li class="nav-item">
              <a id="text"class="nav-link" href="tablapedidos.php">Pedidos</a>
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
    <form method="POST" action="datoseditados.php">

    <input type="hidden" name="id_producto" value="<?php echo $producto->id_producto; ?>">
            <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input value="<?php echo $producto->nombre_producto ?>" type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                  </div>
                  <div class="form-group">
                    <label for="color">Precio Unitario</label>
                    <input value="<?php echo $producto->precio_unitario ?>" type="text" class="form-control" name="precio" id="precio" placeholder="$">
                  </div>
        
                  <div class="form-group">
          <label for="categoria">Categoria</label>
          <select name="selectcategoria" class="form-control" id="categoria">
          <option value="" selected disabled hidden>Elija</option>

        <?php

            while($rows = $stmt->fetch(PDO::FETCH_ASSOC))

              {

          ?>

              <option value="<?php echo $rows['id_categoria'];?>"><?php echo $rows['nombre_categoria'];?></option>

          <?php 
              }
        ?> 
          
          </select>
        </div>

        <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <textarea class="form-control" id="descripcion" name="descripcion" rows="3"><?php echo $producto->descripcion ?></textarea>
  </div>    
          

        <button type="submit" class="btn btn-primary mb-2 btn-block">Guardar cambios</button>
      </form>
    </div>
            </header>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</html>














