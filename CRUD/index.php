<?php 

require_once 'Alumno.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <form action="index.php" method="post">
    Nombre: <input type="text" name="nombre">
    <br>
    Apellido Paterno: <input type="text" name="paterno">
    <br>
    Apellido Materno: <input type="text" name="materno">
    <br>
    <input type="submit">
    </form>

    <?php 

        $nombre = $_POST['nombre'];
        $paterno = $_POST['paterno'];
        $materno = $_POST['materno'];


        $datos = array('nombre' => $nombre, 'paterno' => $paterno, 'materno' => $materno);

    ?>
    <table>
    <?php foreach ($datos as $key => $value):?>
    <th><?php echo $key ?></th>
    <><?php echo $value ?></>
    <?php endforeach ?>
    </table>
</body>
</html>

<?php

/* $Alumno = new Alumno();
$Alumno->setName($nombre);
$Alumno->setApellidoPaterno($paterno);
$Alumno->setApellidoMaterno($materno);
$Alumno->create();
 */

print_r($Alumno->getAll());

?>