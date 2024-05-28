<?php

class Rettangolo {

    public $base;
    public $altezza;

    public function area()
    {
        return $this->base * $this->altezza;
    }

    public function perimetro()
    {
        return 2 * $this->base + 2 * $this->altezza;
    }

}

$rettangolo = new Rettangolo();

/* Non solo posso leggere le proprietà, ma anche asegnare dei valori */
$rettangolo->base = 20;
$rettangolo->altezza = 30;

echo $rettangolo->area();
echo $rettangolo->perimetro();