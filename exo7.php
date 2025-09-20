<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

class CompteBancaire {
    private string $nomCompte;
    public float $solde;

    public function __construct(string $nomCompte, float $soldeInitial = 0) {
        $this->nomCompte = $nomCompte;
        $this->solde = $soldeInitial;
    }

    public function deposer(float $deposit): void {
        if ($deposit > 0) {
            $this->solde += $deposit;
        }
    }

    public function retirer(float $withdrawal): void {
        if ($withdrawal > 0 && $withdrawal <= $this->solde) {
            $this->solde -= $withdrawal;
        } else {
            echo "Fonds insuffisants pour retirer $withdrawal.<br>";
        }
    }

    public function getSolde(): string {
        return "Le solde du compte $this->nomCompte est de $this->solde";
    }
}

$compte1 = new CompteBancaire("compte de John", 5000);
echo $compte1->getSolde() . "<br>";

$compte1->retirer(2000);
echo $compte1->getSolde() . "<br>";

$compte2 = new CompteBancaire("compte de Denise", 3000);
echo $compte2->getSolde() . "<br>";

$compte2->retirer(2000);
echo $compte2->getSolde() . "<br>";


