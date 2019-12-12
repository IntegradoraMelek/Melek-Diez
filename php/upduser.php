<?php   
use clases_pdo\User;
require_once('usuario.php');
session_start();
$contrasena = $_POST['contrasena'];
$correo_electronico = $_POST['correo_electronico'];
$id_sesion=$_SESSION['id_usuario'];
/*$Nombre =  is_valid_name($name);
$Telefono = is_valid_phone($phone);
$Correo = is_confirm_pass($pass,$pass_b);
*/

$user = new User();
$result = $user->updateUser($id_sesion,$contrasena,$correo_electronico);
if ($result=="1") {
   header("Location: ../index.php");
}
//header("Location:../view/viewsUser.php");
?>