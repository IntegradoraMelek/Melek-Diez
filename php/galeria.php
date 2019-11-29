<?php
namespace clases_pdo;

require_once 'conexion.php';

class Galeria{
    
    private $id = '';
    private $imagen_url;
    private $precio_uni;
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
        $sql = "INSERT INTO imagen VALUES (:id,:imagen)";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'id' => $this->id,
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
    
    
    public function deleteUser($id)
    {
        $pdo = $this->pdo;
        $sql = "DELETE FROM usuario WHERE id_usuario=:id";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'id' => $id
            ]);
            
        return $result;
    }
    
    
    
    
    public function selectUser($id)
    {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM usuario WHERE id_usuario =".$id;
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
    }

    public function updateUser($id, $nombre, $telefono, $usuario, $contra)
    {
        $pdo = $this->pdo;
        $sql = "UPDATE usuario SET Name = :nombre, Phone = :telefono, User = :usuario, Password = :contra WHERE id_usuario = :id";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'id_usuario' => $id,
            'nombre' => $nombre,
            'telefono' => $telefono,
            'usuario' => $usuario,
            'contra' => $contra
            ]);
            
        return $result;
    }
    
    public function selectVali($correo)
    {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM usuario WHERE correo_electronico = :correo_electroni";
        $prepare = $pdo->prepare($sql);
        $resultQuery= $prepare->execute([
            'correo_electroni' =>$correo
            ]);
        $result = $prepare->fetch(\PDO::FETCH_ASSOC);
        
        return $result;
    }

}
