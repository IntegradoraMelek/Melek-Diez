<?php   
use clases_pdo\User;
require_once('usuario.php');

$contrasena = $_POST['contrasena'];
$correo_electronico = $_POST['correo_electronico'];

/*$Nombre =  is_valid_name($name);
$Telefono = is_valid_phone($phone);
$Correo = is_confirm_pass($pass,$pass_b);
*/
echo $correo_electronico;
echo $contrasena;
$user = new User();
$result = $user->updateUser($contrasena,$correo_electronico);
if ($result=="1") {
   header("Location: index.php");
}
//header("Location:../view/viewsUser.php");
?>