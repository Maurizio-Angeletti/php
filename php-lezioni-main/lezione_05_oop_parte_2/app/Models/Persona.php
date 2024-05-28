<?php

class Persona {

    public $matricola;

    private $nome;

    private $privacy;

    public function __construct($matricola, $nome, $privacy = true)
    {
        $this->matricola = $matricola;
        $this->nome = $nome;
        $this->privacy = $privacy;
    }

    public function stampaNome()
    {
        if(! $this->privacy) {
            echo $this->nome;
        } else {
            echo 'Protetto da privacy';
        }
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

}