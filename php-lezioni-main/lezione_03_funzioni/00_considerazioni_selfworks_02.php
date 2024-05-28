<?php

/*

## Esercizio 10
Modificare l'esercizio 3 in modo da stampare 'Nessun corso disponibile'
se rimuoviamo tutti gli elementi dall'array.

## Esercizio 3
Creare un array $corsi contenente i seguenti corsi: PHP, Laravel, JS, CSS
e stampare tutti gli elementi (con echo) utilizzando foreach.

*/

$corsi = [
    'PHP',
    'Laravel',
    'JS',
    'CSS'
];

/*
if($corsi) {

    // se l'array contiene almeno un elemento, quindi non è vuoto, esegui questo blocco

    foreach($corsi as $corso) {

        echo $corso . "\n";
    
    }

} else {

    // se l'array è vuoto [] allora esegui questo blocco
    echo 'Nessun corso disponibile';

}

if(count($corsi) === 0) {

    // l'array è vuoto, eseguo questo blocco di codice
    echo 'Nessun corso disponibile';

} else {

    // l'array è pieno, eseguo questo blocco di codice
    foreach($corsi as $corso) {

        echo $corso . "\n";
    
    }

}
*/

$corsi = [
    'PHP',
    'Laravel',
    'JS',
    'CSS'
];

$cerca = 'JS';

$nonTrovato = true;

foreach($corsi as $corso) {

    if($corso == $cerca) {
        echo 'Trovato' . "\n";
        $trovato = ! $trovato;
        break;
    }
    
}

if($nonTrovato) {
    echo 'Corso non trovato';
}


