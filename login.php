<?php
session_start();
$opciones = array(

PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",

PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

PDO::ATTR_PERSISTENT => true

);

$pdo = new PDO(

'mysql:host=localhost;dbname=users;charset=utf8',

'root',

'sa',

$opciones);

$nombre = $_POST['correo'] ?? "";
$password = $_POST['passwrd'] ?? "";

$pdoSt = $pdo->query("SELECT email from users WHERE email = '$nombre' AND password = '$password'");

if($nombre = $pdoSt->fetch()){
    echo 'Entrado';
    $_SESSION['nombre'] = $nombre;
}else{
    echo'El email o la contraseña son incorrectos';
    //header('Location: registro.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Formulario:</h2>

<form method="POST" enctype="multipart/form-data">
    Correo:
    <input type="text" name="correo"><br>
    Contraseña:
    <input type="password" name="passwrd"><br>
    // Botón de enviar
    <input type="submit" name="submit" value="Enviar">

</form>

</body>

</html>
</body>
</html>
