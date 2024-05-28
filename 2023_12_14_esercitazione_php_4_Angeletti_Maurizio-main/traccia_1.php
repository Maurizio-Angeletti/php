<?php

class Student {

    public $name;
    public $email;
    public $age;

    public function __construct($name,$email,$age) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }
}

$maurizio = new Student ('Maurizio','prova@mail',32);

print_r($maurizio);