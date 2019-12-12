<?php

require "PanelAdmin/conexion2.php";

session_start();

list($producto,$precio) = explode('|', $_POST['selectproducto']);

$id_usuario = $_SESSION['id_usuario'];
$producto = $producto;
$cantidad = $_POST["cantidad"];
$fecha_entrega = $_POST["fechaentrega"];
$fecha_salida = $_POST["fechasalida"];
$descripcion = $_POST["descripcion"];
$total = $cantidad * $precio;

$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

$query = 'INSERT INTO pedido (id_usuario , 
                              id_producto , 
                              cantidad ,
                              fecha_salida ,
                              fecha_entrega ,
                              total, 
                              descripcion) 
 values ("'.$id_usuario.'", "'.$producto.'","'.$cantidad.'","'.$fecha_salida.'","'.$fecha_entrega.'","'.$total.'", "'.$descripcion.'")';

// exit($query);
var_dump($query);
$res = $conn->prepare($query);

$res->execute();

print_r($res->errorInfo());
