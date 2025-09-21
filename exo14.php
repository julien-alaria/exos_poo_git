<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

class Produit {
    public string $nom;
    public int $quantite;
    public float $prix;

    public function __construct(string $nom, int $quantite, float $prix) {
        $this->nom = $nom;
        $this->quantite = $quantite;
        $this->prix = $prix;
    }

    public function getTotal(): float {
        return $this->quantite * $this->prix;
    }

    public function __toString(): string {
        return "Article : {$this->nom}, quantité : {$this->quantite}, prix : {$this->prix} €, total : " . $this->getTotal() . " €";
    }
}

class Panier {
    private string $session_key = 'panier';

    public function __construct() {
        if (!isset($_SESSION[$this->session_key])) {
            $_SESSION[$this->session_key] = [];
        }
    }

    public function ajouterProduit(Produit $produit) {
        $_SESSION[$this->session_key][] = $produit;
    }

    public function getProduits(): array {
        return $_SESSION[$this->session_key];
    }

    public function getTotal(): float {
        $total = 0;
        foreach ($this->getProduits() as $produit) {
            $total += $produit->getTotal();
        }
        return $total;
    }

    public function afficherProduits() {
        $produits = $this->getProduits();
        if (empty($produits)) {
            echo "Votre panier est vide.<br>";
            return;
        }

        foreach ($produits as $produit) {
            echo $produit . "<br>";
        }

        echo "<strong>Total panier : " . $this->getTotal() . "€</strong><br>";    
    } 
    
    public function vider() {
        $_SESSION[$this->session_key] = [];
    }
}

$panier1 = new Panier();

if (isset($_GET['ajout']) && $_GET['ajout'] === "1") {
    $panier1->ajouterProduit(new Produit("PS5", 2, 400));
}

if (isset($_GET['ajout']) && $_GET['ajout'] === '2') {
    $panier1->ajouterProduit(new Produit("Switch", 1, 300));
}

if (isset($_GET['vider'])) {
    $panier1->vider();
}

echo "<h2>Contenu du panier :</h2>";
$panier1->afficherProduits();

echo "<br><a href='?ajout=1'>➕ Ajouter une PS5</a>";
echo "<br><a href='?ajout=2'>➕ Ajouter une Switch</a>";
echo "<br><a href='?vider=1'>🗑️ Vider le panier</a>";
