<?php

namespace clases_pdo;
use Exception;
class Conexion extends \PDO
{
    private $typeDB = 'mysql';
    private $host = 'localhost';
    private $dbname = 'melek3a';
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