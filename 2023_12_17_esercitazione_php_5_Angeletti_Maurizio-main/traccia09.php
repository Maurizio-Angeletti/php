<?php


class Customer {
    protected $name;
    protected $mainSite;
    private $annualRevenue;
    protected $chiefSName;


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
    protected $telephone;
    protected $email;
    protected const TIPO = 'store';

    public function __construct($name, $mainSite, $annualRevenue, $chiefSName, $telephone, $email)
    {
        parent::__construct($name, $mainSite, $annualRevenue, $chiefSName,);
        $this->telephone = $telephone;
        $this->email = $email;
    }
}

class Supermarket extends Customer {
    protected const TIPO = 'supermarket';
    protected $sitesList = [];

    public function __construct($name, $mainSite, $annualRevenue, $chiefSName, ...$sites){
        
    parent::__construct($name, $mainSite, $annualRevenue, $chiefSName);
    $this->sitesList = $sites;
    
    }

    public function addSite($site){
        $this->sitesList[] = $site;
    }

    public function printAnnualRevenue(){
        echo 'Dato attualmente non disponibile';
    }


}


$superMarket1 = new Supermarket('supermarket1','Roma',500000000,'Tizio Caio','Roma','Milano','Napoli');

$superMarket1 -> printAnnualRevenue();


