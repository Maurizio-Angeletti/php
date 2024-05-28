<?php

function check_blacklist($blacklistArr,$ipIndex){

    
    if (in_array($ipIndex,$blacklistArr)) { //il metodo in_array() cerca l'elemnto che abbiamo messo nel primo paramentro nell'array al secondo parametro se lo trova torna true
        die( $ipIndex.' si trova nella blacklist' . "\n");
    }

    // foreach ($blacklist as $blacklistIp) { ho fatto un in array_() a mano per ogni elemento dell'array la condizione controlla se l'elemento di turno è uguale alla stringa $ipIndex
    //     if ($blacklistIp == $ipIndex) {
    //         die( $ipIndex.' si trova nella blacklist' . "\n");
    //     }
    // }
}



$blacklist = [
    '192.168.0.101',
    '192.168.0.121',
    '192.168.0.103',
    '192.168.0.134',
    '192.168.0.125',
];

$ipIndex = '192.168.0.134';

check_blacklist($blacklist,$ipIndex);




