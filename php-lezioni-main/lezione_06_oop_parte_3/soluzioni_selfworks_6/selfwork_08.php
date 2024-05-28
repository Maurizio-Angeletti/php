<?php

abstract class Veicolo {

    protected $marca;

    protected $modello;

    public function __construct($marca, $modello)
    {
        $this->marca = $marca;

        $this->modello = $modello;
    }

    public function avviaMotore(Motore $motore)
    {
        $motore->avvia();
    }

    public function spegniMotore()
    {
        echo "Motore spento";
    }

    public abstract function stampaCaratteristiche();

}

class Moto extends Veicolo {

    public  function stampaCaratteristiche()
    {
        echo "Sono una moto $this->marca $this->modello.";
    }

}

class Auto extends Veicolo implements MovimentiInterface {

    use Movimenti;

    public function stampaCaratteristiche()
    {
        echo "Sono un'auto $this->marca $this->modello.";
    }

}

trait Movimenti {

    public function accelera()
    {
        echo "Sto accelerando";
    }

    public function rallenta()
    {
        echo "Sto rallentando";
    }
}

interface MovimentiInterface {

    public function accelera();

    public function rallenta();

}

class Motore {

    public function avvia()
    {
        echo "Motore avviato";
    }

}

$auto = new Auto('Fiat', 500);
$auto->avviaMotore(new Motore()); // oppure posso creare $motore = new Motore() e passarlo come parametro ad avviaMotore