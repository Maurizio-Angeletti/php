<?php

// dichiarare una funzione

function nome_funzione($par1, $par2, $par3 = 'valore qualsiasi, di qualsiasi tipo') {
    // $par1, $par2, $par3 sono detti "parametri formali"

    // $par3 = 'valore qualsiasi, di qualsiasi tipo' ha un valore di default

    // numero di parametri di esempio (3 in questo caso, ma possono essere anche 0 o  più di 3)

    // Corpo della funzione: codice da eseguire
    // $par1, $par2, $par3 per questo esempio posso essere utilizzati all'interno di questo
    // blocco per eseguire delle operazioni (algoritmi)

    // echo 'Qualcosa'

    return $par1 + $par2; // Quello che la funzione restituisce. Il return non è obbligatorio

    // In questo caso, il parametro $par3 è inutile perché non è stato utilizzato nella funzione

}

// chimare una funzione

$variabile = nome_funzione(2, 2); // 2, 2, 'Ciao' sono detti parametri attuali, ovvero di dati reali che stiamo passando alla funzione

// var_dump($variabile);


// Esempio pratico, molto semplice

function somma($a, $b) {

    $somma = $a + $b;

    return $somma;

}

$somma = somma(5, 6);
// somma(5, 6); OK
// echo somma(5, 6); OK

var_dump($somma);