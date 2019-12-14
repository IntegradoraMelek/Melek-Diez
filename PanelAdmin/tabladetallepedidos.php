<?php
require 'conexion2.php';
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

$query = 'SELECT pedido.id_pedido, detalle_pedido. , detalle_pedido.nombre_playera ,
 detalle_pedido.numero_playera , detalle_pedido.talla_short , detalle_pedido.talla_playera 
 from pedido inner join detalle_pedido on pedido.id_pedido = detalle_pedido.id_pedido';

$res = $conn->prepare($query);
 //exit($query);
$res->fetchAll(PDO::FETCH_OBJ);
$res->execute();
print_r($res->errorInfo());

// Consulta para traerme los IDs de Pedidos

$query2 = 'SELECT id_pedido from pedido order by id_pedido asc';

$res2 = $conn->prepare($query2);
 //exit($query);
$res2->fetchAll(PDO::FETCH_OBJ);
$res2->execute();
print_r($res2->errorInfo());


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

<form method="POST" name="search" action="tabladetllepedido.php">
        <div id="demo-grid">
            <div class="search-box">
                <select id="pedido" name="pedido[]" multiple="multiple">
                    <option value="0" selected="selected">Seleccione Pedido</option>
                        <?php
                        if (! empty($countryResult)) {
                            foreach ($countryResult as $key => $value) {
                                echo '<option value="' . $countryResult[$key]['Country'] . '">' . $countryResult[$key]['Country'] . '</option>';
                            }
                        }
                        ?>
                </select><br> <br>
                <button id="Filter">Search</button>
            </div>
            
                <?php
                if (! empty($_POST['country'])) {
                    ?>
                    <table cellpadding="10" cellspacing="1">

                <thead>
                    <tr>
                        <th><strong>Name</strong></th>
                        <th><strong>Gender</strong></th>
                        <th><strong>Country</strong></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * from tbl_user";
                    $i = 0;
                    $selectedOptionCount = count($_POST['country']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['country'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE country in (" . $selectedOption . ")";
                    
                    $result = $db_handle->runQuery($query);
                }
                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?>
                <tr>
                        <td><div class="col" id="user_data_1"><?php echo $result[$key]['Name']; ?></div></td>
                        <td><div class="col" id="user_data_2"><?php echo $result[$key]['Gender']; ?> </div></td>
                        <td><div class="col" id="user_data_3"><?php echo $result[$key]['Country']; ?> </div></td>
                    </tr>
                <?php
                    }
                    ?>
                    
                </tbody>
            </table>
            <?php
                }
                ?>  
        </div>
    </form>













<!-- AQUI TERMINARÁ EL FORM -->








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

<?php foreach ($res as $pedido) {?>
           <tr>
           <td><?php echo $pedido['id_pedido'] ?></td>
           <td><?php echo $pedido['nombre'] ?></td>
           <td><?php echo $pedido['nombre_producto'] ?></td>
           <td><?php echo $pedido['cantidad'] ?></td>
           <td><?php echo $pedido['fecha_salida'] ?></td>
           </tr>
<?php } ?>

        </tbody>
      </table>


</body>
</html>