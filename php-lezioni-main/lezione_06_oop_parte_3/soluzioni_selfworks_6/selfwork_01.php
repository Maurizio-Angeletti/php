<?php

/*
Esercizio 1
Creare una classe "abstract" chiamata Veicolo che abbia le seguenti proprietà:

    - marca
    - modello

ed i seguenti metodi con visibilità pubblica:

    - avviaMotore() che stampa: "Motore avviato"
    - spegniMotore() che stampa: "Motore spento"

I valori di marca e modello devono essere passati attraverso il costruttore (quindi creare anche il costruttore).
*/

abstract class Veicolo {

    private $marca;

    private $modello;

    public function __construct($marca, $modello)
    {
        $this->marca = $marca;

        $this->modello = $modello;
    }

    public function avviaMotore()
    {
        echo "Motore avviato";
    }

    public function spegniMotore()
    {
        echo "Motore spento";
    }

}

// La riga seguente genera errore perché una classe abstract non è istanziabile
$veicolo = new Veicolo('Marca', 'Modello'); 