<?php
require 'conexion2.php';
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
$query = 'SELECT id_producto, nombre_producto, precio_unitario, descripcion , id_categoria from producto';
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
    <link rel="stylesheet" href="paneladmin.css">
    <title>Tabla Mostrar</title>
</head>
<body>


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
            <a class="dropdown-item" href="registroproducto.php">Agegar productos</a>
            <a class="dropdown-item" href="tablaadmin.php">Lista de productos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Categorías
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="altacategoria.html">Agegar categorías</a>
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
</nav>
    


    <table class="table table table-hover table-dark">
        <thead class="bg-primary">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio Unitario</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Categoria/Liga</th>
            <th scope="col">Editar</th>
          </tr>
        </thead>
        <tbody>

<?php foreach ($res as $producto) {?>
           <tr>
           <td><?php echo $producto['id_producto'] ?></td>
           <td><?php echo $producto['nombre_producto'] ?></td>
           <td><?php echo $producto['precio_unitario'] ?></td>
           <td><?php echo $producto['descripcion'] ?></td>
           <td><?php echo $producto['id_categoria'] ?></td>
           <td><a href="<?php echo 'editarproducto.php?id=' . $producto['id_producto']?>">Editar</a></td>
           </tr>
<?php } ?>

        </tbody>
      </table>


</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</html>