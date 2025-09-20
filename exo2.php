<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

class Personne2 {
    public string $name;
    public string $lastname;

    public function sePresenter() {
        echo "je m'appelle $this->name $this->lastname <br>";
    }

    public function setPersonne(string $newName, string $newLastname) {
        $this->name = $newName;
        $this->lastname = $newLastname;
    }

    public function getPersonne(): string {
        return "$this->name $this->lastname";
    }
}

$personne1 = new Personne2();
$personne1->name = "julien";
$personne1->lastname = "alr";
$personne1->sePresenter() . "<br>";

$personne2 = new Personne2();
$personne2->setPersonne("roje", "santos");
$personne2->sePresenter();