<?php   
use clases_pdo\User;
require_once('php/usuario.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo_electronico = $_POST['correo_electronico'];
$telefono = $_POST['telefono'];
$contrasena = $_POST['contrasena'];

/*$Nombre =  is_valid_name($name);
$Telefono = is_valid_phone($phone);
$Correo = is_confirm_pass($pass,$pass_b);
*/
echo $nombre;
echo $apellido;
echo $correo_electronico;
echo $telefono;
echo $contrasena;
$user = new User();
$result = $user->agregarUsuario($nombre,$apellido,$correo_electronico,$telefono,$contrasena);
if ($result=="1") {
   header("Location: index.php");
}
//header("Location:../view/viewsUser.php");
?>