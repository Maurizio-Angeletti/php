<?php

namespace Hack;

class Prodotto {

    public $nome;

    public $importoUnitario;

    public function __construct($nome, $importoUnitario)
    {
        $this->nome = $nome;

        $this->importoUnitario = $importoUnitario;
    }

}