<?php

//2.1
class Voiture {
    public function __construct(
        public string $couleur = "Blanche", 
        public int $vitesse = 0
    ) {}
    
    public function afficher(): void {
        echo "Couleur : {$this->couleur} | Vitesse : {$this->vitesse} km/h" . PHP_EOL;
    }
}

$v1 = new Voiture();               // valeurs par défaut
$v2 = new Voiture("Rouge", 50);    // valeurs personnalisées
$v1->afficher();
$v2->afficher();

//2-1a test

$v3 = new Voiture("Noire");
$v3->afficher();

$v4 = new Voiture(120); 
$v4->afficher();

//2.2


class PersonneTest {
    public string $nom;
    public string $prenom;

    public function __construct() {
        echo "Création " . __CLASS__ . PHP_EOL;
    }

    public function __construct(string $nom, string $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}

$p = new PersonneTest("Ali", "Ahmed");