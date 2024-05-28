<?php

die('stampa del die');

echo 'ciao';

// Break
function foo($array, $stringa) {

    foreach($array as $item) {

        // facciamo delle verifiche
        break;

    }

    echo 'Io vengo stampata sempre';

    return 'qualcosa'; // anche io vengo eseguito

}


// die()
function foo2($array, $stringa) {

    foreach($array as $item) {

        // facciamo delle verifiche
        die();

    }

    echo 'Io vengo stampata sempre';

    return 'qualcosa'; // anche io vengo eseguito

}

foo2([1, 2], 'ciao');

// se foo2 lancia die(), nemmeno il codice seguente viene eseguito
$code = 'qualcosa';
foo(2);