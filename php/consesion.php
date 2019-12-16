<?php
session_start();
use clases_pdo\User;
require_once('usuario.php');
$users = new User();

if (!isset($_POST['correo_electronico']) || !isset($_POST['contrasena'])){
    echo "contra o usuario no son valido";
    //header("Location:../view/index.php?c1=error");
}else if (empty($_POST['correo_electronico']) || empty($_POST['contrasena'])){
            echo "campos vacios ";
            // header("Location:../view/index.php?c2=error"); 

               //header("Location:../index.html"); 
}else{
            $correo = $_POST['correo_electronico'];
            $contrasena = $_POST['contrasena'];
            $result = $users->selectVali($correo);
            if ($result['correo_electronico'] == $correo)
            {
                if ($result['contrasena'] == $contrasena)
                {
                    $_SESSION['id_usuario']= $result['id_usuario'];
                    $_SESSION['usuario'] = $result['nombre'];
                    $_SESSION['rol'] = $result['rol'];

                    header("Location: ../index.php");
                    if($_SESSION['rol'] == '0')
                    {
                      header("location: ../PanelAdmin/paneladminmain.php");
                    }
                }else{
                    header("Location: ../login.php");
                    //header("Location:../view/index.php?c3=error");
                }
            }else{
                echo "el usuario no es correcto";
                header("Location: Refresh:3; ../login.php");
            }  
                     
        }