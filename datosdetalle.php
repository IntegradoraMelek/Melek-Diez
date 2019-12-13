<?php

require "PanelAdmin/conexion2.php";

session_start();


$id_usuario = $_SESSION['id_usuario'];

$nombre = $_POST["nombre"];
$numero = $_POST["numero"];
$talla_short = $_POST["selectshort"];
$talla_playera = $_POST["selectplayera"];

$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

$query = 'INSERT INTO detalle_pedido (id_pedido , 
                              nombre_playera , 
                              numero_playera ,
                              talla_short ,
                              talla_playera ) 
 values ("'.$id_usuario.'", "'.$nombre.'","'.$numero.'","'.$talla_short.'","'.$talla_playera.'")';

// exit($query);
var_dump($query);
$res = $conn->prepare($query);

$res->execute();

print_r($res->errorInfo());
