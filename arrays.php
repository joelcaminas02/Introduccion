<?php
    $nombres = ['Pepe', 'Juan', 'Paula', 'Carmen'];
    $ordenados = $nombres;
    echo(count($nombres));
    echo("<br>");
    $cadenanombres = 'Pepe Juan Paula Carmen';
    //$nombres2 = implode($cadenanombres);
    asort($ordenados);
    foreach($ordenados as $key){
        echo($key."<br>");
    }
    $nombresreversed = array_reverse($nombres);
    foreach($nombresreversed as $key){
        echo($key."<br>");
    }
    echo(array_search('Juan', $nombres));

    echo('<br>');
    echo('<br>');
    echo('<br>');
    $alumnos = [['id'=> 0,'nombre'=> 'Joel', 'edad'=> 19],['id'=> 1,'nombre'=>'Paula','edad' => 22] ,['id' => 2, 'nombre' => 'Fran', 'edad'=> 20]];
    $tabla = '<table border="1">';
        foreach ( $alumnos as $dato1 ) {
                $tabla .= '<tr>';
                foreach ( $dato1 as $dato2 ) {
                        $tabla .= '<td>'.$dato2.'</td>';
                }
                $tabla .= '</tr>';
        }
        $tabla .= '</table>';
        echo $tabla;
    
    echo('<br>');
    echo('<br>');

    $nombres = array_column($alumnos, 'nombre');

    $numeros = [1,33,4,5,6,7,8,18,20,11];

    echo "suma = " . array_sum($numeros);
?>