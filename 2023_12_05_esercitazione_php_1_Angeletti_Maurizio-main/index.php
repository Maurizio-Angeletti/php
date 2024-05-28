<?php

//traccia 1

 $integer = 1;
 $float = 1.5;
 $string = "sono una stringa";
 $boolean = true;

var_dump($integer,$float,$string,$boolean);


//traccia 2

 $quotedString = 'Il totale degli importi delle fatture emesse questo mese è di X euro';
 $doubleQuotedString = "Il totale degli importi delle fatture emesse questo mese è di X euro";

 $total = 1500;

 $quotedString = 'Il totale degli importi delle fatture emesse questo mese è di '.$total.' euro';
 $doubleQuotedString = "Il totale degli importi delle fatture emesse questo mese è di $total euro";

 var_dump($quotedString,$doubleQuotedString);

//traccia 3

$arrCourses = ['PHP','Lavarel','Javascript','CSS','HTML']; 

var_dump($arrCourses);

// traccia 4

$arrCar = ['marca' => 'Fiat',
    'modello' => '500',
    'motore' => 'elettrico',
    'colore' => 'rosso'
];

 echo 'l\'auto scelta è una ' . $arrCar['marca'] . ' ' . $arrCar['modello']."\n";


 // traccia 5
 $arrCar['accessori']=['cambio automaitico','navigatore satellitare'];

 
 echo 'l\'auto scelta è una ' . $arrCar['marca'] . ' ' . $arrCar['modello'].' con '. $arrCar['accessori'][0] . "\n";


//traccia 6

$x = 10;
$y = 20;
$z = "20";
$w = 10;

var_dump($x < $w);// false: perchè x e y hanno lo stesso valore

var_dump($y <= $z);// true: anche se z è una stringa viene trasformata in numero per poter fare un paragone se la stringa può essere tarsformata in numero allora il paragone avviene e in questo caso il risultato è true dato che z(number) è uguale di y

var_dump($y == $z);// true: sono uguali dato che l'operatore di paragone == uguale tenta di trasformare implicitamente una stringa in un numero per poter fare il paragone

var_dump($y === $z);// false: in questo caso il risultato è false dato che le variabili non sono strettamente uguali , l'operatore di confronto === strettamente uguale non cambia il tipo di dato delle variabili

var_dump($y !== $z);//true: in quanto !== strettamente diverso dice se le variabili sono strettamente diverse , (non cambia il tipo di dato delle variabili per confrontarlo)

var_dump($y != $z);//false: != diverso dice se le variabili sono diverse (cambia il tipo di dato delle varibili per confrontarlo )

var_dump(true && []);//false: dato che && and vede se entrambi i termini ritornano true , un array vuoto è falsy quindi ritorrna false

var_dump(true || []);//true: dato che || or vede se almeno uno è true
var_dump(!false);//true: dato che ! ritorna il contrario booleano dell'operando
var_dump(true && 5);//true in quanto un valore che un number diverso da 0 torna sempre true

//traccia 7

$x = 10;
$y = 20;
$z = "20";
$w = " Sono una stringa";
var_dump($x + $y);
var_dump($x + $z);
//var_dump($x + $w);// da errore perchè non posso sommare n nummero con una stringa
var_dump($x . $w);//da una stringa concatenata con dentro i valori di $x e $w
var_dump($x * $y);
var_dump($x / $y);
var_dump($x % $y);
var_dump($y % $x);



