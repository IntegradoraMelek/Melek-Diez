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
    <!-- <img src="../img/logo-melek.png" width="100px"> -->
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
              <a id="text"class="nav-link" href="tablausuarios.php">Usuarios</a>
            </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Pedidos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="tablapedidos.php">Lista de pedidos</a>
            <a class="dropdown-item" href="tabladetallepedidos.php">Ver detalles de pedidos</a>
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
                  <a class="dropdown-item" href="php/cerrarSession.php">Cerrar</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
<?php
}
?>
          </nav>
    
<!-- AQUI IRÁ EL FORM -->

<form method="POST" style="width: auto;" name="search" action="tabladetalle2.php">
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
        <button class="btn btn-primary" type="submit" id="Filter">Search</button>
          
            

                        
    <table class="table table-hover table-dark">
        <thead class="bg-primary">
          <tr>
            <th scope="col">Pedido</th>
            <th scope="col">Nombre</th>
            <th scope="col">Número</th>
            <th scope="col">Talla de short</th>
            <th scope="col">Talla de playera</th>
          </tr>
        </thead>
        <tbody>

<?php

$pedido = $_POST['selectpedido'];
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

$query = 'SELECT pedido.id_pedido , detalle_pedido.nombre_playera ,
 detalle_pedido.numero_playera , detalle_pedido.talla_short , detalle_pedido.talla_playera 
 from pedido inner join detalle_pedido on pedido.id_pedido = detalle_pedido.id_pedido
 where pedido.id_pedido in ("'.$pedido.'")';

$res = $conn->prepare($query);
 //exit($query);
$res->fetchAll(PDO::FETCH_OBJ);
$res->execute();
// print_r($res->errorInfo());

        

?>
<?php foreach ($res as $pedido) {?>
           <tr>
           <td><?php echo $pedido['id_pedido'] ?></td>
           <td><?php echo $pedido['nombre_playera'] ?></td>
           <td><?php echo $pedido['numero_playera'] ?></td>
           <td><?php echo $pedido['talla_short'] ?></td>
           <td><?php echo $pedido['talla_playera'] ?></td>
           </tr>
<?php } ?>
 </tbody>
 </table>                  
                
                
        </div>
    </form>
    </header>


<!-- AQUI TERMINARÁ EL FORM -->


</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</html>