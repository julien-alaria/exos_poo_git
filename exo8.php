<?php
error_reporting(E_ALL);
ini_set("error_reporting", 1);

class CompteBancaire {
    private string $nomCompte;
    private float $solde;

    public function __construct(string $nomCompte, float $soldeInitial = 0) {
        $this->nomCompte = $nomCompte;
        $this->solde = $soldeInitial;
    }

    public function getNomCompte(): string {
        return $this->nomCompte;
    }

    public function setNomCompte(string $nomCompte): void {
        $this->nomCompte = $nomCompte;
    }

    public function getSolde(): float {
        return $this->solde;
    }

    public function setSolde(float $newSolde): void {
        if ($newSolde >= 0) {
            $this->solde += $newSolde;
        } else {
            echo "Le solde ne peut pas être négatif.<br>";
        }
    }

    public function deposer(float $montant): void {
        if ($montant > 0) {
            $this->solde += $montant;
        } else {
            echo "Le monatnt du dépôt doit être positif.";
        }
    }

    public function retirer(float $montant): void {
        if ($montant > 0) {
            if ($montant <= $this->solde) {
                $this->solde -= $montant;
            } else {
                echo "Fonds insuffisants pour retirer $montant.";
            }
        } else {
            echo "Lemontant du retrait doit être positif.";
        }
    }

    public function afficherSolde(): string {
        return "Le montant du compte $this->nomCompte est de " . number_format($this->solde, 2, ',' , '') . " €";
    }
}

$compte1 = new CompteBancaire("compte de John", 5000);
echo $compte1->afficherSolde() . "<br>";

$compte1->deposer(2000);
echo $compte1->afficherSolde() . "<br>";

$compte2 = new CompteBancaire("compte de julie", 40100);
$compte2->deposer(2000);
echo $compte2->afficherSolde() . "<br>";

