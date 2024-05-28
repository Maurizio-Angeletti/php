<?php

/* Ho riscritto la stessa classe dell'esercizio 1 */
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

class Moto extends Veicolo {

}

$moto = new Moto('Ducati', 'DesertX');

// Il file non genera un output quindi è normale non vedere alcun risultato quando lo si esegue
// Il fatto che non ci siano errori vuol dire che abbiamo fatto tutto correttamente