<?php

session_start();

$id=$_GET['id'];



require 'conexion.php';

$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );


$res = $conn->prepare("SELECT * FROM producto WHERE id_producto =$id");
 //exit($query);

$res->execute();

$producto = $res->fetch(PDO::FETCH_OBJ);


// print_r($res->errorInfo());

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
                    <label for="nombre">Example label</label>
                    <input value="<?php echo $producto->nombre ?>" type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                  </div>
                  <div class="form-group">
                    <label for="color">Another label</label>
                    <input value="<?php echo $producto->color ?>" type="text" class="form-control" name="color" id="color" placeholder="Color">
                  </div>
        
        <div class="form-group">
          <label for="categoria">Categoria</label>
          <select class="form-control" id="categoria">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>

        <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <textarea class="form-control" id="descripcion" name="descripcion" rows="3"><?php echo $producto->descripcion ?></textarea>
  </div>
       
        <!-- <div class="form-group"> -->
          <!-- <label for="descripcion">Descripcion</label> -->
          <!-- <input value="" class="form-control" name="descripcion" id="descripcion" rows="3"> -->
        <!-- </div> -->

       

        <button type="submit" class="btn btn-primary mb-2">Guardar cambios</button>
      </form>
    </div>
</body>
</html>














