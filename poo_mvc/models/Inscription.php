<?php
class Inscription{
    private DateTime $dateInscription;
    private string $date;

    public function __construct(){

    }

    //ManyToOne avec classe
    private Classe $classe;
    public function classe():Classe{
        return new Classe();
    } 
    //one to many avec Etudiant
    public function etudiant():Etudiant{
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