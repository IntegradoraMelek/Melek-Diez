<?php

require "conexion2.php";

$id_usuario = $_SESSION['id_usuario'];
$id_producto = $_POST["precio"];
$cantidad = $_POST["descripcion"];
$fecha_entrega = $_POST["selectcategoria"];
$fecha_salida = $_POST["selectcategoria"];
$descripcion = $_POST["descripcion"];

$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

$query = 'INSERT INTO pedido (id_usuario , 
                              id_producto , 
                              cantidad ,
                              fecha_entrega ,
                              fecha_salida ,
                              descripcion , 
                              total) 
 values ("'.$id_usuario.'","'.$id_producto.'","'.$cantidad.'","'.$fecha_entrega.'","'.$fecha_salida.'" , ,)';

// exit($query);

$res = $conn->prepare($query);

$res->execute();

print_r($res->errorInfo());
