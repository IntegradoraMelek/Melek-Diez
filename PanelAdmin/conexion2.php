<?php

 $password = "user";
 $user = "melek_user";
 $dbname = 'melek_melek3';



// $password = "root";
// $user = "root";
// $dbname = 'melek3A';



try{
    $conn = new PDO('mysql:host=melek.uttics.com;dbname=' . $dbname,$user,$password);
    // echo "Conexion exitosa";
}catch (Exception $e){
    echo "Conexión no exitosa: " . $e->getMessage();
}