<?php
    
    $idioma = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    if(str_contains($idioma,'es') == true){
        echo 'esta pagina esta en español';
    }else{
        echo 'this page is in english';
    }
?>