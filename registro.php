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

<form action="firmulario/form.php" method="post" enctype="multipart/form-data">

    Nombre:
    <input type="text" name="nombre" maxlength="50"><br>
    Correo:
    <input type="text" name="correo"><br>
    Contraseña:
    <input type="password" name="password"><br>
    Confirmar Contraseña
    <input type="password" name="password2"><br>
    // Botón de enviar
    <input type="submit" name="submit" value="Enviar">

</form>
<?php
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

$resultado = $pdo->query("SELECT nombre FROM users");
if($_POST('nombre') == $resultado->fetch()){
    
}
?>
</body>

</html>
</body>
</html>