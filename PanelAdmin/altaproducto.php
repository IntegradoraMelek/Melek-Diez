<?php

require "conexion2.php";

$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["selectcategoria"];




$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

$query = 'INSERT INTO producto (nombre_producto , precio_unitario , descripcion , id_categoria) values ("'.$nombre.'","'.$precio.'","'.$descripcion.'","'.$categoria.'")';

// exit($query);

$res = $conn->prepare($query);

$res->execute();

print_r($res->errorInfo());

// if($res === TRUE) 
// echo "Inserción realizada con éxito";

// else 
// echo "Hay un error";
