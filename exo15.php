<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 2);

class Utilisateur {
    public string $nom;
    public string $motDePasseHache;

    public function __construct(string $nom, string $motDePasse) {
        $this->nom = $nom;
        $this->motDePasseHache = password_hash($motDePasse, PASSWORD_DEFAULT);
    }

    public function verifierMotDePasse(string $motDePasse): bool {
        return password_verify($motDePasse, $this->motDePasseHache);
    }

    public function afficherInfos(): void {
        echo "Nom : {$this->nom}<br>";
        echo "Mot de passe haché : {$this->motDePasseHache}<br>"; 
    }
}

$utilisateur1 = new Utilisateur("user1", "MotDePasse123");

// Affiche les infos
$utilisateur1->afficherInfos();

// Vérifie le mot de passe correct
if ($utilisateur1->verifierMotDePasse("MotDePasse123")) {
    echo "Mot de passe valide<br>";
} else {
    echo "Mot de passe incorrect<br>";
}

// Test avec un mauvais mot de passe
if ($utilisateur1->verifierMotDePasse("mauvaisMot")) {
    echo "Mot de passe valide<br>";
} else {
    echo "Mot de passe incorrect<br>";
}
