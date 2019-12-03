<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <a href="https://icons8.com/icon/13912/color"></a>
    <a href="https://icons8.com/icon/13963/twitter"></a>
    <link rel="stylesheet" href="CSS PAG/estilos.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="CSS PAG/hover.css">
    <title>MELEK DIEZ</title>
    
    <style>
    .card > img {
    top: 0;
    left: 0;
    min-width: 100%;
    height: 20rem;
  }
    
    </style>
    
</head>
    <body>
        <?php 
            use clases_pdo\Galeria;
            require_once('php/galeria.php');
            $imagen = new Galeria();
            $result = $imagen->getGaleria();
  		?>
     
  <div>     
  <?php
      session_start();
      if(!isset($_SESSION['usuario'])){
        header("location:login.php");
      }
      
      ?>
      <?php
      if(!isset($_SESSION['usuario'])){
        header("location:login.php");
      }
      
      ?>
      <header class="header shadow" style="background-image: url('658972.jpg');">
        <nav id="barra" class="navbar navbar-expand-lg navbar-dark" style="font-size: 20px;">
            <h1 id="melek" class="text-white" ><span class="resaltado" >MELEK</span>DIEZ</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Catalogo.php" role="button" aria-haspopup="true" aria-expanded="false">
                    catalogo
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pedidos.php" role="button" aria-haspopup="true" aria-expanded="false">
                    Pedidos
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contac.php">Ubicacion</a>
                </li>
              </ul>
              <?php
            
                if (isset($_SESSION['usuario'])) {
              ?>
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
             <?php
            }else {
             ?>

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
              <?php
            }
            ?>
            
            </div>        
        </nav>
        <h1 class="text-center" id="bienvenido" style="margin-top: 200px; font-size: 8vw; color: white;">Catálogo</h1>
      </header>
    
        <h1>puto el que lo lea</h1>
    <div class="container">
        <div class="row">
            <?php
             foreach ($result as $imagen) 
             {
            ?>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 my-3 ">
                <div class="card scrollflow -slide-top -opacity">
                    <img class="card-img-top pointer" src="<?php echo $imagen['imagen_url']?>" alt="Photo of sunset" data-toggle="modal" data-target="#exampleModal">
                    <form method='post' action="formCitas.php">
                        <input type="hidden" id="custId" name="id" value="<?php echo $imagen['id_producto']?>">
                        <button type="submit" class="btn btn-success"><?php echo $imagen['precio_uni']?></button>
                    </form>
                </div>
            </div>
            <?php
             }
            ?>
        </div>
    </div>
    </div>

    </body>

    </html>