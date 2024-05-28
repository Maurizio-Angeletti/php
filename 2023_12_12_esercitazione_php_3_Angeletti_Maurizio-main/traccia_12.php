<?php

function print_cars($arrCars, $stampa_accessori, $indice_inizio,$numero_elementi,){


    if ($indice_inizio >= 0 &&  $indice_inizio + $numero_elementi < count($arrCars) +1) {// ho messo una codnizione unica grazie a and && e se tutti i paramentri sono true fa un ciclo for dove c'è un un for each a mano che parte però da indice_inizio e dura fino a quando $i è minore di $indice_inizio + $numero_elementi , deve essere minore in quanto deve stampare 3 elementi copreso $indice_inizio, se dovesse stampare 3 a partire da $indice inizio non compreso dovrei mettere <=.
          
        for ($i=$indice_inizio; $i < $indice_inizio + $numero_elementi; $i++) { 
        
            echo $arrCars[$i]['marca'] . $arrCars[$i]['modello'] . "\n";
            if ($stampa_accessori == true) {
                foreach ($arrCars[$i]['accessori'] as $accessorio) {
                    echo $accessorio . "\n";
                }
            }
        }
        
    } else {
        echo "errore nell'input \n";
    }

}

$auto = [
    [
        'marca' => 'Fiat',
        'modello' => '500',
        'colore' => 'Rosso',
        'accessori' => [
            'Navigatore satellitare',
            'Cambio automatico',
        ],
    ],
    [
        'marca' => 'Ferrari',
        'modello' => 'Roma',
        'colore' => 'Grigio',
        'accessori' => [
            'Navigatore satellitare',
            'Sedili in pelle',
            'Cambio automatico',
        ],
    ],
    [
        'marca' => 'Audi',
        'modello' => 'A1',
        'colore' => 'Bianco',
        'accessori' => [
            'Navigatore satellitare',
        ],
    ],
    [
        'marca' => 'Volkwagen',
        'modello' => 'Polo',
        'colore' => 'Grigio',
        'accessori' => [
            'Navigatore satellitare',
        ],
    ],
    [
        'marca' => 'Fiat',
        'modello' => 'Panda',
        'colore' => 'Rosso',
        'accessori' => [
            'Navigatore satellitare',
            'Cambio automatico',
        ],
    ],
    [
        'marca' => 'Ferrari',
        'modello' => '812',
        'colore' => 'Grigio',
        'accessori' => [
            'Navigatore satellitare',
            'Sedili in pelle',
            'Cambio automatico',
        ],
    ],
    [
        'marca' => 'Audi',
        'modello' => 'Q6',
        'colore' => 'Bianco',
        'accessori' => [
            'Navigatore satellitare',
        ],
    ],
    [
        'marca' => 'Volkwagen',
        'modello' => 'Golf',
        'colore' => 'Grigio',
        'accessori' => [
            'Navigatore satellitare',
        ],
    ],                                
];
$stampa_accessori = true;
$indice_inizio = 2;
$numero_elementi =3;

print_cars($auto,$stampa_accessori,$indice_inizio,$numero_elementi);