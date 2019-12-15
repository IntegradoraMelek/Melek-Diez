<?php

require "conexion2.php";

$id = $_POST['id_producto'];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["selectcategoria"];
$imagen = $_FILES["imagen"]['name'];

$Fecha= new DateTime();
$conversion=($imagen!="")?$Fecha->getTimestamp()."_".$_FILES["imagen"]['name']:"default.jpg";
    $temporalfoto= $_FILES["imagen"]["tmp_name"];
    if($temporalfoto!=""){
        move_uploaded_file($temporalfoto,"imagenes/".$conversion);
    }


$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );


$query = 'UPDATE producto set nombre_producto = "'.$nombre.'" , precio_unitario = "'.$precio.'", 
descripcion = "'.$descripcion.'", id_categoria = "'.$categoria.'", 
imagen = "'.$conversion.'" WHERE id_producto = "'.$id.'"';


// exit($query);

$res = $conn->prepare($query);

$res->execute();

print_r($res->errorInfo());
header('Location: tablaadmin.php');

// if($res === TRUE) 
// echo "Inserción realizada con éxito";

// else 
// echo "Hay un error";
