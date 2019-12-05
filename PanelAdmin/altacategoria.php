<?php

require "conexion2.php";

$nombre = $_POST["nombre_categoria"];


$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

$query = 'INSERT INTO categoria (nombre_categoria) values ("'.$nombre.'")';

// exit($query);

$res = $conn->prepare($query);

$res->execute();

print_r($res->errorInfo());