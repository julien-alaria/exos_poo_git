<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

class Voiture {
    private string $marque;
    private string $modele;
    private int $annee;
    private float $kilometrage;
    private static int $nombreVoituresCrées = 0;

    public function __construct(string $marque, string $modele, int $annee, float $kilometrage) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
        self::$nombreVoituresCrées++;
    }

    public function rouler($km): void {
        if ($km > 0) {
             $this->kilometrage += $km;
        } else {
            echo "Le nombre de kilomètres doit être positif.<br>";
        }
    }

    public function getInfo(): string {
        return "Voiture de marque $this->marque, de modele $this->modele, d'année $this->annee avec un kilometrage de " . number_format($this->kilometrage, 0, ',', ' ') . " km.";
    }

    public static function getNombreVoitures(){
        return "Nombre de voitures crées : " . self::$nombreVoituresCrées;
    }

    public function __toString(): string {
        return $this->getInfo();
    }
}

$voiture1 = new Voiture("Audi", "A3", 2005, 25000);
echo $voiture1;
echo "<br>";
$voiture1->rouler(5000);
echo $voiture1;
echo "<br>";

$voiture2 = new Voiture("BMW", "SerieA", 2020, 15000);
echo $voiture2;
echo "<br>";
$voiture2->rouler(3000);
echo $voiture2;
echo "<br>";

echo Voiture::getNombreVoitures();
echo "<br>";

