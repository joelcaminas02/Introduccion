<?php
$nombres=array("Juan"=>"Es camionero","María"=>"Trabaja para una empresa","Andrés"=>"Desempleado","Berta"=>"Tiene un cargo politico");

function filtro($a,$b){
    if(strlen($a) == strlen($b)){
        return 0;
    }else{
        return ($a<$b) ? -1:1;
    }
}
    print_r($nombres);
    echo'<br>';
    uasort($nombres, 'filtro');
    print_r($nombres);

?>