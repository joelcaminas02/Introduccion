<?php
    $pag = $_GET['dejameEntrar'] ?? 0;

    if($pag == 1){
        echo'Bienvenido';
    }else{
        header('Location: login.php');
        exit();
    }
?>