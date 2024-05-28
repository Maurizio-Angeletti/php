<?php

/* Esempio con ereditarietà
abstract class EseguiPagamento {

    public $importo;

    abstract public function paga();

}

class EseguiPagamentoConCartaDiCredito extends EseguiPagamento {


    public function paga()
    {
        echo "Sto pagando $this->importo... Operazione completata!";
    }


}

$pagamento = new EseguiPagamentoConCartaDiCredito();
$pagamento->paga();
*/

interface MetodoDiPagamento {

    public function paga($importo);

}

class EseguiPagamento {

    public $importo;

    public function __construct(MetodoDiPagamento $metodoDiPagamento, $importo)
    {
        $this->importo = $importo;

        $metodoDiPagamento->paga($this->importo);
    }

}

class Bonifico implements MetodoDiPagamento {

    public function paga($importo)
    {
        echo "Sto paganto l'importo di $importo... Operazione completata!";
    }

}

class CartaDiCredito implements MetodoDiPagamento {

    public function __construct(private $numero_carta)
    {}

    public function paga($importo)
    {
        echo "Sto pagando con carta di credito $this->numero_carta l'importo di: $importo.";
    }

}

class PagamentoAllaConsegna implements MetodoDiPagamento {

    public function paga($importo)
    {
        echo "Pagherai alla consegna $importo.";
    }

}

$metodo_di_pagamento = new PagamentoAllaConsegna();
$pagamento = new EseguiPagamento($metodo_di_pagamento, 1000);
