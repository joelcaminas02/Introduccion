<?php

function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){
$password = '';

for ($i = 0; $i < $upper; $i++){
    $password .= chr(rand(65,90));
}
for ($i = 0; $i < $lower; $i++){
    $password .= chr(rand(97,122));
}
for ($i = 0; $i < $numeric; $i++){
    $password .= chr(rand(48,57));
}
for ($i = 0; $i < $other; $i++){
    $password .= chr(rand(33,47));
}

$newpassword = str_split($password);
shuffle($newpassword);
return implode($newpassword);

}
echo (rand_Pass());
?>