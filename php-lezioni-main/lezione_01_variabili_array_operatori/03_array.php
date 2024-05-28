<?php

$nome = 'Giuseppe';

$array = [];

$nuovoArrayInteri = [1, 2, 3];

$nuovoArrayFloat = [1.5, 2.7, 3.4];

$nuovoArrayStringhe = ['abc', 'def'];

$nuovoArrayBoolean = [true, false];

$nuovoArrayMisto = [1, 1.5, 'abc', true, $nome, [1, 2]];

//var_dump($nuovoArrayMisto);

// alternativa a var_dump()
// print_r($nuovoArrayMisto);

// non è possibile utilizzare echo con un array
//echo $nuovoArrayFloat;

// echo $nuovoArrayMisto[5][1];
// var_dump($nuovoArrayMisto[5][1]);

$ennesimoArray = [2 => 100, 3 => 200, 300];

// print_r($ennesimoArray);

$datiPersonali = [
    'nome' => 'Giuseppe',
    'cognome' => 'Romanazzi',
    'email' => 'giuseppe@example.com',
    'email2' => 'giuseppe2@example.com',
    'valorex',
];

print_r($datiPersonali);

// echo $datiPersonali['email'];