<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

class Livre {
    private string $titre;
    private string $auteur;
    private int $nombrePages;

    public function setTitre(string $titre): void {
        $this->titre = $titre;
    }

    public function getTitre(): string {
        return $this->titre;
    }

    public function setAuteur(string $auteur): void {
        $this->auteur = $auteur;
    }

    public function getAuteur(): string {
        return $this->auteur;
    }

    public function setNombrePages(int $nombrePages): void {
        $this->nombrePages = $nombrePages;
    }

    public function getNombrePages(): int {
        return $this->nombrePages;
    }

    public function afficherDetails(): string {
        return "Titre : $this->titre, auteur : $this->auteur, nombre de pages $this->nombrePages";

    }
}

$livre1 = new Livre();
$livre1->setTitre("Akira");
$livre1->setAuteur("Katsuhiro Otomo");
$livre1->setNombrePages(250);
echo $livre1->afficherDetails();