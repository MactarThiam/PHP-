<?php
class Professeur extends User{
    private string $grade;

    public function __construct(){
        $this->role="ROLE_PROFESSEUR";
    }
    //Attribut navigationnel
    //OneToMany avec cours
    //oneToMany => cours
    //une professeur associee a plusieurs cours
    public function cours():array{
        return [];
    }

    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
}