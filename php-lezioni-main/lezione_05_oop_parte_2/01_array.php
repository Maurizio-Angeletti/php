<?php

$array = [1, 2, [11, 12, ['a', 'b']], 4, 5, 'key' => 'value'];

unset($array[2][2][1]);
unset($array[2]); // Sto puntando all'elemento 3 dell'array
unset($array['key']); // Sto puntando all'elemento con chiave 'key' dell'array

print_r($array);