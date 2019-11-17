<?php
session_start();
use clases_pdo\User;
require_once('../clases/usuario.php');
$users = new User();

if (!isset($_POST['correo']) || !isset($_POST['contrasena'])){
    echo "contra o usuario no son valido";
    //header("Location:../view/index.php?c1=error");
}
else if (empty($_POST['correo']) || empty($_POST['contrasena'])){
            echo "campos vacios ";
            // header("Location:../view/index.php?c2=error");    
}
else{        
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            $result = $users->selectVali($correo);
            if ($result['correo'] == $correo)
            {
                if ($result['contrasena'] == $contrasena)
                {
                    $_SESSION['idUsuario']=$result['id_Per'];
                    $_SESSION['usuario'] = $result['nombres'];
                    $_SESSION['rol']=$result['rol'];
                    header("Location:../../index.php");
                }else{
                    header("Location:../../Iniciodesesion.php");
                    //header("Location:../view/index.php?c3=error");
                }
            }else{
                echo "el usuario no es correcto";
                header("Location: Refresh:3; ../../Iniciodesesion.php");
            }            
        }