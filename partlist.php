<?php  
    $cadena = ['Juan', 'va', 'a', 'comprar', 'pan'];
    function partir($array){
        $array2 = array();
        $contador = count(($array));
        $iterator = 0;
        for($i = 0; $i<$contador;$i++){
                $array2[$i][$iterator] = implode(" ", array_slice($array, 0,$i+1));
                $iterator++;
                $array2[$i][$iterator]= implode(" ",array_slice($array, $i+1));
                $iterator++;
        }
        return $array2;
    }
    print_r(partir($cadena));
    
?>