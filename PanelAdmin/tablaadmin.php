<?php
require 'conexion2.php';
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
$query = 'SELECT id_producto, nombre_producto, precio_unitario, descripcion , id_categoria from producto';
$res = $conn->prepare($query);
 //exit($query);
$res->fetchAll(PDO::FETCH_OBJ);
$res->execute();
print_r($res->errorInfo());
var_dump($res);

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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">MELEK ADMIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Categorias</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pedidos</a>
                  </li>
               
               
              </ul>
            
            </div>
          </nav>
    


    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio Unitario</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Categoria/Liga</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
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
           <td><a href="<?php echo 'eliminarproducto.php?id=' . $producto['id_producto']?>">Eliminar</a></td>
           </tr>
<?php } ?>

        </tbody>
      </table>


</body>
</html>