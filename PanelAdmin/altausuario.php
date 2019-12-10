<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortout icon" href="Melek.png">
  <title>Registro</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS PAG\estilos.css">
  <link rel="stylesheet" href="styles.css">
  <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body class="d-flex flex-column">

<header class="header shadow topnav"
    style="background-image: url('312997-P8IMY8-496.jpg'); background-size: 100% 100%;">
    <nav id="barra" class="navbar navbar-expand-lg navbar-light" style="font-size: 20px;">
      <img src="../img/logo-melek.png" width="100px">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
          <li class="nav-item ">
            <a id="text" class="nav-link" href="index.html">Inicio<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a id="text" class="nav-link" href="#">Productos</a>
          </li>
          <li class="nav-item">
            <a id="text" class="nav-link" href="altacategoria.html">Categorias</a>
          </li>
          <li class="nav-item">
            <a id="text" class="nav-link" href="altausuario.php">Usuarios</a>
          </li>
          <li class="nav-item">
            <a id="text" class="nav-link" href="#">Pedidos</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="row justify-content-center">
        <div class="card shadow" style=" margin-top: 30px; width: 500px; height: 500px; background-color: rgb(0,0,0,0.4); color: white;">
          <div class="card-body">
            <div class="text-center">
              <label style="font-size: 30px;">Alta de Usuario</label>
            </div>
            <form action="regusuadmin.php" method="POST">
              <div class="form-group">
                <div class="row">
                  <div class="col">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="exampleInputname1" name="nombre" placeholder="Nombre" style="width: 210px;">
                  </div>
                  <div class="col">
                    <label>Apellido Paterno</label>
                    <input type="text" class="form-control" id="examplelastname" name="apellido1" placeholder="Apellido Paterno" style="width: 210px;">
                  </div>
                  <div class="col">
                    <label>Apellido Materno</label>
                    <input type="text" class="form-control" id="examplelastname" name="apellido2" placeholder="Apellido Materno" style="width: 210px;">
                  </div>
                  <div class="col">
                    <label>Telefono</label>
                    <input type="text" class="form-control" id="exampleInputlastname" name="telefono" aria-describedby="emailHelp" placeholder="Telefono" style="width: 210px;">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Correo electronico</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="correo_electronico" placeholder="Correo electronico o telefono">
              </div>
              <div class="form-group">
                <label>Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="contrasena" placeholder="Contraseña">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary" class="form-group">Dar de alta</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer class="page-footer font-small" style="margin-top: 165px; background-color: rgb(0,0,0,0.4);">
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

</body>
</html>