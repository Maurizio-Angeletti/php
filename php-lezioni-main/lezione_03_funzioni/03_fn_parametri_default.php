<?php

$c = [
    'PHP',
    'Laravel',
    'JS',
    'CSS'
];

function stampa_corsi($corsi, $stampa_index = true) {

    foreach($corsi as $index => $corso) {

        if($stampa_index) {
            echo "$index => $corso" . "\n";
        } else {
            echo "$corso" . "\n";
        }
        

    }

}

stampa_corsi($c);