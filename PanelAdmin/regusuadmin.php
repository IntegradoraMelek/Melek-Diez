<?php   
use clases_pdo\User;
require_once('../php/usuario.php');

$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$contrasena = $_POST['contrasena'];
$correo_electronico = $_POST['correo_electronico'];
$telefono = $_POST['telefono'];

/*$Nombre =  is_valid_name($name);
$Telefono = is_valid_phone($phone);
$Correo = is_confirm_pass($pass,$pass_b);
*/
echo $nombre;
echo $apellido1;
echo $apellido2;
echo $correo_electronico;
echo $telefono;
echo $contrasena;
$user = new User();
$result = $user->agregarUsuario($nombre,$apellido1,$apellido2,$contrasena,$correo_electronico,$telefono);
if ($result=="1") {
   header("Location: index.php");
}
//header("Location:../view/viewsUser.php");
?>