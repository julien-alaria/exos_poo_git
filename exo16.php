<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

class Personne {
    private string $nom;
    private string $prenom;
    private int $age;

    public function __construct(string $nom, string $prenom, int $age) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    public function setNom(string $newNom): void {
        $this->nom = $newNom;
    }

    public function setPrenom(string $newPrenom): void {
        $this->prenom = $newPrenom;
    }

    public function setAge(int $newAge): void {
        $this->age = $newAge;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function sePresenter(): string {
        return "Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans.";
    }
   
}

$personne1 = new Personne("Doe", "john", 45);
echo $personne1->sePresenter();
echo "<br>";

$personne2 = new Personne("Pow", "jeanne", 25);
echo $personne2->sePresenter();
echo "<br>";