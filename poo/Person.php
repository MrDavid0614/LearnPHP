<?php

// Para las clases abstractas, se usa la palabra reservada abstract
// Una clase abstracta, no puede ser instanciada
// Se puede hacer que los métodos de una clase sean abstractos
// causando esto que las subclases deban tener dicho método obligatoriamente
// Para abstraer un método, se usa la palabra clave abstract y no se usan las {}
// sería abstract funtion metodoAbstracto(); y puede recibir parámetros

class Person {
    public $name;
    public $lastName;
    public $age;
    public $gender;
    static $pasion;

    function walk(){
        echo "caminando";
    }

    function see(){
        echo "viendo";
    }

    function talk($pasion){
        $this->$pasion = $pasion;
        echo "Hola, mi nombre es ".$this->name. ", tengo ". $this->age. " años de edad y me gusta {$pasion}.";
    }
}


?>