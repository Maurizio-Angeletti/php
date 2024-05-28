<?php

class Ordine {

    use Messaggi;

    public const IVA = 22;

    private $prodotti = [];

    public function aggiungiProdotto(Hack\ProdottoOrdine $prodotto)
    {
        $this->prodotti[] = $prodotto;
    }

    public function carrello()
    {
        foreach($this->prodotti as $prodotto) {

            $totaleRiga = $prodotto->quantita * $prodotto->importoUnitario;

            $totaleRigaConIva = $totaleRiga * (1 + self::IVA / 100);

            echo "$prodotto->quantita $prodotto->nome $totaleRiga $totaleRigaConIva\n";

        }
    }

    public function totale($stampaMessaggio = false)
    {
        $totale = 0;

        foreach($this->prodotti as $prodotto) {

            $totale += $prodotto->quantita * $prodotto->importoUnitario;

        }

        $totale = $totale * (1 + self::IVA / 100);
        
        if($stampaMessaggio) {
            echo "Importo totale ordine: $totale\n";
        } else {
            return $totale;
        }
        
    }

    public static function valoreIva()
    {
        echo "Valore attuale IVA: " . self::IVA . "%\n";
    }

    public function paga(MetodoPagamento $metodoPagamento)
    {
        $metodoPagamento->paga($this->totale());
    }

}