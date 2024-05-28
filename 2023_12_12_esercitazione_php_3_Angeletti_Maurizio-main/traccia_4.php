<?php

function sum(...$numbers){

    $sum = 0;

    foreach ($numbers as $number) {
        $sum+= $number;
    }
    return $sum;
}


$result = sum(5,7,4,3);
echo $result . "\n";