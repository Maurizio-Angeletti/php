<?php

class Student {

    public $name;
    public $email;
    private $age;

    public function __construct($name,$email,$age) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }
    private function getAge(){

        if ($this->age > 17 && $this->age <= 30) {
            return '18 - 30'."\n";
        } else if ($this->age > 30 && $this->age <= 50) {
            return '31 - 50'."\n";
        } else if ($this->age > 50) {
            return '50+'."\n";
        }
            
    }
    public function ageRange(){
        echo 'Lo studente si trova nella fascia di età:' . $this->getAge() . "\n";
    }
}

$maurizio = new Student ('Maurizio','prova@mail',32);
$marco = new Student ('Marco','provamail2@mail',31);
$sonia = new Student ('Sonia ','provamail3@mail',33);

echo $maurizio -> name . "\n";
echo $marco -> name . "\n";
echo $marco ->email . "\n";
$sonia ->ageRange();