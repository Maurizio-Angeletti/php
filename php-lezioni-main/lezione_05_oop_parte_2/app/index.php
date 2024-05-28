<?php

include 'Models\Persona.php';

$persona = new Persona('0123456', 'Giuseppe Romanazzi', false);

// $persona->stampaNome();

// $copia_persona = $persona; Puntano entrambi allo stesso oggetto

$copia_persona = clone $persona; // Crea una copia distinta
$copia_persona->setNome('Olivia');

$persona->stampaNome();
$copia_persona->stampaNome();

$array = [1, 2, 3];

$arr2 = $array;
$arr2[1] = 45;

echo $arr2[1];
