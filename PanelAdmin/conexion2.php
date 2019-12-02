<?php

$password = "user";
$user = "melek_user";
$dbname = 'melek_melek3';



try{
    $conn = new PDO('mysql:host=localhost;dbname=' . $dbname,$user,$password);
    echo "Conexion exitosa";
}catch (Exception $e){
    echo "Conexión no exitosa: " . $e->getMessage();
}