<?php
trait Movimenti{
    public function accelera(){
        echo 'Sto accelerando';
    }

    public function rallenta(){
        echo 'Sto rallentando';
    }
}

interface MovimentiInterface {
    public function accelera();
    public function rallenta();
}

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

class Moto extends Veicolo {
    
}

class Auto extends Veicolo implements MovimentiInterface {
    use Movimenti;
}


$auto1 = new Auto('Fiat','500');

$auto1->accelera();





