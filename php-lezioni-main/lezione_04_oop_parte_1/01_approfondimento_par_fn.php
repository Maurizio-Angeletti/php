<?php

function foo($par1) {

    // Corpo della fn dove vengono eseguiti specifiche operazioni

    echo $par1 + 100;

}

function aggiungi_dieci($numero) {

    return $numero + 10;

}

//$val = aggiungi_dieci(24);

foo(aggiungi_dieci(24));