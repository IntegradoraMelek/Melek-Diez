<?php
require 'conexion2.php';


// Consulta para traerme los IDs de Pedidos

$query2 = 'SELECT id_pedido from pedido order by id_pedido asc';

$res2 = $conn->prepare($query2);
 //exit($query);
$res2->fetchAll(PDO::FETCH_OBJ);
$res2->execute();
// print_r($res2->errorInfo());


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

<?php
session_start();

  if (!isset($_SESSION['usuario'])) {
    header("location:login.php");
  }

  ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">MELEK ADMIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</span></a>
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
                    <a class="nav-link" href="#">Pedidos<span class="sr-only">(current)</a>
                  </li>
               
               
              </ul>
            
            </div>
          </nav>
    
<!-- AQUI IRÁ EL FORM -->

<form method="POST" name="search" action="tabladetalle2.php">
<div class="form-group">
          <label for="categoria">Busque pedido</label>
          <select name="selectpedido" class="form-control" id="pedido">
          
        <?php

            while($rows = $res2->fetch(PDO::FETCH_ASSOC))

              {

          ?>

              <option value="<?php echo $rows['id_pedido'];?>"><?php echo $rows['id_pedido'];?></option>

          <?php 
              }
        ?> 
          
          </select>
        </div>
        <button type="submit" id="Filter">Search</button>
           
            

                        
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Pedido</th>
            <th scope="col">Nombre</th>
            <th scope="col">Número</th>
            <th scope="col">Talla de short</th>
            <th scope="col">Talla de playera</th>
          </tr>
        </thead>
        <tbody>

 </tbody>
 </table>                  
                
                
        </div>
    </form>


<!-- AQUI TERMINARÁ EL FORM -->


</body>
</html>