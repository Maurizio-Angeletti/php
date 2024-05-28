<?php

function crea_auto($marca, $modello, $colore) {

    return [
        'marca' => $marca,
        'modello' => $modello,
        'colore' => $colore,
    ];

}

$auto = [
    crea_auto('Fiat', '500', 'Rosso'),
    crea_auto('Fiat', 'Panda', 'Verde')
];


function foo(): array { // ci impone la restituzione di un array

    return [];

}

function foo2($par1 = null, $par2 = null, $a = null, $par4 = 'stringa', $stringa = 5) {



}

foo2(stringa: 10, a: 50);


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
];