<?php

function somma(...$numbers) {
// function somma(...$numbers, $stringa) { // non possono esserci altri parametri dopo un variabile ...$var

    $somma = 0;
    foreach($numbers as $numer) {
        $somma = $somma + $numer;
        // $somma += $numer; scrittura alternativa
    }

    return $somma;

}

$somma = somma(2, 5, 6, 8, 9);

echo $somma;
