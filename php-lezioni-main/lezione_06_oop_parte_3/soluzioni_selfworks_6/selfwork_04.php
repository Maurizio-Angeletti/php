<?php

/* Ho riscritto la stessa classe dell'esercizio 1, ma ho modificato la visibilità delle proprietà */
abstract class Veicolo {

    // Se in fase di creazione della classe veicolo avete impostato queste proprietà come
    // private (come ho fatto io), allora dovete modificare la visibiltà a protected, altrimenti le
    // classi Auto e Moto non potranno accedervi quando le utilizzeranno nei metodi stampaCaratteristiche

    protected $marca;

    protected $modello;

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

    public abstract function stampaCaratteristiche();

}

class Moto extends Veicolo {

    public  function stampaCaratteristiche()
    {
        echo "Sono una moto $this->marca $this->modello.";
    }

}

class Auto extends Veicolo {

    public function stampaCaratteristiche()
    {
        echo "Sono un'auto $this->marca $this->modello.";
    }

}

$auto = new Auto('Fiato', '500');
$auto->stampaCaratteristiche();
