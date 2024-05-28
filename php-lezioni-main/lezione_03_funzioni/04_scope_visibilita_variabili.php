<?php

define('MAX', 500);

$a = 10; // non viene visto dall'interno della funzione

function test($a) {

    // $a = 20; // viene visto solo all'interno della funzione
    $b = 43;

    $a = 20;

    echo 'Il valore di $a è:' . $a . ' e il valore della costante MAX è: ' . MAX ."\n";

}

// echo $b; non viene visto dall'esterno della funzione

test($a);
echo $a;