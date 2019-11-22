<?php

require "conexion.php";

$nombre = $_POST["nombre"];
$color = $_POST["color"];
$descripcion = $_POST["descripcion"];



$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

$query = 'INSERT INTO producto (nombre,color,descripcion) values ("'.$nombre.'","'.$color.'","'.$descripcion.'")';

// exit($query);

$res = $conn->prepare($query);

$res->execute();

print_r($res->errorInfo());

// if($res === TRUE) 
// echo "Inserción realizada con éxito";

// else 
// echo "Hay un error";


//_____________________________________________


// require 'conexion.php';

// $nombre_empleado = $_POST['nombre_empleado'];

// $appaterno_empleado = $_POST['appaterno_empleado'];

// $apmaterno_empleado = $_POST['apmaterno_empleado'];

// $curp_empleado = $_POST['curp_empleado'];

// $rfc_empleado = $_POST['rfc_empleado'];

// $nss_empleado = $_POST['nss_empleado'];

// $correo_empleado = $_POST['correo_empleado'];

// $telefono_empleado = $_POST['telefono_empleado'];

// $sexo_empleado = $_POST['sexo_empleado'];

// $rol_empleado = $_POST['rol_empleado'];

// $fechanac_empleado = $_POST['fechanac_empleado'];

// var_dump($nombre_empleado);
// var_dump($appaterno_empleado); 
// var_dump($apmaterno_empleado); 
// var_dump($curp_empleado);
// var_dump($rfc_empleado);
// var_dump($nss_empleado);
// var_dump($correo_empleado);
// var_dump($telefono_empleado);
// var_dump($sexo_empleado);
// var_dump($rol_empleado);
// var_dump($fechanac_empleado); 



// $sqlA = " INSERT INTO empleado (
// nombre_empleado,
// appaterno_empleado,
// apmaterno_empleado,
// curp_empleado,
// rfc_empleado,
// nss_empleado,
// correo_empleado,
// telefonoUno_empleado,
// sexo_empleado,
// rol_empleado,
// fechanac_empleado
// )
// VALUES (
// '$nombre_empleado',
// '$appaterno_empleado', 
// '$apmaterno_empleado',
// '$curp_empleado',
// '$rfc_empleado',
// '$nss_empleado',
// '$correo_empleado',
// '$telefono_empleado',
// '$sexo_empleado',
// '$rol_empleado',
// '$fechanac_empleado')";

// var_dump($sqlA);

// $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

// $insertar = $conn->prepare($sqlA);

// $insertar->execute();
// var_dump($insertar);

// print_r($insertar->errorInfo());

// header('Location: alta_empleado2.php');