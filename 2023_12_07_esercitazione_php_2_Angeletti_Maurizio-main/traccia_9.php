<?php

$arrInt = [1,2,3,4,5,6,7,8,9,10];

foreach ($arrInt as $value) {
    if ($value % 2 == 0) {
        echo $value . ' pari' . "\n";
    } else {
        echo $value . ' dispari' . "\n";
    }
    
}