<?php   
use clases_pdo\User;
require_once('');
$nombre = $_POST['nombre'];
$apellido = $_POST['apellidos'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

/*$Nombre =  is_valid_name($name);
$Telefono = is_valid_phone($phone);
$Correo = is_confirm_pass($pass,$pass_b);
*/
$user = new User();
$result = $user->agregarUsuario($nombre,$apellido,$correo,$contrasena);
if ($result=="1") {
   header("Location:");
}
//header("Location:../view/viewsUser.php");
?>