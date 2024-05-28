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

    public static function studentsName(...$students){
        if ($students) {
            echo 'gli studenti sono:' . "\n";
        foreach ($students as $student) {
          echo  $student -> name ."\n";
        };
        }else {
            echo 'Non ci sono studenti' . "\n";
        }

        
        
    
    }
}

$maurizio = new Student ('Maurizio','prova@mail',32);
$marco = new Student ('Marco','provamail2@mail',31);
$sonia = new Student ('Sonia ','provamail3@mail',33);



Student::studentsName($maurizio,$marco,$sonia);

