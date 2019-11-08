<?php

$password = "root";
$user = "root";
$dbname = 'PruebasMelek';



try{
    $conn = new PDO('mysql:host=localhost;dbname=' . $dbname,$user,$password);
    echo "Conexion exitosa";
}catch (Exception $e){
    echo "Conexión no exitosa: " . $e->getMessage();
}