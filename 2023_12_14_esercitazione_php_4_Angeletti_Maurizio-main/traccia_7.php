<?php

class Student {

    public $name;
    public $email;
    private $age;
    private $classes;

    public function __construct($name,$email,$age,$classes = []) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->classes = $classes;
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
    public function addClass($class){
        $this->classes[] = $class;
        
    }
    public function printClasses(){
        echo "lo studente $this->name segue i corsi:" . " " . implode(' ',$this->classes) . "\n";//per collegare tutti gli elementi dell'array ho usato il metodo implode() che per primo argomento accetta una stringa che serve a separare gli elementi dell'array e come secondo argomento accetta un array il quale i suoi elementi saranno trasformati in un unica stringa.
    }  
    
}

$maurizio = new Student ('Maurizio','prova@mail',32);
$marco = new Student ('Marco','provamail2@mail',31);
$sonia = new Student ('Sonia ','provamail3@mail',33);

echo $maurizio -> name . "\n";
echo $marco -> name . "\n";
echo $marco -> email . "\n";
$sonia ->ageRange();
$maurizio->addClass('matematica');
$maurizio->addClass('fisica');
$maurizio->addClass('italiano');
$maurizio->printClasses();