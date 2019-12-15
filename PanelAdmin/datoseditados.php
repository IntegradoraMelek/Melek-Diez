<?php

require 'conexion2.php';

$id = $_POST['id_producto'];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["selectcategoria"];

$Fecha= new DateTime();
$conversion=($imagen!="")?$Fecha->getTimestamp()."_".$_FILES["imagen"]['name']:"default.jpg";
    $temporalfoto= $_FILES["imagen"]["tmp_name"];
    if($temporalfoto!=""){
        move_uploaded_file($temporalfoto,"imagenes/".$conversion);
    }

$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );


$query = 'UPDATE producto set nombre_producto = ?,
precio_unitario = ?, descripcion = ?, id_categoria = ?, imagen = ? where id_producto = ?;';

// exit($query);

$res = $conn->prepare($query);

$res->execute([$nombre, $precio, $descripcion, $categoria, $conversion, $id]);

print_r($res->errorInfo());

header('Location: tablaadmin.php');


 