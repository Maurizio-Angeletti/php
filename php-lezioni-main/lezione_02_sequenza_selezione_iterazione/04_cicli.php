<?php

for($i = 1; $i <= 10; $i++) {

    //echo "$i\n";

}



$corsi = [
    'PHP', // 0
    'Html', // 1
    'JS', // 2
    'CSS', // 3
    'Laravel', // 4
];

// Siccome l'indice dell'array parte da zero ed arriva a 4 (in questo caso),
// dobbiamo sottrarre 1 al risultato di count per non stampare l'indice 5 che
// non esiste. Abbiamo 5 elementi, ma partiamo da 0 nel conteggio.
for($i = 0; $i <= count($corsi) - 1; $i++) {

    // echo $corsi[$i] . ' ';

}

$counter = 10;

//echo "while: \n";
while($counter <= 5) {

    // Eseguo questo codice finche la condizione nelle parentesi è vera
    // echo $counter . ' ';
    $counter++;

}

$counter = 10;

//echo "do while:\n";
do {

    // Eseguo questo blocco di codice finché la condizione è vera;
    // echo $counter . ' ';
    $counter++;

} while($counter <= 5);




$corsi = [
    'PHP', // 0
    'Html', // 1
    'JS', // 2
    'CSS', // 3
    'Laravel', // 4
];

$index = 0;

while($index < count($corsi)) {

    // echo $corsi[$index] . ' ';
    $index++;

}

// FOREACH

$corsi = [
    'PHP', // 0
    'Html', // 1
    'JS', // 2
    'CSS', // 3
    'Laravel', // 4
];

foreach($corsi as $key => $corso) {

    //echo '[' . $key . ']' . $corso . "\n";

}

$auto = [
    'marca' => 'Fiat',
    'modello' => '500',
    'colore' => 'Rosso',
    'motore' => 'Benzina',
    'prezzo' => 20000,
];

foreach($auto as $key => $auto) {

    //echo "$key => " . $auto . "\n";

}

/*
foreach($array as $key => $value) {

    // Foreach scorre tutti gli elementi dell'array ed ad ogni passaggio
    // possiamo conoscere la chiave ed il valore del singolo elemento corrente

}

foreach($array as $value) {

    // Foreach scorre tutti gli elementi dell'array ed ad ogni passaggio
    // possiamo conoscere solo valore del singolo elemento corrente

}
*/

foreach([1, 2, 3, 4, 5, 6] as $item) {

    //echo $item . ' ';

    if($item === 3) {
        break;
    }

}

foreach([1, 2, 3, 4, 5, 6] as $item) {    

    if($item === 3) {
        continue;
    }

    echo $item . ' ';

}