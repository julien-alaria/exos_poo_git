<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

class Personne3 {
    public string $name;
    public string $lastname;

    public function __construct(string $name, string $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }

    public function sePresenter() {
        return "Je m'appelle $this->name  $this->lastname .";
    }

    public function setPersonne(string $newName, string $newLastname): void {
        $this->name = $newName;
        $this->lastname = $newLastname;
    }

    public function getPersonne(): string {
        return $this->name; $this->lastname;
    }
}

$personne1 = new Personne3("julien", "2");
echo $personne1->sePresenter() . "<br>";

$personne2 = new Personne3("denise", "campbell");
echo $personne2->sePresenter() . "<br>";