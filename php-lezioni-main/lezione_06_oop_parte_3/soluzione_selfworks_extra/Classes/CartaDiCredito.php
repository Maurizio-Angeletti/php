<?php

class CartaDiCredito implements MetodoPagamento {

    public function __construct(private $numero){}

    public function paga($importo)
    {
        echo "Hai pagato $importo € con carta numero $this->numero\n";
    }

}