<?php

require "PanelAdmin/conexion2.php";

ob_start();

session_start();


try{
    $pdo = new PDO("mysql:host=localhost;dbname=melek3A", "root", "root");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 

list($producto,$precio) = explode('|', $_POST['selectproducto']);

$id_usuario = $_SESSION['id_usuario'];
$producto = $producto;
$cantidad = $_POST["cantidad"];
$fecha_entrega = $_POST["fechaentrega"];
$fecha_salida = $_POST["fechasalida"];
$descripcion = $_POST["descripcion"];
$total = $cantidad * $precio;


$_SESSION['cantidad'] = $cantidad;


setcookie("MyCookie", $cantidad);


$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

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
$res = $pdo->prepare($query);

$res->execute();

$id_pedido = $pdo->lastInsertId();
echo $id_pedido;

$_SESSION['lastId_pedido'] = $id_pedido;

// print_r($res->errorInfo());

 header("Location: detalle_pedidos.php");
