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
    <link rel="stylesheet" href="paneladmin.css">
    <title>Panel de Administrador</title>
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
          

        <button type="submit" class="btn btn-primary mb-2">Guardar cambios</button>
      </form>
    </div>
</body>
</html>














