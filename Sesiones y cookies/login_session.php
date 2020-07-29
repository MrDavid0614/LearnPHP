<?php

session_start(['name' => 'Raymond']);

$user = 'David';

$password = '06';

if($_POST['user'] == $user && $_POST['password'] == $password){
    $_SESSION['login'] = 'Administrador';
    echo 'Datos son correctos';
    header('Location: index.php');
}
else {
    echo 'Usuario y contraseña incorrectos';
}


?>