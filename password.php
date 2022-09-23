<?php
function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){
    
    $contraseña = '';
    for( $i = 0;$i<$upper; $i++){
        $contraseña .= chr(rand(65,90)); 
    }
    for($i = 0;$i<$lower;$i++){
        $contraseña .= chr(rand(97,122));
    }
    for ($i = 0;$i<$numeric;$i++){
        $contraseña .= chr(rand(48,57));
    }
    for ($i = 0;$i<$other;$i++){
        $contraseña .= chr(rand(33,47));
    }
    $contraseñaArray = str_split($contraseña);
    shuffle($contraseñaArray);
    return implode($contraseñaArray);
}
    echo(rand_Pass());
?> 