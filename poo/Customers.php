<?php

require_once('Person.php');

class Customers extends Person{
    public $common;
    private $email;

    function eat(){
        echo 'comiendo';
    }
}

?>