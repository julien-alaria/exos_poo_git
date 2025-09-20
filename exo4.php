<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

class Voiture {
    public string $marque;
    public string $modele;
    public static int $nombreVoitures = 0;

    public function __construct(string $marque, string $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
        self::$nombreVoitures++;
    }

    public function afficherInfo(): string {
        return "Une voiture de marque $this->marque et de modele $this->modele.";
    }

    public static function getNombreVoitures(): int {
        return self::$nombreVoitures;
    }
}

$voiture1 = new Voiture("Audi", "A3");
echo $voiture1->afficherInfo() . "<br>";

$voiture2 = new Voiture("BMW", "Série1");
echo $voiture2->afficherInfo() . "<br>";


echo "Nombre total de voitures : " . Voiture::getNombreVoitures();

