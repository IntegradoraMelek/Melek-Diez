<?php   
use clases_pdo\User;
require_once('usuario.php');
$nombre = $_POST['nombre'];
$correo_electronico = $_POST['correo_electronico'];
$telefono = $_POST['telefono'];
$contrasena = $_POST['contrasena'];

/*$Nombre =  is_valid_name($name);
$Telefono = is_valid_phone($phone);
$Correo = is_confirm_pass($pass,$pass_b);
*/
$user = new User();
$result = $user->agregarUsuario($nombre,$telefono,$correo_electronico,$contrasena);
if ($result=="1") {
   header("Location: ../index.php");
}
//header("Location:../view/viewsUser.php");
?>