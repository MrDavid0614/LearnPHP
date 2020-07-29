<?php

require_once 'CRUD.php';

class Alumno extends CRUD{
    private $id;
    private $nombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    const TABLE = 'Alumnos';
    private $pdo;

    public function __construct(){

        parent::__construct(self::TABLE);
        $this->pdo = parent::connection();
    }

    public function create(){
        try{
        $statement = $this->pdo->prepare("INSERT INTO ".self::TABLE ."(nombre, paterno, materno) VALUES (?,?,?)");
        $statement->execute(array($this->nombre, $this->apellidoPaterno, $this->apellidoMaterno));
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
    public function update(){
        try{
        $statement = $this->pdo->prepare("INSERT INTO ".self::TABLE ." SET nombre=?, paterno=?, materno=? WHERE id=?");
        $statement->execute(array($this->nombre, $this->apellidoPaterno, $this->apellidoMaterno, $this->id));
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
}

    // Getters & Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->nombre = $name;
    }

    public function getName()
    {
        return $this->nombre;
    }

    public function setApellidoPaterno($apellidoPaterno)
    {
        $this->apellidoPaterno = $apellidoPaterno;
    }

    public function getApellidoPaterno()
    {
        return $this->setApellidoPaterno;
    }

    public function setApellidoMaterno($apellidoMaterno)
    {
        $this->apellidoMaterno = $apellidoMaterno;
    }

    public function getApellidoMaterno(){
        $this->apellidoMaterno;
    }
}

