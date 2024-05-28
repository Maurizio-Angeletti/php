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
}

$maurizio = new Student ('Maurizio','prova@mail',32);
$marco = new Student ('Marco','provamail2@mail',31);
$sonia = new Student ('Sonia ','provamail3@mail',33);

echo $maurizio -> name . "\n";
echo $marco -> name . "\n";
echo $marco ->email . "\n";
echo $sonia ->age . "\n";