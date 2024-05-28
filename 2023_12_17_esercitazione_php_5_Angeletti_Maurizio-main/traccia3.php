<?php


class Customer {
    public $name;
    public $mainSite;
    public $annualRevenue;
    public $chiefSName;


    public function __construct($name, $mainSite, $annualRevenue, $chiefSName)
    {   
        $this->name = $name;
        $this->mainSite = $mainSite;
        $this->annualRevenue = $annualRevenue;
        $this->chiefSName =$chiefSName;
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

}
$superMarket1 = new Supermarket('supermarket1','Roma',500000000,'Tizio Caio','Roma','Milano','Napoli');
var_dump($superMarket1-> sitesList);
