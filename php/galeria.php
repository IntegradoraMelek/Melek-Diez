<?php
namespace clases_pdo;

require_once 'conexion.php';

class Galeria{
    
    private $id_imagen = '';
    private $imagen_url;
    private $pdo;
    
    public function __construct(){
        $this->pdo = new Conexion();
    }
    
    
    public function agregarImagen($imagen)
    {   
        $this->imagen = $imagen;
        $result = $this->saveImagen();
        return $result;
    }
    
    private function saveImagen()
    {
        $pdo = $this->pdo;
        $sql = "INSERT INTO imagen VALUES (:id_imagen,:imagen)";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'id_imagen' => $this->id_imagen,
            'imagen_url' => $this->imagen
            ]);
        return $pdo->lastInsertId();;
    }
    
    
    public function getGaleria()
    {
      $pdo = $this->pdo;
      $sql = "select imagen.imagen_url, producto.precio_uni, producto.id_producto from imagen inner join producto on imagen.id_imagen=producto.id_imagen";
      $query = $pdo->query($sql);
      $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
      return $queryResult;
    }
    

}


