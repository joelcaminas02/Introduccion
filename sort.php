<?php
$edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");

$nombre = $edades;
$nombredes = $edades;
$edad = $edades;
$edaddes= $edades;
ksort($nombre);
//ascendente
foreach($nombre as $k=>$l){
    echo($k.' '.$l.'<br>');
}
echo '<br>';
echo'-------------------------------------------------------------------------------------------------------------------------------------------------------------';
echo '<br>';

//descendente
krsort($nombredes);
foreach($nombredes as $k=>$l){
    echo($k.' '.$l.'<br>');
}
echo '<br>';
echo'-------------------------------------------------------------------------------------------------------------------------------------------------------------';
echo '<br>';

//ascendente
asort($edad);
foreach($edad as $k=>$l){
    echo($k.' '.$l.'<br>');
}
echo '<br>';
echo'-------------------------------------------------------------------------------------------------------------------------------------------------------------';
echo '<br>';
//descendente
arsort($edaddes);
foreach($edaddes as $k=>$l){
    echo($k.' '.$l.'<br>');
}
?>