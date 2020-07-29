<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <?php 

    require_once 'C:/xampp/htdocs/LearnPHP/Framework/model/Alumno.php';

        $nombre = $_POST['nombre'];
        $paterno = $_POST['paterno'];
        $materno = $_POST['materno'];


        define('DATA_ALUMNO', array('nombre' => $nombre, 'paterno' => $paterno, 'materno' => $materno));

?>
    <?php foreach (DATA_ALUMNO as $key => $value):?>
    <tr>
    <th><?php echo $key ?></th>
    <td><?php echo $value ?></td>
    <td><a href="#">Editar</a></td>
    <td><a href="#">Eliminar</a></td>
    </tr>
    <?php endforeach ?>
    </table>
</body>
</html>

<?php

$Alumno = new Alumno();
/*$Alumno->setName($nombre);
$Alumno->setApellidoPaterno($paterno);
$Alumno->setApellidoMaterno($materno);
$Alumno->create();
 */

//print_r($Alumno->getAll());

?>