<?php

require "PanelAdmin/conexion2.php";

// Consulta para vaciar productos en select de opciones

$sql = "SELECT * from producto";

$stmt = $conn->prepare($sql);

$stmt->execute();

// Variable para la fecha actual

$fecha = new DateTime();
$fecha2 = $fecha->format('Y-m-d H:i:s');   
$fecha->getTimestamp();

// Calcular fecha de entrega, sumando a fecha en que se hace pedido

$fechaentrega = $fecha->modify('+20 days');
$fecha3 = $fechaentrega->format('Y-m-d H:i:s');   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortout icon" href="Melek.png">
    <title>Pedidos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS PAG\estilos.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <style>
        body{
            background-image: url('312997-P8IMY8-496.jpg');
            background-repeat: no-repeat;
            background-size: 100% 2000px;
        }
    </style>

</head>

<body>

    <header class="header topnav">
        <nav id="barra" class="navbar navbar-expand-lg navbar-light" style="font-size: 20px;">
            <img src="img/logo-melek.png" width="120px">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav m-auto">
                <li class="nav-item">
                  <a id="text"class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a id="text"class="nav-link" href="Catalogo.php" role="button" aria-haspopup="true" aria-expanded="false">
                    Catálogo
                  </a>
                </li>
                <li class="nav-item active">
                  <a id="text"class="nav-link" href="pedidos.php" role="button" aria-haspopup="true" aria-expanded="false">
                    Pedidos
                  </a>
                </li>
                <li class="nav-item">
                  <a id="text"class="nav-link" href="contac.php">Ubicacion</a>
                </li>
              </ul>
             
              <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item dropdown ">
                  <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item dropdown ">
                      <a class="nav-link dropdown-toggle icon-torso" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-default"
                        aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="php/cerrarSession.php">Cerrar</a>
                      </div>
                    </li>
                  </ul> 
                </li>
              </ul> 
            

              <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item dropdown ">
                  <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item dropdown ">
                      <a class="nav-link dropdown-toggle icon-torso" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-default"
                        aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="login.php">Iniciar sesion</a>
                        <a class="dropdown-item" href="registro.php">Registrase</a>
                      </div>
                    </li>
                  </ul> 
                  <div class="dropdown-menu dropdown-menu-right dropdown-default"
                    aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="login.php">Iniciar sesion</a>
                    <a class="dropdown-item" href="registro.php">Registrase</a>
                  </div>
                </li>
              </ul> 
             
            
            </div>        
        </nav>


        <div class="container">
          <div class="row justify-content-center">
            <div class="card shadow" style=" margin-top: 30px; width: 500px; height: 600px; background-color: rgb(0,0,0,0.7); color: white;">    
                <div class="card-body">
                  <div class="text-center">
                    <label style="font-size: 30px;">Pedidos</label>
                  </div>

                    <form action="" method="post">

                    <div class="form-group">
    <label for="exampleFormControlSelect1">Seleccione el uniforme a pedir</label>
    <select class="form-control" id="exampleFormControlSelect1">


        <?php

           while($rows = $stmt->fetch(PDO::FETCH_ASSOC))

           {

            ?>
           
           <option value=""><?php echo $rows['nombre_producto'];?></option>
       
           <?php 
             }
           ?> 


    
    </select>
  </div>
                    <div class="form-group">
    <label for="exampleFormControlSelect1">Seleccione cantidad de uniformes</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
      <option>13</option>
      <option>14</option>
      <option>15</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion de uniforme</label>
    <textarea class="form-control" 
    placeholder="Incluya alguna cambio específico del uniforme seleccionado. Por ejemplo cambio de color, de patrocinador, marca, etc."
    id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Fecha de salida</label>
    <input type="email" value="<?php echo($fecha2) ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Fecha de entrega</label>
    <input type="email" value="<?php echo($fecha3) ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

                          <div class="text-center">
                            <button type="submit" class="btn btn-primary" class="form-group">
                                <a href="index.html" style="color: white; text-decoration: none;">Continuar</a>
                            </button>
                          </div>



                      </form>
                      
                      



                    </div>
              </div>
          </div>
        </div>
                
        <footer class="page-footer font-small" style="margin-top: 165px; background-color: rgb(0,0,0,0.7);">
          <div class="container">
            <div class="footer-copyright py-5">© 2019 Copyright:
                <a href="#" style="text-decoration: none; color: black;"> MELEK DIEZ</a>
            </div>
          </div>
        </footer>    
      </header>
              
                      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
              
                      <script>
                          window.sr = ScrollReveal();
                          sr.reveal('.card',{
                              duration: 2000,
                              origin: 'right',
                              distance: '300px'
                          });
                          sr.reveal('.logo',{
                              duration: 2000,
                              origin: 'top',
                              distance: '300px'
                          });
                          window.sr = ScrollReveal();
                          sr.reveal('#barra',{
                              duration: 2000,
                              origin: 'top',
                              distance: '300px'
                          });
                          window.sr = ScrollReveal();
                            sr.reveal('#mapa',{
                                duration: 2000,
                                
                          });
                          window.sr = ScrollReveal();
                          sr.reveal('h1',{
                                duration: 2000,
                                origin: 'riht',
                                distance: '300px'
                          });
                        </script>
              
    
</body>
</html>