<?php

require_once('Person.php');


class Provider extends Person{
    private $account;
    private $bank;

    function sendProducts(){
        echo 'Proveyendo';
    }
}

?>