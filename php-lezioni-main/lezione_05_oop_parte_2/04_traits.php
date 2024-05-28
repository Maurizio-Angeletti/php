<?php

trait Azioni {

    public function cammina()
    {
        echo 'Sto camminando';
    }

    public function mangia()
    {
        echo 'Sto mangiando';
    }

}

trait AltreAzioni {

    public function parla()
    {
        echo 'Sto parlando';
    }

}


class Persona {

    use Azioni, AltreAzioni;

}

class Gatto {

    use Azioni;

}

$persona = new Persona();
$persona->cammina();

echo "\n";

(new Gatto)->mangia();