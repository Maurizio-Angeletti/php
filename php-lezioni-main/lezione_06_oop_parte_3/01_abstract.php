<?php

abstract class Persona {

    public $nome;

    protected $cognome;

    public $corsi = [];

    public function __construct($nome, $cognome, $corsi)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->corsi = $corsi;
    }

    // abstract sui metodi di classe può essere utilizzato solo se la classe è abstract
    abstract public function saluta();

    final public function cammina()
    {
        echo 'Sto camminando';
    }

}


class Studente extends Persona {

    public function saluta()
    {
        echo 'Ciao sono uno studente';
    }

}


class Docente extends Persona {

    public function assegnaVoto()
    {
        echo 'Bravo! Hai preso 10';
    }

    public function saluta()
    {
        echo 'Ciao sono un docente';
    }

}

// Non è più possibile creare un nuovo oggetto di tipo Persona attraverso new perché
// abbiamo dichiarato la classe Persona abstract 
// $persona = new Persona('Giuseppe', 'Romanazzi', ['PHP', 'Laravel']);

$studente = new Studente('Giuseppe', 'Romanazzi', ['PHP', 'Laravel']);
$docente = new Docente('Giuseppe', 'Romanazzi', ['PHP', 'Laravel']);

$studente->cammina();
echo "\n";
$docente->cammina();
//$docente->assegnaVoto();
