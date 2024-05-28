<?php

class CartaDiCredito implements MetodoDiPagamento {

    public function effettuaPagamento()
    {
        // altre operazioni

        echo 'Pagamento effettuato';
    }
    
    public function cancellaPagamento()
    {
        // altre operazioni

        echo 'Pagamento cancellato';
    }

}

class Bonifico implements MetodoDiPagamento {

    use MetPagamento;

}

interface MetodoDiPagamento {

    public function effettuaPagamento();

    public function cancellaPagamento();

}

trait MetPagamento {

    public function effettuaPagamento()
    {
        // altre operazioni

        echo 'Pagamento effettuato';
    }

    public function cancellaPagamento()
    {
        // altre operazioni

        echo 'Pagamento cancellato';
    }

}