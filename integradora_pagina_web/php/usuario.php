<?php
namespace clases_pdo;

require_once 'conexion.php';

class User{
    
    private $id = '';
    private $nombre;
    private $apellido;
    private $correo;
    private $contrasena;
    private $rol = '1';
    private $pdo;
    
    public function __construct(){
        $this->pdo = new Conexion();
    }
    
    
    public function agregarUsuario($nombre, $apellido,$correo,$contrasena)
    {   
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->contrasena = $contrasena;
        $result = $this->saveUser();
        return $result;
    }
    
    private function saveUser()
    {
        $pdo = $this->pdo;
        $sql = "INSERT INTO usuario (id_Per,correo,contrasena,nombres,apellido,rol) VALUES (:id,:correo,:contrasena,:nombre,:apellido,:rol)";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'id' => $this->id,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'correo' => $this->correo,
            'contrasena' => $this->contrasena,
            'rol' => $this->rol
            ]);
        return $result;
    }
    
    
    public function getUsers()
    {
      $pdo = $this->pdo;
      $sql = "SELECT * FROM Usuario";
      $query = $pdo->query($sql);
      $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
      return $queryResult;
    }
    
    
    public function deleteUser($id)
    {
        $pdo = $this->pdo;
        $sql = "DELETE FROM  Usuario WHERE Id=:id";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'id' => $id
            ]);
            
        return $result;
    }
    
    
    
    public function selectUser($id)
    {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM Usuario WHERE Id =".$id;
        $query = $pdo->query($sql);
        $queryResult = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $queryResult;
    }

    public function updateUser($id, $nombre, $telefono, $usuario, $contra)
    {
        $pdo = $this->pdo;
        $sql = "UPDATE Usuario SET Name = :nombre, Phone = :telefono, User = :usuario, Password = :contra WHERE Id = :id";
        $query = $pdo->prepare($sql);
        $result = $query->execute([
            'id' => $id,
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
        $sql = "SELECT * FROM Usuario WHERE correo = :correo";
        $prepare = $pdo->prepare($sql);
        $resultQuery= $prepare->execute([
            'correo' => $correo
            ]);
        $result = $prepare->fetch(\PDO::FETCH_ASSOC);
        
        return $result;
    }
}
