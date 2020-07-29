<?php

require_once('Person.php');


class Employed extends Person {
    public $position;
    private $schedule;

    function cook(){
        echo 'cocinando';
    }
}

?>