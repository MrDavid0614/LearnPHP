<?php

// Conexión base de datos usando PDO y Mysql

class Connection {
    private $driver = 'mysql';
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $dbName = 'pruebaphp';
    private $charset = 'utf8';

    protected function connection(){
        try{
            $pdo = new PDO("{$this->driver}:host={$this->host};dbname={$this->dbName};charset={$this->charset}",$this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}

