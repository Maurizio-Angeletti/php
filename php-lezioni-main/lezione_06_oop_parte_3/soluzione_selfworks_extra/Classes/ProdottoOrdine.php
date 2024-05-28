<?php

namespace Hack;

class ProdottoOrdine extends Prodotto {

    public $quantita;

    public function __construct($nome, $quantita, $importoUnitario)
    {
        parent::__construct($nome, $importoUnitario);

        $this->quantita = $quantita;
    }

}