<?php
class Voiture {
    public $marque;
    public $couleur; //+attribute Q2

    public function setMarque($m) {
        $this->marque = $m;      // $this = l'objet qui appelle la méthode
    }
    // un fonction pour couleur Q2
    public function setCouleur($c) {
        $this->couleur = $c;
    }

    public function afficher() {
        echo "Marque : " . $this->marque . " | Couleur : " . $this->couleur . PHP_EOL;
    }
}

$v1 = new Voiture();
$v1->setMarque("Toyota");
$v1->afficher();

//### Exercice 0

//- [ ] **0.1** Créez un second objet `$v2` de marque « Renault » et affichez-le.

$v2 = new Voiture();
$v2->setMarque("Renault");
$v2->afficher();

//- [ ] **0.2** Ajoutez une propriété `$couleur` et une méthode `setCouleur()`.
//done


//- [ ] **0.3**  `$v1` et `$v2` partagent-ils la même valeur de `$marque` ? Pourquoi ?
// No , evry object have a personalle capacetyy on memory




