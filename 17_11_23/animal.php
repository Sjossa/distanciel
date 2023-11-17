<?php


class Animal {
  
    public $nom;
    public $age;

 
    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
    }

    
    public function afficherDetails() {
        echo "Nom: {$this->nom}, Age: {$this->age} ans";
    }
}

// Exercice 2: Héritage classe Chien
class Chien extends Animal {
    
    public $race;

  
    public function __construct($nom, $age, $race) {
       
        parent::__construct($nom, $age);
        $this->race = $race;
    }

   
    public function afficherDetails() {
       
        parent::afficherDetails();
        echo ", Race: {$this->race}";
    }
}


$animal1 = new Animal("Tigre", 5);
$animal1->afficherDetails();
echo "<br>";

$chien1 = new Chien("Buddy", 3, "Labrador");
$chien1->afficherDetails();
?>
