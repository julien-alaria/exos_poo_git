<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

interface Volume {
    public function getVolume(): float;
}

class Cube implements Volume {
    private float $cote;

    private function __construct(float $cote) {
        $this->cote = $cote;
    }

    public function getVolume(): float {
        return pow($this->cote, 3);
    }

    public function getCote(): float {
        return $this->cote;
    }
}

class Cylindre implements Volume {
    private float $rayon;
    private float $hauteur;

    public function __construct(float $rayon, float $hauteur) {
        $this->rayon = $rayon;
        $this->hauteur = $hauteur;
    }

    public function getVolume(): float {
        return pi() * pow($this->rayon, 2) * $this->hauteur;
    }

    public function getDimensions(): string {
        return "Rayon : {$this->rayon}, Heuteur : {$this->hauteur}";
    }
}

$cube1 = new Cube(3);
$cylindre1 = new Cylindre(2, 5);

echo "Volume du cube de côté {$cube->getCote()} : " . $cube->getVolume() . " cm³<br>";
echo "Volume du cylindre ({$cylindre->getDimensions()}) : " . $cylindre->getVolume() . " cm³";