<?php
class Etudiant extends User{
    private string $nomComplet;
    private string $matricule;

    public function __construct(){
        $this->role="ROLE_ETUDIANT";
    }
    //les attributs navigationnels
    //OneToMany avec Inscriptions
    public function inscriptions():array{
        return [];
    }

    /**
     * Get the value of nomComplet
     */ 
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @return  self
     */ 
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }
}