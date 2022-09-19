<?php
$color = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');
echo('<ul>');
foreach($color as $key=>$key2){
    echo('<li><a href='.$key.'>'.$key.'</li>');
}
echo('</ul>')
?>