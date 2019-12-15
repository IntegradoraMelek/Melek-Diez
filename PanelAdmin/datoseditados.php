<?php

require 'conexion2.php';

$id = $_POST['id_producto'];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["selectcategoria"];

$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );


$query = 'UPDATE producto set nombre_producto = ?,
precio_unitario = ?, descripcion = ?, id_categoria = ? where id_producto = ?;';

// exit($query);

$res = $conn->prepare($query);

$res->execute([$nombre, $precio, $descripcion, $categoria, $id]);

print_r($res->errorInfo());

header('Location: tablaadmin.php');


 