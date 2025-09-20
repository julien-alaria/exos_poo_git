<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

class Personne4 {
    public string $name;
    public string $lastname;
    public static int $nombrePersonne = 0;
    const TYPE = "Humain";

    public function __construct(string $name, string $lastname) {
        $this->name = $name;
        $this->lastname = $lastname;
        self::$nombrePersonne++;
    }

    public function setPersonne(string $newName, string $newLastname):void {
        $this->name = $newName;
        $this->lastname = $newLastname;
    }

    public function getPersonne(): string {
        return "$this->name $this->lastname";
    }

    public function sePresenter(): string {
        return "Je m'appelle $this->name $this->lastname";
    }
}

class Employe extends Personne4 {
    public string $poste;
    public static int $nombreEmploye = 0;

    public function __construct(string $name, string $lastname, string $poste) {
        parent::__construct($name, $lastname);
        $this->poste = $poste;
        self::$nombreEmploye++;
    }

    public function setPoste(string $newPoste): void {
        $this->poste = $newPoste;

    }

    public function getPoste(): string {
        return $this->poste;
    }

    public function presenterEmploye(): string {
        return "je m'appelle $this->name $this->lastname et je suis $this->poste";
    }
}

$employe1 = new Employe("John", "Doe", "Développeur Web");
$employe2 = new Employe("Alice", "campbell", "Designer");
echo $employe1->presenterEmploye();
echo "<br>";
echo $employe2->presenterEmploye();

echo "<br><br>Type de la classe Personne : " . Personne4::TYPE;
echo "<br>Type de la classe Employe : " . Employe::TYPE;