<?php

function string_to_array($string){
    $arr = [];

    $arr['testo'] = $string;
    $arr['numero_caratteri'] = strlen($string);
    $arr['maiuscolo'] = strtoupper($string);
    $arr['minuscolo'] = strtolower($string);
    
    return $arr ;
}

$string = 'stringa';
$arr = string_to_array($string);

print_r($arr);