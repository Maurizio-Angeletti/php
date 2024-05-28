<?php

function stampa_corsi($corsi) {

    if($corsi) {

        // se l'array contiene almeno un elemento, quindi non è vuoto, esegui questo blocco
    
        foreach($corsi as $corso) {
    
            echo $corso . "\n";
        
        }
    
    } else {
    
        // se l'array è vuoto [] allora esegui questo blocco
        echo 'Nessun corso disponibile';
    
    }

    echo "\n\n";

}

/* ------------------------- */

$corsi = [
    'PHP',
    'Laravel',
    'JS',
    'CSS'
];

stampa_corsi($corsi);

$corsi = [
    'PHP',
    'Laravel',
    'CSS'
];

stampa_corsi($corsi);