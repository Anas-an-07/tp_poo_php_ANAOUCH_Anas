<?php

class Personne {
    private string $nom = "";
    private string $prenom = "";
    private string $dateNaissance = "";

    // Called when writing to an inaccessible (private) or non-existent property
    public function __set(string $name, mixed $value): void {
        if (property_exists($this, $name)) {
            // Question 3.4: Add validation for the name
            if ($name === "nom" && strlen($value) < 2) {
                throw new InvalidArgumentException("The name must contain at least 2 characters.");
            }
            $this->$name = $value;
        } else {
            echo "Property '$name' does not exist." . PHP_EOL;
        }
    }

    // Called when reading an inaccessible (private) or non-existent property
    public function __get(string $name): mixed {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        return null;
    }

    // Called when using isset() or empty() on an inaccessible property
    public function __isset(string $name): bool {
        return isset($this->$name);
    }

    // Called when using unset() on an inaccessible property
    public function __unset(string $name): void {
        if (property_exists($this, $name)) {
            $this->$name = ""; // Reset to an empty string
        }
    }
}

// --- Tests ---
$p = new Personne();

$p->nom = "Hachimi";             // Calls __set
echo $p->nom . PHP_EOL;          // Calls __get
var_dump(isset($p->nom));        // Calls __isset (returns true)
unset($p->nom);                  // Calls __unset (resets to "")
var_dump(isset($p->nom));        // Calls __isset (returns false)

// Test a non-existent property
$p->telephone = "0600000000";    // Calls __set (prints that property does not exist)

// Test validation (Question 3.4)
try {
    $p->nom = "A";    
} catch (Exception $e) {
    echo "Error : " . $e->getMessage() . PHP_EOL;
}