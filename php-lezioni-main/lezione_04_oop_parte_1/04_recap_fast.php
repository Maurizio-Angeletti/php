<?php

$variabile = 10;
$var_decimale = 10.5;
$var_stringa = 'Stringa';

$array = [
    $variabile,
    10,
    'Stringa',
    true,
    [1, 'Stringa'],
    'chiave' => 'valore',
];

$somma = 10 + 25;
$somma = $variabile + 25;

if($somma > 10) {
    echo '...';
} else {
    echo '...';
}

if(true && true) {

    echo 'esegui qualcosa';

}

$array = [
    $variabile, // 0 come indice
    5 => 'val',
    'chiave' => 'valore',
    [1, 2], // 6 come indice
];

foreach($array as $key => $value) {

    // ...

}

function foo($par) {

    // utilizzando gli strumenti precedenti, andiamo a realizzare le nostre "funzionalità", algoritmo

}

foo(123);