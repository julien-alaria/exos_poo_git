<?php
error_reporting(E_ALL);


abstract Class Forme {

    abstract public function calculerAire(): float;
}

class Cercle extends Forme {
    public float $rayon;

    public function __construct(float $rayon) {
        $this->rayon = $rayon;
    }

    public function calculerAire(): float {
        return pi() * pow($this->rayon, 2);
    }

    public function getRayon(): float {
        return $this->rayon;
    }
}

class Rectangle extends Forme {
    public float $longueur;
    public float $largeur;

    public function __construct(float $longueur, float $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function calculerAire(): float {
        return $this->longueur * $this->largeur;
    }

    public function getDimensions(): string {
        return "Longueur : $this->longueur, Largeur : $this->largeur";
    }
}

$cercle = new cercle(5);
$rectangle = new Rectangle(4, 6);

echo "Aire du cercle de rayon {$cercle->getRayon()} : " . $cercle->calculerAire() . " cm²<br>";
echo "Aire du rectangle ({$rectangle->getDimensions()}) : " . $rectangle->calculerAire() . " cm²<br>";
