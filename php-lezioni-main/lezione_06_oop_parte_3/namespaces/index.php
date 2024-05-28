<?php

// Qui diciamo a PHP che la classe PennaNera che stiamo utilizzando in questo (e solo questo) file è quella del
// namespace indicato
use ContenitoreRosso\PennaNera;

include 'Classes\Rosso\PennaNera.php';

$penna = new PennaNera();

// Scrittura alternativa per indicare il namespace della classe
//$penna = new \ContenitoreRosso\PennaNera();

$penna->scrivi();

