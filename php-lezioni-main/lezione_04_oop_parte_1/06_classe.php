<?php

class Persona {

    public function __construct(public $nome, public $cognome, public $eta)
    {
    }
    
}

$giuseppe = new Persona('Giuseppe', 'Romanazzi', 42);