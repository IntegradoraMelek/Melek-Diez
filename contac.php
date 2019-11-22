<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS PAG/estilos.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Ubicacion</title>
</head>
<body>
    
<?php
      session_start();
      if(!isset($_SESSION['usuario'])){
        header("location:login.php");
      }
      
      ?>
  <header class="header2" style="background-image: url('312997-P8IMY8-496.jpg');">
    <nav id="barra" class="navbar navbar-expand-lg navbar-light"  style="font-size: 20px;">
        <h1 id="melek"><span class="resaltado">MELEK</span>DIEZ</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contac.php">Ubicacion</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="pedidos.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pedidos
              </a>
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
    <div class="container mt-5 mb-5" id="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1799.7255065547388!2d-103.4113617740704!3d25.55665761569325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fdbac74c091b5%3A0x9ebe9291e41ecbd1!2sMELEK%20DIEZ%20UNIFORMES%20DEPORTIVOS!5e0!3m2!1ses-419!2smx!4v1572218667327!5m2!1ses-419!2smx" style="width: 100%; height: 450px; border-bottom-color: black; border-top-color: black; border-left-color: black; border-right-color: black;"></iframe>
      </div>
      <footer class="page-footer font-small unique-color-dark" >
          <div class="container">
            <div class="row d-flex align-items-center">
            </div>
          </div>
        <div class="container text-center text-md-left mt-5">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase font-weight-bold text-center">Melek Diez</h6>
              <hr class="bg-white">
              <p>Somos una compania altamente responsable,<br>
                donde damos un excelente servicio y calidad  <br>
                ante nuestros clientes.</p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase font-weight-bold text-center">Redes sociales</h6>
              <hr class="bg-white">
              <p>
                <img src="https://img.icons8.com/color/48/000000/facebook.png"><a href="#!" style="text-decoration: none;">Facebook</a>
              </p>
              <p>
                <img src="https://img.icons8.com/color/26/000000/twitter.png"><a href="#!" style="text-decoration: none;">Twitter</a>
              </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase font-weight-bold text-center">Contacto</h6>
              <hr class="bg-white">
              Direccion:
              <br> Privada Cuicuilco #599,
              esquina con calzada Xicotencatl <br>
              Telefonos: <br> 
              +87-11-44-68-84 y 7-20-66-25
              Correo: melekdiez@hotmail.com
            </div>
          </div>
        </div>
        <div class="footer-copyright text-center py-3 bg-dark">© 2019 Copyright:
          <a href="#" style="text-decoration: none;"> MELEK DIEZ</a>
        </div>
      </footer>  
    </header>
        
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      <script>
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