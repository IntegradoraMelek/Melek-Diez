    <!DOCTYPE html>

    <html lang="en">

    <head>
        <title>ArteElement</title>
    </head>

    <body>
        <?php 
            use Galeria;
            require_once('galeria.php');
            $galeria = new Galeria();
            $result = $galeria->getGaleria();
  		?>
    <div class="container">
    <?php
        if(isset($_SESSION['usuario']))
        {
            if($_SESSION['rol'] == '0')
            {
                ?>
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                            <div class="card-body">
                                <h5 class="card-title text-center">Registra Producto</h5>
                                <form class="form-signin" action="php/controlador/ConGaleria.php" method="post" enctype="multipart/form-data">
                                <div class="form-label-group">
                                    <label for="inputPassword">Precio</label>
                                    <input type="number" name="precio">
                                </div>
                                <div class="form-label-group">
                                    <input type="file" name="archivo[]" multiple="multiple">
                                    <label for="inputPassword">Subir imagen Diseño</label>
                                </div>
                                <button class="btn btn-lg btn-secondary btn-block text-uppercase" type="submit">subir tatto</button>
                                <hr class="my-4"> 
                                </form>
                            </div>
                            
                    </div>
                </div>
                <?php          
            }
        }
?>
    
        <div class="row">
            <?php
             foreach ($result as $galeria) 
             {
            ?>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 my-3 ">
                <div class="card scrollflow -slide-top -opacity">
                    <img class="card-img-top pointer" src="<?php echo $galeria['imagen']?>" alt="Photo of sunset" data-toggle="modal" data-target="#exampleModal">
                    <form method='post' action="formCitas.php">
                        <input type="hidden" id="custId" name="id" value="<?php echo $galeria['reg']?>">
                        <button type="submit" class="btn btn-success"><?php echo $galeria['precio']?></button>
                    </form>
                </div>
            </div>
            <?php
             }
            ?>
        </div>
    </div>

    </body>

    </html>