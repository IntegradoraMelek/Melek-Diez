
<?php
require 'PanelAdmin/conexion2.php';


    $coun_id = $_GET["id_producto"];  
    
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );


	$query ="SELECT * FROM producto WHERE id_producto IN ($coun_id)";
    
    $res = $conn->prepare($query);
    
    $res->fetchAll(PDO::FETCH_ASSOC);

    $res->execute();


?>
	<option value="">Precio Unitario</option>
<?php
	foreach($res as $producto) {
?>
	<option value="<?php echo $producto["id_producto"]; ?>"><?php echo $producto["precio_unitario"]; ?></option>
<?php
    }


?>


<!-- 
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
$query = 'SELECT id_producto, nombre, color, descripcion from producto';
$res = $conn->prepare($query);
 //exit($query);
$res->fetchAll(PDO::FETCH_OBJ);
$res->execute(); -->
