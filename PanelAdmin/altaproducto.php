<?php

require "conexion2.php";

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


$query = 'INSERT INTO producto (nombre_producto , precio_unitario , descripcion , id_categoria, imagen) values ("'.$nombre.'","'.$precio.'","'.$descripcion.'","'.$categoria.'","'.$conversion.'")';

// exit($query);

$res = $conn->prepare($query);

$res->execute();

print_r($res->errorInfo());

// if($res === TRUE) 
// echo "Inserción realizada con éxito";

// else 
// echo "Hay un error";
