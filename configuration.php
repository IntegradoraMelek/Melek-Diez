<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="PanelAdmin/paneladmin.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/jquery.validate.js"></script>
  <script type="text/javascript"
    src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/localization/messages_es.js"></script>
  <script src="formulario.js"></script>
  <link rel="stylesheet" href="CSS PAG\estilos.css">
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <script src="https://unpkg.com/scrollreveal"></script>
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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
          <li class="nav-item active">
            <a id="text" class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a id="text" class="nav-link" href="catalogo2.php" role="button" aria-haspopup="true" aria-expanded="false">
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
                <a class="nav-link dropdown-toggle icon-torso" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                  aria-labelledby="navbarDropdownMenuLink-333">
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


    <div class="containerform">
      <h4>Configuracion</h4>
      <hr>
      <form method="POST" action="php/upduser.php" id="formulario">
        <div class="control-group">
          <label for="nombre">Correo Electronico</label>
          <div class="controls">
            <input type="text" class="form-control" name="correo_electronico" id="nombre"
              placeholder="Nuevo correo electronico">
          </div>
          <label>Contraseña</label>
          <div class="controls">
            <input type="password" class="form-control" id="exampleInputPassword1" name="contrasena"
              placeholder="Contraseña">
          </div>
        </div>
        <button type="submit" class="btn btn-primary mb-2 mt-5">Agregar</button>
      </form>
    </div>
  </header>
</body>

</html>