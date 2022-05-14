<?php
namespace App\Models;
class Etudiant extends User{
    private string $nomComplet;
    private string $matricule;

    public function __construct(){
        parent::__construct();
        parent::$role="ROLE_ETUDIANT";
        parent::$table="etudiant";
    }
    //les attributs navigationnels
    //OneToMany avec Inscriptions
    public function inscriptions():array{
        $sql="select i.* from inscriptions i, 
              etudiant e where i.etudiant_id=e.id and e.id=? 
              ";
        parent::selectWhere($sql,[$this->id]);
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
    public static  function selectAll(){
        $sql="select *  from  ".parent::$table." where role like ? ";
       return parent::database()->executeSelect($sql,[parent::$role]);
     }
     public function insert(){
        $sql="INSERT INTO".parent::$table." (`login`,`password`, `nomComplet`,  `matricule`,  `role`)
             VALUES (?,?,?,?);";
        return parent::database()->executeUpdate($sql,[$this->login,$this->password,$this->nomComplet,$this->matricule,parent::$role,]);
     }
}