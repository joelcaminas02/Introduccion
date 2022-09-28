<?php
    $array = ['messi', 'Juan Alberto', 'papallona', 'hamburguesa', 'filipinos'];

    $array = array_map('strlen', $array);
    print_r($array);
?>