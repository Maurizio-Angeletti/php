<?php

function change_text(&$string){
   $string = 'Testo cambiato';
}

$testo = 'Testo iniziale';

change_text($testo);

echo $testo . "\n";