<?php
require_once 'connection.php';


abstract class CRUD extends Connection {
    private $table;
    private $pdo;

    public function __construct($table){
        $this->table = $table;
        $this->pdo = parent::connection();
    }

    public function getAll(){
        
        try{
            $statement = $this->pdo->prepare("SELECT * FROM $this->table");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }


    public function getById($id){
        try{
            $statement = $this->pdo->prepare("SELECT * FROM $this->table WHERE id=?");
            $statement->execute(array($id));
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function delete($id){
        try{
            $statement = $this->pdo->prepare("DELETE FROM $this->table WHERE id=?");
            $statement->execute(array($id));
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    abstract function create();
    abstract function update();
}


