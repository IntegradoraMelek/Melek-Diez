<?php

namespace clases_pdo;
use Exception;
class Conexion extends \PDO
{
    private $typeDB = 'mysql';
    private $host = 'localhost';
<<<<<<< HEAD
    private $dbname = 'melek3a';
=======
    private $dbname = 'melekthree';
>>>>>>> 5de693c150e94af9dc9caf683529cdffcf8abfc1
    private $root = 'root';
    private $pass= '';   
    
    
    public function __construct(){
        try {
            parent::__construct("$this->typeDB:host=$this->host;dbname=$this->dbname",$this->root,$this->pass);
            $this->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);    
        } catch (Exception $e) {
            echo "DATA  BASE ERROR:".$e->getMessage();
        }
    }
}
