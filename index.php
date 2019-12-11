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
    @import url('https://fonts.googleapis.com/css?family=Black+Ops+One|Rubik+Mono+One&display=swap');

    .resaltado {
      font-family: 'Rubik Mono One', sans-serif;
      font-family: 'Black Ops One', cursive;
    }
  </style>

</head>

<body>

  <?php
  session_start();

  if (!isset($_SESSION['usuario'])) {
    header("location:login.php");
  }

  ?>
  <header class="header shadow topnav" style="background-image: url('658972.jpg');">
    <nav id="barra" class="navbar navbar-expand-lg navbar-dark" style="font-size: 20px;">
      <img src="img/logo-melek.png" width="120px">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
          <li class="nav-item active">
            <a id="text" class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a id="text" class="nav-link" href="Catalogo.php" role="button" aria-haspopup="true" aria-expanded="false">
              Catálogo
          
              <p><?php echo ($_SESSION['id_usuario']);?></p>
              

            </a>
          </li>
          <li class="nav-item">
            <a id="text" class="nav-link" href="pedidos.php" role="button" aria-haspopup="true" aria-expanded="false">
              Pedidos
            </a>
          </li>
          <li class="nav-item">
            <a id="text" class="nav-link" href="contac.php">Ubicacion</a>
          </li>
        </ul>
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
                  <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                  <?php
                    echo "<a class='dropdown-item' href='#'><h4>".$_SESSION['usuario']."<h4><a/>";                  
                  ?>
                  </div>
                  
                </li>
              </ul>
            </li>
          </ul>
        <?php
        } else {
          ?>

          <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item dropdown ">
              <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item dropdown ">
                  <a class="nav-link dropdown-toggle icon-torso" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="login.php">Iniciar sesion</a>
                    <a class="dropdown-item" href="registro.php">Registrase</a>
                  </div>
                </li>
              </ul>
              <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
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
    <h1 class="text-center" id="bienvenido" style="margin-top: 150px; font-size: 5vw; color: white; font-family: 'Rubik Mono One', sans-serif;font-family: 'Black Ops One', cursive;">
      MELEK<span class="resaltado">DIEZ</span><br>
      La piel de tu equipo!
    </h1>
  </header>

  <div class="container mt-5">
    <div class="card-deck text-center">
      <div class="card shadow bg-white rounded">
        <div class="card-header bg-dark text-white">
          <h5>Nigeria</h5>
        </div>
        <div class="image-box">
          <img src="img/Nigeria.jpg" alt="Unsplashed Random" class="card-img-top" style="width: 300px;" />
        </div>
        <div class="card-body">
          <hr class="bg-dark" style="padding: 1px;">
          Precio:
          <br> <br>
          <button class="btn btn-outline-success">Pedidos</button>
        </div>
      </div>
      <div class="card shadow bg-white rounded">
        <div class="card-header bg-dark text-white">
          <h5>Hombre Araña</h5>
        </div>
        <div class="image-box">
          <img src="img/homaraña.jpg" alt="Unsplashed Random" class="card-img-top" />
        </div>
        <div class="card-body">
          <hr class="bg-dark" style="padding: 1px;">
          Precio: $150
          <br> <br>
          <button class="btn btn-outline-success">Pedidos</button>
        </div>
      </div>
      <div class="card shadow bg-white rounded hoverable">
        <div class="card-header bg-dark text-white">
          <h5>Mexico</h5>
        </div>
        <div class="image-box">
          <img src="img/MexVerde.jpg" alt="Unsplashed Random" class="card-img-top" />
        </div>
        <div class="card-body">
          <hr class="bg-dark" style="padding: 1px;">
          Precio:
          <br> <br>
          <button class="btn btn-outline-success">Pedidos</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="card-deck text-center">
      <div class="card shadow bg-white rounded hoverable">
        <div class="card-header bg-dark text-white">
          <h5>Spurs</h5>
        </div>
        <div class="image-box">
          <img src="img/spurs.jpg" alt="Unsplashed Random" class="card-img-top" />
        </div>
        <div class="card-body">
          <hr class="bg-dark" style="padding: 1px;">
          Precio:
          <br> <br>
          <button class="btn btn-outline-success">Pedidos</button>
        </div>
      </div>
      <div class="card shadow bg-white rounded hoverable">
        <div class="card-header bg-dark text-white">
          <h5>Wolves</h5>
        </div>
        <div class="image-box">
          <img src="img/wolves.jpg" alt="Unsplashed Random" class="card-img-top" style="height: 519px; width: px;">
        </div>
        <div class="card-body">
          <hr class="bg-dark" style="padding: 1px;">
          Precio:
          <br> <br>
          <button class="btn btn-outline-success">Pedidos</button>
        </div>
      </div>
      <div class="card shadow bg-white rounded hoverable">
        <div class="card-header bg-dark text-white">
          <h5>Nigeria</h5>
        </div>
        <div class="image-box">
          <img src="img/Nigeria.jpg" alt="Unsplashed Random" class="card-img-top" />
        </div>
        <div class="card-body">
          <hr class="bg-dark" style="padding: 1px;">
          Precio:
          <br> <br>
          <button class="btn btn-outline-success">Pedidos</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="mt-5 mb-5">
      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mr-5 shadow rounded" role="group" aria-label="First group">
          <button class="btn btn-dark btn-rounded active">1</button>
          <button class="btn btn-dark btn-rounded">2</button>
          <button class="btn btn-dark btn-rounded">3</button>
          <button class="btn btn-dark btn-rounded">4</button>
          <button class="btn btn-dark btn-rounded">5</button>
          <button class="btn btn-dark btn-rounded">6</button>
        </div>
      </div>
    </div>
  </div>

  <footer class="page-footer font-small unique-color-dark">
    <div class="container">
      <div class="row d-flex align-items-center">
      </div>
    </div>
    <div class="container text-center text-md-left mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold text-center">Melek Diez</h6>
          <hr class="bg-white" style="padding: 1px;">
          <p>Somos una compania altamente responsable,<br>
            donde damos un excelente servicio y calidad <br>
            ante nuestros clientes.</p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold text-center">Redes sociales</h6>
          <hr class="bg-white" style="padding: 1px;">
          <p>
            <img src="https://img.icons8.com/color/48/000000/facebook.png"><a href="#!" style="text-decoration: none;">Facebook</a>
          </p>
          <p>
            <img src="https://img.icons8.com/color/26/000000/twitter.png"><a href="#!" style="text-decoration: none;">Twitter</a>
          </p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase font-weight-bold text-center">Contacto</h6>
          <hr class="bg-white" style="padding: 1px;">
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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {
      $('[data-toggle="tooltip"]').tooltip();
      $(function() {
        $('[data-toggle="popover"]').popover()
      })
    });
  </script>
  <script>
    window.sr = ScrollReveal();
    sr.reveal('#bienvenido', {
      duration: 2000,
      distance: '300px',
      origin: 'right'
    });
    window.sr = ScrollReveal();
    sr.reveal('#barra', {
      duration: 2000,
      origin: 'top',
      distance: '300px'
    });
    window.sr = ScrollReveal();
    sr.reveal('#melek', {
      duration: 2000,
      origin: 'right',
      distance: '300px'
    });
  </script>

</body>

</html>