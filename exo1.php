<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

class Personne1 {

    public string $nom;
    public string $prenom;

    public function sePresenter() {
        echo "Je m'appelle $this->nom $this->prenom";
    }

}

$personne1 = new Personne1();
$personne1->nom = "julien";
$personne1->prenom = "2";
echo $personne1->sePresenter();
