<?php
$title = 'Joel Carrillero Garcia';
    $navegador = $_SERVER['HTTP_USER_AGENT'];
    echo $navegador;
    if(str_contains(strtolower($navegador),'firefox') != true){
        echo 'Cambia de navegador';
    }
?>

<!doctype html>

<html lang="es">

<head>

    <meta charset="utf-8">

    <title><?= $title ?></title>

    <meta name="author" content="Víctor Ponz">

</head>    

<body>

    <ul><?= $title ?>

        <li><a href='idioma.php?setLanguage=es'>Español</a></li>

        <li><a href='idioma.php?setLanguage=en'>Inglés</a></li>

    </ul>

</body>