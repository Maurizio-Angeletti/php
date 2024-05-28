<?php

include 'Traits\Messaggi.php';

include 'Interfaces\MetodoPagamento.php';

include 'Classes\Bonifico.php';
include 'Classes\CartaDiCredito.php';
include 'Classes\Ordine.php';
include 'Classes\Prodotto.php';
include 'Classes\ProdottoOrdine.php';

$ordine = new Ordine();

$ordine->aggiungiProdotto(new Hack\ProdottoOrdine('PC', 1, 1000));
$ordine->aggiungiProdotto(new Hack\ProdottoOrdine('TV', 2, 800));
$ordine->aggiungiProdotto(new Hack\ProdottoOrdine('PS5', 1, 600));

$ordine->carrello();

$ordine->totale();

Ordine::valoreIva();

$ordine->stato();

$ordine->paga(new CartaDiCredito('0123 4567 8901 2345'));