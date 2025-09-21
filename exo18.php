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

class Employe extends Personne {
    private float $salaire;

    public function __construct(string $nom, string $prenom, int $age, float $salaire) {
        parent::__construct($nom,  $prenom, $age);
        $this->salaire = $salaire;
    }

    public function setSalaire(float $newSalaire): void {
        $this->salaire = $newSalaire;
    }

    public function augmenterSalaire(float $montant): void {
        if ($montant > 0) {
            $this->salaire += $montant;
        } else {
            echo "Le montant doit être positif.";
        }
    }

    public function afficherSalaire(): string {
        return "Salaire : $this->salaire €";
    }

     public function __toString(): string {
        return "Employé: " . $this->getNom() . " " . $this->getPrenom() . ", " . $this->afficherSalaire();
    }

}

class Manager extends Employe {
    private array $equipe = [];

    public function ajouterEmploye(Employe $e): void {
        $this->equipe[] = $e;
    }

    public function afficherEquipe(): void {
        if (empty($this->equipe)) {
            echo "Aucun employé dans l'équipe.<br>";
            return;
        }

        echo "Equipe du manager " . $this->getPrenom() . " " . $this->getNom() .": <br>";
        foreach($this->equipe as $employe) {
            echo "- " . $employe. "<br>";
        }
    }

    public function __toString(): string {
        return "Manager: " . $this->getNom() . " " . $this->getPrenom() . ", " . $this->afficherSalaire();
    }
}


$personne1 = new Personne("Doe", "john", 45);
echo $personne1->sePresenter();
echo "<br>";

$personne2 = new Personne("Pow", "jeanne", 25);
echo $personne2->sePresenter();
echo "<br>";

$personne3 = new Employe("Garcia", "rob", 48, 1500);
echo $personne3->sePresenter();
echo "<br>";
echo $personne3->afficherSalaire();
echo "<br>";

$employe1 = new Employe("Smith", "anna", 30, 1600);

$manager1 = new Manager("Campbell", "trevor", 40, 2500);
$manager1->ajouterEmploye(new Employe("Martin", "jason", 35, 1500));
$manager1->ajouterEmploye($employe1);
echo "<br>";

echo $manager1->sePresenter() . "<br>";
echo $manager1->afficherSalaire() . "<br>";
$manager1->afficherEquipe();