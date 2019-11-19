<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS PAG\estilos.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body class="d-flex flex-column">
    <?php
    session_start();
    if(isset($_SESSION['usuario'])){
      header("location:index.php");
    }
    
    ?>
  <header class="header2" style="background-image: url('312997-P8IMY8-496.jpg');">
      <nav id="barra" class="navbar navbar-expand-lg navbar-light" style="font-size: 20px;">
          <h1 id="melek" class="text-black" ><span class="resaltado">MELEK</span>DIEZ</h1>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contac.php">Ubicacion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pedidos.php" role="button" aria-haspopup="true" aria-expanded="false">
                  Pedidos
                </a>
              </li>
            </ul>
            <?php
            
            if (isset($_SESSION['usuario'])) {
              echo "".$_SESSION['usuario'];
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
                        aria-labelledby="navbarDropdownMenuLink-333 shadow">
                        <a class="dropdown-item" href="login.php">Iniciar sesion</a>
                        <a class="dropdown-item" href="registro.php">Registrase</a>
                      </div>
                    </li>
                  </ul> 
                </li>
              </ul>   
            <?php
            }
            ?>
          </div>        
      </nav>
    <div class="container">
    <div class="row justify-content-center">
        <div class="card" style="margin-top: 50px; width: 350px; height: 420px; background-color: rgb(0,0,0,0.4); color: white;">
            <div class="card-body">
            <form action="php/consesion.php" method="POST">
              <div class="text-center">
                <label style="font-size: 30px; margin-bottom: 25px;">Inicia sesión</label>
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Correo electronico</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo_electronico" placeholder="Correo electronico">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Contraseña</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="contrasena" placeholder="Contraseña">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" style="color: white; text-decoration: none;">Iniciar Sesion</button>
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

        <script>
            window.sr = ScrollReveal();
            sr.reveal('.card',{
                duration: 2000,
                origin: 'left',
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