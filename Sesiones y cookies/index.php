<?php

session_start(['name' => 'David']);

if(isset($_SESSION['login'])){
    echo 'Bienvenido ' . $_SESSION['login'];
}
else {
    echo 'Sin sesión';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPHP</title>
</head>
<body>
    
    <form action="login_session.php" method="post">
        Usuario: <input type="text" name="user">
        <br>
        Contraseña: <input type="password" name="password">
        <br>
        <input type="submit">
    </form>
</body>
</html>