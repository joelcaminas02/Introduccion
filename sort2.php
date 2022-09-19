<?php
$temperaturas = '5 6 29 23 32 54 12 32 8 30 23 15 14';

$temperaturasarray = explode(" ", $temperaturas);
asort($temperaturasarray);
echo('<br>');
print_r(array_slice($temperaturasarray,8,12));
echo('<br>');
print_r(array_slice($temperaturasarray,0,4));

?>