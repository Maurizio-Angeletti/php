<?php
trait MPvimenti
{
    public function accelera(){
        echo 'Sto accelerando';
    }

    public function rallenta(){
        echo 'Sto rallentando';
    }
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

class Auto extends Veicolo {

}




