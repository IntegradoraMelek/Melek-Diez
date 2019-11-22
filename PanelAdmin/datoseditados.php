<?php

require 'conexion.php';

$id = $_POST['id_producto'];
$nombre = $_POST['nombre'];
$color = $_POST['color'];
$descripcion = $_POST['descripcion'];

$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );


$query = 'UPDATE producto set nombre = ?,
color = ?, descripcion = ? where id_producto = ?;';

// exit($query);

$res = $conn->prepare($query);

$res->execute([$nombre, $color, $descripcion, $id]);

print_r($res->errorInfo());


 