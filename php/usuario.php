<?php
namespace clases_pdo;

require_once 'conexion.php';

class User{
    
    private $id_usuario = '';
    private $nombre;
    private $apellido;
    private $correo_electronico;
    private $telefono;
    private $contrasena;
    private $rol = '1';
    private $pdo;
    
    public function __construct(){
        $this->pdo = new Conexion();
    }
    
    
    public function agregarUsuario($nombre,$apellido,$correo_electronico,$telefono,$contrasena)
    {   
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo_electronico = $correo_electronico;
        $this->telefono = $telefono;
        $this->contrasena = $contrasena;
        $result = $this->saveUser();
        return $result;
    }
    
    private function saveUser()
    {
        $pdo = $this->pdo;
        $sql = "INSERT INTO Usuario (id_usuario,nombre,apellido,correo_electronico,telefono,contrasena)
        VALUES (:id_usuario,:nombre,:apellido,:correo_electronico,:telefono,:contrasena)";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'id_usuario' => $this->id_usuario,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
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
    
    
    public function deleteUser($id_usuario)
    {
        $pdo = $this->pdo;
        $sql = "DELETE FROM  Usuario WHERE id_usuario=:id_usuario";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'id_usuario' => $id_usuario
            ]);
            
        return $result;
    }
    
    
    
    public function selectUser($id_usuario)
    {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM usuario WHERE id_usuario =".$id_usuario;
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
    }

    public function updateUser($id_usuario, $nombre, $telefono, $usuario, $contra)
    {
        $pdo = $this->pdo;
        $sql = "UPDATE usuario SET Name = :nombre, Phone = :telefono, User = :usuario, Password = :contra WHERE id_usuario = :id_usuario";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'id_usuario' => $id_usuario,
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
