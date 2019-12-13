<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="PanelAdmin/paneladmin.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <a href="https://icons8.com/icon/13912/color"></a>
  <a href="https://icons8.com/icon/13963/twitter"></a>
  <link rel="stylesheet" href="CSS PAG/estilos.css">
  <link rel="stylesheet" href="styles.css">
  <script src="https://unpkg.com/scrollreveal"></script>
  <link rel="stylesheet" href="CSS PAG/hover.css">
  <title>Configuracion</title>
</head>

<body>
<?php

session_start();
if (!isset($_SESSION['usuario'])) {
  header("location:login.php");
}

  if(isset($_SESSION['usuario'])){
    if($_SESSION['rol'] == '0')
    {
      header("location: PanelAdmin/altaproductos.php");
    }
  }
?>
<header class="header shadow topnav" style="background-image: url('312997-P8IMY8-496.jpg');">
  <nav id="barra" class="navbar navbar-expand-lg navbar-light" style="font-size: 20px;">
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
                  <?php echo "<a class='dropdown-item'>".$_SESSION['usuario']."<a/>";              ?>
                  <a class="dropdown-item" href="php/cerrarSession.php">Cerrar</a>
                  <a class="dropdown-item" href="configuration.php">Configuración</a>
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


    <div class="containerform">
      <h4>Configuracion</h4>
      <hr>
      <form method="POST" action="php/upduser.php">
        <div class="form-group">
          <label for="nombre">Correo Electronico</label>
          <input type="text" class="form-control" name="correo_electronico" id="nombre" placeholder="Nuevo correo electronico">
        </div>

        <div class="form-group">
          <label for="nombre">Contraseña</label>
          <input type="password" class="form-control" name="contrasena" id="nombre" placeholder="Nueva contraseña">
        </div>

        <button type="submit" class="btn btn-primary mb-2">Agregar</button>
      </form>
    </div>
  </header>
</body>

</html>