<?php

// Qui definiamo il nome del namespace che conterrà la classe di seguito
namespace ContenitoreBlu;

class PennaNera {

    public function scrivi()
    {
        // Differenza nell'anteporre \ all'inizio del namespace quando chiamamo la classe
        // AltroNamespace\AltraClasse(); // ContenitoreBlu\AltroNamespace\AltraClasse
        // \AltroNamespace\AltraClasse(); // AltroNamespace\AltraClasse

        echo 'Sono la penna nera tratto sottile';
    }

}