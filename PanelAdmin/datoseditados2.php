<?php


require 'conexion2.php';

$id = $_POST['id_producto'];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["selectcategoria"];
$imagen =$_FILES['imagen']["name"];


$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

           $res=$conn->prepare ("UPDATE producto SET 
        nombre_producto=:nombre_producto,
        precio_unitario=:precio_unitario,
        descripcion=:descripcion,
        id_categoria=:id_categoria
         WHERE id_producto=:id_producto");
         $res->bindParam(':id_producto',$id);
         $res->bindParam(':nombre_producto',$nombre);
         $res->bindParam(':precio_unitario',$precio);
         $res->bindParam(':descripcion',$descripcion);
         $res->bindParam(':id_categoria',$categoria);
         $res->execute();
    
               $Fecha= new DateTime();
            $conversion=($imagen!="")?$Fecha->getTimestamp()."_".$_FILES["imagen"]["name"]:"default.jpg";
            $temporalfoto=$_FILES["imagen"]["tmp_name"];
            if($temporalfoto!=""){
               move_uploaded_file($temporalfoto,"imagenes/".$conversion);
            }
            $res=$conn->prepare ("UPDATE producto SET 
        imagen=:imagen WHERE id_producto=:id_producto");
             $res->bindParam(':id_producto',$id);
             $res->bindParam(':imagen',$conversion);
             $res->execute();

             header("Location: tablaadmin.php");