<?php

function print_text($string = ''){

    if ($string) {
        echo $string . "\n";
    }else {
        echo 'Attenzione: non hai indicato la stringa da stampare';
    }
    

}

print_text('');