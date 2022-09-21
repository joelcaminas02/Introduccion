<?php  
    $cadena = ['Juan', 'va', 'a', 'comparar', 'pan'];
    function partir($array){
        $array2 = array();
        $array3 = array();
        $contador = count(($array));
        
        for($i = 0; $i<$contador;$i++){
            $array2[$i] = $array3;
            for ($j = 0; $j<$contador;$j++){
                $array3 = implode(array_slice($array, $j));
                $array3 = implode(array_slice($array, $j));
            }
        }
        return $array2;
    }
    print_r(partir($cadena));
    
?>