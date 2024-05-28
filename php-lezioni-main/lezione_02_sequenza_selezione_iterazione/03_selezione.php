<?php

$condizione = false;

if($condizione) {

    // echo "La condizione è true\n";

}

$numero = 10;

if($numero >= 0) {

    // echo "Il $numero è positivo\n";

}

$condizione2 = false;

if($condizione || $condizione2) {

    // echo "Almeno una delle due condizioni è vera.\n";

}

// IF ... ELSE

$utente = [
    'email' => 'giuseppe@example.com',
    'name' => 'Giuseppe',
];

if($utente) {

    // echo "L'utente {$utente['name']} è autenticato\n";

} else {

    // echo "L'utente non è autenticato\n";

}

// IF - ELSE IF - ELSE

$condizione1 = true;
$condizione2 = true;

// una esclude l'altra
if($condizione1) {

    //echo "Condizione 1 verificata\n";

} else if ($condizione2) {

    //echo "Condizione 2 verificata\n";

}

// la prima non esclude la seconda
if($condizione1) {

    //echo "Condizione 3 verificata\n";

}

if ($condizione2) {

    //echo "Condizione 4 verificata\n";

}


// if - else if - else
if($condizione1) {

    //echo "Condizione 1 verificata\n";

} else if ($condizione2) {

    //echo "Condizione 2 verificata\n";

} else {

    //echo "Nessuna condizione è stata verificata";

}


// switch

$piano = 4;

switch($piano) {

    case 1:
        echo 'Sei al primo piano';
        break;
    case 2:
        echo 'Sei al secondo piano';
        break;
    case 3:
        echo 'Sei al terzo piano';
        break;
    case 4:
        echo 'Sei al quarto piano';
        break;
    default:
        echo 'Qualcosa è andato storto!';
        
}