<?php
namespace App\Models;
use App\Core\Model;
class Inscription extends Model{
    private \DateTime $dateInscription;
    private string $date;

    public function __construct(){
        parent::$table="inscription";

    }

    //ManyToOne avec classe
    public function classe():Classe{
        $sql="select cl.* from inscription i, classe cl where i.classe_id=cl.id and i.id=?";
        parent::selectWhere($sql,[$this->id]);
        return new Classe();
    } 
    //ManyToOne avec Etudiant
    public function etudiant():Etudiant{
        $sql="select u.* from inscription i, user u where i.etudiant_id=u.id and i.id=?";
        parent::selectWhere($sql,[$this->id]);
        return new Etudiant();
    } 
    

    /**
     * Get the value of dateInscription
     */ 
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set the value of dateInscription
     *
     * @return  self
     */ 
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
}