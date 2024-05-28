<?php

$auto = [
    'marca' => 'Fiat',
    'modello' => '500',
    'colore' => 'Rosso',
    'motore' => 'Benzina',
    'prezzo' => 20000,
];

// print_r($auto);

// varie operazioni

// Aggiungere nuovi elementi all'array
$auto['accessori'] = ['cambio automatico', 'navigatore'];

$key = 'accessori';
$auto[$key] = ['cambio automatico', 'navigatore'];

$auto[10] = 'altro elemento';
$auto[] = 'ulteriore elemento';

$auto['colore'] = 'Verde';
$auto['accessori'][1] = 'Navigatore satellitare';

// print_r($auto);


// Interrompe l'esecuzione del codice in questo punto
die();
die('Ho interrotto l\'esecuzione.'); // il testo è opzionale, non necessario

echo 'test';

if(array_key_exists('modello', $auto)) {

    echo 'Si la variabile $auto ha la chiave modello' . "\n";

}

if(in_array('Fiat', $auto)) {

    echo 'L\'elemento è presente all\'interno dell\'array' . "\n";

}
