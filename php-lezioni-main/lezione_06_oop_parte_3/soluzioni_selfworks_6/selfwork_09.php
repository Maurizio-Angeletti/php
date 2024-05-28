<?php

abstract class Veicolo {

    protected $marca;

    protected $modello;

    protected $motore;

    public function __construct($marca, $modello, Motore $motore)
    {
        $this->marca = $marca;

        $this->modello = $modello;

        $this->motore = $motore;
    }

    public function avviaMotore()
    {
        $this->motore->avvia();
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

$motore = new Motore();
$auto = new Auto('Fiat', 500, $motore);
$auto->avviaMotore();
