<?php

/*
Scrivere una funzione print_cars che:

- accetta in input i seguenti paramentri:
    - un array contenente un elenco di auto (struttura descritta in seguito)
    - $stampa_accessori: se true stampa gli accessori dell’auto, altrimenti no
    - $indice_inizio: se viene passato questo parametro, la funzione stampa gli elementi dell’array a partire da questo indice. Esempio: se viene passato 2, inizia stampare dall’elemento con indice 2, saltando 0 e 1.
    - $numero_elementi: indica quanti elementi la funzione deve stampare. Esempio: se il numero passato è 3, stamperà solo 3 elementi a partire dall’indice indicato nel parametro precedente. Quindi, se $indice_inizio = 2 e $numero_elementi = 3, stamperà gli elementi con indice 2, 3, 4.
- verifica se $indice_inizio esiste nell’array passato e se c’è un numero sufficiente di elementi da stampare se viene indicato $numero_elementi. In caso contrario, non stampa l’array, ma stampa un messaggio: ‘Errore nell’input’;
- Se i parametri in input sono corretti, stampa l’elenco delle auto secondo le modalità indicate dai parametri passati. La visualizzazione dei dati è a piacere.
*/

// Esempio indici di array 6 elementi
// 0 1 2 3 4 5

function print_cars(
    $auto,
    $stampa_accessori = true,
    $indice_inizio = 0,
    $numero_elementi = 0)
{
    $num_auto = count($auto);

    if($numero_elementi) {
        $num_auto = $indice_inizio + $numero_elementi;
    }

    if(! array_key_exists($indice_inizio, $auto)) {
        echo "Errore nell'input";
        return 1;
    }

    if(! array_key_exists($num_auto - 1, $auto)) {
        echo "Errore nell'input";
        return 1;
    }

    for($i = $indice_inizio; $i < $num_auto; $i++) {

        $auto_corrente = $auto[$i];

        echo $auto_corrente['marca'] . ' ' .
             $auto_corrente['modello'] . ' ' .
             $auto_corrente['colore'] . "\n";

        if($stampa_accessori && $auto_corrente['accessori']) {

            // \t é un carattere speciale per la tabulazione
            $accessori = "\tAccessori: ";

            foreach($auto_corrente['accessori'] as $accessorio) {
                $accessori .= $accessorio . ', ';
            }

            echo rtrim($accessori, ', ') . "\n";

        }

        echo "\n";

    }

}

$auto = [
    0 => [
        'marca' => 'Fiat',
        'modello' => '500',
        'colore' => 'Rosso',
        'accessori' => [
            'Navigatore satellitare',
            'Cambio automatico',
        ],
    ],
    1 => [
        'marca' => 'Ferrari',
        'modello' => 'Roma',
        'colore' => 'Grigio',
        'accessori' => [
            'Navigatore satellitare',
            'Sedili in pelle',
            'Cambio automatico',
        ],
    ],
    2 => [
        'marca' => 'Audi',
        'modello' => 'A1',
        'colore' => 'Bianco',
        'accessori' => [
            'Navigatore satellitare',
        ],
    ],        
    3 => [
        'marca' => 'Fiat',
        'modello' => '500',
        'colore' => 'Rosso',
        'accessori' => [
            'Navigatore satellitare',
            'Cambio automatico',
        ],
    ],
    4 => [
        'marca' => 'Ferrari',
        'modello' => 'Roma',
        'colore' => 'Grigio',
        'accessori' => [
            'Navigatore satellitare',
            'Sedili in pelle',
            'Cambio automatico',
        ],
    ],
    5 => [
        'marca' => 'Audi',
        'modello' => 'A1',
        'colore' => 'Bianco',
        'accessori' => [
            'Navigatore satellitare',
        ],
    ],        
];   

