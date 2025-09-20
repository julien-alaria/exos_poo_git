<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

class Voiture2 {
    public string $marque;
    public string $modele;
    public static int $nombreVoitures = 0;

    public function __construct($marque, $modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        self::$nombreVoitures ++;
    }

    public function presenterVoiture(){
        return "Une voiture de marque $this->marque et de modele $this->modele.";
    }

    public static function nombreVoitures() {
        return "Nombre de voitures : " . self::$nombreVoitures;
    }
}

$voiture1 = new Voiture2("Audi", "A5");
echo $voiture1->presenterVoiture() . "<br>";

echo Voiture2::nombreVoitures() . "<br>";

$voiture2 = new Voiture2("BMW", "Serie1");
echo $voiture2->presenterVoiture() . "<br>";

echo Voiture2::nombreVoitures() . "<br>";