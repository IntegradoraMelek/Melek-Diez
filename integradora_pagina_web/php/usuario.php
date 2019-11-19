<?php
namespace clases_pdo;

require_once '../PanelAdmin/conexion.php';

class User{
    
    private $id = '';
    private $nombre;
    private $correo_electronico;
    private $telefono;
    private $contrasena;
    private $pdo;
    
    public function __construct(){
        $this->pdo = new Conexion();
    }
    
    
    public function agregarUsuario($nombre,$correo_electronico,$telefono,$contrasena)
    {   
        $this->nombre = $nombre;
        $this->correo_electronico = $correo_electronico;
        $this->telefono = $telefono;
        $this->contrasena = $contrasena;
        $result = $this->saveUser();
        return $result;
    }
    
    private function saveUser()
    {
        $pdo = $this->pdo;
        $sql = "INSERT INTO usuario (id_usuario,nombre,correo_electronico,telefono,contrasena) VALUES (:id,:nombre,:correo_electronico,:telefono,:contrasena)";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'id_usuario' => $this->id,
            'nombre' => $this->nombre,
            'correo_electronico' => $this->correo_electronico,
            'telefono' => $this->telefono,
            'contrasena' => $this->contrasena
            ]);
        return $result;
    }
    
    
    public function getUsers()
    {
      $pdo = $this->pdo;
      $sql = "SELECT * FROM usuario";
      $query = $pdo->query($sql);
      $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
      return $queryResult;
    }
    
    
    public function deleteUser($id)
    {
        $pdo = $this->pdo;
        $sql = "DELETE FROM  Usuario WHERE id_usuario=:id";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'id_usuario' => $id
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
        $sql = "SELECT * FROM usuario WHERE correo_electronico = :correo_electronico";
        $prepare = $pdo->prepare($sql);
        $resultQuery= $prepare->execute([
            'correo_electronico' =>$correo_electronico
            ]);
        $result = $prepare->fetch(\PDO::FETCH_ASSOC);
        
        return $result;
    }
}
