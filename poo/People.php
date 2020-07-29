<?php

// Llamando la clase persona desde el archivo classes.php
require_once('Person.php');
require_once('Customers.php');
require_once('Employees.php');
require_once('Providers.php');


// instanciación de la clase
$Alumno = new Person();
$Alumno->name = "David";
$Alumno->lastName = "Mora";
$Alumno->age = 16;
$Alumno->gender = "Masculino";

$Alumno->talk("programar");
?>