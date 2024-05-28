<?php

$stringaParte1 = 'Sono una ';

$stringaParte2 = "stringa!";

// . serve per concatenare 2 stringhe (o altri tipi convertiti automaticante a stringa)
// echo $stringaParte1 . $stringaParte2;

$nome = 'Giuseppe';

// I doppi apici interpretano $variabili e caratteri speciali (esempio: \n a capo)
$benvenuto = "Benvenuto $nome!";

// echo $benvenuto;

$stringa = "Prima riga\nSeconda riga";

// echo $stringa;

$eta = 40;

echo $nome . " " . $eta . ' anni';