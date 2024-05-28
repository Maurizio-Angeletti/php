<?php

$array = ['Laravel', 'PHP', 'JS', 'CSS'];

function mod_array_key_exists($key, $array) {

    foreach($array as $k => $item) {
        if($key === $k) {
            return true;
        }
    }

    return false;

}

if(mod_array_key_exists(2, $array)) {
    echo 'Esiste';
} else {
    echo 'Non esiste';
}

die();

$stringa = 'Hello World!';

echo strlen($stringa) . "\n";
echo strtoupper($stringa) . "\n";
echo strtolower($stringa) . "\n";


