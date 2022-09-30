<?php

    $navegador = ($_SERVER['HTTP_USER_AGENT']);

    if (strpos($navegador, 'Chrome') == false) {
        echo "Inicia con el navegador Google Chrome";
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navegador.php</title>
</head>
<body>
    <li><a href='idioma2.php?setLanguage=es'>Español</a></li>
    <li><a href='idioma2.php?setLanguage=en'>Ingles</a></li>

</body>
</html>