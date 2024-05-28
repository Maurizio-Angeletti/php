<?php

/* Classe genitore che contiene i parametri e metodi in comune */
class Persona {

    public $nome;

    protected $cognome;

    public $corsi = [];

    public function __construct($nome, $cognome, $corsi)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->corsi = $corsi;
    }

    public function saluta()
    {
        echo "Ciao! Sono $this->nome";
    }

    public function getNomeCompleto()
    {
        return $this->nome . ' ' . $this->cognome;
    }

    /* Questo metodo, dichiarato final non può essere sovrascritto */
    final public function metodoX()
    {
        // ESEGUE QUALCOSA
    }

}

/* Classe che estende il genitore Persona */
class Studente extends Persona {

    public $mediaVoti;

    /* Qui abbiamo effettuato l'override del metodo costruttore,
        in modo da poter passare un ulteriore valore ($mediaVoti) */
    public function __construct($nome, $cognome, $corsi, $mediaVoti)
    {
        /*  Qui abbiamo sfruttato il costruttore della classe genitore (Persona) per inizializzare
            i parametri comuni, senza doverli riscrivere di nuovo e quindi generare codice
            duplicato inutile */
        parent::__construct($nome, $cognome, $corsi);

        $this->mediaVoti = $mediaVoti;
    }

    public function stampaCognome()
    {
        echo $this->cognome;
    }

    /* override del metodo getNomeCompleto() */
    public function getNomeCompleto()
    {
        return 'Nome dello studente: ' . parent::getNomeCompleto();
    }

}

/* Classe che estende il genitore Persona */
final class Docente extends Persona {

    public $stipendio;

}

/* DocenteMatematica non può estendere Docente, perché Docente è final
class DocenteMatematica extends Docente {

    // sue proprietà e metodi specifici

}

$docente_matematica = new DocenteMatematica('Giuseppe', 'Romanazzi', ['PHP', 'HTML'], 20);
*/

$studente = new Studente('Giuseppe', 'Romanazzi', ['PHP', 'HTML'], 20);
// echo $studente->stampaCognome();
echo $studente->getNomeCompleto();

echo "\n";

$docente = new Docente('Giuseppe', 'Romanazzi', ['PHP', 'HTML'], 20);
echo $docente->getNomeCompleto();

/* Livelli di visibilità:

    - private: visibile solo nella classe dove è stato dichiarato
    - protected: visibile nella classe dove è stato dichiarato e nelle classi che estendono
    - public: visibile nella classe che lo dichiara, che estende e all'esterno dall'oggetto (o classe se static)

*/