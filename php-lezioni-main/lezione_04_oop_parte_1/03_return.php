<?php

function foo($numero) {

    if($numero > 100) {
        return 'Il numero inserito è > di 100';
        // una volta eseguito il primo return si esce dalla funzione e tutto quello che c'è
        // dopo (sempre all'interno della funzione) non viene eseguito, nemmeno il return
        // successivo.
    }

    return 'Il numero inserito è <= di 100';

}

function foo2($numero) {

    $output = 'Il numero inserito è <= di 100';

    if($numero > 100) {
        $output = 'Il numero inserito è > di 100';
    }

    return $output;

}

echo foo(123);


