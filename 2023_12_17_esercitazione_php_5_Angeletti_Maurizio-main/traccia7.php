<?php


final class Customer {
    public $name;
    public $mainSite;
    private $annualRevenue;
    public $chiefSName;


    public function __construct($name, $mainSite, $annualRevenue, $chiefSName)
    {   
        $this->name = $name;
        $this->mainSite = $mainSite;
        $this->annualRevenue = $annualRevenue;
        $this->chiefSName =$chiefSName;
    }

    public function printAnnualRevenue(){
        echo $this-> annualRevenue;
    }
}

class Store extends Customer {
    public $telephone;
    public $email;
    public const TIPO = 'store';

    public function __construct($name, $mainSite, $annualRevenue, $chiefSName, $telephone, $email)
    {
        parent::__construct($name, $mainSite, $annualRevenue, $chiefSName,);
        $this->telephone = $telephone;
        $this->email = $email;
    }
}

class Supermarket extends Customer {
    public const TIPO = 'supermarket';
    public $sitesList = [];

    public function __construct($name, $mainSite, $annualRevenue, $chiefSName, ...$sites){
        
    parent::__construct($name, $mainSite, $annualRevenue, $chiefSName);
    $this->sitesList = $sites;
    
    }

    public function addSite($site){
        $this->sitesList[] = $site;
    }

    final public function printAnnualRevenue(){
        echo 'Dato attualmente non disponibile';
    }


}


$superMarket1 = new Supermarket('supermarket1','Roma',500000000,'Tizio Caio','Roma','Milano','Napoli');

$superMarket1 -> printAnnualRevenue();

// la classe Custmer non può essere estesa in quanto final mentre la funzione final public function funziona ma non si può fare l'override di quella funzione.


