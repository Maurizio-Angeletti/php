<?php

$a = 10; // $a: 123456 -> 10
$b = 30; // $b: 123457 -> 10

// passaggio del parametro per riferimento &
function test(&$a) { // $a: 123457 -> 10
    
    echo 'Il valore di $a nella funzione è: ' . $a ."\n";
    
    $a = 20;

    echo 'Il valore di $a nella funzione è: ' . $a ."\n";

}

test($b); // prendiamo l'indirizzo di $b -> 123457

echo 'Il valore di $a all\'esterno della funzione è: '. $a . "\n";
echo 'Il valore di $b all\'esterno della funzione è: '. $b;