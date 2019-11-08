

<?php

require 'conexion.php';

$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

$query = 'SELECT id_producto, nombre, color, descripcion from producto';


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
    <title>Tabla Mostrar</title>
</head>
<body>
    
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Color</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>

<?php foreach ($res as $producto) {?>
           <tr>
           <td><?php echo $producto['id_producto'] ?></td>
           <td><?php echo $producto['nombre'] ?></td>
           <td><?php echo $producto['color'] ?></td>
           <td><?php echo $producto['descripcion'] ?></td>
           <td><a href="<?php echo 'editarproducto.php?id=' . $producto['id_producto']?>">Editar</a></td>
           <td><a href="<?php echo 'eliminarproducto.php?id=' . $producto['id_producto']?>">Eliminar</a></td>
           </tr>
<?php } ?>

        </tbody>
      </table>


</body>
</html>