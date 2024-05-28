<?php

/* Qui definisco la classe Persona che definisce il nuovo tipo Persona */
class Persona {

    public const MAX = 20;

    /* proprietà della classe */
    private $nome;

    public $cognome;

    public $eta;

    public static $count = 0;

    /* metodo costruttore, qui passiamo i parametri che sono necessari per eseguire le funzionalità minime della classe */
    public function __construct($nome, $cognome, $eta)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;

        self::$count++;
    }

    /* metodo che restituisce un valore */
    private function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /* metodo che stampa un valore, ma non lo restituisce */
    public function stampaNome()
    {
        echo $this->getNome();
    }

    public function saluta()
    {
        echo "Ciao! Sono $this->nome $this->cognome e ho $this->eta anni.";
    }

    public static function numeroPersoneCreate()
    {
        echo self::$count;
    }
    
}

// Persona::numeroPersoneCreate();

$giuseppe = new Persona('Giuseppe', 'Romanazzi', 42); // Qui creo un nuovo oggetto di tipo Persona
$danilo = new Persona('Danilo', 'Bianchi', 42); // Qui creo un nuovo oggetto di tipo Persona
$nicola = new Persona('Nicola', 'Costagliola', 42); // Qui creo un nuovo oggetto di tipo Persona

//Persona::numeroPersoneCreate();

// echo $giuseppe->nome; // così chiamo una proprietà

// $giuseppe->nome = 'Giu'; // così modifico una proprietà dall'esterno, se è possibile

// echo $nome = $giuseppe->getNome(); // così chiamo un metodo

$giuseppe->setNome('Giu');

// echo $giuseppe->getNome();

$giuseppe->stampaNome();

// $giuseppe->saluta();

// echo Persona::MAX;