<?php

abstract class Veicolo {
    public $marca;
    public $modello;

    public function __construct($marca,$modello){
        $this->marca = $marca;
        $this->modello =$modello;
    }

    public function avviaMotore(){
        echo 'Motore avviato';
    
    }

    public function spegniMotore(){
        echo 'Motore spento';
    }

}

// non crea un oggetto di tipo veicolo perchè la classe è abstract
$veicolo1 = new veicolo('fiat','500');
