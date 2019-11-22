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
    <link rel="stylesheet" href="CSS PAG/estiloslogin.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://unpkg.com/scrollreveal"></script>


</head>




<body class="d-flex flex-column">
<?php
      session_start();
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
                  <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false">
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


        <div class="container">
          <div class="row justify-content-center">
            <div class="card shadow" style=" margin-top: 30px; width: 500px; height: 400px; background-color: rgb(0,0,0,0.4); color: white;">    
                <div class="card-body">
                  <div class="text-center">
                    <label style="font-size: 30px;">Pedidos</label>
                  </div>

                    <form action="" metod="">

                          <SELECT NAME="valor" SIZE="1">
                              <OPTION VALUE="1">1</OPTION>
                              <OPTION VALUE="2">2</OPTION>
                              <OPTION VALUE="3">3</OPTION>
                              <OPTION VALUE="4">4</OPTION>
                              <OPTION VALUE="5">5</OPTION>
                              <OPTION VALUE="6">6</OPTION>
                              <OPTION VALUE="7">7</OPTION>
                              <OPTION VALUE="8">8</OPTION>
                              <OPTION VALUE="9">9</OPTION>
                              <OPTION VALUE="10">10</OPTION>
                              <OPTION VALUE="11">11</OPTION>
                           </SELECT>

                           <select name="">
                             <option value="">Grande</option>
                             <option value="">Mediana</option>
                             <option value="">Chica</option>
                           </select>
                        </form>
                        <div class="form-group">
                          
                          <textarea style="height:  150px; width: 455px;"  placeholder="Descripcion" class="form-control" aria-label="With textarea"></textarea>
                        </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary" class="form-group">
                                <a href="index.html" style="color: white; text-decoration: none;">Enviar</a>
                            </button>
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