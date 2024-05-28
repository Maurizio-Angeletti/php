<?php

function find_element($arr,$string){

    if (in_array($string,$arr)) { //il metodo in_array() cerca l'elemento che abbiamo messo nel primo paramentro nell'array al secondo parametro se lo trova torna true
    
        $n = array_search($string,$arr);// array_search()fa lo stesso di in_array() ma ritorna l'indice dell'elemento trovato
        die( "$string Trovato alla posizione: $n \n");
    }


//  foreach ($arr as $index => $element) {// per ogni element dell'array controlla se l'element è uguale alla stringa. index rappresenta l'indice degli elementi.
//     if ($element == $string) {
//         $n = $index; 
//         die( $string.' si trova nella posizione '. $n . "\n");
//     }
//  }
}



$colors = [
'blue',
'green',
'red',
];

$color = 'red';

find_element($colors,$color);
