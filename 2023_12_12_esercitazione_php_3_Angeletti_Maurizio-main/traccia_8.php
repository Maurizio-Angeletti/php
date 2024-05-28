<?php

function user_creator($email,$nome,$cognome){

    return $userArr = [
        'email' => $email,
        'nome' => $nome,
        'cognome' => $cognome];
}


$email = 'email@mail.com';
$nome = 'Pinco';
$cognome = 'Pallino';
$user = user_creator($email,$nome,$cognome);

print_r($user);