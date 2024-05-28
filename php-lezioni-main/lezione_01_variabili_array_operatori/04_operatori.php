<?php

// Operatori matematici
/* Operatori matematici */

var_dump(2 + 4);
var_dump(2 + "5");
var_dump(2 - 4);
var_dump(2 * 4);
var_dump(2 / 4);

$a = 10;
$b = 5;
var_dump($a / $b);

var_dump(4 % 2);
var_dump(15 % 2);
var_dump(1543 % 17);

var_dump(2 == "2");
var_dump(2 === "2");
var_dump(2 === 2);

echo "\n------\n";

var_dump(2 != "2");
var_dump(2 !== "2");
var_dump(2 !== 2);

echo "\nOperatori logici ------\n";
var_dump(true && true); // vero
var_dump(true || false); // vero
var_dump(! false); // vero


echo "\nTruthy e Falsy ------\n";
var_dump(true && []);
var_dump(true && [1]);
var_dump(true && 2);
var_dump(true && "2");
var_dump(true && "");

$var = true;
$arrayVuoto = [];
var_dump($var && $arrayVuoto);

var_dump(true && [[]]);